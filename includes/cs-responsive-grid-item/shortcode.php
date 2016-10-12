<?php

/**
 * Shortcode handler
 */

$title        = ( $title        != ''     ) ? $title : 'Set a Title';
$normal_class = ( $normal_class != ''     ) ? $normal_class : '';
$xs_class     = ( $xs_class     != ''     ) ? $xs_class : '';
$sm_class     = ( $sm_class     != ''     ) ? $sm_class : '';
$md_class     = ( $md_class     != ''     ) ? $md_class : '';
$lg_class     = ( $lg_class     != ''     ) ? $lg_class : '';

// Combine grid classes into one string
// @todo - write a function to do this. i'm sure it exists'
$grid_classes = ' grid-item ' . $normal_class . ' ' 
    . $xs_class . ' ' 
    . $sm_class . ' '
    . $md_class . ' '
    . $lg_class . ' ';

$id        = ( $id        != ''     ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class     = ( $class     != ''     ) ? esc_attr( $class ) . $grid_classes : $grid_classes;
$style     = ( $style     != ''     ) ? 'style="' . $style . '"' : '';

$atts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style
) );

$output = "<div {$id} class=\"{$class}\" {$style}>"
            
          . $content . '</div>';

echo $output;

?>
