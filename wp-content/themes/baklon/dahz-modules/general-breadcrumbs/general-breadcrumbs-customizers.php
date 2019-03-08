<?php

if ( !class_exists( 'Dahz_Framework_Modules_General_Breadcrumbs_Customizer' ) ) {

	Class Dahz_Framework_Modules_General_Breadcrumbs_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer() {
			$dv_field = array();

			/**
			 * section general_breadcrumbs
			 * add field breadcrumbs_post
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'switch',
				'settings'	=> 'on_post',
				'label'		=> __( 'Breadcrumbs on Post', 'baklon' ),
				'default'	=> 'on',
				'choices'	=> array(
					'on'	=> __( 'On', 'baklon' ),
					'off'	=> __( 'Off', 'baklon' )
				)
			);

			/**
			 * section general_breadcrumbs
			 * add field breadcrumbs_page
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'switch',
				'settings'	=> 'on_page',
				'label'		=> __( 'Breadcrumbs on Page', 'baklon' ),
				'default'	=> 'on',
				'choices'	=> array(
					'on'	=> __( 'On', 'baklon' ),
					'off'	=> __( 'Off', 'baklon' )
				)
			);

			/**
			 * section general_breadcrumbs
			 * add field breadcrumbs_portfolio
			 */
			if ( class_exists( 'DahzExtender_Portfolios' ) ) {
				$dv_field[] = array(
					'priority'	=> 10,
					'type'		=> 'switch',
					'settings'	=> 'on_portfolio',
					'label'		=> __( 'Breadcrumbs on Portfolio', 'baklon' ),
					'default'	=> 'on',
					'choices'	=> array(
						'on'	=> __( 'On', 'baklon' ),
						'off'	=> __( 'Off', 'baklon' )
					)
				);
			}

			/**
			 * section general_breadcrumbs
			 * add field breadcrumbs_product
			 */
			if ( class_exists( 'WooCommerce' ) ) {
				$dv_field[] = array(
					'priority'	=> 10,
					'type'		=> 'switch',
					'settings'	=> 'on_product',
					'label'		=> __( 'Breadcrumbs on Woocommerce', 'baklon' ),
					'default'	=> 'on',
					'choices'	=> array(
						'on'	=> __( 'On', 'baklon' ),
						'off'	=> __( 'Off', 'baklon' )
					)
				);
			}

			/**
			 * section general_breadcrumbs
			 * add field breadcrumbs_size
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'select',
				'settings'	=> 'size',
				'label'		=> __( 'Breadcrumbs Size', 'baklon' ),
				'default'	=> 'default',
				'choices'	=> array(
					''				=> esc_attr__( 'Default', 'baklon' ),
					'uk-text-small'	=> esc_attr__( 'Small', 'baklon' ),
					'uk-text-large'	=> esc_attr__( 'Large', 'baklon' )
				)
			);

			/**
			 * section general_breadcrumbs
			 * add field general_breadcrumbs_uppercase
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'switch',
				'settings'	=> 'enable_uppercase',
				'label'		=> __( 'Enable Uppercase Breadcrumbs', 'baklon' ),
				'default'	=> 'off',
				'choices'	=> array(
					'on'	=> __( 'On', 'baklon' ),
					'off'	=> __( 'Off', 'baklon' )
				)
			);

			$img_url = get_template_directory_uri() . '/assets/images/customizer/general/';

			return $dv_field;
		}

	}

}