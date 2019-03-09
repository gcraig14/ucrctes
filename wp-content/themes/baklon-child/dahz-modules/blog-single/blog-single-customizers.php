<?php
/*
	1. 	class : Dahz_Framework_Modules_Blog_Single_Customizer
*/
if( !class_exists( 'Dahz_Framework_Modules_Blog_Single_Customizer' ) ){

	Class Dahz_Framework_Modules_Blog_Single_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			$img_url = get_template_directory_uri() . '/assets/images/customizer/blog/';

			/**
			 * section single_layout
			 * add field single_layout_header_transparency
			 */
			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => "custom_title_blog_single_layout",
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__('Layout', 'baklon' ) .'</div>',
			);

			/**
			 * section single_layout
			 * add field single_layout_sidebar
			 */
			$dv_field[] = array(
				'type'        => 'radio-image',
				'settings'    => 'sidebar',
				'label'       => __( 'Sidebar layout', 'baklon' ),
				'default'     => 'sidebar-right',
				'choices'     => array(
					'fullwidth' 	=> $img_url . 'df_body-full.svg',
					'sidebar-left' 	=> $img_url . 'df_body-left-sidebar.svg',
					'sidebar-right' => $img_url . 'df_body-right-sidebar.svg',
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section single_layout
			 * add field single_post_title_alignment
			 */
			$dv_field[] = array(
				'type'     => 'select',
				'settings' => 'title_alignment',
				'label'    => __( 'Title Alignment', 'baklon' ),
				'default'  => 'prev_next',
				'choices'  => array(
					'left'	=> __( 'Left', 'baklon' ),
					'center'	=> __( 'Center', 'baklon' ),
				),
				'description'	=> __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section single_layout
			 * add field single_post_heading
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
				'type'        => 'sortable',
				'settings'    => 'post_meta',
				'label'       => esc_html__( 'Post Meta', 'baklon' ),
				'description' => esc_html__('Display and sort post meta', 'baklon' ),
				'multiple'    => 999,
				'default'	  => array(
					'date',
					'categories'
				),
				'choices'     => array(
					'categories'	=> __( 'Categories', 'baklon' ),
					'date'			=> __( 'Date', 'baklon' ),
					'comment'		=> __( 'Comment', 'baklon' ),
					'author'		=> __( 'Author', 'baklon' ),
				),
			);

			/**
			 * section single_layout
			 * add field single_layout_post_title
			 */
			$dv_field[] = array(
				'type' 		=> 'switch',
				'settings' 	=> 'enable_uppercase_post_title',
				'label' 	=> __( 'Uppercase Title', 'baklon' ),
				'default' 	=> 'off',
				'choices' 	=> array(
					'on'  => __( 'On', 'baklon' ),
					'off' => __( 'Off', 'baklon' )
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section global
			 * add field enable_dropcap
			 */
			$dv_field[] = array(
				'type'			=> 'switch',
				'settings'		=> 'enable_dropcap',
				'label'			=> __( 'Enable Dropcap', 'baklon' ),
				'description'	=> __( 'This option only available in single post', 'baklon' ),
				'default'		=> 'off',
				'choices'		=> array(
					'on'	=> __( 'On', 'baklon' ),
					'off'	=> __( 'Off', 'baklon' )
				)
			);

			/**
			 * section single_layout
			 * add field single_layout_enable_tags
			 */
			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'enable_tags',
				'label'       => __( 'Display Post Tags', 'baklon' ),
				'default'     => 'on',
				'priority'    => 10,
				'choices'     => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section single_layout
			 * add field single_layout_enable_comment_counts
			 */
			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'enable_comment_counts',
				'label'       => __( 'Display Comment Counts', 'baklon' ),
				'default'     => 'on',
				'priority'    => 10,
				'choices'     => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section single_layout
			 * add field single_layout_enable_author_box
			 */
			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'enable_author_box',
				'label'       => __( 'Display Author Box', 'baklon' ),
				'default'     => 'on',
				'priority'    => 10,
				'choices'     => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section single_layout
			 * add field single_layout_enable_prev_next_button
			 */
			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'enable_prev_next_button',
				'label'       => __( 'Display Prev Next Button', 'baklon' ),
				'default'     => 'on',
				'priority'    => 10,
				'choices'     => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			/**
			 * section single_layout
			 * add field single_layout_enable_related_article
			 */
			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'enable_related_article',
				'label'       => __( 'Display Related Article', 'baklon' ),
				'default'     => 'on',
				'priority'    => 10,
				'choices'     => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description' => __('To view the changes, go to your blog pages manually', 'baklon' ),
			);

			return $dv_field;

		}

	}

}
