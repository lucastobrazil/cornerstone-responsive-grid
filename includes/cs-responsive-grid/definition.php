<?php

/**
	Element Name: SI Responsive Grid
	Description: Similar to the Flex Box grid outlined by 
        Philip Walton (https://philipwalton.github.io/solved-by-flexbox/demos/grids/), but modified a bit
	Author: lucastobrazil
	Author URI: http://lucastobrazil.github.io/
	Version: 0.1.0
 */

class CS_Responsive_Grid {

	public function ui() {
        return array(
            'title'       => __( 'CS Responsive Grid', 'cs-responsive-grid' ),
            // 'supports'    => array( 'class', 'style' ),
            // 'renderChild' => true,
        );
	}

    // public function flags() {
	// 	return array(
	// 		'dynamic_child' => true
	// 	);
	// }
}