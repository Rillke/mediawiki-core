<?php

/**
* Hooks for CTFHandler extension
*
* @file
* @ingroup Extensions
*/

class CTFHandlerHooks {

	public static function onParserAfterParse( $parser, $text, $stripState ) {
		global $ctfHandlerConfig, $wgExtensionAssetsPath;

		$title = $parser->getTitle();

		if ( $title->inNamespace( NS_FILE ) && preg_match( '/\.(mol|rxn)$/i', $title->getText() ) ) {

			# Add config
			$ctfHandlerConfig['moleditor'] = $wgExtensionAssetsPath . '/' . basename ( __DIR__ ) . '/resources/ketcher/ketcher.html';
			$parser->getOutput()->addJsConfigVars(
				array(
						'CTFHandlerConfig' => $ctfHandlerConfig,
				)
			);

			# Add module to be loaded
			$parser->getOutput()->addModules( 'ext.ctfHandler' );
		}
		return true;
	}
}