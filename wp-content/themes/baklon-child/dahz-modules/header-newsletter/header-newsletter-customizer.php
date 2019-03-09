<?php
if( !class_exists( 'Dahz_Framework_Header_Newsletter_Customizer' ) ){

	Class Dahz_Framework_Header_Newsletter_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer(){
			
			$transport = array(
				'selector' 		  => '#de-site-header',
				'render_callback' => 'dahz_framework_get_header'
			);

			$dv_field = array();

			$dv_field[] = array(
				'type'      => 'custom',
				'settings'  => 'custom_title_header_contact',
				'default'   => '<div class="de-customizer-title">' . __( 'Contact', 'baklon' ) . '</div>',
			);
			$dv_field[] = array(
				'type'      => 'text',
				'settings'  => 'text',
				'label'     => __( 'Newsletter Text', 'baklon' ),
				'description'=> __('To view the changes, go to the single product page manually', 'baklon' ),
			);
			$dv_field[] = array(
				'type'     	=> 'select',
				'settings' 	=> 'contact_form',
				'label'    	=> esc_html__( 'Contact Form', 'baklon' ),
				'priority' 	=> 11,
				'default'  	=> '1',
				'choices'  => class_exists( 'WPCF7' ) ? Kirki_Helper::get_posts(
					array(
						'posts_per_page' => -1,
						'post_type'      => 'wpcf7_contact_form'
					)
				) : array( '' => __( 'Empty', 'baklon' ) ),
			);
				
			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'desktop_font_size',
				'label'    => esc_html__( 'Desktop Font Size', 'baklon' ),
				'description'=> __( 'Set your text size(px) . Default is 18px', 'baklon' ),
				'priority' => 11,
				'default'  => '18px',
				'partial_refresh' => array(
					'header_newsletter_desktop_font_size' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'text',
				'settings' => 'desktop_icon_ratio',
				'label'    => esc_html__( 'Desktop Icon Ratio', 'baklon' ),
				'description'=> __( 'Enter a size ratio, if you want the icon to appear larger than the default size, for example 1.5 or 2 to double the size', 'baklon' ),
				'priority' => 11,
				'default'  => '1',
				'partial_refresh' => array(
					'header_newsletter_desktop_icon_ratio' => $transport
				)
			);

			$dv_field[] = array(
				'type'     => 'dimension',
				'settings' => 'mobile_font_size',
				'label'    => esc_html__( 'Mobile Font Size', 'baklon' ),
				'description'=> __( 'Set your text size(px) . Default is 18px', 'baklon' ),
				'priority' => 11,
				'default'  => '18px',
				'partial_refresh' => array(
					'header_newsletter_mobile_font_size' => $transport
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
					'header_newsletter_mobile_icon_ratio' => $transport
				)
			);
			
			$dv_field[] = array(
				'type'			=> 'repeater',
				'settings'		=> 'images',
				'label'			=> '',
				'description'	=> esc_html__( 'Drag and drop to reorder image, you can add and remove your image', 'baklon' ),
				'default'		=> '1',
				'priority'		=> 11,
				'row_label'		=> array(
					'type'		=> 'field',
					'value'		=> esc_attr__( 'Your Image', 'baklon' ),
					'field'		=> 'image',
				),
				'default'		=> array(),
				'fields'		=> array(
					'image'	=> array(
						'type'			=> 'image',
						'label'			=> esc_attr__( 'Upload Image', 'baklon' ),
					),
				)
			);
			
			
			return $dv_field;

		}

	}

}