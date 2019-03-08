<?php

if ( !class_exists( 'Dahz_Framework_Modules_Blog_Featured_Area_Customizer' ) ) {
	Class Dahz_Framework_Modules_Blog_Featured_Area_Customizer extends Dahz_Framework_Customizer_Extend {
		public function dahz_framework_set_customizer() {
			$dv_field = array();

			$img_url = get_template_directory_uri() . '/assets/images/customizer/blog/';

			/**
			 * section featured_area
			 * add field featured_area_enable
			 */
			$dv_field[] = array(
				'type'     => 'switch',
				'settings' => 'enable',
				'label'    => __( 'Enable Featured Area', 'baklon' ),
				'default'  => 'off',
				'priority' => 10,
				'choices'  => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section featured_area
			 * add field featured_area_layout
			 */
			$dv_field[] = array(
				'type'     => 'radio-image',
				'settings' => 'layout',
				'label'    => __( 'Layout', 'baklon' ),
				'default'  => 'featured-1',
				'choices'  => array(
					'featured-1' => $img_url . 'df_featured-1.svg',
					'featured-2' => $img_url . 'df_featured-2.svg',
					'featured-3' => $img_url . 'df_featured-3.svg',
					'featured-4' => $img_url . 'df_featured-4.svg',
					'featured-5' => $img_url . 'df_featured-5.svg',
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			$dv_field[] = array(
				'type'     => 'select',
				'settings' => 'source',
				'label'    => __( 'Featured Area Source', 'baklon' ),
				'default'  => 'recent_post',
				'choices'  => array(
					'recent_post'	=> __( 'Recent Post', 'baklon' ),
					'category_post'	=> __( 'By Category', 'baklon' ),
					'post_ids'		=> __( 'Post ID', 'baklon' )
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section featured_area
			 * add field featured_area_category_slug
			 */
			$dv_field[] =  array(
				'type'        => 'select',
				'settings'    => 'category_slug',
				'label'       => __( 'Category Slug', 'baklon' ),
				'default'     => '',
				'multiple'    => 10,
				'choices'     => Kirki_Helper::get_terms( array( 'taxonomy' => 'category' ) ),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
				'active_callback'	=> array(
					array(
						'setting'	=> 'blog_featured_area_source',
						'operator'	=> '==',
						'value'		=> 'category_post',
					)
				),
			);

			/**
			 * section featured_area
			 * add field featured_area_category_slug
			 */
			$dv_field[] =  array(
				'type'        => 'text',
				'settings'    => 'post_ids',
				'label'       => __( 'Post Ids', 'baklon' ),
				'default'     => '',
				'description' => __('Input multiple post ids with coma separator eg: 1,2,3', 'baklon' ),
				'active_callback'	=> array(
					array(
						'setting'	=> 'blog_featured_area_source',
						'operator'	=> '==',
						'value'		=> 'post_ids',
					)
				),
			);

			/**
			 * section featured_area
			 * add field featured_area_total_post
			 */
			$dv_field[] = array(
				'type'        => 'text',
				'settings'    => 'total_post',
				'label'       => __( 'Total Post', 'baklon' ),
				'default'     => '8',
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
				'active_callback'	=> array(
					array(
						'setting'	=> 'blog_featured_area_source',
						'operator'	=> '!==',
						'value'		=> 'post_ids',
					)
				),
			);

			$dv_field[] = array(
				'type'     => 'select',
				'settings' => 'height',
				'label'    => __( 'Height', 'baklon' ),
				'default'  => 'viewport_minus_section',
				'choices'  => array(
					'viewport_minus_section'=> __( 'Viewport ( minus the following section )', 'baklon' ),
					'viewport'				=> __( 'Viewport', 'baklon' ),
					'viewport_minus_20'		=> __( 'Viewport ( minus 20% )', 'baklon' )
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'min_height',
				'label'    => __( 'Minimum Height (px)', 'baklon' ),
				'choices'  => array(
					'viewport_minus_section'=> __( 'Viewport ( minus the following section )', 'baklon' ),
					'viewport'				=> __( 'Viewport', 'baklon' ),
					'viewport_minus_20'		=> __( 'Viewport ( minus 20% )', 'baklon' )
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section featured_area
			 * add field featured _area_post_title
			 */
			$dv_field[] = array(
				'type'     => 'switch',
				'settings' => 'enable_uppercase_post_title',
				'label'    => __( 'Uppercase Title', 'baklon' ),
				'default'  => 'off',
				'choices'  => array(
					'on'  => __( 'On', 'baklon' ),
					'off' => __( 'Off', 'baklon' )
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'heading',
				'label'       => esc_html__( 'Title Style', 'baklon' ),
				'default'	  => 'uk-article-title',
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
				'type'        => 'sortable',
				'settings'    => 'post_meta',
				'label'       => esc_html__( 'Post Meta', 'baklon' ),
				'description' => esc_html__('Display and sort post meta', 'baklon' ),
				'multiple'    => 999,
				'default'	  => array(
					'date',
					'categories',
					'comment'
				),
				'choices'     => array(
					'categories'	=> __( 'Categories', 'baklon' ),
					'date'			=> __( 'Date', 'baklon' ),
					'comment'		=> __( 'Comment', 'baklon' ),
					'author'		=> __( 'Author', 'baklon' ),
				),
			);

			/**
			 * section featured_area
			 * add field featured_area_enable_auto_play
			 */
			$dv_field[] = array(
				'type'     => 'switch',
				'settings' => 'enable_auto_play',
				'label'    => __( 'Enable Auto Play', 'baklon' ),
				'default'  => 'on',
				'priority' => 10,
				'choices'  => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);


			return $dv_field;
		}
	}
}