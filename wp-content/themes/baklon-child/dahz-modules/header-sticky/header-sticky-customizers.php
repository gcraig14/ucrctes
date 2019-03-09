<?php

if( !class_exists( 'Dahz_Framework_Header_Sticky_Customizer' ) ){

	Class Dahz_Framework_Header_Sticky_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer(){

			$dv_field = array();
			//sticky_header
			$transport = array(
				'selector' 		  => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);

			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 1,
				'settings'	=> 'custom_title_element_to_sticky',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Desktop', 'baklon' ) .'</div>',
			);
			
			$dv_field[] = array(
				'type'        => 'multicheck',
				'settings'    => 'element_to_sticky',
				'label'       => esc_html__( 'Choose Element to Sticky', 'baklon' ),
				'description' => esc_html__('Select area to sticky', 'baklon' ),
				'default'     => array( 'header-section2', 'header-mobile-section2' ),
				'priority'    => 2,
				'choices'     => array(
					'1'       => esc_attr__( 'Header Section 1', 'baklon' ),
					'2'       => esc_attr__( 'Header Section 2', 'baklon' ),
					'3'       => esc_attr__( 'Header Section 3', 'baklon' ),
				),
				'partial_refresh' => array(
					'sticky_header_element_to_sticky' => $transport
				)
			);
			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 3,
				'settings'	=> 'custom_title_mobile_element_to_sticky',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Mobile', 'baklon' ) .'</div>',
			);
			
			$dv_field[] = array(
				'type'        	=> 'multicheck',
				'settings'    	=> 'mobile_element_to_sticky',
				'label'       	=> esc_html__( 'Choose Element to Sticky', 'baklon' ),
				'description' 	=> esc_html__('Select area to sticky', 'baklon' ),
				'default'     	=> array( 'header-section2', 'header-mobile-section2' ),
				'priority'    	=> 4,
				'choices'     	=> array(
					'1' 		=> esc_attr__( 'Mobile Section 1', 'baklon' ),
					'2' 		=> esc_attr__( 'Mobile Section 2', 'baklon' ),
					'3' 		=> esc_attr__( 'Mobile Section 3', 'baklon' ),
				),
				'partial_refresh' => array(
					'sticky_header_mobile_element_to_sticky' => $transport
				)
			);
			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 5,
				'settings'	=> 'custom_title_shadow',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Shadow', 'baklon' ) .'</div>',
			);
			
			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'box_shadow',
				'priority'	=> 6,
				'label'		=> esc_html__( 'Sticky Box Shadow', 'baklon' ),
				'default'	=> '',
				'choices'	=> array(
					''						=> __( 'None', 'baklon' ),
					'uk-box-shadow-small'	=> __( 'Small', 'baklon' ),
					'uk-box-shadow-medium'	=> __( 'Medium', 'baklon' ),
					'uk-box-shadow-large'	=> __( 'Large', 'baklon' ),
					'uk-box-shadow-xlarge'	=> __( 'Extra Large', 'baklon' ),
				),
			);

			return $dv_field;

		}

	}

}

if( !class_exists( 'Dahz_Framework_Logo_Header_Sticky_Customizer' ) ){

	Class Dahz_Framework_Logo_Header_Sticky_Customizer extends Dahz_Framework_Customizer{
		
		public function __construct(){
			
			$transport = array(
				'selector' 		  => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);
			
			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 78,
				'settings'	=> 'custom_title_header_sticky_logo_normal',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Sticky Logo', 'baklon' ) .'</div>',
			);
			
			$dv_field[] = array(
				'type'        => 'image',
				'settings'    => 'header_sticky_logo_normal',
				'label'       => esc_html__( 'Upload Logo Sticky', 'baklon' ),
				'description' => esc_html__('Upload custom logo.', 'baklon' ),
				'default'     => get_template_directory_uri() . '/assets/images/logo/default-logo.svg',
				'priority'    => 79,
				'partial_refresh' => array(
					'logo_and_site_identity_sticky_header_logo_normal' => $transport
				)
			);

			$dv_field[] = array(
				'type'        => 'image',
				'settings'    => 'header_sticky_logo_retina',
				'label'       => esc_html__( 'Upload Retina Logo Sticky', 'baklon' ),
				'description' => esc_html__('Upload custom retina logo.', 'baklon' ),
				'default'     => get_template_directory_uri() . '/assets/images/logo/default-logo.svg',
				'priority'    => 80,
				'partial_refresh' => array(
					'logo_and_site_identity_sticky_header_logo_retina' => $transport
				)
			);
			
			// section spacing padding top
			$dv_field[]	= array(
				'type'		=> 'slider',
				'settings'	=> 'header_sticky_logo_retina_padding_top',
				'label'		=> esc_html__( 'Sticky Padding Top', 'baklon' ),
				'priority'	=> 80,
				'default'	=> 10,
				'choices'	=> array(
								'min'  => '0',
								'max'  => '100',
								'step' => '1',
							),
			);
			// section spacing padding bottom
			$dv_field[]	= array(
				'type'		=> 'slider',
				'settings'	=> 'header_sticky_logo_retina_padding_bottom',
				'label'		=> esc_html__( 'Sticky Padding Bottom', 'baklon' ),
				'priority'	=> 80,
				'default'	=> 10,
				'choices'	=> array(
								'min'  => '0',
								'max'  => '100',
								'step' => '1',
							),
			);
			
			$this->dahz_framework_add_field_customizer( 'logo_and_site_identity', $dv_field );
			
		}
		
	}
	
}

new Dahz_Framework_Logo_Header_Sticky_Customizer();