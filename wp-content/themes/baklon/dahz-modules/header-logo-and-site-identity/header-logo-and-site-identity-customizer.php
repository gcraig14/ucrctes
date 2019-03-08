<?php

if( !class_exists( 'Dahz_Framework_Header_Logo_And_Site_Identity_Customizer' ) ){

	Class Dahz_Framework_Header_Logo_And_Site_Identity_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'is_header_fullwidth',
				'label'       => esc_html__( 'Fullwidth Header', 'baklon' ),
				'default'     => '0',
				'priority'    => 11,
			);
			
			$dv_field[] = array(
				'type'        => 'color',
				'settings'    => 'theme_color',
				'label'       => esc_html__( 'Theme Color', 'baklon' ),
				'description' => esc_html__( 'Select your theme color. This setting ONLY works on mobile browser.', 'baklon' ),
				'default'     => '#f8860b',
				'priority'    => 11,
				'choices'     => array(
					'alpha' => true,
				),
			);
			
			$dv_field[] = array(
				'type'     => 'slider',
				'settings' => 'logo_padding_top',
				'label'    => esc_html__( 'Logo Padding Top', 'baklon' ),
				'default'  => '10',
				'priority' => 13,
				'choices'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),
			);
			$dv_field[] = array(
				'type'     => 'slider',
				'settings' => 'logo_padding_bottom',
				'label'    => esc_html__( 'Logo Padding Bottom', 'baklon' ),
				'default'  => '10',
				'priority' => 13,
				'choices'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),
			);

			return $dv_field;

		}

	}

}