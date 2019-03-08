<?php
if( !class_exists( 'Dahz_Framework_Header_Myaccount_Customizer' ) ){

	Class Dahz_Framework_Header_Myaccount_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			$transport = array(
				'selector' 		  => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);

			$dv_field[] = array(
				'type'        => 'radio-image',
				'settings'    => 'style',
				'label'       => esc_html__( 'My Account Style', 'baklon' ),
				'description' => esc_html__('Select your account type displayed on header', 'baklon' ),
				'default'     => 'icon_text',
				'priority'    => 11,
				'choices'     => array(
					'text'         	=> get_template_directory_uri() . '/assets/images/customizer/df_account-style-1.svg',
					'icon' 			=> get_template_directory_uri() . '/assets/images/customizer/df_account-style-2.svg',
					'icon_text'  	=> get_template_directory_uri() . '/assets/images/customizer/df_account-style-3.svg',
					'text_icon'  	=> get_template_directory_uri() . '/assets/images/customizer/df_account-style-4.svg',
				),
				'partial_refresh' => array(
					'header_myaccount_style' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'checkbox',
				'settings'  => 'enable_uppercase',
				'label'     => esc_html__( 'Uppercase Text', 'baklon' ),
				'default'   => '1',
				'priority'  => 11,
				'partial_refresh' => array(
					'header_myaccount_enable_uppercase' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'show_login_register',
				'label'    => esc_html__( 'Show Login Register', 'baklon' ),
				'default'  => '1',
				'priority' => 11,
				'partial_refresh' => array(
					'header_myaccount_show_login_register' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'desktop_font_size',
				'label'    => esc_html__( 'Desktop Font Size', 'baklon' ),
				'description'=> __( 'Set your text size(px) . Default is 18px', 'baklon' ),
				'priority' => 11,
				'default'  => '18px',
				'partial_refresh' => array(
					'header_myaccount_desktop_font_size' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'text',
				'settings' => 'desktop_icon_ratio',
				'label'    => esc_html__( 'Desktop Icon Ratio', 'baklon' ),
				'description'=> __( 'Enter a size ratio, if you want the icon to appear larger than the default size, for example 1.5 or 2 to double the size', 'baklon' ),
				'priority' => 11,
				'default'  => '1',
				'partial_refresh' => array(
					'header_myaccount_desktop_icon_ratio' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'mobile_font_size',
				'label'    => esc_html__( 'Mobile Font Size', 'baklon' ),
				'description'=> __( 'Set your text size(px) . Default is 18px', 'baklon' ),
				'priority' => 11,
				'default'  => '18px',
				'partial_refresh' => array(
					'header_myaccount_mobile_font_size' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'text',
				'settings' => 'mobile_icon_ratio',
				'description'=> __( 'Enter a size ratio, if you want the icon to appear larger than the default size, for example 1.5 or 2 to double the size', 'baklon' ),
				'label'    => esc_html__( 'Mobile Icon Ratio', 'baklon' ),
				'priority' => 11,
				'default'  => '1',
				'partial_refresh' => array(
					'header_myaccount_mobile_icon_ratio' => $transport
				)
			);

			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'login_style',
				'label'       => esc_html__( 'My Account Login Style', 'baklon' ),
				'description' => esc_html__('Select type of login style do you want to use', 'baklon' ),
				'default'     => 'as-dropdown',
				'priority'    => 11,
				'choices'     => array(
					'as-link'     => __( 'Link', 'baklon' ),
					'as-dropdown' => __( 'Dropdown', 'baklon' ),
					'as-popup'    => __( 'Modal', 'baklon' ),
				),
				'partial_refresh' => array(
					'header_myaccount_login_style' => $transport
				)
			);

			return $dv_field;

		}

	}

}
