<?php

if ( !class_exists( 'Dahz_Framework_Header_Dropdown_Customizer' ) ) {

	Class Dahz_Framework_Header_Dropdown_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer() {

			$dv_field = array();

			$transport = array(
				'selector'        => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);

			$dv_field[] = array(
				'type'        => 'radio-image',
				'settings'    => 'style',
				'label'       => esc_html__( 'Dropdown Style', 'baklon' ),
				'description' => esc_html__('select the hover type of your dropdown', 'baklon' ),
				'default'     => 'style-2',
				'priority'    => 11,
				'choices'     => array(
					'style-1' => get_template_directory_uri() . '/assets/images/customizer/df_dropdown-style-1.svg',
					'style-2' => get_template_directory_uri() . '/assets/images/customizer/df_dropdown-style-2.svg',
					'style-3' => get_template_directory_uri() . '/assets/images/customizer/df_dropdown-style-3.svg',
				),
				'partial_refresh' => array(
					'header_dropdown_style' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'font_size',
				'label'    => esc_html__( 'Dropdown Font Size', 'baklon' ),
				'default'  => '16px',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_font_size' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'enable_uppercase',
				'label'    => esc_html__( 'Enable Uppercase on Menu', 'baklon' ),
				'default'  => '0',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_enable_uppercase' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings' => 'color_normal',
				'label'    => esc_html__( 'Dropdown Menu Color', 'baklon' ),
				'default'  => '#5d5d5d',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_color_normal' => $transport
				)
			);
			$dv_field[] = array(
				'type'      => 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings' => 'color_hover',
				'label'    => esc_html__( 'Dropdown Hover Color', 'baklon' ),
				'default'  => '#000000',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_color_hover' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings' => 'background',
				'label'    => esc_html__( 'Dropdown Background Color', 'baklon' ),
				'default'  => '#ffffff',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_background' => $transport
				)
			);

			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'box_shadow',
				'priority'	=> 11,
				'label'		=> esc_html__( 'Dropdown Box Shadow', 'baklon' ),
				'default'	=> '',
				'choices'	=> array(
					''                     => __( 'None', 'baklon' ),
					'de-box-shadow-small'  => __( 'Small', 'baklon' ),
					'de-box-shadow-medium' => __( 'Medium', 'baklon' ),
					'de-box-shadow-large'  => __( 'Large', 'baklon' ),
					'de-box-shadow-xlarge' => __( 'Extra Large', 'baklon' ),
				),
			);

			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'megamenu_title_font_size',
				'label'    => esc_html__( 'Mega menu title Font Size', 'baklon' ),
				'default'  => '16px',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_font_size' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'megamenu_title_enable_uppercase',
				'label'    => esc_html__( 'Enable Uppercase on Primary Menu', 'baklon' ),
				'default'  => '0',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_enable_uppercase' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings' => 'megamenu_title_color',
				'label'    => esc_html__( 'Megamenu Title Color', 'baklon' ),
				'default'  => '#5d5d5d',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_color_normal' => $transport
				)
			);
			$dv_field[] = array(
				'type'      => 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings' => 'megamenu_title_hover_color',
				'label'    => esc_html__( 'Megamenu Title Hover Color', 'baklon' ),
				'default'  => '#000000',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_color_hover' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'color',
				'choices'   => array(
					'alpha' => true,
				),
				'settings' => 'megamenu_title_divider_color',
				'label'    => esc_html__( 'Megamenu Title Divider Color', 'baklon' ),
				'default'  => '#ffffff',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_background' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'megamenu_title_enable_divider',
				'label'    => esc_html__( 'Enable Divider on Primary Menu', 'baklon' ),
				'default'  => '0',
				'priority' => 11,
				'partial_refresh' => array(
					'header_dropdown_enable_uppercase' => $transport
				)
			);

			return $dv_field;

		}

	}

}