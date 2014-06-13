(function() {
	'use strict';
	mw.log('CTFhandler at your service, Sir!');

	$.fn.stopSpinaround = function() {
		var $el = this;
		var iv = $el.data('spinaround-iv');
		if (iv) clearInterval(iv);
		$el.html($el.data('original-content'));
	};
	$.fn.spinaround = function() {
		var $el = this;
		$el.data('original-content', $el.html());
		// Freeze width
		$el.width($el.width()).css('display', 'inline-block');
		var dots = '.';
		$el.text(dots);
		
		var iv = setInterval(function() {
			dots += '.';
			if (dots.length > 10) dots = '.';
			$el.text(dots);
		}, 100);
		$el.data('spinaround-iv', iv);
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
			filePath = $('#file').find('a:first').attr('href'),
			cfg = window.CTFHandlerConfig,
			fileContent, bot;

		if (!filePath) alert('File appears to be corrupt and can therefore not be edited.');
		
		// Tell the wrapper where to look for the mol editor
		molEdit.config.iFrameSrc = cfg.moleditor;

		// Start loading stuff
		mw.loader.using(['ext.ctfHandler.mwjsbot'], function() {
			bot = new MwJSBot();
			bot.$downloadRawFile(filePath + '?t=' + $.now()).done(function(r) {
				fileContent = r;
				$defMolFile.resolve();
			});
		});

		mw.loader.using(['jquery.ui.dialog'], function() {
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
				$molEdit = molEdit.$create(530, 800, fileContent);
				
			// molEdit.$create adds some "special" properties that are not part of $.fn
			// Therefore don't chain!
			$molEdit.load(function() {
				$loadNotify.fadeOut();
				$submit.button({
					'disabled': false
				});
			}).error(function() {
				$loadNotify.text("Molfile editor cannot be loaded. We regret the inconvenience. If this is a persistant issue, contact the system administrator of this site.");
			}).appendTo($editor);
			
			
			$editor.dialog({
				width: 830,
				buttons: {
					'Save': function() {
						// Upload
						$(this).height($(this).height());
						$molEdit.fadeOut();
						$loadNotify.text("Obtaining Molfile from editor.").fadeIn();
						$(this).dialog('widget').find('.ui-dialog-buttonpane button').button({
							'disabled': true
						});

						$molEdit.$getMolfile().done(function(molfile) {
							$loadNotify.text("Uploading. Page will re-load upon completion.");

							if (!molfile) return alert("Molfile is empty.");
							//if (!/\x0D\x0A$/.test(molfile)) molfile += '\x0D\x0A';

							var mpm = bot.multipartMessageForBinaryFiles();
							mpm.appendPart('format', 'json');
							mpm.appendPart('action', 'upload');
							mpm.appendPart('filename', wgTitle);
							mpm.appendPart('filesize', molfile.length);
							var mime = /\.mol$/.test(wgTitle) ? 'chemical/x-mdl-molfile' : 'chemical/x-mdl-rxnfile';
							var blob = new Blob([molfile], {
								type: mime
							});
							mpm.appendPart('file', blob, wgTitle, mime);
							mpm.appendPart('ignorewarnings', 1);
							mpm.appendPart('token', mw.user.tokens.get('editToken'));
							mpm.$send().done(function() {
								console.log(arguments);
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
}());