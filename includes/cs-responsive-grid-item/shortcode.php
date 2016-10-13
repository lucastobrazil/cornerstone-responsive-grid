<?php

/**
 * Shortcode handler
 */
$id        = ( $id        != ''     ) ? esc_attr( $id ) : '';
$style     = ( $style     != ''     ) ? $style : '';

$title        = ( $title        != ''     ) ? $title : 'Set a Title';
$normal_class = ( $normal_class != ''     ) ? $normal_class : '';
$xs_class     = ( $xs_class     != ''     ) ? $xs_class : '';
$sm_class     = ( $sm_class     != ''     ) ? $sm_class : '';
$md_class     = ( $md_class     != ''     ) ? $md_class : '';
$lg_class     = ( $lg_class     != ''     ) ? $lg_class : '';

// Combine grid classes into one string
$grid_item_classes = implode(' ', [
    'grid-item', 
    $normal_class, 
    $xs_class, 
    $sm_class, 
    $md_class, 
    $lg_class,
    esc_attr( $class )
]);

$atts = cs_atts( array(
	'id' => $id,
	'class' => $grid_item_classes,
	'style' => $style
) );

$output = "<div {$atts}>"
            
          . $content . '</div>';

echo $output;

?>
