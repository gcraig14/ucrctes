<?php

if( !class_exists( 'Dahz_Framework_Modules_Single_Post_Metabox' ) ){

	Class Dahz_Framework_Modules_Single_Post_Metabox {

		function __construct(){

			add_action( 'dahz_framework_metabox_dahz_meta_post', array( $this, 'dahz_framework_register_panel_to_core' ), 11 );

			add_action( 'dahz_framework_metabox_dahz_meta_post', array( $this, 'dahz_framework_register_panel_metabox_post_header' ), 9 );

			add_action( 'dahz_framework_metabox_dahz_meta_post', array( $this, 'dahz_framework_register_panel_single_video' ), 13 );

			add_action( 'dahz_framework_metabox_dahz_meta_post', array( $this, 'dahz_framework_register_panel_single_audio' ), 14 );

			add_action( 'dahz_framework_metabox_dahz_meta_post', array( $this, 'dahz_framework_register_panel_single_gallery' ), 15 );

			add_action( 'dahz_framework_metabox_dahz_meta_post', array( $this, 'dahz_framework_register_panel_single_footer' ), 16 );

		}

		public function dahz_framework_register_panel_to_core( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_field(
				'contents',
				array(
					'id'			=> 'disable_featured_image',
					'type'			=> 'switcher',
					'default'		=> false,
					'title'			=> esc_html__( 'Disable Featured Image', 'baklon' ),
					'description'	=> esc_html__('This option only works for post format standard', 'baklon' ),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'contents',
				array(
					'id'		=> 'post_title_alignment',
					'type'		=> 'select',
					'title'		=> esc_html__( 'Page Title Alinment', 'baklon' ),
					'default'	=> 'inherit',
					'options'	=> array(
						'inherit'	=> esc_attr__('Inherit', 'baklon'),
						'left'		=> esc_attr__('Left', 'baklon'),
						'center'	=> esc_attr__('Center', 'baklon'),
					),
					'description'	=> esc_html__('This option will override default option from customizer', 'baklon' ),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'contents',
				array(
					'id'		=> 'subtitle',
					'type'		=> 'textarea',
					'title'		=> esc_html__( 'Subtitle', 'baklon' ),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'contents',
				array(
					'id'		=> 'affiliate_title',
					'type'		=> 'textfield',
					'title'		=> esc_html__( 'Custom Content Title', 'baklon' ),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'contents',
				array(
					'id'		=> 'affiliate_content_block',
					'type'		=> 'select',
					'title'		=> esc_html__( 'Custom Content', 'baklon' ),
					'options'	=> dahz_framework_get_content_block(),
				)
			);

		}

		public function dahz_framework_register_panel_metabox_post_header( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'header-single',esc_html__('Header', 'baklon' ) );

			do_action( 'dahz_framework_metabox_before_header_dahz_meta_post', $dahz_meta );

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-single',
				array(
					'id'			=> 'overide_main_menu',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Custom Menu', 'baklon' ),
					'description'	=> esc_html__('Overide Main Menu', 'baklon' ),
					'options'		=> dahz_framework_get_all_menu(),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-single',
				array(
					'id'			=> 'before_header',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Before Header', 'baklon' ),
					 'description'	=> esc_html__('Display a custom area before header area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'header-single',
				array(
					'id' 			=> 'after_header',
					'type'			=> 'select',
					'title'			=> esc_html__( 'After Header', 'baklon' ),
					'description'	=> esc_html__('Display a custom area after header area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

		}

		public function dahz_framework_register_panel_single_video( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'single-video',esc_html__('Video', 'baklon' ), '',
				array(
					array(
						'name'		=>	'post_format',
						'operator'	=>	'==',
						'value'		=>	'video'
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-video',
				array(
					'id'		=> 'video_url',
					'type'		=> 'oembed',
					'title'		=> esc_html__( 'Video Media URL', 'baklon' ),
					'description'	=> esc_html__('Enter Vide URL (ex: Youtube, Vimeo). What sites can I embed From? Here', 'baklon' ),
				)
			);

		}

		public function dahz_framework_register_panel_single_audio( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'single-audio',esc_html__('Audio', 'baklon' ), '',
				array(
					array(
						'name'		=>	'post_format',
						'operator'	=>	'==',
						'value'		=>	'audio'
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-audio',
				array(
					'id'		=> 'audio_url',
					'type'		=> 'oembed',
					'title'		=> esc_html__( 'Audio Media URL', 'baklon' ),
					'description'	=> esc_html__('Enter Audio URL (ex: Soundcloud). What sites Can I embed From? Here', 'baklon' ),
				)
			);

		}

		public function dahz_framework_register_panel_single_gallery( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'single-gallery',esc_html__('Gallery', 'baklon' ), '',
				array(
					array(
						'name'		=>	'post_format',
						'operator'	=>	'==',
						'value'		=>	'gallery'
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'enable_lightbox',
					'type'			=> 'switcher',
					'title'			=> esc_html__( 'Enable Lightbox', 'baklon' ),
					'description'	=> esc_html__('Display image lightbox', 'baklon' ),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'gallery_style',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Gallery Style', 'baklon' ),
					'description'	=> esc_html__('Select gallery style', 'baklon' ),
					'options'		=> array(
						'slider'			=> esc_html__( 'Slider', 'baklon' ),
						'tiled'				=> esc_html__( 'Tiled', 'baklon' )
					),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'image_upload',
					'type'			=> 'repeater',
					'title'			=> esc_html__( 'Image Upload', 'baklon' ),
					'description'	=> esc_html__('Select from media', 'baklon' ),
					'options'		=> array(
						array(
							'id' 		=> 'image',
							'type'		=> 'image_uploader',
							'title'		=> __( 'Image', 'baklon' ),
							'description'	=> esc_html__('Specify images from media library. Image title and caption are set via WordPress media library', 'baklon' ),
						),
						array(
							'id' 		=> 'media_width',
							'type'		=> 'range',
							'title'		=> __( 'Media Width', 'baklon' ),
							'description'	=> esc_html__('Settings for image width & height will work only if the option is set as masonry', 'baklon' ),
						),
						array(
							'id' 		=> 'media_height',
							'type'		=> 'range',
							'title'		=> __( 'Media Height', 'baklon' ),
							'description'	=> esc_html__('Settings for image width & height will work only if the option is set as masonry', 'baklon' ),
						),
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'gallery_height',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Gallery Height', 'baklon' ),
					'description'	=> esc_html__('Select gallery area height', 'baklon' ),
					'options'		=> array(
						'auto'						=> esc_html__( 'Auto', 'baklon' ),
						'viewport-minus-section'	=> esc_html__( 'Viewport (Minus the following section)', 'baklon' ),
						'viewport'					=> esc_html__( 'Viewport', 'baklon' ),
						'viewport-minus-percent'	=> esc_html__( 'Viewport (Minus 20%)', 'baklon' ),
						'match-height'				=> esc_html__( 'Match Height', 'baklon' )
					),
					'dependencies'	=> array(
						array(
							'setting'	=>	'gallery_style',
							'operator'	=>	'==',
							'value'		=>	'slider',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'		=> 'minimum_height',
					'type'		=> 'textfield',
					'title'		=> esc_html__( 'Minimum Height (px)', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'gallery_height',
							'operator'	=>	'==',
							'value'		=>	'viewport-minus-section',
						),
						array(
							'setting'	=>	'gallery_height',
							'operator'	=>	'==',
							'value'		=>	'viewport',
						),
						array(
							'setting'	=>	'gallery_height',
							'operator'	=>	'==',
							'value'		=>	'viewport-minus-percent',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'		=> 'desktop_height',
					'type'		=> 'textfield',
					'title'		=> esc_html__( 'Desktop Height (px)', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'gallery_height',
							'operator'	=>	'==',
							'value'		=>	'match-height',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'		=> 'mobile_height',
					'type'		=> 'textfield',
					'title'		=> esc_html__( 'Mobile Height (px)', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'gallery_height',
							'operator'	=>	'==',
							'value'		=>	'match-height',
						)
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'column_gap',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Column Gap', 'baklon' ),
					'description'	=> esc_html__('Select select gap between image', 'baklon' ),
					'options'		=> array(
						'uk-grid-small'			=> esc_html__( 'Small', 'baklon' ),
						'uk-grid-medium'		=> esc_html__( 'Medium', 'baklon' ),
						'uk-grid'				=> esc_html__( 'Default', 'baklon' ),
						'uk-grid-large'			=> esc_html__( 'Large', 'baklon' ),
						'uk-grid-collapse'		=> esc_html__( 'Collapse (No Gutter)', 'baklon' )
					),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'desktop_column',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Desktop Column', 'baklon' ),
					'description'	=> esc_html__('Select Column', 'baklon' ),
					'options'		=> array(
						'1-1'		=> esc_html__( '1 Column = 100%', 'baklon' ),
						'1-2'		=> esc_html__( '2 Columns = 50%', 'baklon' ),
						'1-3'		=> esc_html__( '3 Columns = 33%', 'baklon' ),
						'1-4'		=> esc_html__( '4 Columns = 25%', 'baklon' ),
						'1-5'		=> esc_html__( '5 Columns = 20%', 'baklon' ),
						'1-6'		=> esc_html__( '6 Columns = 16%', 'baklon' ),
						'5-6'		=> esc_html__( '5/6 Columns = 83%', 'baklon' ),
						'4-5'		=> esc_html__( '4/5 Columns = 80%', 'baklon' ),
						'3-5'		=> esc_html__( '3/5 Columns = 60%', 'baklon' ),
					),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'tablet_landscape_column',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Tablet Landscape Column', 'baklon' ),
					'description'	=> esc_html__('Select Column', 'baklon' ),
					'options'		=> array(
						'1-1'		=> esc_html__( '1 Column = 100%', 'baklon' ),
						'1-2'		=> esc_html__( '2 Columns = 50%', 'baklon' ),
						'1-3'		=> esc_html__( '3 Columns = 33%', 'baklon' ),
						'1-4'		=> esc_html__( '4 Columns = 25%', 'baklon' ),
						'1-5'		=> esc_html__( '5 Columns = 20%', 'baklon' ),
						'1-6'		=> esc_html__( '6 Columns = 16%', 'baklon' ),
						'5-6'		=> esc_html__( '5/6 Columns = 83%', 'baklon' ),
						'4-5'		=> esc_html__( '4/5 Columns = 80%', 'baklon' ),
						'3-5'		=> esc_html__( '3/5 Columns = 60%', 'baklon' ),
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'phone_landscape_column',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Phone Landscape Column', 'baklon' ),
					'description'	=> esc_html__('Select Column', 'baklon' ),
					'options'		=> array(
						'1-1'		=> esc_html__( '1 Column = 100%', 'baklon' ),
						'1-2'		=> esc_html__( '2 Columns = 50%', 'baklon' ),
						'1-3'		=> esc_html__( '3 Columns = 33%', 'baklon' ),
						'1-4'		=> esc_html__( '4 Columns = 25%', 'baklon' ),
						'1-5'		=> esc_html__( '5 Columns = 20%', 'baklon' ),
						'1-6'		=> esc_html__( '6 Columns = 16%', 'baklon' ),
						'5-6'		=> esc_html__( '5/6 Columns = 83%', 'baklon' ),
						'4-5'		=> esc_html__( '4/5 Columns = 80%', 'baklon' ),
						'3-5'		=> esc_html__( '3/5 Columns = 60%', 'baklon' ),
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'phone_potrait_column',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Phone Potrait Column', 'baklon' ),
					'description'	=> esc_html__('Select Column', 'baklon' ),
					'options'		=> array(
						'1-1'		=> esc_html__( '1 Column = 100%', 'baklon' ),
						'1-2'		=> esc_html__( '2 Columns = 50%', 'baklon' ),
						'1-3'		=> esc_html__( '3 Columns = 33%', 'baklon' ),
						'1-4'		=> esc_html__( '4 Columns = 25%', 'baklon' ),
						'1-5'		=> esc_html__( '5 Columns = 20%', 'baklon' ),
						'1-6'		=> esc_html__( '6 Columns = 16%', 'baklon' ),
						'5-6'		=> esc_html__( '5/6 Columns = 83%', 'baklon' ),
						'4-5'		=> esc_html__( '4/5 Columns = 80%', 'baklon' ),
						'3-5'		=> esc_html__( '3/5 Columns = 60%', 'baklon' ),
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'is_center_active_slide',
					'type'			=> 'switcher',
					'title'			=> esc_html__( 'Center Active Slide', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'	=>	'gallery_style',
							'operator'	=>	'==',
							'value'		=>	'slider',
						)
					),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'single-gallery',
				array(
					'id'			=> 'autoplay_gallery_area',
					'type'			=> 'switcher',
					'title'			=> esc_html__( 'Autoplay Gallery Area', 'baklon' ),
					'dependencies'	=> array(
						array(
							'setting'		=>'gallery_style',
							'operator'	=> '==',
							'value'		=> 'slider'
						)
					),
				)
			);

		}

		public function dahz_framework_register_panel_single_footer( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'footer-single',esc_html__('Footer', 'baklon' ), '',
				array(
					array(
						'id'		=> 'single_template',
						'operator'	=> '!==',
						'value'		=> 'blank-template.php'
					)
				)
			);

			do_action( 'dahz_framework_metabox_before_footer_dahz_meta_post', $dahz_meta );

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-single',
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
				'footer-single',
				array(
					'id'			=> 'before_footer',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Before Footer', 'baklon' ),
					'description'	=> esc_html__('Display a custom area before footer area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-single',
				array(
					'id'			=> 'after_footer',
					'type'			=> 'select',
					'title'			=> esc_html__( 'After Footer', 'baklon' ),
					'description'	=> esc_html__('Display a custom area after footer area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

		}

	}

	new Dahz_Framework_Modules_Single_Post_Metabox();

}
