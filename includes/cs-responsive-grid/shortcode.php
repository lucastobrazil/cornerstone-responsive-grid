<?php

/**
 * Shortcode handler
 */
$id         = ( $id     != ''     ) ? esc_attr( $id ) : '';
$style      = ( $style  != ''     ) ? $style : '';
$class      = ( $class  != ''     ) ? $class : '';

$no_gutters = ( true === $no_gutters ) ? 'grid--no_gutters' : ''; 

$grid_classes = implode(' ', [
    'grid', 
    $no_gutters,
    $h_align,
    $v_align,
    $class
]);

$atts = cs_atts( array(
	'id' => $id,
	'class' => $grid_classes,
	'style' => $style
) );

$output = "<div {$atts}>" . do_shortcode( $content ) . "</div>";
echo $output;

?>

