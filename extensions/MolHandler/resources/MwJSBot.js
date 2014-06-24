/*global jQuery:false, mediaWiki:false, unescape:false, console:false, File, Blob, MwJSBot */
/*jshint curly:false, bitwise:false, unused:false */

// Usage:
// mw.loader.implement('mediawiki.commons.MwJSBot', ["//commons.wikimedia.org/w/index.php?action=raw&ctype=text/javascript&title=User:Rillke/MwJSBot.js"], {/*no styles*/}, {/*no messages*/});
// mw.loader.load('mediawiki.commons.MwJSBot');
/// JSHint valid

(function($, mw) {
	"use strict";

	var myModuleName = 'mediawiki.commons.MwJSBot';
	
	
	function firstItem(o) {
		for (var i in o) {
			if (o.hasOwnProperty(i)) {
				return o[i];
			}
		}
	}

	function firstItemName(o) {
		for (var i in o) {
			if (o.hasOwnProperty(i)) {
				return i;
			}
		}
	}

	function encode_utf8(s) {
		return unescape(encodeURIComponent(s));
	}
	
	var jsb = function() {},
		clnt = $.client.profile(),
		APIURL = mw.util.wikiScript('api'),
		MPB = '----------' + myModuleName + Math.random();

	jsb.fn = jsb.prototype;

	$.extend(true, jsb.fn, {
		$downloadRawFile: function(url) {
			return $.ajax({
				url: url,
				beforeSend: function (xhr) {
					xhr.overrideMimeType("text/plain; charset=x-user-defined");
				},
				dataFilter: function(d, dataType) {
					// Some more sophisticated stuff avoiding killing performance with memory allocations and thousands of function invocations
					// https://developer.mozilla.org/en-US/docs/JavaScript/Typed_arrays would be perhaps also valuable
					var f = '',
						len = d.length,
						buff = 1018, // You can't apply huge arrays to functions!
						arrCC = new Array(Math.min(buff, len)),
						arrF = new Array(Math.ceil(len/buff));

					// Remove junk-high-order-bytes
					for (var i = 0, j = 0, z = 0; i < len; i++) {
						arrCC[j] = (d.charCodeAt(i) & 0xff);
						j++;
						if (0 === (j % buff)) {
							// Convert char codes to chars
							arrF[z] = String.fromCharCode.apply(null, arrCC);
							// Empty the char code array
							arrCC = new Array(Math.min(buff, len - i - 1));
							z++;
							j = 0;
						}
					}
					if (j !== 0) arrF[z + 1] = String.fromCharCode.apply(null, arrCC);
					f = arrF.join('');
					return f;
				}
			});
		},
		$downloadXMLFile: function(url) {
			return $.get(url, 'xml');
		},
		// NEVER use this twice to send something. Instead, create a new message!
		// TODO allow/review re-sending same message again
		multipartMessageForBinaryFiles: function() {
			// Body parts that must be considered to end with line breaks, therefore, should have two CRLFs preceding the encapsulation line, 
			// the first of which is part of the preceding body part, and the second of which is part of the encapsulation boundary
			var msgParts,
				createPart,
				appendPart,
				pendingParts = 0,
				send,
				tokenPart = '',
				formData;
				
			if ("firefox" === clnt.name && clnt.versionNumber < 22) {
				msgParts = [];
				createPart = function(param, value, ContentType, ContentTransferEncoding, ContentDisposition) {
					var p = '--' + MPB + '\r\n';
					if (!ContentDisposition) {
						p += 'Content-Disposition: form-data; name=\"' + param + '\"\r\n';
					} else {
						p += 'Content-Disposition: ' + ContentDisposition + '\r\n';
					}
					p += 'Content-Type: ' + ContentType + '\r\n';
					p += 'Content-Transfer-Encoding: ' + ContentTransferEncoding + '\r\n';
					return [p, '\r\n', value, '\r\n'].join('');
				};
				appendPart = function (param, value, filename, MIME) {
					var ContentType, ContentTransferEncoding, ContentDisposition, doPush = function(value) {
						msgParts.push( createPart(param, value, ContentType, ContentTransferEncoding, ContentDisposition) );
					};
					
					if (filename) {
						ContentType = MIME || 'application/octet-stream';
						ContentTransferEncoding = 'binary';
						ContentDisposition = 'attachment; name=\"' + param + '\"; filename=\"' + encode_utf8(filename.replace(/\"/g, '-')) + '\"';
						if (value instanceof Blob || value instanceof File) {
							pendingParts++;
							var reader = new FileReader();
							reader.onload = function() {
								value = reader.result;
								doPush(value);
								if (tokenPart) msgParts.push( tokenPart );
								pendingParts--;
								if (0 === pendingParts && $.isFunction(send)) send();
							};
							reader.readAsBinaryString(value);
							return;
						}
					} else {
						value = encode_utf8(value);
						ContentType = 'text/plain; charset=UTF-8';
						ContentTransferEncoding = '8bit';
						if (param === 'token' && pendingParts) {
							// Ensure token last (This is done to catch connection errors. This way we can circumvent calculating MD5)
							tokenPart = createPart(param, value, ContentType, ContentTransferEncoding, ContentDisposition);
							return;
						}
					}
					doPush(value);
				};
			} else {
				formData = new FormData();
			}
			
			var msg = {
				appendPart: function(param, value, filename, MIME) {
					if (msgParts) {
						appendPart.apply(window, Array.prototype.slice.call(arguments, 0));
					} else {
						if (filename) {
							var bl;
							if (value instanceof Blob || value instanceof File) {
								bl = value;
							} else {
								bl = new Blob([value], { type: MIME || 'application/octet-stream' });
							}
							formData.append(param, bl, filename);
						} else {
							formData.append(param, value);
						}
					}
					// allow something like new MwJSBot().multipartMessage().appendPart("param1", "value").appendPart("param2", "value").$send();
					return msg;
				},
				$send: function() {
					var $def = $.Deferred();
					
					send = function() {
						var req = new XMLHttpRequest();
						req.onreadystatechange = function() {
							if (4 !== req.readyState) return;
							if (200 === req.status) {
								// TODO: Pass more args
								$def.resolve(req.statusText, req.response);
							} else {
								$def.reject(req.statusText, req.response, req);
							}
						};
						// Can we monitor upload status?
						if (req.upload) {
							req.upload.onprogress = function(e) {
								// Ensure compatible event
								if (!e.loaded || !e.total) return;
								$def.notify('uploadstatus', e);
							};
						}
						req.open('POST', APIURL);
						if (msgParts) {
							req.setRequestHeader('Content-Type', 'multipart/form-data; charset=UTF-8; boundary=' + MPB);
							msgParts.push('--', MPB, '--', '\r\n');
							req.sendAsBinary( msgParts.join('') );
						} else {
							req.send(formData);
						}
					};
					if (0 === pendingParts) {
						send();
					}
					
					return $def;
				}
			};
			return msg;
		},
		multipartMessageForUTF8Files: function() {
			var msgParts,
				createPart,
				appendPart;
				
			msgParts = [];
			createPart = function(param, value, ContentType, ContentTransferEncoding, ContentDisposition) {
				var p = '--' + MPB + '\n';
				if (!ContentDisposition) {
					p += 'Content-Disposition: form-data; name=\"' + param + '\"\n';
				} else {
					p += 'Content-Disposition: ' + ContentDisposition + '\n';
				}
				p += 'Content-Type: ' + ContentType + '\n';
				p += 'Content-Transfer-Encoding: ' + ContentTransferEncoding + '\n';
				return [p, '\n', value, '\n'].join('');
			};
			appendPart = function (param, value, filename) {
				var ContentType, ContentTransferEncoding, ContentDisposition;
				if (filename) {
					ContentType = 'application/octet-stream';
					ContentTransferEncoding = '8bit';
					ContentDisposition = 'attachment; name=\"' + param + '\"; filename=\"' + filename.replace(/\"/g, '-') + '\"';
				} else {
					ContentType = 'text/plain; charset=UTF-8';
					ContentTransferEncoding = '8bit';
				}
				msgParts.push( createPart(param, value, ContentType, ContentTransferEncoding, ContentDisposition) );
			};

			var msg = {
				appendPart: function(param, value, filename) {
					appendPart.apply(window, Array.prototype.slice.call(arguments, 0));
					// allow something like new MwJSBot().multipartMessage().appendPart("param1", "value").appendPart("param2", "value").$send();
					return msg;
				},
				$send: function() {
					var $def = $.Deferred();
					
					var req = new XMLHttpRequest();
					req.onreadystatechange = function() {
						if (4 !== req.readyState) return;
						if (200 === req.status) {
							// TODO: Pass more args
							$def.resolve(req.statusText, req.response);
						} else {
							$def.reject(req.response);
						}
					};
					req.open('POST', APIURL);
					req.setRequestHeader('Content-Type', 'multipart/form-data; charset=UTF-8; boundary=' + MPB);
					msgParts.push('--', MPB, '--', '\n');
					req.send( msgParts.join('') );
					
					return $def;
				}
			};
			return msg;
		},
		refreshToken: function(type, cb) {
			var j = this;
			mw.loader.using(['ext.gadget.libAPI', 'mediawiki.user'], function() {
				mw.libs.commons.api.query({
					action: 'tokens',
					type: type
				}, {
					method: 'POST',
					cache: false,
					cb: function(r) {
						$.each(r.tokens, function(type, v) {
							type = type.replace('token', 'Token');
							mw.user.tokens.set(type, v);
						});
						cb();
					},
					// r-result, query, text
					errCb: function(t, r, q) {
						j.fail("Failed to refresh token.");
					}
				});
			});
		},
		chunkedUploadDefault: {
			maxChunkSize: 0.5*1024*1024, // 2MB
			retry: {
				emptyResponse: 9,
				serverError: 9,
				apiErrors: 6,
				offsetError: 2
			},
			file: null,
			title: '',
			summary: '',
			callbacks: {
				nameNeedsChange: $.noop,
				ignorewarningsRequired: $.noop,
				loginRequired: $.noop
			},
			passToAPI: {
				upload: {
					//e.g. ignorewarnings: 1
				},
				finish: {
				}
			}
		},
		uploadWarnings: {
			filename: ['exists', 'page-exists', 'was-deleted', 'exists-normalized', 'thumb', 'thumb-name', 'bad-prefix', 'badfilename'],
			other: ['duplicate-archive', 'duplicate', 'large-file', 'emptyfile', 'filetype-unwanted-type']
		},
		chunkedUpload: function(p, file) {
			var j = this,
				$def = $.Deferred(),
				filekey = '',
				size = 0,
				remaining = 0,
				chunkSize = 0,
				offset = 0,
				offsetid = 0,
				addToNextChunk = 0,
				chunkinfo = [],
				waitingFinish;
				
			p = $.extend(true, {}, j.chunkedUploadDefault, p);
			if (!file || !p.title) {
				return j.fail("chunked upload> Either no file or no title specified.");
			}
			if (!(window.File && window.File.prototype.slice && window.FileReader && window.Blob)) {
				return j.fail("chunked upload> Your browser does not support the full File-API, FileReader and Blob.");
			}
			
			var internal = {
				status: 'uploading',
				uploadAPI: function(params) {
					params = $.extend({
						format: 'json',
						action: 'upload',
						filekey: filekey,
						token: mw.user.tokens.get('editToken')
					}, params);
					return $.post(APIURL, params);
				},
				nextChunk: function() {
					chunkSize = Math.min(remaining, p.maxChunkSize + addToNextChunk);
					var blob = file.slice(offset, offset + chunkSize),
						mpm = j.multipartMessageForBinaryFiles();
						
					addToNextChunk = 0;
						
					// Notify everyone who likes to know how the situation is progressing
					chunkinfo.currentchunk = chunkinfo[offsetid];
					$def.notify('prog', chunkinfo);
					
					mpm.appendPart('format', 'json');
					mpm.appendPart('action', 'upload');
					mpm.appendPart('filename', p.title);
					if (filekey) mpm.appendPart('filekey', filekey);
					mpm.appendPart('stash', 1);
					mpm.appendPart('filesize', size);
					mpm.appendPart('offset', offset);
					mpm.appendPart('async', 1);
					mpm.appendPart(chunkSize === size ? 'file' : 'chunk', blob, p.title, file.type);
					mpm.appendPart('token', mw.user.tokens.get('editToken'));
					$.each(p.passToAPI.upload, function(k, v) {
						mpm.appendPart(k, v);
					});
					mpm.$send().done(internal.chunkUploaded).fail(internal.chunkFailed).progress(internal.chunkUploadProgess);
				},
				chunkUploadProgess: function(type, e) {
					if ('uploadstatus' !== type) return;
					chunkinfo.currentchunk.progress = 100 * e.loaded / e.total;
					chunkinfo.currentchunk.progressText = "upload in progress";
					$def.notify(type, chunkinfo);
				},
				chunkUploaded: function(status, r) {
					r = $.parseJSON(r);
					var txt, args, defaultError;
					
					defaultError = function(args) {
						args = Array.prototype.slice.call(args, 0);
						args.shift(r.error.code + ': ' + r.error.info);
						return internal.fail.apply(internal, args);
					};
					
					if (r && r.error) {
						switch (r.error.code) {
							// r.error.info
							case 'badtoken':
								j.refreshToken('edit', $.proxy(internal.nextChunk, internal));
								break;
							case 'stasherror':
								if (r.error.info.indexOf('UploadStashNotLoggedInException') === -1) {
									return defaultError(arguments);
								}
							case 'readapidenied':
							case 'writeapidenied':
							case 'invalid-file-key':
							case 'mustbeloggedin':
							case 'permissiondenied':
							case 'internal_api_error_UploadStashNotLoggedInException':
								p.callbacks.loginRequired(r.error.code + ': ' + r.error.info, function() {
									j.refreshToken('edit', $.proxy(internal.nextChunk, internal));
								});
								break;
							case 'stashfailed':
								if (--p.retry.apiErrors < 0) {
									return defaultError(arguments);
								}
								internal.nextChunk();
								break;
							default:
								return defaultError(arguments);
						}
						return;
					}
					if (!r || !r.upload) {
						// Simply retry when getting an empty response
						txt = "Empty response";
						if (--p.retry.emptyResponse < 0) {
							args = Array.prototype.slice.call(arguments, 0);
							args.shift(txt);
							return internal.fail.apply(internal, args);
						}
						$def.notify('err', chunkinfo, txt);
						internal.nextChunk();
					}
					if (r.upload.filekey) filekey = r.upload.filekey;
					
					var _successfullytransmitted = function() {
						chunkinfo.currentchunk.progress = 100;
						chunkinfo.currentchunk.progressText = "Chunk uploaded";
						$def.notify('prog', chunkinfo);
						offset += chunkSize;
						remaining -= chunkSize;
						offsetid++;
					};
					
					if (r.upload.result === "Warning") {
						var fileNameRelated = true,
							warnings = [],
							__insertNewParams = function(newparams) {
								p = $.extend(p, newparams);
								if (waitingFinish) {
									internal.finish();
								}
							};
							
						$.each(r.upload.warnings, function(k, v) {
							warnings.push(k + ': \"' + v + '\"');
							fileNameRelated = fileNameRelated && $.inArray(k, j.uploadWarnings.filename) > -1;
							return fileNameRelated;
						});
						warnings = warnings.join(', ');
						if (fileNameRelated) {
							p.callbacks.nameNeedsChange(warnings, __insertNewParams);
						} else {
							p.callbacks.ignorewarningsRequired(warnings, __insertNewParams);
						}
						if (0 === remaining) {
							waitingFinish = true;
						} else {
							// Simply continue with ignorewarnings flag
							p.passToAPI.upload.ignorewarnings = 1;
							internal.nextChunk();
						}
						return;
					}
					if (r.upload.result === "Continue" && 0 !== remaining) {
						var offsetRequested = Number(r.upload.offset),
							offsetCalculated = offset + chunkSize,
							diff = offsetCalculated - offsetRequested;
							
						if (offsetRequested === offsetCalculated) {
							_successfullytransmitted();
							internal.nextChunk();
						} else if (offsetRequested < offsetCalculated) {
							$def.notify('warn', chunkinfo, "Offset requested by API is lower than offset calculated. \r\n issue?");
							// Correct current chunk size
							chunkSize -= diff;
							addToNextChunk = diff;
							_successfullytransmitted();
							internal.nextChunk();
						} else {
							// Error handling: Simply upload last chunk again
							txt = "Offset error: API wants to continue at " + r.upload.offset + " but calculated offset is " + (offset + chunkSize);
							if (--p.retry.offsetError < 0) {
								args = Array.prototype.slice.call(arguments, 0);
								args.shift(txt);
								return internal.fail.apply(internal, args);
							}
							$def.notify('err', chunkinfo, txt);
							internal.nextChunk();
						}
						return;
					}
					_successfullytransmitted();
					if (r.upload.result === "Success" && 0 === remaining) {
						chunkinfo.currentchunk = chunkinfo.finalize;
						internal.finish();
						return;
					}
					if (r.upload.result === "Poll") {
						if (0 === remaining) {
							chunkinfo.currentchunk = chunkinfo.finalize;
							internal.status = 'rebuilding';
							
							chunkinfo.finalize.progress = 1;
							chunkinfo.finalize.progressText = 'Assembling chunks';
							$def.notify('prog', chunkinfo, txt);
						}
						setTimeout(internal.poll, 2000);
						return;
					}
				},
				/**
				* status checker
				**/
				poll: function() {
					var txt,
						args,
						cb,
						word;
						
					switch (internal.status) {
						case 'uploading':
							word = "process chunk";
							cb = function(r) {
								internal.chunkUploaded('OK', r);
								return true;
							};
							break;
						case 'rebuilding':
							word = "rebuild uploaded file";
							cb = function(r) {
								return ("queued" === r.upload.stage) ? false : (internal.finish() || true);
							};
							break;
						case 'publishing':
							word = "publish uploaded file";
							cb = function(r) {
								internal.finished(r);
								return true;
							};
							break;
					}
					internal.uploadAPI({
						checkstatus: 1
					}).done(function(r) {
						if (r && r.error) {
							switch (r.error.code) {
								// r.error.info
								case 'badtoken':
									j.refreshToken('edit', $.proxy(internal.poll, internal));
									break;
								case 'readapidenied':
								case 'writeapidenied':
								case 'invalid-file-key':
								case 'mustbeloggedin':
								case 'permissiondenied':
								case 'internal_api_error_UploadStashNotLoggedInException':
									p.callbacks.loginRequired(r.error.code + ': ' + r.error.info, function() {
										j.refreshToken('edit', $.proxy(internal.poll, internal));
									});
									break;
								default:
									args = Array.prototype.slice.call(arguments, 0);
									args.shift(r.error.code + ': ' + r.error.info);
									return internal.fail.apply(internal, args);
							}
							return;
						}
						if (!r || !r.upload) {
							txt = "Empty response: Still waiting for server to " + word;
							if (--p.retry.emptyResponse < 0) {
								args = Array.prototype.slice.call(arguments, 0);
								args.shift(txt);
								return internal.fail.apply(internal, args);
							}
							setTimeout(internal.poll, 7000);
							$def.notify('err', chunkinfo, txt);
							return j.log(txt, r);
						}
						if (r.upload.filekey) filekey = r.upload.filekey;
						// If the operation succeeded, the callback is called (which returns true for most cases)
						// otherwise the callback is not called in JavaScript because the expression would evaluate to
						// false anyway
						if (!(('Success' === r.upload.result || 'Continue' === r.upload.result) && cb(r))) {
							txt = "Still waiting for server to " + word;
							$def.notify('prog', chunkinfo, txt);
							j.log(txt, r);
							setTimeout(internal.poll, 4500);
						}
					}).fail(function(jqXHR, textStatus, errorThrown) {
						// TODO: Server status etc.
						// Simply re-query
						txt = "Sever-Error " + jqXHR.status + ". Reason: " + textStatus + " " + errorThrown + " ... Still waiting for server to " + word;
						if (--p.retry.serverError < 0) {
							args = Array.prototype.slice.call(arguments, 0);
							args.shift(txt);
							return internal.fail.apply(internal, args);
						}
						setTimeout(internal.poll, 7000);
						$def.notify('err', chunkinfo, txt);
						j.log(txt);
					});
				},
				finish: function() {
					internal.status = 'publishing';
					chunkinfo.finalize.progress = 10;
					chunkinfo.finalize.progressText= 'Finishing';

					$def.notify('prog', chunkinfo);
					j.log("chunked upload> Finishing.");
					var params = {
						filename: p.title,
						filesize: size,
						async: 1,
						comment: p.summary,
						text: p.text
					};
					$.each(p.passToAPI.finish, function(k, v) {
						params[k] = v;
					});
					internal.uploadAPI(params).done(internal.possiblyFinished).fail(internal.finishFailed);
				},
				possiblyFinished: function(r) {
					if (r && r.error) {
						switch (r.error.code) {
							// r.error.info
							case 'badtoken':
								j.refreshToken('edit', $.proxy(internal.finish, internal));
								break;
							case 'readapidenied':
							case 'writeapidenied':
							case 'invalid-file-key':
							case 'mustbeloggedin':
							case 'permissiondenied':
							case 'internal_api_error_UploadStashNotLoggedInException':
								p.callbacks.loginRequired(r.error.code + ': ' + r.error.info, function() {
									j.refreshToken('edit', $.proxy(internal.finish, internal));
								});
								break;
							default:
								var args = Array.prototype.slice.call(arguments, 0);
								args.shift(r.error.code + ': ' + r.error.info);
								return internal.fail.apply(internal, args);
						}
						return;
					}
					
					if (!r || !r.upload) return internal.finishFailed("empty response received");
					if (r.upload.filekey) filekey = r.upload.filekey;
					
					switch (r.upload.result) {
						case 'Poll':
							j.log("Waiting for upload to be published");
							chunkinfo.finalize.progress = 50;
							chunkinfo.finalize.progressText= 'Waiting for upload to be published';
							
							$def.notify('prog', chunkinfo);
							setTimeout(internal.poll, 2000);
							break;
						case 'Success':
							internal.finished(r);
							break;
					}
				},
				finished: function(r) {
					j.log("Uploaded successfully");
					chunkinfo.finalize.progress = 100;
					chunkinfo.finalize.progressText= 'Uploaded successfully';
					
					$def.notify('prog', chunkinfo);
					$def.resolve(chunkinfo, r);
				},
				chunkFailed: function(statusText, response, xhr) {
					var txt = "Server error " + xhr.status + " after uploading chunk: " + statusText + "\nResponse: " + response.slice(0, 500).replace(/\n\n/g, '\n');
					
					if (--p.retry.serverError < 0) {
						var args = Array.prototype.slice.call(arguments, 0);
						args.shift(txt);
						return internal.fail.apply(internal, args);
					}
					$def.notify('err', chunkinfo, txt);
					internal.nextChunk();
				},
				finishFailed: function(reasonOrXHR, textStatus, errorThrown) {
					if ('object' === typeof reasonOrXHR) reasonOrXHR = textStatus + ' ' + errorThrown;
					
					var txt = "Server error while publishing upload. Reason: " + reasonOrXHR;
					if (--p.retry.serverError < 0) {
						var args = Array.prototype.slice.call(arguments, 0);
						args.shift(txt);
						return internal.fail.apply(internal, args);
					}
					$def.notify('err', chunkinfo, txt);
					internal.finish();
				},
				fail: function() {
					var args = Array.prototype.slice.call(arguments, 0);
					j.fail.apply(j, args);
					$def.reject.apply($def, args);
				}
			};
			
			// Get some statistics about the file
			size = remaining = file.size;
			var remains4loop = size,
				chunksize4loop,
				i = 0;
				
			while (remains4loop > 0) {
				chunksize4loop = Math.min(remaining, p.maxChunkSize);
				chunkinfo[i] = {
					chunksize: chunksize4loop,
					remaining: remains4loop,
					progress: 0,
					progressText: 'in progress',
					id: i
				};
				remains4loop -= chunksize4loop;
				i++;
			}
			chunkinfo.finalize = {
				progress: 0,
				progressText: '',
				id: 'finalize'
			};
			internal.nextChunk();
			$def.chunkinfo = chunkinfo;
			
			return $def;
		},
		createSampleUploadButton: function() {
			var j = this;
			$('<input type="file" id="files" name="file">').prependTo(mw.util.$content).change(function(e) {
				j.chunkedUpload({
					title: "A random title.png"
				}, this.files[0]).progress(function() { 
					console.log('prog', arguments);
				}).done(function() {
					console.log('done', arguments);
				});
			});
		},
		$loadContinue: function(title) {
			var $def = $.Deferred(),
				j = this;
			mw.loader.using(['ext.gadget.libAPI'], function() {
				mw.libs.commons.api.query({
						'action': 'query',
						'prop': 'revisions',
						'rvprop': 'content',
						'rvlimit': 1,
						'titles': title
					}, {
						method: 'POST',
						cache: false,
						cb: function(r) {
							try {
								$def.resolve(firstItem(r.query.pages).revisions[0]['*']);
							} catch (ex) {
								$def.reject(ex);
							}
						},
						// r-result, query, text
						errCb: function(t, r, q) {
							j.fail("Failed to retrieve continue param.");
							$def.reject(r);
						}
					});
			});
			return $def;
		},
		$continueQuery: function(query, result) {
			var $def = $.Deferred(),
				qc = result['query-continue'],
				j = this,
				oldProp = query.prop,
				oldList = query.list;
				
			if (qc) {
				var props = [],
					lists = [];
				$.each(qc, function(k, v) {
					if (oldProp && oldProp.indexOf(k) > -1) {
						props.push(k);
					}
					if (oldList && oldList.indexOf(k) > -1) {
						lists.push(k);
					}
					$.extend(query, v);
				});
				if (props.length) {
					query.prop = props.join('|');
				} else {
					delete query.prop;
				}
				if (lists.length) {
					query.list = lists.join('|');
				} else {
					delete query.list;
				}
			} else {
				throw new Error("MW-JS-BOT: Nothing to continue.");
			}
			mw.loader.using(['ext.gadget.libAPI'], function() {
				mw.libs.commons.api.query(query, {
					method: 'POST',
					cache: false,
					cb: function(r) {
						$def.resolve(r);
					},
					// r-result, query, text
					errCb: function(t, r, q) {
						j.fail("Failed to continue query.");
						$def.reject(r);
					}
				});
			});
			
			return $def;
		},
		$saveContinue: function(title, value, summary) {
			var $def = $.Deferred(),
				j = this;
				
			mw.loader.using(['ext.gadget.libAPI'], function() {
				mw.libs.commons.api.editPage({
					'editType': 'text',
					'text': value,
					'title': title,
					'summary': 'MW-JS-BOT: ' + (summary || " updating continue-param"),
					cb: function(r) {
						$def.resolve(r);
					},
					// r-result, query, text
					errCb: function(t, r, q) {
						j.fail("Failed to save continue param.");
						$def.reject(r);
					}
				});
			});
			return $def;
		},
		$addLogline: function(title, value, summary) {
			var $def = $.Deferred(),
				j = this;
				
			mw.loader.using(['ext.gadget.libAPI'], function() {
				mw.libs.commons.api.editPage({
					'editType': 'appendtext',
					'text': '\n# ' + value,
					'title': title,
					'summary': 'MW-JS-BOT: ' + (summary || " logging"),
					cb: function(r) {
						$def.resolve(r);
					},
					// r-result, query, text
					errCb: function(t, r, q) {
						j.fail("Failed to log.");
						$def.reject(r);
					}
				});
			});
			return $def;
		},
		$xmlFromString: function(xmlString, title) {
			var xml = $.parseXML(xmlString),
				isXmlDoc = $.isXMLDoc(xml),
				$xmlDoc = $(xml),
				j = this;
				
			if (!isXmlDoc || !$xmlDoc || !$xmlDoc.length) {
				j.warn(title + " is not an XML Document.");
			}
			return $xmlDoc;
		},
		stringFrom$xml: function($xml) {
			if(!window.XMLSerializer) {
				window.XMLSerializer = function(){};
				window.XMLSerializer.prototype.serializeToString = function( XMLObject ){
					return XMLObject.xml || '';
				};
			}
		
			var oSerializer = new XMLSerializer(),
				xmlStringOut = oSerializer.serializeToString($xml[0]);
				
			return xmlStringOut;
		},
		$getWindowConsole: function() {
			if (this.$windowConsole) return this.$windowConsole;
			
			var $console = this.$windowConsole = $('<div>').css({
				'font-family': '"Lucida Console", "Courier New", Monospace'
			}).appendTo(mw.util.$content);
			$console.$consoleTop = $('<div>').text('Window Console by MW-JS-BOT').appendTo($console);
			$console.$droppedEntryNote = $('<span>').appendTo($console.$consoleTop);
			$console.droppedEntries = 0;
			$console.visibleEntries = 0;
			
			$console.dropFirstEntry = function() {
				$console.$consoleTop.next().remove();
				$console.droppedEntries++;
				$console.visibleEntries--;
				$console.$droppedEntryNote.text($console.droppedEntries + " entries were dropped from the window console.");
			};
			$console.log = function() {
				if ($console.totalEntries > 400) {
					$console.dropFirstEntry();
				}
				$console.visibleEntries++;
				var $entry = $('<div>').attr({
					'class': 'windowconsole-entry'
				});
				var argslen = arguments.length;
				for (var i = 0; i < argslen; i++) {
					try {
						var $subentry = $('<p>').text(arguments[i]);
						$subentry.appendTo($entry);
					} catch (ex) {}
				}
				$entry.appendTo($console);
			};
			return $console;
		},
		log: function(unlimitedArgs) {
			if (window.console) {
				var arrArgs = Array.prototype.slice.call(arguments, 0);
				arrArgs.unshift('mwbot>');
				if ($.isFunction(console.log)) {
					console.log.apply(console, arrArgs);
				} else {
					this.$getWindowConsole().apply(this, arrArgs);
				}
			}
		},
		warn: function(unlimitedArgs) {
			var j = this;
			if (window.console) {
				var arrArgs = Array.prototype.slice.call(arguments, 0);
				if ($.isFunction(console.warn)) {
					arrArgs.unshift('mwbot>');
					console.warn.apply(console, arrArgs);
				} else {
					arrArgs.unshift('WARNING>');
					j.log.apply(j, arrArgs);
				}
			}
		},
		fail: function(unlimitedArgs) {
			var j = this;
			if (window.console) {
				var arrArgs = Array.prototype.slice.call(arguments, 0);
				if ($.isFunction(console.error)) {
					arrArgs.unshift('mwbot>');
					console.error.apply(console, arrArgs);
				} else {
					arrArgs.unshift('ERR>');
					j.log.apply(j, arrArgs);
				}
			}
		}
	});
	window.MwJSBot = jsb;
	
	var h = {};
	h[myModuleName] = 'ready';
	mw.loader.state(h);
	
	new MwJSBot().log("Hello. I am your MwJSBot framework.");
})(jQuery, mediaWiki);