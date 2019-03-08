<?php
if( !class_exists( 'Dahz_Framework_Header_Button_Customizer' ) ){

	Class Dahz_Framework_Header_Button_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer(){
			
			$transport = array(
				'selector' 		  => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);

			$dv_field = array();

			/**
			 * section color_button
			 * add field button_solid_color_bg
			 */
			$dv_field[] = array(
				'type'      => 'text',
				'settings'  => 'text',
				'label'     => __( 'Button Text', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type'      => 'text',
				'settings'  => 'link',
				'label'     => __( 'Button Link', 'baklon' ),
			);

			/**
			 * section color_button
			 * add field button_solid_color_text
			 */
			$dv_field[] = array(
				'type'      => 'multicolor',
				'settings'  => 'text_color',
				'label'     => __( 'Text Color', 'baklon' ),
				'transport' => 'postMessage',
				'choices'   => array(
					'regular' => esc_attr__( 'Regular', 'baklon' ),
					'hover'   => esc_attr__( 'Hover', 'baklon' ),
				),
				'default'   => array(
					'regular' => '#ffffff',
					'hover'   => '#ffffff',
				),
			);
			$dv_field[] = array(
				'type'      => 'multicolor',
				'settings'  => 'background_color',
				'label'     => __( 'Background Color', 'baklon' ),
				'transport' => 'postMessage',
				'choices'   => array(
					'regular' => esc_attr__( 'Regular', 'baklon' ),
					'hover'   => esc_attr__( 'Hover', 'baklon' ),
				),
				'default'   => array(
					'regular' => '#ffffff',
					'hover'   => '#ffffff',
				),
			);

			$dv_field[] = array(
				'type'     	=> 'select',
				'settings' 	=> 'target',
				'label'    	=> esc_html__( 'Button Target', 'baklon' ),
				'priority' 	=> 11,
				'default'	=> '_blank',
				'choices'  	=> array( 
					'_self' => __( 'Same Window', 'baklon' ),
					'_blank'=> __( 'New Window', 'baklon' ),
				),
			);

			return $dv_field;

		}

	}

}