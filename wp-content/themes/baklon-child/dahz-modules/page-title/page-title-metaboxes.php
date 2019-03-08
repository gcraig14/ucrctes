<?php

if( !class_exists( 'Dahz_Framework_Page_Title_Metaboxes' ) ){


	Class Dahz_Framework_Page_Title_Metaboxes{

		public function __construct(){

			add_action( 'dahz_framework_register_taxonomy_metabox', array( $this, 'dahz_framework_register_page_title_taxonomy_metabox' ) );

			add_action( 'dahz_framework_metabox_dahz_meta_page', array( $this, 'dahz_framework_register_panel_page_metabox_page_title' ), 10 );

			add_action( 'dahz_framework_metabox_dahz_meta_portfolio', array( $this, 'dahz_framework_register_panel_page_metabox_page_title' ), 10 );

			add_action( 'dahz_framework_taxonomy_metabox_portfolio_categories', array( $this,'dahz_framework_page_title_taxonomy_metabox' ) );

			add_action( 'dahz_framework_taxonomy_metabox_category', array( $this,'dahz_framework_page_title_taxonomy_metabox' ) );

			add_action( 'dahz_framework_taxonomy_metabox_product_cat', array( $this,'dahz_framework_page_title_taxonomy_metabox' ) );

			add_action( 'dahz_framework_taxonomy_metabox_brand', array( $this,'dahz_framework_page_title_taxonomy_metabox' ) );

			add_action( 'dahz_framework_taxonomy_metabox_product_tag', array( $this,'dahz_framework_page_title_taxonomy_metabox' ) );

		}

		public function dahz_framework_register_panel_page_metabox_page_title( $dahz_meta ) {

			$dahz_meta->dahz_framework_metabox_add_section( 'page-title',esc_html__('Page Title', 'baklon' ), '',
				array(
					array(
						'id'		=>'page_template',
						'operator'	=> '!==',
						'value'		=> 'cart-and-checkout.php'
					),
					array(
						'id'		=>'page_template',
						'operator'	=> '!==',
						'value'		=> 'blank-template.php'
					)
				)
			);
			$page_title_dependency = array(
				array(
					'setting'	=>	'page_title_style',
					'operator'	=>	'!==',
					'value'		=>	'tasia',
				),
				array(
					'setting'	=>	'page_title_style',
					'operator'	=>	'!==',
					'value'		=>	'disable',
				)
			);
			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_style',
					'type'			=> 'radio_image',
					'title'			=> esc_html__( 'Select Style', 'baklon' ),
					'description'	=> esc_html__('Select your page title style', 'baklon' ),
					'options'		=> array(
						'tasia'		=> get_template_directory_uri() . '/assets/images/customizer/page-title/df_page-title-default-tasia.svg',
						'tiffany'	=> get_template_directory_uri() . '/assets/images/customizer/page-title/df_page-title-style-1-tiffany.svg',
						'titania'	=> get_template_directory_uri() . '/assets/images/customizer/page-title/df_page-title-style-2-titania.svg',
						'trina'		=> get_template_directory_uri() . '/assets/images/customizer/page-title/df_page-title-style-3-trina.svg',
						'disable'	=> get_template_directory_uri() . '/assets/images/customizer/page-title/df_disable.svg',
					),
					'default'		=> 'tasia',
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_bg',
					'type'			=> 'color_picker',
					'default'		=> '#131518',
					'title'			=> esc_html__( 'Background Color', 'baklon' ),
					'description'	=> esc_html__('The background color will be shown if the image is not set for the page title.', 'baklon' ),
					'dependencies'	=> $page_title_dependency
				)
			);
			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_color',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Page Title Color', 'baklon' ),
					'default'		=> 'light',
					'description'	=> esc_html__('The background color will be shown if the image is not set for the page title', 'baklon' ),
					'options'		=> array(
						'light'			=> esc_html__('Light', 'baklon' ),
						'dark'			=> esc_html__('Dark', 'baklon' ),
						'custom-color'	=> esc_html__('Custom Color', 'baklon' ),
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_text_color',
					'type'			=> 'color_picker',
					'title'			=> esc_html__( 'Page Title Text Color', 'baklon' ),
					'description'	=> esc_html__('According to the color scheme you choose the text colors will be changed to make it more readable', 'baklon' ),
					'default'		=> '#000000',
					'dependencies'	=> array(
						array(
							'setting'	=> 'page_title_color',
							'operator'	=> '===',
							'value'		=> 'custom-color'
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_img',
					'type'			=> 'image_uploader',
					'title'			=> esc_html__( 'Background Image', 'baklon' ),
					'description'	=> esc_html__('Select image pattern for page title background', 'baklon' ),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_bg_size',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Size', 'baklon' ),
					'default'		=> 'cover',
					'description'	=> esc_html__('Adjust the background image displaying', 'baklon' ),
					'options'		=> array(
						'auto'		=> esc_html__('Auto', 'baklon' ),
						'cover'		=> esc_html__('Cover', 'baklon' ),
						'contain'	=> esc_html__('Contain', 'baklon' ),
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_bg_repeat',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Repeat', 'baklon' ),
					'description'	=> esc_html__('Allows you to repeat or do not repeat the image set on the background', 'baklon' ),
					'default'		=> 'no-repeat',
					'options'		=> array(
						'no-repeat'	=> esc_html__('No Repeat', 'baklon' ),
						'repeat'	=> esc_html__('Repeat', 'baklon' ),
						'repeat-x'	=> esc_html__('Repeat X', 'baklon' ),
						'repeat-y'	=> esc_html__('Repeat Y', 'baklon' ),
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_bg_position',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Position', 'baklon' ),
					'description'	=> esc_html__('The background position sets the starting position of a background image', 'baklon' ),
					'default'		=> 'left top',
					'options'		=> array(
						'left top'		=> esc_html__( 'Left Top', 'baklon' ),
						'left center'	=> esc_html__( 'Left Center', 'baklon' ),
						'left bottom'	=> esc_html__( 'Left Bottom', 'baklon' ),
						'right top'		=> esc_html__( 'Right Top', 'baklon' ),
						'right center'	=> esc_html__( 'Right Center', 'baklon' ),
						'right bottom'	=> esc_html__( 'Right Bottom', 'baklon' ),
						'center top'	=> esc_html__( 'Center Top', 'baklon' ),
						'center center'	=> esc_html__( 'Center Center', 'baklon' ),
						'center bottom'	=> esc_html__( 'Center Bottom', 'baklon' ),
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_bg_attachment',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Attachment', 'baklon' ),
					'description'	=> esc_html__('Set background image attachment for page title', 'baklon' ),
					'default'		=> 'fixed',
					'options'		=> array(
						'fixed'		=> esc_html__('Fixed', 'baklon' ),
						'scroll'	=> esc_html__('Scroll', 'baklon' )
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_bg_attachment',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Background Attachment', 'baklon' ),
					'description'	=> esc_html__('When scroll background style is enabled, the background image scrolls with the content. When fixed background style is enabled, the background image is fixed and content scrolls over it. When initial background style is enabled, the background image and content will be fixed', 'baklon' ),
					'default'		=> 'scroll',
					'options'		=> array(
						'scroll'	=> esc_html__('Scroll', 'baklon' ),
						'fixed'		=> esc_html__('Fixed', 'baklon' ),
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_subtitle',
					'type'			=> 'textarea',
					'default'		=> '',
					'title'			=> esc_html__( 'Subtitle', 'baklon' ),
					'description'	=> esc_html__('The subtitle is not prominent by default. Will displaying under the page title.', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'page-title',
				array(
					'id'			=> 'page_title_enable_breadcrumbs',
					'type'			=> 'switcher',
					'default'		=> 'on',
					'title'			=> esc_html__( 'Show Breadcrumbs', 'baklon' ),
					'description'	=> esc_html__('Allow you to show or hide the navigation links in custom header.', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						)
					)
				)
			);

		}

		public function dahz_framework_page_title_taxonomy_metabox( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_style',
					'type'			=> 'radio_image',
					'title'			=> esc_html__( 'Select Style', 'baklon' ),
					'description'	=> esc_html__('Select your page title style', 'baklon' ),
					'options'		=> array(
						'tasia'		=> get_template_directory_uri() . '/assets/images/metabox/df_page-title-default-tasia.svg',
						'tiffany'	=> get_template_directory_uri() . '/assets/images/metabox/df_page-title-style-1-tiffany.svg',
						'titania'	=> get_template_directory_uri() . '/assets/images/metabox/df_page-title-style-2-titania.svg',
						'trina'		=> get_template_directory_uri() . '/assets/images/metabox/df_page-title-style-3-trina.svg',
						'inherit'	=> get_template_directory_uri() . '/assets/images/metabox/df_inherit.svg',
					),
					'default'		=> 'inherit',
				)
			);

			$page_title_dependency = array(
				array(
					'setting'	=>	'page_title_style',
					'operator'	=>	'!==',
					'value'		=>	'tasia',
				),
				array(
					'setting'	=>	'page_title_style',
					'operator'	=>	'!==',
					'value'		=>	'inherit',
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_enable_breadcrumbs',
					'type'			=> 'switcher',
					'default'		=> 'on',
					'title'			=> esc_html__( 'Show Breadcrumbs', 'baklon' ),
					'description'	=> esc_html__('Allow you to show or hide the navigation links in custom header.', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_bg',
					'type'			=> 'color_picker',
					'title'			=> esc_html__( 'Background Color', 'baklon' ),
					'description'	=> esc_html__('The background color will be shown if the image is not set for the page title.', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'tasia',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_color',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Page Title Color', 'baklon' ),
					'default'		=> 'light',
					'description'	=> esc_html__('The background color will be shown if the image is not set for the page title', 'baklon' ),
					'options'		=> array(
						'light'			=> esc_html__('Light', 'baklon' ),
						'dark'			=> esc_html__('Dark', 'baklon' ),
						'custom-color'	=> esc_html__('Custom Color', 'baklon' ),
					),
					'dependencies'	=> $page_title_dependency
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_text_color',
					'type'			=> 'color_picker',
					'title'			=> esc_html__( 'Page Title Text Color', 'baklon' ),
					'description'	=> esc_html__('According to the color scheme you choose the text colors will be changed to make it more readable', 'baklon' ),
					'default'		=> '#000000',
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_color',
							'operator'	=>	'===',
							'value'		=>	'custom-color',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_img',
					'type'			=> 'image_uploader',
					'title'			=> esc_html__( 'Background Image', 'baklon' ),
					'description'	=> esc_html__('Select image pattern for page title background', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'tasia',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_bg_size',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Size', 'baklon' ),
					'description'	=> esc_html__('Adjust the background image displaying', 'baklon' ),
					'options'		=> array(
						'inherit'	=> esc_html__('Inherit', 'baklon' ),
						'cover'		=> esc_html__('Cover', 'baklon' ),
						'contain'	=> esc_html__('Contain', 'baklon' ),
					),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'tasia',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_bg_repeat',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Repeat', 'baklon' ),
					'description'	=> esc_html__('Allows you to repeat or do not repeat the image set on the background', 'baklon' ),
					'options'		=> array(
						'repeat'	=> esc_html__('Repeat', 'baklon' ),
						'repeat-x'	=> esc_html__('Repeat X', 'baklon' ),
						'repeat-y'	=> esc_html__('Repeat Y', 'baklon' ),
						'no-repeat'	=> esc_html__('No Repeat', 'baklon' ),
					),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'tasia',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_bg_position',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Position', 'baklon' ),
					'description'	=> esc_html__('The background position sets the starting position of a background image', 'baklon' ),
					'options'		=> array(
						'left top'		=> esc_html__( 'Left Top', 'baklon' ),
						'left center'	=> esc_html__( 'Left Center', 'baklon' ),
						'left bottom'	=> esc_html__( 'Left Bottom', 'baklon' ),
						'right top'		=> esc_html__( 'Right Top', 'baklon' ),
						'right center'	=> esc_html__( 'Right Center', 'baklon' ),
						'right bottom'	=> esc_html__( 'Right Bottom', 'baklon' ),
						'center top'	=> esc_html__( 'Center Top', 'baklon' ),
						'center center'	=> esc_html__( 'Center Center', 'baklon' ),
						'center bottom'	=> esc_html__( 'Center Bottom', 'baklon' ),
					),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'tasia',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				array(
					'id'			=> 'page_title_bg_attachment',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Image Attachment', 'baklon' ),
					'description'	=> esc_html__('When scroll background style is enabled, the background image scrolls with the content. When fixed background style is enabled, the background image is fixed and content scrolls over it. When initial background style is enabled, the background image and content will be fixed', 'baklon' ),
					'options'		=> array(
						'scroll'	=> esc_html__('Scroll', 'baklon' ),
						'fixed'		=> esc_html__('Fixed', 'baklon' ),
					),
					'dependencies'	=> array(
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'tasia',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'disable',
						),
						array(
							'setting'	=>	'page_title_style',
							'operator'	=>	'!==',
							'value'		=>	'inherit',
						)
					)
				)
			);

		}

		public function dahz_framework_register_page_title_taxonomy_metabox(){

			dahz_framework_register_taxonomy_metabox( 'portfolio_categories' );

			dahz_framework_register_taxonomy_metabox( 'category' );

			dahz_framework_register_taxonomy_metabox( 'product_cat' );

			dahz_framework_register_taxonomy_metabox( 'brand' );

			dahz_framework_register_taxonomy_metabox( 'product_tag' );

		}

	}

	new Dahz_Framework_Page_Title_Metaboxes();

}
