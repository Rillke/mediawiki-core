(function() {
	'use strict';
	mw.log('Molhandler at your service, Sir!');

	$.fn.stopSpinaround = function() {
		$.each(this, function(i, el) {
			var $el = $(el);
			$el.html($el.data('original-content'));
		});
	};
	$.fn.spinaround = function() {
		$.each(this, function(i, el) {
			var $el = $(el);
			$el.data('original-content', $el.html());
			// Freeze width
			$el.width($el.width()).css('display', 'inline-block');
			$el.html('').append($.createSpinner());
		});
	};
	
	var loading = false;
	var edit = function(e) {
		if (mw.user.isAnon()) {
			return location.href = mw.util.wikiScript() + '?' + $.param({
				title: 'Special:UserLogin',
				returnto: wgPageName
			});
		}
	
		if (e && e.preventDefault) e.preventDefault();
		$editLink.spinaround();
		if (loading) return;
		loading = true;
	
		var $defRL = $.Deferred(),
			$defMolFile = $.Deferred(),
			filePath = $('#file').find('a:first').attr('href') || $('.fullMedia>.dangerousLink').find('a:first').attr('href'),
			cfg = window.MolHandlerConfig,
			fileContent, bot;

		if (!filePath) {
			alert('File appears to be corrupt and can therefore not be edited.');
			return $editLink.stopSpinaround();
		}
		
		// Tell the wrapper where to look for the mol editor
		molEdit.config.iFrameSrc = cfg.moleditor;

		// Start loading stuff
		mw.loader.using(['ext.molHandler.mwjsbot'], function() {
			bot = new MwJSBot();
			bot.$downloadRawFile(filePath + '?t=' + $.now()).done(function(r) {
				fileContent = r;
				$defMolFile.resolve();
			});
		});

		mw.loader.using(['jquery.ui.dialog', 'jquery.json'], function() {
			$defRL.resolve();
		});

		// When everything is loaded, proceed
		$.when($defRL, $defMolFile).done(function() {
			var $submit,
				$editor = $('<div>')
					.attr('title', "Edit " + wgTitle)
					.css('position', 'relative'),
				$loadNotify = $('<div>')
					.text("CTLHandler is loading the awesome. Thanks to GGA for releasing their Molfile Editor 'Ketcher' under a free license so we can use it here.")
					.css({
						'position': 'absolute',
						'font-size': '2em',
						'display': 'table-cell',
						'vertical-align': 'middle',
						'text-align': 'center',
						'top': '50%',
						'min-width': '95%',
						'margin-top': '-2em'
					})
					.appendTo($editor),
				$molEdit = molEdit.$create(530, 800, fileContent),
				$destWrap = $('<div>')
					.appendTo($editor),
				$destLabel = $('<label for="ext-mol-dest-input">')
					.text('Destination (file name)')
					.appendTo($destWrap),
				$destination = $('<input id="ext-mol-dest-input" type="text" placeholder="Destination (file name)" title="Destination (file name)" title" style="width:90%" />')
					.val(wgTitle)
					.appendTo($destWrap);
				
			// molEdit.$create adds some "special" properties that are not part of $.fn
			// Therefore don't chain!
			$molEdit.load(function() {
				$loadNotify.fadeOut();
				$submit.button({
					'disabled': false
				});
			}).error(function() {
				$loadNotify.text("Molfile editor cannot be loaded. We regret the inconvenience. If this is a persistant issue, contact the system administrator of this site.");
			}).prependTo($editor);
			
			
			$editor.dialog({
				width: 830,
				buttons: {
					'Save': function() {
						// Upload
						$(this).height($(this).height());
						$molEdit.add($destWrap).fadeOut();
						$loadNotify.text("Obtaining Molfile from editor.").fadeIn();
						$(this).dialog('widget').find('.ui-dialog-buttonpane button').button({
							'disabled': true
						});

						$molEdit.$getMolfile().done(function(molfile) {
							$loadNotify.text("Uploading. Page will re-load upon completion.");

							if (!molfile) return alert("Molfile is empty.");
							var dest = $.trim($destination.val()).replace(/[Ff]ile:/, '');
							if ( /^\$RXN/.test( molfile ) ) {
								if ( !/\.rxn$/.test( dest ) ) {
									alert( 'Adjusted file name to match its content (reaction).' );
									dest += '.rxn';
								}
							} else {
								if ( /\.rxn$/.test( dest ) ) {
									alert( 'Adjusted file name to match its content (molecule).' );
									dest += '.mol';
								}
							}

							var mpm = bot.multipartMessageForBinaryFiles();
							mpm.appendPart('format', 'json');
							mpm.appendPart('action', 'upload');
							mpm.appendPart('filename', dest);
							mpm.appendPart('filesize', molfile.length);
							var mime = /\.mol$/.test(wgTitle) ? 'chemical/x-mdl-molfile' : 'chemical/x-mdl-rxnfile';
							var blob = new Blob([molfile], {
								type: mime
							});
							mpm.appendPart('file', blob, wgTitle, mime);
							mpm.appendPart('ignorewarnings', 1);
							mpm.appendPart('token', mw.user.tokens.get('editToken'));
							mpm.$send().done(function(status, r) {
								try {
									r = $.secureEvalJSON( r );
								} catch (ex) {}
								if (r && r.upload && r.upload.result && r.upload.result === 'Success') {
									location.href = mw.util.getUrl( 'File:' + dest );
								} else {
									var extraStuff = '';
									if ( !r || !r.error ) r = { error: {} };
									if ( r.error.details ) {
										extraStuff = $.toJSON( r.error.details );
									}
									$molEdit.add($destWrap).fadeIn();
									$loadNotify.text("Upload error.").fadeOut();
									alert(
										'Upload failed because ' + r.error.code + ': ' +
										r.error.info + '\n' + extraStuff
									);
								}
							}).fail(function() {
								$molEdit.add($destWrap).fadeIn();
								$loadNotify.text("Upload error.").fadeOut();
								alert( 'Upload failed due to a sever or connection error.' );
							});
						});
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				},
				close: function() {
					$(this).remove();
				},
				modal: true,
				open: function() {
					$submit = $(this).dialog('widget').find('.ui-dialog-buttonpane button:first')
						.button({
							'icons': {
								primary: 'ui-icon-disk'
							},
							'disabled': true
						})
						.addClass('ui-button-green');
				}
			});
			$editLink.stopSpinaround();
			loading = false;
		});
	};

	var $editNode = $('<li>')
			.prependTo('#filetoc'),
		$editLink = $('<a>')
			.text('Edit Chemical table file')
			.attr('href', '#ctlEditFile')
			.click(edit)
			.prependTo($editNode);

	$editLink = $( mw.util.addPortletLink( 'p-cactions', '#ctlEditFile', 'Edit Chemical table file', 'mwe-mol-ca-ac-editlink' ) )
		.click( edit )
		.add( $editLink );
}());
