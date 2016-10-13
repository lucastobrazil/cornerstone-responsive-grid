<?php

/**
 * Element Controls
 */

return array(
	'elements' => array(
		'type'    => 'sortable',
        'ui' => array(
			'title'   => __( 'Add Grid Items', 'si-custom-elements' ),
			'tooltip' =>__( 'Add a new grid item to your grid..', 'si-custom-elements' ),
		),
        'options' => array(
            'element' => 'cs-responsive-grid-item',
            'newTitle' => __( 'Item %s', 'si-custom-elements' ),
            'floor'    => 2
        ),
        'context' => 'content',
        'suggest' => array(
            array( 
                'title' => __( 'Grid Item 1', 'si-custom-elements' ),
                'normal_class' => __( 'cols--2', 'si-custom-elements' ),
                'sm_class' => __( 's-cols--full', 'si-custom-elements' ),  
            ),
            array( 
                'title' => __( 'Grid Item 2', 'si-custom-elements' ),
                'normal_class' => __( 'cols--2', 'si-custom-elements' ),
                'sm_class' => __( 's-cols--full', 'si-custom-elements' ),    
            ),
        )
	),
    'h_align' => array(
		'type'    => 'select',
        'ui' => array(
			'title'   => __( 'Horizontal Item Alignment', 'si-custom-elements' ),
            'tooltip' =>__( 'Applies to the alignment of the item itself, not text align', 'si-custom-elements' ),
		),
        'options' => array(
			'choices' => array(
				array( 'value' => 'align--left',   'label' => __( 'Left', 'si-custom-elements' ) ),
                array( 'value' => 'align--center',   'label' => __( 'Center', 'si-custom-elements' ) ),
				array( 'value' => 'align--right', 'label' => __( 'Right', 'si-custom-elements' ) )
	        )
        )
	),
    'v_align' => array(
		'type'    => 'select',
        'ui' => array(
			'title'   => __( 'Vertical Item Alignment', 'si-custom-elements' ),
		),
        'options' => array(
			'choices' => array(
				array( 'value' => 'valign--top',   'label' => __( 'Top', 'si-custom-elements' ) ),
                array( 'value' => 'valign--center',   'label' => __( 'Center', 'si-custom-elements' ) ),
				array( 'value' => 'valign--bottom', 'label' => __( 'Bottom', 'si-custom-elements' ) ),
                array( 'value' => 'valign--baseline', 'label' => __( 'Baseline', 'si-custom-elements' ) )
	        )
        )
	),
    'no_gutters' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'No Gutters/ Padding', 'si-custom-elements' ),
			'tooltip' =>__( 'You will still get the grid, but with no spacing', 'si-custom-elements' ),
		)
	),

);