<?php
/*
 * 1. class : Dahz_Framework_Modules_Portfolio_Archive_Customizer
 */
if( !class_exists( 'Dahz_Framework_Modules_Portfolio_Archive_Customizer' ) ){

	Class Dahz_Framework_Modules_Portfolio_Archive_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => "custom_title_portfolio_archive_layout",
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__('Layout', 'baklon' ) .'</div>',
			);
			
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'heading',
				'label'       => esc_html__( 'Heading Style', 'baklon' ),
				'default'	  => 'uk-h4',
				'choices'     => array(
					'uk-article-title'		=> __( 'Article', 'baklon' ),
					'uk-heading-primary'	=> __( 'Primary', 'baklon' ),
					'uk-heading-hero'		=> __( 'Hero', 'baklon' ),
					'uk-h1'					=> __( 'H1', 'baklon' ),
					'uk-h2'					=> __( 'H2', 'baklon' ),
					'uk-h3'					=> __( 'H3', 'baklon' ),
					'uk-h4'					=> __( 'H4', 'baklon' ),
					'uk-h5'					=> __( 'H5', 'baklon' ),
					'uk-h6'					=> __( 'H6', 'baklon' ),
				),
			); 
			
			$dv_field[] = array(
				'type'        => 'radio-image',
				'settings'    => 'layout',
				'label'       => __( 'Layout', 'baklon' ),
				'default'     => 'layout-1',
				'choices'     => array(
					'layout-1'  => get_template_directory_uri() . '/assets/images/customizer/portfolio/df_portfolio-style-1-coralie.svg',
					'layout-2'  => get_template_directory_uri() . '/assets/images/customizer/portfolio/df_portfolio-style-2-centaur.svg',
				),
				'description' => __( 'To view the changes, go to your portfolio pages manually', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'image_ratio',
				'label'       => esc_html__( 'Image Ratio', 'baklon' ),
				'default'	  => '',
				'choices'     => array(
					''			=> __( 'Uncrop', 'baklon' ),
					'1-1'		=> __( '1:1', 'baklon' ),
					'1-2'		=> __( '1:2', 'baklon' ),
					'2-1'		=> __( '2:1', 'baklon' ),
					'2-3'		=> __( '2:3', 'baklon' ),
					'3-2'		=> __( '3:2', 'baklon' ),
					'3-4'		=> __( '3:4', 'baklon' ),
					'4-3'		=> __( '4:3', 'baklon' ),
					'4-5'		=> __( '4:5', 'baklon' ),
					'5-4'		=> __( '5:4', 'baklon' ),
					'5-7'		=> __( '5:7', 'baklon' ),
					'7-5'		=> __( '7:5', 'baklon' ),
					'9-16'		=> __( '9:16', 'baklon' ),
					'16-9'		=> __( '16:9', 'baklon' ),
				),
			); 
			
			/**
			 * section archive_layout
			 * add field single_post_recent_desktop_column
			 */
			$dv_field[] = array(
				'type'		=> 'slider',
				'choices'	=> array(
					'min'	=> '1',
					'max'	=> '6',
					'step'	=> '1',
				),
				'settings'	=> 'desktop_column',
				'label'		=> esc_html__( 'Desktop Column', 'baklon' ),
				'default'	=> 3,
			);

			/**
			 * section archive_layout
			 * add field single_post_recent_tab_lndscp_column
			 */
			$dv_field[] = array(
				'type'		=> 'slider',
				'choices'	=> array(
					'min'	=> '1',
					'max'	=> '6',
					'step'	=> '1',
				),
				'settings'	=> 'tablet_landscape_column',
				'label'		=> esc_html__( 'Tablet Landscape Column', 'baklon' ),
				'default'	=> 2,
			);

			/**
			 * section archive_layout
			 * add field single_post_recent_phone_lndscp_column
			 */
			$dv_field[] = array(
				'type'		=> 'slider',
				'choices'	=> array(
					'min'	=> '1',
					'max'	=> '6',
					'step'	=> '1',
				),
				'settings'	=> 'phone_landscape_column',
				'label'		=> esc_html__( 'Phone Landscape Column', 'baklon' ),
				'default'	=> 2,
			);

			/**
			 * section archive_layout
			 * add field single_post_recent_phone_ptrt_column
			 */
			$dv_field[] = array(
				'type'		=> 'slider',
				'choices'	=> array(
					'min'	=> '1',
					'max'	=> '6',
					'step'	=> '1',
				),
				'settings'	=> 'phone_portrait_column',
				'label'		=> esc_html__( 'Phone Portrait Column', 'baklon' ),
				'default'	=> 1,
			);
			
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'column_gap',
				'label'       => __( 'Column Gap', 'baklon' ),
				'default'     => 'column_gap',
				'choices'     => array(
					'' 					=> __( 'Default', 'baklon' ),
					'uk-grid-small' 	=> __( 'Small', 'baklon' ),
					'uk-grid-medium' 	=> __( 'Medium', 'baklon' ),
					'uk-grid-large' 	=> __( 'Large', 'baklon' ),
					'uk-grid-collapse' 	=> __( 'Collapse (No Gutter)', 'baklon' ),
				),
				'description' => __('To view the changes, go to your portfolio pages manually', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type' 		=> 'switch',
				'settings' 	=> 'enable_filter',
				'label' 	=> __( 'Enable Filter', 'baklon' ),
				'default' 	=> 'off',
				'choices' 	=> array(
					'on'  => __( 'On', 'baklon' ),
					'off' => __( 'Off', 'baklon' )
				),
			);
			
			$dv_field[] = array(
				'type'			=> 'select',
				'settings'		=> 'filter_alignment',
				'label'			=> __( 'Filter Alignment', 'baklon' ),
				'default'		=> 'uk-flex-left',
				'choices'     	=> array(
					'uk-flex-left'  	=> __( 'Left', 'baklon' ),
					'uk-flex-center'  	=> __( 'Center', 'baklon' ),
					'uk-flex-right'  	=> __( 'Right', 'baklon' ),
				),
				'active_callback'	=> array(
					array(
						'setting'	=> 'portfolio_archive_enable_filter',
						'operator'	=> '==',
						'value'		=> true,
					)
				),
			);
			
			$dv_field[] = array(
				'type'			=> 'select',
				'settings'		=> 'filter_style',
				'label'			=> __( 'Filter Style', 'baklon' ),
				'default'		=> 'pills',
				'choices'     	=> array(
					'pills'  	=> __( 'Pills', 'baklon' ),
					'tabs'  	=> __( 'Tabs', 'baklon' ),
				),
				'active_callback'	=> array(
					array(
						'setting'	=> 'portfolio_archive_enable_filter',
						'operator'	=> '==',
						'value'		=> true,
					)
				),
			);
			
			$dv_field[] = array(
				'type' 		=> 'switch',
				'settings' 	=> 'enable_masonry',
				'label' 	=> __( 'Enable Masonry', 'baklon' ),
				'default' 	=> 'off',
				'choices' 	=> array(
					'on'  => __( 'On', 'baklon' ),
					'off' => __( 'Off', 'baklon' )
				),
				
			);
			
			$dv_field[] = array(
				'type' 		=> 'switch',
				'settings' 	=> 'enable_parallax',
				'label' 	=> __( 'Enable Parallax', 'baklon' ),
				'default' 	=> 'off',
				'choices' 	=> array(
					'on'  => __( 'On', 'baklon' ),
					'off' => __( 'Off', 'baklon' )
				),
				
			);
			
			$dv_field[] = array(
				'type'		=> 'slider',
				'choices'	=> array(
					'min'	=> '0',
					'max'	=> '600',
					'step'	=> '10',
				),
				'settings'	=> 'parallax_speed',
				'label'		=> esc_html__( 'Parallax Speed', 'baklon' ),
				'default'	=> 0,
				'active_callback'	=> array(
					array(
						'setting'	=> 'portfolio_archive_enable_parallax',
						'operator'	=> '==',
						'value'		=> true,
					)
				),
			);

			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'pagination',
				'label'       => __( 'Pagination', 'baklon' ),
				'default'     => 'prev_next',
				'choices'     => array(
					'number'	=> __( 'Number', 'baklon' ),
					'prev_next'	=> __( 'Prev Next', 'baklon' ),
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type'        => 'slider',
				'settings'    => 'per_page',
				'label'       => __( 'Portfolio Per Page', 'baklon' ),
				'default'     => 12,
				'choices'     => array(
					'min'  => 2,
					'max'  => 48,
					'step' => 1
				),
				'description' => __( 'To view the changes, go to your portfolio pages manually', 'baklon' ),
			);

			return $dv_field;

		}

	}

}
