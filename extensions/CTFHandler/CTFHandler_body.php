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

abstract class CTFHandler extends SvgHandler {
	const FILE_FORMAT = 'mol';

	/**
	 * @param File $file
	 * @return bool
	 */
	function isAnimatedImage( $file ) {
		return false;
	}

	/**
	 * @param File $image
	 * @param string $dstPath
	 * @param string $dstUrl
	 * @param array $params
	 * @param int $flags
	 * @return bool|MediaTransformError|ThumbnailImage|TransformParameterError
	 */
	function doTransform( $image, $dstPath, $dstUrl, $params, $flags = 0 ) {
		if ( !$this->normaliseParams( $image, $params ) ) {
			return new TransformParameterError( $params );
		}
		$clientWidth = $params['width'];
		$clientHeight = $params['height'];
		$physicalWidth = $params['physicalWidth'];
		$physicalHeight = $params['physicalHeight'];
		$lang = isset( $params['lang'] ) ? $params['lang'] : $this->getDefaultRenderLanguage( $image );

		if ( $flags & self::TRANSFORM_LATER ) {
			return new ThumbnailImage( $image, $dstUrl, $dstPath, $params );
		}

		$metadata = $this->unpackMetadata( $image->getMetadata() );
		if ( isset( $metadata['error'] ) ) { // sanity check
			$err = wfMessage( 'svg-long-error', $metadata['error']['message'] )->text();

			return new MediaTransformError( 'thumbnail_error', $clientWidth, $clientHeight, $err );
		}

		$svgThumbPath = $image->getThumbPath( 'molhandler-' . $image->getName() );
		$svgPath = $dstPath . '.svg';

		if ( !wfMkdirParents( dirname( $dstPath ), null, __METHOD__ ) || !wfMkdirParents( dirname( $svgPath ), null, __METHOD__ ) ) {
			return new MediaTransformError( 'thumbnail_error', $clientWidth, $clientHeight,
				wfMessage( 'thumbnail_dest_directory' )->text() );
		}

		# Check whether there is already a SVG generated
		# treating the SVG as "thumbnail" although it isn't´
		$repo = $image->getRepo();
		$tempFSFile = null;
		$thumbExists = $repo->fileExists( $svgThumbPath );
		if ( $thumbExists ) {
			$tempFSFile = $repo->getLocalCopy( $svgThumbPath );
			$svgPath = $tempFSFile->getPath();
			wfDebug( "SVG thumb exists at $svgPath. Re-using.\n" );
		}

		$srcPath = $image->getLocalRefPath();
		$status = $this->rasterizeCTF( $srcPath, $dstPath, $physicalWidth, $physicalHeight, $svgPath );

		if ( $tempFSFile ) {
			# Clean up temporary file
			$tempFSFile->purge();
		} else {
			# Copy generated SVG to the repo
			// FIXME: assumes SVG was created
			// TODO: headers
			$repoStatus = $repo->quickImport( $svgPath, $svgThumbPath );
			if ( !$repoStatus->isGood() ) {
				wfDebug( "Cannot copy SVG file ($svgPath) to repo ($svgThumbPath) because {$repoStatus->getHTML()} \n" );
			}
			# Clean up
			if ( file_exists( $svgPath ) && filesize( $svgPath ) > 0 ) {
				unlink( $svgPath );
			}
		}

		if ( $status === true ) {
			return new ThumbnailImage( $image, $dstUrl, $dstPath, $params );
		} else {
			return $status; // MediaTransformError
		}
	}

	/**
	 * Transform a CTF file to PNG
	 * Overriding default implementation for compatibility
	 * Not in use by this class or classed derived from CTF
	 *
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
		$svgPath = $dstPath . '.svg';
		$status = $this->rasterizeCTF( $srcPath, $dstPath,  $width, $height, $svgPath );
		if ( file_exists( $svgPath ) && filesize( $svgPath ) > 0 ) {
			unlink( $svgPath );
		}
	}

	/**
	 * Transform an CTFs file to SVG and SVG to PNG
	 * @param string $srcPath
	 * @param string $dstPath
	 * @param string $width
	 * @param string $height
	 * @param string $svgPath
	 * @param string $format
	 * @throws MWException
	 * @return bool|MediaTransformError
	 */
	private function rasterizeCTF( $srcPath, $dstPath, $width, $height, $svgPath ) {
		global $wgMolConvertCommand, $wgMolConverterPath;

		# Create SVG if it does not yet exist, otherwise just modify the $srcPath
		$err = false;
		$retval = '';
		$limits = array(
				'memory' => 3072000
		);
		wfDebug( ">! Molfile rasterize $wgMolConverterPath\n" );
		if ( !file_exists( $svgPath ) ) {
			// External command
			$cmd = str_replace(
				array( '$path/', '$format', '$input', '$output' ),
				array( $wgMolConverterPath ? wfEscapeShellArg( "$wgMolConverterPath/" ) : "",
						wfEscapeShellArg( static::FILE_FORMAT ),
						wfEscapeShellArg( $srcPath ),
						wfEscapeShellArg( $svgPath ) ),
				$wgMolConvertCommand
			);

			wfProfileIn( 'molconvert' );
			wfDebug( __METHOD__ . ": $cmd\n" );
			$err = wfShellExecWithStderr( $cmd, $retval, array(), $limits );
			wfProfileOut( 'molconvert' );
		}
		$removed = $this->removeBadFile( $svgPath, $retval );
		if ( $retval != 0 || $removed ) {
			$this->logErrorForExternalProcess( $retval, $err, $cmd );
			return new MediaTransformError( 'thumbnail_error', 0, 0, $err );
		}

		# Finally let our parents do the work for us :)
		return parent::rasterize( $svgPath, $dstPath, $width, $height );
	}

	/**
	 * @param File $file
	 * @param string $filename
	 * @return string Serialised metadata
	 */
	// TODO: Implement "Identify" command in PHP
	function getMetadata( $file, $filename ) {
		global $wgMolConvertCommand, $wgMolConverterPath;

		# Create SVG if it does not yet exist, otherwise just modify the parameters
		$err = false;
		$retval = '';
		$svgfilename = $filename . '.svg';
		$tmpFilename = $filename . '.' . static::FILE_FORMAT;
		copy ( $filename, $tmpFilename );
		$limits = array(
			'memory' => 3072000
		);
		wfDebug( ">! Molfile metadata $wgMolConverterPath\n" );
		if ( !file_exists( $svgfilename ) ) {
			// External command
			$cmd = str_replace(
				array( '$path/', '$format', '$input', '$output' ),
				array( $wgMolConverterPath ? wfEscapeShellArg( "$wgMolConverterPath/" ) : "",
					wfEscapeShellArg( static::FILE_FORMAT ),
					wfEscapeShellArg( $tmpFilename ),
					wfEscapeShellArg( $svgfilename ) ),
				$wgMolConvertCommand
			);

			wfProfileIn( 'molconvert' );
			wfDebug( __METHOD__ . ": $cmd\n" );
			$err = wfShellExecWithStderr( $cmd, $retval, array(), $limits );
			wfProfileOut( 'molconvert' );
		}
		unlink( $tmpFilename );
		$removed = $this->removeBadFile( $svgfilename, $retval );
		if ( $retval != 0 || $removed ) {
			$this->logErrorForExternalProcess( $retval, $err, $cmd );
			return new MediaTransformError( 'thumbnail_error', 0, 0, $err );
		}
		# Finally defer the work to our parents :)
		$meta = parent::getMetadata( $file, $svgfilename );
		# And clean up
		unlink( $svgfilename );
		return $meta;
	}
}
