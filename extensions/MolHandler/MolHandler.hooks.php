<?php

/**
* Hooks for MolHandler extension
*
* @file
* @ingroup Extensions
*/

class MolHandlerHooks {

	public static function onParserAfterParse( $parser, $text, $stripState ) {
		global $molHandlerConfig, $wgExtensionAssetsPath;

		$title = $parser->getTitle();

		# Add config
		$molHandlerConfig['moleditor'] = $wgExtensionAssetsPath . '/' . basename ( __DIR__ ) . '/resources/ketcher/ketcher.html';
		$parser->getOutput()->addJsConfigVars(
			array(
					'MolHandlerConfig' => $molHandlerConfig,
			)
		);

		if ( $title->inNamespace( NS_FILE ) && preg_match( '/\.(mol|rxn)$/i', $title->getText() ) ) {

			# Add module to be loaded
			$parser->getOutput()->addModules( 'ext.molHandler' );
		}
		return true;
	}
}