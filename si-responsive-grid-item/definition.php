<?php

/**
    Element Name: SI Responsive Grid Item
    Description: Individual Grid Items for the SI Responsive Grid
    Author: lucastobrazil
    Author URI: http://lucastobrazil.github.io/
    Version: 0.1.0
*/
class SI_Responsive_Grid_item {

	public function ui() {
        return array(
            'name' => 'si-responsive-grid-item',
            'title'       => __( 'SI Responsive Grid Item', 'si-responsive-grid-item' ),
            'section'     => 'content',
            'description' => __( 'Responsive grid item description.', 'si-responsive-grid-item' ),
            'supports'    => array( 'id', 'class', 'style', 'text_align' ),
        );
	}

    public function flags() {
		return array(
			'child' => true
		);
	}

	public function update_build_shortcode_atts( $atts ) {
		return $atts;
	}
}