<?php
/**
 * Derivative work of:
 */
	/**
	* Copyright © Wikimedia Deutschland, 2009
	* Authors Hallo Welt! Medienwerkstatt GmbH
	* Authors Sebastian Ulbricht, Daniel Lynge, Marc Reymann, Markus Glaser
	*
	* This program is free software; you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation; either version 2 of the License, or
	* (at your option) any later version.
	*
	* This program is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License along
	* with this program; if not, write to the Free Software Foundation, Inc.,
	* 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
	* http://www.gnu.org/copyleft/gpl.html
	*/

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo 'PagedTiffHandler extension';
	exit( 1 );
}

// Credits
$wgExtensionCredits['media'][] = array(
	'path' => __FILE__,
	'name' => 'Mol Handler',
	'author' => array(
		'Rainer Rillke',
	),
	'version' => '0.1.0',
	'descriptionmsg' => 'mwe-mh-credits-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:MolHandler',
	'license-name' => 'GPL-2.0+',
);


$dir = __DIR__ . '/';

$wgMolConverterPath = '/usr/bin';
$wgMolConvertCommand1 = '$path/babel -i$format $input $output';
$wgMolConvertCommand = '$path/indigo-depict $input $output';
$wgMediaHandlers['chemical/x-mdl-molfile'] = 'MolHandler';
$wgMediaHandlers['chemical/x-mdl-rxnfile'] = 'RxnHandler';

$wgAutoloadClasses['CTFHandlerHooks'] = $dir . 'CTFHandlerHooks.php';
$wgAutoloadClasses['CTFHandler'] = $dir . 'CTFHandler_body.php';
$wgAutoloadClasses['MolHandler'] = $dir . 'MolHandler.php';
$wgAutoloadClasses['RxnHandler'] = $dir . 'RxnHandler.php';


$ctfHanlderModuleInfo = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'CTFHandler/resources',
);

$ctfHandlerConfig = array(
	'moleditor' => '',
);

$wgResourceModules['ext.ctfHandler'] = array(
		'scripts' => array(
			'loader.js',
			'clipboard.js',
			'formulaedit.js',
			'mw.ctfhandler.startup.js',
		),
		'dependencies' => array(
			'mediawiki.Title',
		),
) + $ctfHanlderModuleInfo;

$wgResourceModules['ext.ctfHandler.mwjsbot'] = array(
		'scripts' => array(
				'MwJSBot.js',
		),
) + $ctfHanlderModuleInfo;

$wgHooks['ParserAfterParse'][] = 'CTFHandlerHooks::onParserAfterParse';

$wgCtlFileExtensions = array( 'mol', 'rxn' );