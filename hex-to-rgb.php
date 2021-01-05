<?php
/**
 * Convert hex colors to rgb
 *
 * @since TimberPress 1.0.0
 * @param  string $hex Hex color code
 * @return mixed      rgb value
 */
if ( ! function_exists( 'timberpress_hex_to_rgb' ) ) :
function timberpress_hex_to_rgb( $color ) {

	// If it's already rgb(a), skip the process
	if ( ! preg_match( "/^(\.?\d{1,3},?\s?){3,4}$/", $color ) ) {

		// Drop the hash
		$color = str_replace( '#', '', $color );

		// Convert the hex to decimals
		if ( 3 === strlen( $color ) ) {
			$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
			$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
			$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
		} else {
			$r = hexdec( substr( $color, 0, 2 ) );
	    $g = hexdec( substr( $color, 2, 2 ) );
	    $b = hexdec( substr( $color, 4, 2 ) );
		}

		// Create RGB values separated by commas
		$color = implode( ',', array( $r, $g, $b ) );
	}

	return $color;
}
endif;
