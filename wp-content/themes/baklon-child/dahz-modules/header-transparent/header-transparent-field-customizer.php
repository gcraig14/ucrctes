<?php

if( !class_exists( 'Dahz_Framework_Header_Transparent_Field_Customizers' ) ){

	Class Dahz_Framework_Header_Transparent_Field_Customizers extends Dahz_Framework_Customizer{

		public function __construct(){

			$sections = array(
				'blog_archive',
				'blog_single',
				'blog_template',
				'single_woo',
				'shop_woo',
				'portfolio_archive',
				'portfolio_single',
				'page'
			);
			foreach( $sections as $section ){

				$this->dahz_framework_set_field_header_transparent( $section );

			}
			$this->dahz_framework_header_transparent_logo();

		}

		public function dahz_framework_set_field_header_transparent( $section ){

			$field = $this->dahz_framework_header_transparent_fields( $section );

			$field[] = array(
				'type'     => 'custom',
				'settings' => "custom_title_{$section}_header_transparent",
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__('Header Transparency', 'baklon' ) .'</div>',
				'priority' => 0,
			);

			$this->dahz_framework_add_field_customizer( $section, $field );

		}

		private function dahz_framework_header_transparent_fields( $section = '' ){

			$field = array();

			$field[] = array(
				'type'				=> 'select',
				'settings'			=> 'header_transparency',
				'label'				=> __( 'Header Transparency', 'baklon' ),
				'default'			=> 'normal',
				'priority'			=> 1,
				'choices'   		=> array(
					'no-transparency'	=> __( 'No Transparent', 'baklon' ),
					'transparent-light' => __( 'Light', 'baklon' ),
					'transparent-dark' 	=> __( 'Dark', 'baklon' ),
				),
				'description' 		=> __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			$this->dahz_framework_add_field_customizer( $section, $field );
		}

		private function dahz_framework_header_transparent_logo(){

			$dv_field = array();

			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => 'custom_title_logo_light',
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Light Logo', 'baklon' ).'</div>',
				'priority' => 14,
			);
			$dv_field[] = array(
				'type'     => 'image',
				'settings' => 'logo_light_normal',
				'label'    => esc_html__( 'Upload Logo - Light', 'baklon' ),
				'description'		=> esc_html__( 'Upload your custom logo.', 'baklon' ),
				'default'  => get_template_directory_uri() . '/assets/images/logo/light-logo.svg',
				'priority' => 14,
			);
			$dv_field[] = array(
				'type'     => 'image',
				'settings' => 'logo_light_retina',
				'label'    => esc_html__( 'Upload Retina Logo - Light', 'baklon' ),
				'description'		=> esc_html__( 'Upload your custom retina logo.', 'baklon' ),
				'default'  => get_template_directory_uri() . '/assets/images/logo/light-logo.svg',
				'priority' => 14,
			);
			$dv_field[] = array(
				'type'     => 'image',
				'settings' => 'logo_dark_normal',
				'label'    => esc_html__( 'Upload Logo - Dark', 'baklon' ),
				'description'		=> esc_html__( 'Upload your custom logo.', 'baklon' ),
				'default'  => get_template_directory_uri() . '/assets/images/logo/default-logo.svg',
				'priority' => 15,
			);
			$dv_field[] = array(
				'type'     => 'image',
				'settings' => 'logo_dark_retina',
				'label'    => esc_html__( 'Upload Retina Logo - Dark', 'baklon' ),
				'description'		=> esc_html__( 'Upload your custom retina logo.', 'baklon' ),
				'default'  => get_template_directory_uri() . '/assets/images/logo/default-logo.svg',
				'priority' => 15,
			);

			$this->dahz_framework_add_field_customizer( 'logo_and_site_identity', $dv_field );
		}

	}

	new Dahz_Framework_Header_Transparent_Field_Customizers();

}