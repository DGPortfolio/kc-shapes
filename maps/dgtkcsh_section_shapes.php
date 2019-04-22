<?php

function King_Composer_DGTKC_Shapes() {

	if ( function_exists( 'kc_add_map' ) ) {

		$element_name         =  __( 'DGTheme Shape', 'dgtkcsh' );
		$element_description  =  __( 'Add a shape to section', 'dgtkcsh' );
		$element_category     =  'DGTheme';
		$element_icon         =  'dgt_kc_icon';
		$shortcode_syntax     =  'dgtkcsh_shapes';
		// $live_editor_path        =  '';
		$tab_name             =  __( 'General Options', 'dgtkcsh' );

		kc_add_map( array(

			$shortcode_syntax  =>  array(

				'name'          =>  $element_name,
				'description'   =>  $element_description,
				'category'	    =>  $element_category,
				'icon'		    =>  $element_icon,
				// 'live_editor'   =>  $live_editor_path,
				'is_container'  =>  FALSE,
				'nested'        =>  FALSE,
				'system_only'   =>  FALSE,
				'admin_label'   =>  FALSE,
				'priority'      =>  10,
				'params'        =>  array(

					$tab_name  =>  array(

						array(
							'label'        =>  __( 'Shape height', 'dgtkcsh' ),
							'name'         =>  'design',
							'type'         =>  'css',
							'value'        =>  '',
							'options'      =>  array( array(

								'screens'  =>  'any, 1024, 999, 767, 479',

								'style'  =>  array(
									array( 'property' => 'height', 'label' => __( 'Shape height', 'dgtkcsh' ) )
								)

							))
						),
						array(
							'label'        =>  __( 'Force full width?', 'dgtkcsh' ),
							'description'  =>  __( 'This option will force full with for shape if you can not use "Stretch all content & wrapper" option in section settings.', 'dgtkcsh' ),
							'name'         =>  'fullwidth',
							'type'         =>  'toggle',
							'value'        =>  '',
						),
						array(
							'label'        =>  __( 'Shape color', 'dgtkcsh' ),
							'admin_label'  =>  TRUE,
							'name'         =>  'color',
							'type'         =>  'color_picker',
							'value'        =>  '#ffffff'
						),
						array(
							'label'        =>  __( 'Shape position', 'dgtkcsh' ),
							'name'         =>  'position',
							'type'         =>  'select',
							'value'        =>  '',
							'options'      =>  array(
								'top'    => 'Top',
								'bottom' => 'Bottom'
							)
						),
						array(
							'label'        =>  __( 'Shape points', 'dgtkcsh' ),
							'admin_label'  =>  FALSE,
							'name'         =>  'shape_points',
							'type'         =>  'group',
							'options'      =>  array( 'add_text' => __( 'Add new point', 'dgtkcsh' ) ),
							'value'        =>  base64_encode( json_encode( array(
								"1" => array(
									"width"  => "0",
									"height" => "0",
								),
								"2" => array(
									"width"  => "50",
									"height" => "50",
								),
								"3" => array(
									"width"  => "100",
									"height" => "0",
								),
							))),
							'params' => array(

								array(
									'label'        =>  __( 'Width', 'dgtkcsh' ),
									'description'  =>  __( 'The percentage of the screen width', 'dgtkcsh' ),
									'admin_label'  =>  TRUE,
									'type'         =>  'number_slider',
									'name'         =>  'width',
									'value'        =>  '50',
									'options'      =>  array(
										'min'         =>  0,
										'max'         =>  100,
										'show_input'  =>  TRUE,
									)
								),
								array(
									'label'        =>  __( 'Height', 'dgtkcsh' ),
									'description'  =>  __( 'The percentage of the shape height', 'dgtkcsh' ),
									'type'         =>  'number_slider',
									'name'         =>  'height',
									'value'        =>  '50',
									'options'      =>   array(
										'min'         =>  0,
										'max'         =>  100,
										'show_input'  =>  TRUE,
									)
								)

							)
						)
					)
				)
			)
		));
	}
}
add_action('init', 'King_Composer_DGTKC_Shapes', 99);