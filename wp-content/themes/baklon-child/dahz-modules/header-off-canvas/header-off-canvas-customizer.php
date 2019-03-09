<?php
if( !class_exists( 'Dahz_Framework_Header_Off_Canvas_Customizer' ) ){

	Class Dahz_Framework_Header_Off_Canvas_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			//header_off_canvas

			$transport = array(
				'selector' 		  => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);

			$dv_field[] = array(
				'type'     => 'radio-image',
				'settings' => 'style',
				'label'    => __( 'Off Canvas Position', 'baklon' ),
				'default'  => 'from-right',
				'priority' => 11,
				'choices'  => array(
					'from-left'  => get_template_directory_uri() . '/assets/images/customizer/df_off-canvas-left.svg',
					'from-right' => get_template_directory_uri() . '/assets/images/customizer/df_off-canvas-right.svg',
				),
				'partial_refresh' => array(
					'header_off_canvas_style' => $transport
				)
			);
			
			$dv_field[] = array(
				'type'     => 'radio-image',
				'settings' => 'desktop_icon_style',
				'label'    => __( 'Desktop Icon', 'baklon' ),
				'default'  => 'df_off-canvas-left',
				'priority' => 11,
				'choices'  => array(
					'df_off-canvas-left'  => get_template_directory_uri() . '/assets/images/customizer/df_off-left.svg',
					'df_off-canvas-right' => get_template_directory_uri() . '/assets/images/customizer/df_off-right.svg',
				),
				'partial_refresh' => array(
					'header_off_canvas_desktop_icon_style' => $transport
				)
			);
			
			$dv_field[] = array(
				'type'     => 'text',
				'settings' => 'desktop_icon_ratio',
				'label'    => esc_html__( 'Desktop Icon Ratio', 'baklon' ),
				'priority' => 11,
				'description'=> __( 'Enter a size ratio, if you want the icon to appear larger than the default size, for example 1.5 or 2 to double the size', 'baklon' ),
				'default'  => '1',
				'partial_refresh' => array(
					'header_off_canvas_desktop_icon_ratio' => $transport
				)
			);
			
			$dv_field[] = array(
				'type'     => 'radio-image',
				'settings' => 'mobile_icon_style',
				'label'    => __( 'Mobile Icon', 'baklon' ),
				'default'  => 'df_off-canvas-left',
				'priority' => 11,
				'choices'  => array(
					'df_off-canvas-left'  => get_template_directory_uri() . '/assets/images/customizer/df_off-left.svg',
					'df_off-canvas-right' => get_template_directory_uri() . '/assets/images/customizer/df_off-right.svg',
				),
				'partial_refresh' => array(
					'header_off_canvas_mobile_icon_style' => $transport
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
					'header_off_canvas_mobile_icon_ratio' => $transport
				)
			);

			$dv_field[] = array(
				'type'        => 'select',
				'settings'    => 'content_block',
				'label'       => esc_html__( 'Off Canvas Content', 'baklon' ),
				'description' => esc_html__('Display custom content using post type content block', 'baklon' ),
				'default'     => '',
				'priority'    => 11,
				'multiple'    => 1,
				'choices'     => dahz_framework_get_content_block(),
				'partial_refresh' => array(
					'header_off_canvas_content_block' => $transport
				)
			);

			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'animation',
				'priority'	=> 11,
				'label'		=> esc_html__( 'Animation Modes', 'baklon' ),
				'default'	=> 'slide',
				'choices'	=> array(
					'none'	=> __( 'None', 'baklon' ),
					'slide'	=> __( 'Slide', 'baklon' ),
					'push'	=> __( 'Push', 'baklon' ),
					'reveal'=> __( 'Reveal', 'baklon' ),
				),
				'partial_refresh' => array(
					'header_off_canvas_animation' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'checkbox',
				'settings' => 'enable_overlay',
				'label'    => esc_html__( 'Enable Overlay', 'baklon' ),
				'default'  => '0',
				'priority' => 11,
				'partial_refresh' => array(
					'header_off_canvas_enable_overlay' => $transport
				)
			);

			$dv_field[] = array(
				'type'       => 'color',
				'choices'     => array(
					'alpha' => true,
				),
				'settings'   => 'icon_close_color',
				'label'      => __( 'Icon Close Color', 'baklon' ),
				'default'    => '#000000',
				'priority'	 => 11,
				'transport'  => 'postMessage',
				'js_vars'    => array(
					array(
						'element'  => '.de-featured-area,.de-archive__header,.de-page__header,#de-archive-content.de-content-boxed,#de-archive-content.de-content-framed,#de-archive-content.de-content-fullwidth,#page.de-content-fullwidth,.de-page.de-content-boxed,.de-page.de-content-framed,.de-page.de-content-fullwidth,.de-single.de-content-boxed,.de-single.de-content-framed,.de-single.de-content-fullwidth,.de-404.de-content-boxed,.de-404.de-content-framed,.de-404.de-content-fullwidth,.calista,.coralie,.centaur,.catalina,.cloe,.de-portfolio-single,.de-sc-post-carousel__content,#de-product-container',
						'function' => 'css',
						'property' => 'background-color'
					),
				)
			);
			$dv_field[] = array(
				'type'       => 'color',
				'choices'     => array(
					'alpha' => true,
				),
				'settings'   => 'icon_close_hover_color',
				'label'      => __( 'Icon Close Hover Color', 'baklon' ),
				'default'    => '#898484',
				'priority'	 => 11,
				'transport'  => 'postMessage',
				'js_vars'    => array(
					array(
						'element'  => '.de-featured-area,.de-archive__header,.de-page__header,#de-archive-content.de-content-boxed,#de-archive-content.de-content-framed,#de-archive-content.de-content-fullwidth,#page.de-content-fullwidth,.de-page.de-content-boxed,.de-page.de-content-framed,.de-page.de-content-fullwidth,.de-single.de-content-boxed,.de-single.de-content-framed,.de-single.de-content-fullwidth,.de-404.de-content-boxed,.de-404.de-content-framed,.de-404.de-content-fullwidth,.calista,.coralie,.centaur,.catalina,.cloe,.de-portfolio-single,.de-sc-post-carousel__content,#de-product-container',
						'function' => 'css',
						'property' => 'background-color'
					),
				)
			);

			/**
			 * section general_layout
			 * add field body_bg_image
			 */
			$dv_field[] = array(
				'type' 			=> 'image',
				'settings' 		=> 'bg_image',
				'label' 		=> '',
				'description' 	=> __( 'Upload your background image', 'baklon' ),
				'help' 			=> '',
				'default' 		=> '',
				'priority'		=> 11,
				'transport'		=> 'postMessage',
				'js_vars'		=> array(
					array(
						'element'  => '.de-featured-area,.de-archive__header,.de-page__header,#de-archive-content.de-content-boxed,#de-archive-content.de-content-framed,#de-archive-content.de-content-fullwidth,#page.de-content-fullwidth,.de-page.de-content-boxed,.de-page.de-content-framed,.de-page.de-content-fullwidth,.de-single.de-content-boxed,.de-single.de-content-framed,.de-single.de-content-fullwidth,.de-404.de-content-boxed,.de-404.de-content-framed,.de-404.de-content-fullwidth,.calista,.coralie,.centaur,.catalina,.cloe,.de-portfolio-single,.de-sc-post-carousel__content,#de-product-container',
						'function' => 'css',
						'property' => 'background-image'
					)
				),
			);

			/**
			 * section general_layout
			 * add field body_bg_size
			 */
			$dv_field[] = array(
				'type'        	=> 'select',
				'settings'     	=> 'bg_size',
				'label'       	=> __( 'Image Size', 'baklon' ),
				'transport' 	=> 'postMessage',
				'default'     	=> 'cover',
				'priority'		=> 11,
				'choices'     	=> array(
					'auto' 		=> __( 'Auto', 'baklon' ),
					'cover' 	=> __( 'Cover', 'baklon' ),
					'contain' 	=> __( 'Contain', 'baklon' ),
				),
				'js_vars' 		=> array(
					array(
						'element'  => '.de-featured-area,.de-archive__header,.de-page__header,#de-archive-content.de-content-boxed,#de-archive-content.de-content-framed,#de-archive-content.de-content-fullwidth,#page.de-content-fullwidth,.de-page.de-content-boxed,.de-page.de-content-framed,.de-page.de-content-fullwidth,.de-single.de-content-boxed,.de-single.de-content-framed,.de-single.de-content-fullwidth,.de-404.de-content-boxed,.de-404.de-content-framed,.de-404.de-content-fullwidth,.calista,.coralie,.centaur,.catalina,.cloe,.de-portfolio-single,.de-sc-post-carousel__content,#de-product-container',
						'function' => 'css',
						'property' => 'background-size'
					)
				)
			);

			/**
			 * section general_layout
			 * add field body_bg_repeat
			 */
			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'bg_repeat',
				'label'		=> __( 'Image Repeat', 'baklon' ),
				'section'	=> 'general_layout',
				'transport'	=> 'postMessage',
				'priority'	=> 11,
				'default'	=> 'no-repeat',
				'choices'	=> array(
					'repeat'	=> __( 'Repeat', 'baklon' ),
					'repeat-x'	=> __( 'Repeat-X', 'baklon' ),
					'repeat-y'	=> __( 'Repeat-Y', 'baklon' ),
					'no-repeat'	=> __( 'No-Repeat', 'baklon' ),
				),
				'js_vars' 		=> array(
					array(
						'element'  => '.de-featured-area,.de-archive__header,.de-page__header,#de-archive-content.de-content-boxed,#de-archive-content.de-content-framed,#de-archive-content.de-content-fullwidth,#page.de-content-fullwidth,.de-page.de-content-boxed,.de-page.de-content-framed,.de-page.de-content-fullwidth,.de-single.de-content-boxed,.de-single.de-content-framed,.de-single.de-content-fullwidth,.de-404.de-content-boxed,.de-404.de-content-framed,.de-404.de-content-fullwidth,.calista,.coralie,.centaur,.catalina,.cloe,.de-portfolio-single,.de-sc-post-carousel__content,#de-product-container',
						'function' => 'css',
						'property' => 'background-repeat'
					)
				)
			);

			/**
			 * section general_layout
			 * add field body_bg_position
			 */
			$dv_field[] = array(
				'type'		=> 'select',
				'settings'	=> 'bg_position',
				'label'		=> __( 'Image Position', 'baklon' ),
				'transport'	=> 'postMessage',
				'default'	=> 'left top',
				'priority'	=> 11,
				'choices'	=> array(
					'left top'		=> __( 'Left Top', 'baklon' ),
					'center top'	=> __( 'Center Top', 'baklon' ),
					'right top'		=> __( 'Right Top', 'baklon' ),
					'left center'	=> __( 'Left Center', 'baklon' ),
					'center center'	=> __( 'Center Center', 'baklon' ),
					'right center'	=> __( 'Right Center', 'baklon' ),
					'left bottom'	=> __( 'Left Bottom', 'baklon' ),
					'center bottom'	=> __( 'Center Bottom', 'baklon' ),
					'right bottom'	=> __( 'Right Bottom', 'baklon' ),
				),
				'js_vars' 		=> array(
					array(
						'element'  => '.de-featured-area,.de-archive__header,.de-page__header,#de-archive-content.de-content-boxed,#de-archive-content.de-content-framed,#de-archive-content.de-content-fullwidth,#page.de-content-fullwidth,.de-page.de-content-boxed,.de-page.de-content-framed,.de-page.de-content-fullwidth,.de-single.de-content-boxed,.de-single.de-content-framed,.de-single.de-content-fullwidth,.de-404.de-content-boxed,.de-404.de-content-framed,.de-404.de-content-fullwidth,.calista,.coralie,.centaur,.catalina,.cloe,.de-portfolio-single,.de-sc-post-carousel__content,#de-product-container',
						'function' => 'css',
						'property' => 'background-position'
					)
				)
			);

			return $dv_field;

		}

	}

}
