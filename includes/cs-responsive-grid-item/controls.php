<?php

/**
 * Element Controls
 */



return array(
    'common' => array( 'text_align' ),
    'title' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Name of Item', 'si-custom-elements' ),
            'tooltip' =>__( 'Is not displayed on screen.', 'si-custom-elements' ),
		),
	),
	'content' => array(
		'type'    => 'editor',
        'ui' => array(
			'title'   => __( 'Item Content', 'si-custom-elements' ),
		),
	),
    'normal_class' => array(
		'type'    => 'select',
        'ui' => array(
			'title'   => __( 'Width (all)', 'si-custom-elements' ),
		),
        'options' => array(
			'choices' => array(
				array( 'value' => '',   'label' => __( '(inherit)', 'si-custom-elements' ) ),
                array( 'value' => 'cols--full',   'label' => __( 'Full', 'si-custom-elements' ) ),
				array( 'value' => 'cols--fit', 'label' => __( 'Fit', 'si-custom-elements' ) ),
				array( 'value' => 'cols--hug',  'label' => __( 'Hug', 'si-custom-elements' ) ),
                array( 'value' => 'cols--2',  'label' => __( '1/2', 'si-custom-elements' ) ),
                array( 'value' => 'cols--3',  'label' => __( '1/3', 'si-custom-elements' ) ),
                array( 'value' => 'cols--4',  'label' => __( '1/4', 'si-custom-elements' ) )
	        )
        )
	),
    'xs_class' => array(
		'type'    => 'select',
        'ui' => array(
			'title'   => __( 'Width < XS (400px)', 'si-custom-elements' ),
		),
        'options' => array(
			'choices' => array(
                array( 'value' => '',   'label' => __( '(inherit)', 'si-custom-elements' ) ),
				array( 'value' => 'xs-cols--full',   'label' => __( 'XS Full', 'si-custom-elements' ) ),
				array( 'value' => 'xs-cols--fit', 'label' => __( 'XS Fit', 'si-custom-elements' ) ),
				array( 'value' => 'xs-cols--hug',  'label' => __( 'XS Hug', 'si-custom-elements' ) ),
                array( 'value' => 'xs-cols--2',  'label' => __( 'XS 1/2', 'si-custom-elements' ) ),
                array( 'value' => 'xs-cols--3',  'label' => __( 'XS 1/3', 'si-custom-elements' ) ),
                array( 'value' => 'xs-cols--4',  'label' => __( 'XS 1/4', 'si-custom-elements' ) )
	        )
        )
	),
    'sm_class' => array(
            'type'    => 'select',
            'ui' => array(
                'title'   => __( 'Width < sm (500px)', 'si-custom-elements' ),
            ),
            'options' => array(
                'choices' => array(
                    array( 'value' => '',   'label' => __( '(inherit)', 'si-custom-elements' ) ),
                    array( 'value' => 's-cols--full',   'label' => __( 'SM Full', 'si-custom-elements' ) ),
                    array( 'value' => 's-cols--fit', 'label' => __( 'SM Fit', 'si-custom-elements' ) ),
                    array( 'value' => 's-cols--hug',  'label' => __( 'SM Hug', 'si-custom-elements' ) ),
                    array( 'value' => 's-cols--2',  'label' => __( 'SM 1/2', 'si-custom-elements' ) ),
                    array( 'value' => 's-cols--3',  'label' => __( 'SM 1/3', 'si-custom-elements' ) ),
                    array( 'value' => 's-cols--4',  'label' => __( 'SM 1/4', 'si-custom-elements' ) )
                )
            )
    ),
    'md_class' => array(
            'type'    => 'select',
            'ui' => array(
                'title'   => __( 'Width < md (650px)', 'si-custom-elements' ),
            ),
            'options' => array(
                'choices' => array(
                    array( 'value' => '',   'label' => __( '(inherit)', 'si-custom-elements' ) ),
                    array( 'value' => 'm-cols--full',   'label' => __( 'MD Full', 'si-custom-elements' ) ),
                    array( 'value' => 'm-cols--fit', 'label' => __( 'MD Fit', 'si-custom-elements' ) ),
                    array( 'value' => 'm-cols--hug',  'label' => __( 'MD Hug', 'si-custom-elements' ) ),
                    array( 'value' => 'm-cols--2',  'label' => __( 'MD 1/2', 'si-custom-elements' ) ),
                    array( 'value' => 'm-cols--3',  'label' => __( 'MD 1/3', 'si-custom-elements' ) ),
                    array( 'value' => 'm-cols--4',  'label' => __( 'MD 1/4', 'si-custom-elements' ) )
                )
            )
    ),
    'lg_class' => array(
            'type'    => 'select',
            'ui' => array(
                'title'   => __( 'Width lg (900px)', 'si-custom-elements' ),
            ),
            'options' => array(
                'choices' => array(
                    array( 'value' => '',   'label' => __( '(inherit)', 'si-custom-elements' ) ),
                    array( 'value' => 'l-cols--full',   'label' => __( 'LG Full', 'si-custom-elements' ) ),
                    array( 'value' => 'l-cols--fit', 'label' => __( 'LG Fit', 'si-custom-elements' ) ),
                    array( 'value' => 'l-cols--hug',  'label' => __( 'LG Hug', 'si-custom-elements' ) ),
                    array( 'value' => 'l-cols--2',  'label' => __( 'LG 1/2', 'si-custom-elements' ) ),
                    array( 'value' => 'l-cols--3',  'label' => __( 'LG 1/3', 'si-custom-elements' ) ),
                    array( 'value' => 'l-cols--4',  'label' => __( 'LG 1/4', 'si-custom-elements' ) )
                )
            )
    ),
);