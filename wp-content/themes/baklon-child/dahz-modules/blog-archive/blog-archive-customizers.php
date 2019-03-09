<?php
/*
 1. class : Dahz_Framework_Modules_Blog_Archive_Customizer
 */
if ( !class_exists( 'Dahz_Framework_Modules_Blog_Archive_Customizer' ) ) {

	Class Dahz_Framework_Modules_Blog_Archive_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			$img_url = get_template_directory_uri() . '/assets/images/customizer/blog/';

			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => "custom_title_blog_archive_layout",
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Layout', 'baklon' ) .'</div>',
			);

			/**
			 * section archive_layout
			 * add field archive_layout_sidebar
			 */
			$dv_field[] =  array(
				'type'        => 'radio-image',
				'settings'    => 'layout_sidebar',
				'label'       => __( 'Sidebar Layout', 'baklon' ),
				'default'     => 'sidebar-right',
				'choices'     => array(
					'fullwidth'		=> $img_url . 'df_body-full.svg',
					'sidebar-left'	=> $img_url . 'df_body-left-sidebar.svg',
					'sidebar-right'	=> $img_url . 'df_body-right-sidebar.svg',
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section archive_layout
			 * add field archive_layout
			 */
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'heading',
				'label'       => esc_html__( 'Heading Style', 'baklon' ),
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
				'type'        => 'select',
				'settings'    => 'column',
				'label'       => esc_html__( 'Column', 'baklon' ),
				'description' => esc_html__( 'Select Column', 'baklon' ),
				'default'	  => 1,
				'choices'     => array(
					1		=> __( 'Column 1', 'baklon' ),
					2		=> __( 'Column 2', 'baklon' ),
					3		=> __( 'Column 3', 'baklon' ),
					4		=> __( 'Column 4', 'baklon' ),
				),
			);

			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'order',
				'label'       => esc_html__( 'Order', 'baklon' ),
				'description' => esc_html__( 'Select Order', 'baklon' ),
				'default'	  => 1,
				'choices'     => array(
					0			=> __( 'Down', 'baklon' ),
					1			=> __( 'Accross', 'baklon' ),
				),
			);

			$dv_field[] = array(
				'type'        => 'checkbox',
				'settings'    => 'larger',
				'label'       => esc_attr__( 'Larger Gutter', 'baklon' ),
				'default'     => true,
				'active_callback'	=> array(
					array(
						'setting'	=> 'blog_archive_column',
						'operator'	=> '!=',
						'value'		=> '1',
					)
				),
			);

			/**
			 * section archive_layout
			 * add field archive_layout_post_title
			 */
			$dv_field[] = array(
				'type'		=> 'switch',
				'settings'	=> 'layout_post_title',
				'label'		=> __( 'Uppercase Title', 'baklon' ),
				'default'	=> 'off',
				'choices'	=> array(
					'on'  => __( 'On', 'baklon' ),
					'off' => __( 'Off', 'baklon' )
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section archive_layout
			 * add field archive_layout_pagination
			 */
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'layout_pagination',
				'label'       => __( 'Pagination', 'baklon' ),
				'default'     => 'prev_next',
				'choices'     => array(
					'number'	=> __( 'Number', 'baklon' ),
					'prev_next'	=> __( 'Prev Next', 'baklon' ),
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
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
			
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'button_style',
				'label'       => __( 'Button Style', 'baklon' ),
				'default'     => 'uk-button-default',
				'choices'     => array(
					'uk-button-default'		=> __( 'Default', 'baklon' ),
					'uk-button-primary'		=> __( 'Primary', 'baklon' ),
					'uk-button-secondary'	=> __( 'Secondary', 'baklon' ),
					'uk-button-danger'		=> __( 'Danger', 'baklon' ),
					'uk-button-text'		=> __( 'Text', 'baklon' ),
					'uk-button-link'		=> __( 'Link', 'baklon' ),
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'button_size',
				'label'       => __( 'Button Size', 'baklon' ),
				'default'     => '',
				'choices'     => array(
					''						=> __( 'Default', 'baklon' ),
					'uk-button-small'		=> __( 'Small', 'baklon' ),
					'uk-button-large'		=> __( 'Large', 'baklon' ),
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
			);

			return $dv_field;

		}

	}

}