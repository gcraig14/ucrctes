<?php

if ( !class_exists( 'Dahz_Framework_Metabox_Portfolio' ) ) {

	Class Dahz_Framework_Metabox_Portfolio {

		public function __construct() {

			add_action( 'dahz_framework_register_metabox', array( $this, 'dahz_framework_register_metabox_portfolio' ) );

			add_action( 'dahz_framework_metabox_dahz_meta_portfolio', array( $this, 'dahz_framework_register_panel_portfolio_metabox_header' ), 8 );

			add_action( 'dahz_framework_metabox_dahz_meta_portfolio', array( $this, 'dahz_framework_register_panel_portfolio_metabox_content' ), 12 );

			add_action( 'dahz_framework_metabox_dahz_meta_portfolio', array( $this, 'dahz_framework_register_panel_portfolio_metabox_footer' ), 12 );

		}

		/**
		 * register metabox section on post type portfolio
		 *
		 * @author Dahz - KW
		 * @since 1.0.0
		 * @param -
		 * @return -
		 */
		public function dahz_framework_register_metabox_portfolio() {

			dahz_framework_register_metabox(
				'dahz_meta_portfolio',
				array(
					'title'		=> esc_html__( 'Dahz Metabox - Portfolio', 'baklon' ),
					'post_type'	=> 'portfolio',
					'priority'	=> 'default',
					'context'	=> 'normal'
				)
			);
		}

		/**
		 * register metabox panel header on post type portfolio
		 *
		 * @author Dahz - KW
		 * @since 1.0.0
		 * @param -
		 * @return -
		 */
		public function dahz_framework_register_panel_portfolio_metabox_header( $dahz_meta ) {

			$dahz_meta->dahz_framework_metabox_add_section( 'header-portfolio', esc_html__( 'Header', 'baklon' ) );

			do_action( 'dahz_framework_metabox_before_header_dahz_meta_portfolio', $dahz_meta );

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'header_transparent_skin',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Header Transparent Skin', 'baklon' ),
					'default'		=> 'inherit',
					'description'	=> esc_html__('According to the color scheme you choose the text colors will be changed to make it more readable. If you choose theme default the displaying will correspond to the theme options settings', 'baklon' ),
					'options'		=> array(
										'inherit'			=> esc_html__( 'Inherit', 'baklon' ),
										'no-transparency'	=> esc_html__( 'No Transparency', 'baklon' ),
										'transparent-light'	=> esc_html__( 'Light', 'baklon' ),
										'transparent-dark'	=> esc_html__( 'Dark', 'baklon' ),
									)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'header_preset_saved',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Header Layout', 'baklon' ),
					'default'		=> 'inherit',
					'description'	=> esc_html__('Select your header preset & skin, it based from header builder you have been created before', 'baklon' ),
					'options'		=> dahz_framework_get_builder_presets_option('header')
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'remove_shadow_sticky',
					'type'			=> 'switcher',
					'title'			=> esc_html__( 'Remove Shadow Sticky', 'baklon' ),
					'description'	=> esc_html__( 'Remove shadow from header sticky when activated', 'baklon' ),
					'default'		=> false,
					'dependencies'	=> array(
						array(
							'setting'	=>	'sticky_header_skin',
							'operator'	=>	'==',
							'value'		=>	'on',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'overide_main_menu',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Custom Menu', 'baklon' ),
					'description'	=> esc_html__( 'Overide Main menu', 'baklon' ),
					'options'		=> dahz_framework_get_all_menu()
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'sticky_header_skin',
					'type'			=> 'switcher',
					'default'		=> false,
					'title'			=> esc_html__( 'Enable Transparent Sticky Header', 'baklon' ),
					'description'	=> esc_html__( 'Enable transparent background on header sticky when activated', 'baklon' )
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'before_header',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Before Header', 'baklon' ),
					'description'	=> esc_html__( 'Display a custom area before & after header area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-portfolio',
				array(
					'id'			=> 'after_header',
					'type'			=> 'select',
					'title'			=> esc_html__( 'After Header', 'baklon' ),
					'description'	=> esc_html__( 'Display a custom area before & after header area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

		}

		/**
		 * register metabox panel page title on post type portfolio
		 *
		 * @author Dahz - KW
		 * @since 1.0.0
		 * @param -
		 * @return -
		 */
		public function dahz_framework_register_panel_portfolio_metabox_content( $dahz_meta ) {

			$dahz_meta->dahz_framework_metabox_add_section( 'content-portfolio', esc_html__( 'Content', 'baklon' ) );

			$dahz_meta->dahz_framework_metabox_add_field(
				'content-portfolio',
				array(
					'id'			=> 'disable_portfolio_details',
					'type'			=> 'switcher',
					'title'			=> esc_html__( 'Disable Portfolio Details', 'baklon' ),
					'description'	=> esc_html__( 'Override the portfolio visibility', 'baklon' ),
					'default'		=> false
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'content-portfolio',
				array(
					'id'			=> 'portfolio_details_layout',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Portfolio Details Layout', 'baklon' ),
					'description'	=> esc_html__('Specify the layout template for all the portfolio posts', 'baklon' ),
					'options'		=> array(
										'left'		=> esc_html__( 'Details on Left', 'baklon' ),
										'right'		=> esc_html__( 'Details on Right', 'baklon' ),
										'bottom'	=> esc_html__( 'Details on Bottom', 'baklon' ),
										'top'		=> esc_html__( 'Details on Top', 'baklon' )
									),
					'default'		=> 'details_on_left',
					'dependencies'	=> array(
						array(
							'setting'	=>	'disable_portfolio_details',
							'operator'	=>	'==',
							'value'		=>	'off',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'content-portfolio',
				array(
					'id'			=> 'sticky_sidebar',
					'type'			=> 'switcher',
					'title'			=> esc_html__( 'Sticky Sidebar', 'baklon' ),
					'description'	=> esc_html__( 'Activate to have a sticky sidebar', 'baklon' ),
					'default'		=> false,
					'dependencies'	=> array(
						array(
							'setting'	=>	'portfolio_details_layout',
							'operator'	=>	'!==',
							'value'		=>	'top',
						),
						array(
							'setting'	=>	'portfolio_details_layout',
							'operator'	=>	'!==',
							'value'		=>	'bottom',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'content-portfolio',
				array(
					'id'			=> 'description_title',
					'type'			=> 'textfield',
					'title'			=> esc_html__( 'Description Title', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'disable_portfolio_details',
							'operator'	=>	'==',
							'value'		=>	'off',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'content-portfolio',
				array(
					'id'			=> 'description_content',
					'type'			=> 'textarea',
					'title'			=> esc_html__( 'Description', 'baklon' ),
					'description'	=> esc_html__( 'Insert portfolio description', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'disable_portfolio_details',
							'operator'	=>	'==',
							'value'		=>	'off',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'content-portfolio',
				array(
					'id'			=> 'portfolio_details',
					'type'			=> 'repeater',
					'title'			=> esc_html__( 'Details', 'baklon' ),
					'options'		=> array(
						array(
							'id' 		=> 'item_title',
							'type'		=> 'textfield',
							'title'		=> __( 'Item Title', 'baklon' ),
							'default'	=> ''
						),
						array(
							'id' 		=> 'item_text',
							'type'		=> 'textfield',
							'title'		=> __( 'Item Text', 'baklon' ),
							'default'	=> ''
						),
						array(
							'id' 		=> 'item_url',
							'type'		=> 'textfield',
							'title'		=> __( 'Enter Full URL for Item Text Link', 'baklon' ),
							'default'	=> ''
						),
					),
					'dependencies'	=> array(
						array(
							'setting'	=>	'disable_portfolio_details',
							'operator'	=>	'==',
							'value'		=>	'off',
						)
					)
				)
			);
		}

		/**
		 * register metabox panel footer on post type portfolio
		 *
		 * @author Dahz - KW
		 * @since 1.0.0
		 * @param -
		 * @return -
		 */
		public function dahz_framework_register_panel_portfolio_metabox_footer( $dahz_meta ) {

			$dahz_meta->dahz_framework_metabox_add_section( 'footer-portfolio', esc_html__( 'Footer', 'baklon' ) );

			do_action( 'dahz_framework_metabox_before_footer_dahz_meta_portfolio', $dahz_meta );

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-portfolio',
				array(
					'id'			=> 'footer_preset_saved',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Footer Layout', 'baklon' ),
					'default'		=> 'inherit',
					'description'	=> esc_html__('Select your footer preset & skin, it based from footer builder you have been created before', 'baklon' ),
					'options'		=> dahz_framework_get_builder_presets_option('footer')
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-portfolio',
				array(
					'id'			=> 'before_footer',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Before Footer', 'baklon' ),
					'description'	=> esc_html__( 'Display a custom area before footer area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-portfolio',
				array(
					'id'			=> 'after_footer',
					'type'			=> 'select',
					'title'			=> esc_html__( 'After Footer', 'baklon' ),
					'description'	=> esc_html__( 'Display a custom area after footer area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

		}

	}

	new Dahz_Framework_Metabox_Portfolio();

}
