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

class MolHandler extends SvgHandler {
	/**
	 * @param File $file
	 * @return bool
	 */
	function isAnimatedImage( $file ) {
		return false;
	}

	/**
	 * Transform an SVG file to PNG
	 * This function can be called outside of thumbnail contexts
	 * @param string $srcPath
	 * @param string $dstPath
	 * @param string $width
	 * @param string $height
	 * @param bool|string $lang Language code of the language to render the SVG in
	 * @throws MWException
	 * @return bool|MediaTransformError
	 */
	public function rasterize( $srcPath, $dstPath, $width, $height, $lang = false ) {
		global $wgMolConvertCommand;

		# Create SVG if it does not yet exist, otherwise just modify the $srcPath
		$err = false;
		$retval = '';
		$svgfilename = $srcPath . '.svg';
		$limits = array(
				'memory' => 3072000
		);
		wfDebug( '>! Molfile rasterize\n' );
		if ( !file_exists( $svgfilename ) ) {
			// External command
			$cmd = str_replace(
				array( '$path/', '$format', '$input', '$output' ),
				array( $wgMolConverterPath ? wfEscapeShellArg( "$wgMolConverterPath/" ) : "",
						wfEscapeShellArg( 'mol' ),
						wfEscapeShellArg( $srcPath ),
						wfEscapeShellArg( $svgfilename ) ),
				$wgMolConvertCommand
			);

			wfProfileIn( 'molconvert' );
			wfDebug( __METHOD__ . ": $cmd\n" );
			$err = wfShellExecWithStderr( $cmd, $retval, array(), $limits );
			wfProfileOut( 'molconvert' );
		}
		$removed = $this->removeBadFile( $svgfilename, $retval );
		if ( $retval != 0 || $removed ) {
			$this->logErrorForExternalProcess( $retval, $err, $cmd );
			return new MediaTransformError( 'thumbnail_error', 0, 0, $err );
		}

		# Finally let our parents do the work for us :)
		return parent::rasterize( $svgfilename, $dstPath, $width, $height, $lang );
	}

	/**
	 * @param File $file
	 * @param string $filename
	 * @return string Serialised metadata
	 */
	function getMetadata( $file, $filename ) {
		global $wgMolConvertCommand;

		wfDebug( "Temp path is $filename\n" );

		# Create SVG if it does not yet exist, otherwise just modify the parameters
		$err = false;
		$retval = '';
		$svgfilename = $filename . '.svg';
		$limits = array(
			'memory' => 3072000
		);
		wfDebug( '>! Molfile metadata\n' );
		if ( !file_exists( $svgfilename ) ) {
			// External command
			$cmd = str_replace(
				array( '$path/', '$format', '$input', '$output' ),
				array( $wgMolConverterPath ? wfEscapeShellArg( "$wgMolConverterPath/" ) : "",
					wfEscapeShellArg( 'mol' ),
					wfEscapeShellArg( $filename ),
					wfEscapeShellArg( $svgfilename ) ),
				$wgMolConvertCommand
			);

			wfProfileIn( 'molconvert' );
			wfDebug( __METHOD__ . ": $cmd\n" );
			$err = wfShellExecWithStderr( $cmd, $retval, array(), $limits );
			wfProfileOut( 'molconvert' );
		}
		$removed = $this->removeBadFile( $svgfilename, $retval );
		if ( $retval != 0 || $removed ) {
			$this->logErrorForExternalProcess( $retval, $err, $cmd );
			return new MediaTransformError( 'thumbnail_error', 0, 0, $err );
		}
		# Finally defer the work to our parents :)
		$meta = parent::getMetadata( $file, $svgfilename );
		return $meta;
	}
}
