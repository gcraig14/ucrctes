<?php
/*
	1. 	class : Dahz_Framework_Modules_Color_Product_Categories_Customizer
*/
if( !class_exists( 'Dahz_Framework_Modules_Color_Product_Categories_Customizer' ) ){

	Class Dahz_Framework_Modules_Color_Product_Categories_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer(){

			$dv_field = array();
			
			$img_url = get_template_directory_uri() . '/assets/images/customizer/woocommerce/';
			
			$dv_field[] = array(
				'type'		=> 'radio-image',
				'priority'	=> 10,
				'settings'	=> 'style',
				'label'		=> __( 'Categories Style', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 'style-1',
				'choices'	=> array(
					'layout-1'	=> $img_url . 'df_catgeories-style-1.svg',
					'layout-2'	=> $img_url . 'df_catgeories-style-2.svg',
					'layout-3'	=> $img_url . 'df_catgeories-style-3.svg' ,
					'layout-4'	=> $img_url . 'df_catgeories-style-4.svg' ,
				)
			);
			
			$dv_field[] = array(
				'type'		=> 'select',
				'priority'	=> 10,
				'settings'	=> 'hover_effect',
				'label'		=> __( 'Hover Effect', 'baklon' ),
				'default'	=> 'zoom',
				'multiple'	=> 1,
				'choices'	=> array(
					'zoom' 					=> __( 'Zoom', 'baklon' ),
					'zoom-glare' 			=> __( 'Zoom Glare', 'baklon' ),
					'push' 					=> __( 'Push', 'baklon' ),
					'push-glare'			=> __( 'Push Glare', 'baklon' ),
					'parallax-tilt'			=> __( 'Parallax Tilt', 'baklon' ),
					'parallax-tilt-glare'	=> __( 'Parallax Tilt Glare', 'baklon' ),
				),
			);
			
			$dv_field[] = array(
				'type'		=> 'select',
				'priority'	=> 10,
				'settings'	=> 'hover_effect',
				'label'		=> __( 'Hover Effect', 'baklon' ),
				'default'	=> 'zoom',
				'multiple'	=> 1,
				'choices'	=> array(
					'zoom' 					=> __( 'Zoom', 'baklon' ),
					'zoom-glare' 			=> __( 'Zoom Glare', 'baklon' ),
					'push' 					=> __( 'Push', 'baklon' ),
					'push-glare'			=> __( 'Push Glare', 'baklon' ),
					'parallax-tilt'			=> __( 'Parallax Tilt', 'baklon' ),
					'parallax-tilt-glare'	=> __( 'Parallax Tilt Glare', 'baklon' ),
				),
			);
			
			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'box_shadow',
				'priority'	=> 10,
				'label'		=> esc_html__( 'Box Shadow', 'baklon' ),
				'default'	=> '',
				'choices'	=> array(
					''						=> __( 'None', 'baklon' ),
					'uk-box-shadow-small'	=> __( 'Small', 'baklon' ),
					'uk-box-shadow-medium'	=> __( 'Medium', 'baklon' ),
					'uk-box-shadow-large'	=> __( 'Large', 'baklon' ),
					'uk-box-shadow-xlarge'	=> __( 'Extra Large', 'baklon' ),
				),
			);
			
			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'hover_box_shadow',
				'priority'	=> 10,
				'label'		=> esc_html__( 'Hover Box Shadow', 'baklon' ),
				'default'	=> '',
				'choices'	=> array(
					''								=> __( 'None', 'baklon' ),
					'uk-box-shadow-hover-small'		=> __( 'Small', 'baklon' ),
					'uk-box-shadow-hover-medium'	=> __( 'Medium', 'baklon' ),
					'uk-box-shadow-hover-large'		=> __( 'Large', 'baklon' ),
					'uk-box-shadow-hover-xlarge'	=> __( 'Extra Large', 'baklon' ),
				),
			);
			
			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'show_total_number_hover',
				'label'    => esc_html__( 'Show Total Number When Hover', 'baklon' ),
				'default'  => '0',
				'priority' => 10,
			);
			
			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'show_mobile',
				'label'    => esc_html__( 'Always Show on Mobile', 'baklon' ),
				'default'  => '0',
				'priority' => 10,
			);
			
			$dv_field[] = array(
				'type'		=> 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings'	=> 'text_color',
				'label'		=> __( 'Text color', 'baklon' ),
				'default'	=> '#67686e',
				'transport'	=> 'postMessage',
			);
			
			$dv_field[] = array(
				'type'		=> 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings'	=> 'color_overlay',
				'label'		=> __( 'Color Overlay', 'baklon' ),
				'default'	=> '#67686e',
				'transport'	=> 'postMessage',
			);
			
			$dv_field[] = array(
				'type'		=> 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings'	=> 'hover_text_color',
				'label'		=> __( 'Hover Text color', 'baklon' ),
				'default'	=> '#67686e',
				'transport'	=> 'postMessage',
			);
						
			$dv_field[] = array(
				'type'		=> 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings'	=> 'hover_border_color',
				'label'		=> __( 'Hover Border Color', 'baklon' ),
				'default'	=> '#67686e',
				'transport'	=> 'postMessage',
			);
			
			$dv_field[] = array(
				'type'		=> 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings'	=> 'hover_color_overlay',
				'label'		=> __( 'Hover Color Overlay', 'baklon' ),
				'default'	=> '#67686e',
				'transport'	=> 'postMessage',
			);
			
			return $dv_field;

		}

	}

}