<?php

/*
Plugin Name: Cornerstone Responsive Grid
Plugin URI:
Description: A Cornerstone Element that allows you to make grid items responsive
Author: lucastobrazil
Author URI: http://lucastobrazil.github.io/
Version: 0.1.-

Notes:
-------

// Taken from the Cornerstone documentation
https://community.theme.co/kb/cs-custom-responsive-grid/ 
*/
function loadCSResponsiveGrid() {
	define( 'EXTENSION_PATH', plugin_dir_path( __FILE__ ) );
	define( 'EXTENSION_URL', plugin_dir_url( __FILE__ ) );
	define( 'ELEMENTS_URL', EXTENSION_URL . '/includes/' );

	$elements = array(
		'CS_Responsive_Grid'	=> array(
			'name'		=> 'cs-responsive-grid',
			'directory'		=> 'cs-responsive-grid',
		),
		'CS_Responsive_Grid_Item'	=> array(
			'name'		=> 'cs-responsive-grid-item',
			'directory'		=> 'cs-responsive-grid-item',
		),
	);

	/* Register Elements */
	add_action( 'cornerstone_register_elements', function() use ( $elements ) {
		foreach ($elements as $key => $value) {
			$className = $key;
			$name = $value['name'];
			$directory = $value['directory'];

			/* see cornerstone/includes/utility/api.php */
			cornerstone_register_element( $className, $name, EXTENSION_PATH . 'includes/' . $directory );
		}
	});
	/* Enqueue JS and CSS for Elements */
	add_action( 'wp_enqueue_scripts', function() use ( $elements ) {
		foreach ($elements as $key => $value) {
			$title = $key;
			$name = $value['name'];
			$directory = $value['directory'];

			$cssFilePath = EXTENSION_PATH . 'includes/' . $directory . '/styles/element.css';
			$cssFileUrl = EXTENSION_URL . 'includes/' . $directory . '/styles/element.css';
			$jsFilePath = EXTENSION_PATH . 'includes/' . $directory . '/scripts/element.js';
			$jsFileUrl = EXTENSION_URL . 'includes/' . $directory . '/scripts/element.js';
			
			if(file_exists($cssFilePath)) {
				wp_enqueue_style( $name . '-style', $cssFileUrl, array(), '0.1.0' );	
			}
			if(file_exists($jsFilePath)) {
				wp_enqueue_script( $name . '-script', $jsFileUrl, array(), '0.1.0' );
			}
		}
	});

	add_filter( 'cornerstone_icon_map', 'cs_custom_elements_icon_map' );

	/* Mapping of SVG icon so when you're searching in CS Elements, it has a nice graphic. */
	function cs_custom_elements_icon_map( $icon_map ) {
		$icon_map['cs_custom_elements'] = EXTENSION_URL . '/assets/svg/icons.svg';
		return $icon_map;
	}
}
loadCSResponsiveGrid();
