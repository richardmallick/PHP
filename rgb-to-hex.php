<?php
/**
 * Convert rgb colors to hex
 *
 * @since TimberPress 1.0.0
 * @param  string $hex Hex color code
 * @return mixed      rgb value
 */
if ( ! function_exists( 'timberpress_rgb_to_hex' ) ) :
function timberpress_rgb_to_hex( $color ) {

	$pattern = "/(\d{1,3})\,?\s?(\d{1,3})\,?\s?(\d{1,3})/";

	// Only if it's RGB
	if ( preg_match( $pattern, $color, $matches ) ) {
	  $r = $matches[1];
	  $g = $matches[2];
	  $b = $matches[3];

	  $color = sprintf("#%02x%02x%02x", $r, $g, $b);
	}

	return $color;
}
endif;
