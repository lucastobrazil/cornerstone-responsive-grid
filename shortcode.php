<?php

/**
 * Shortcode handler
 */
$no_gutters = ( true === $no_gutters ) ? 'grid--no_gutters' : '';

$output = "<div class='grid " . $no_gutters . ' ' . $h_align . ' ' . $v_align . "'>" . do_shortcode( $content ) . "</div>";
echo $output;

?>

