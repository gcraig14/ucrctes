<?php
/*
 * 1. class : Dahz_Framework_Modules_Portfolio_Single_Customizer
 */
if( !class_exists( 'Dahz_Framework_Modules_Portfolio_Single_Customizer' ) ){

	Class Dahz_Framework_Modules_Portfolio_Single_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer(){

			$dv_field = array();

			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => "custom_title_portfolio_single_layout",
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__('Layout', 'baklon' ) .'</div>',
			);

			$dv_field[] = array(
				'type'        => 'switch',
				'settings'    => 'prev_next',
				'label'       => __( 'Enable Prev Next', 'baklon' ),
				'default'     => 'on',
				'priority'    => 10,
				// 'transport' => 'postMessage',
				'choices'     => array(
					'on'  => esc_attr__( 'On', 'baklon' ),
					'off' => esc_attr__( 'Off', 'baklon' ),
				),
				'description'=> __( 'To view the changes, go to your portfolio pages manually', 'baklon' ),
			);
			
			$dv_field[] = array(
				'type'		=> 'text',
				'settings'	=> 'title_related',
				'label'		=> __( 'Related Portfolio Title', 'baklon' ),
				'default'	=> 'Related Portfolio',
				'description'=> __( 'Change the Portfolio Title', 'baklon' ),
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
				'type'      => 'select',
				'settings'  => 'desktop_column',
				'label'     => __( 'Desktop Column', 'baklon' ),
				'transport' => 'postMessage',
				'default'   => '1-4',
				'choices'   => array(
					'1-1'   => __( '100%', 'baklon' ),
					'5-6'   => __( '83%', 'baklon' ),
					'4-5'   => __( '80%', 'baklon' ),
					'3-5'   => __( '60%', 'baklon' ),
					'1-2'  	=> __( '50%', 'baklon' ),
					'1-3'   => __( '33%', 'baklon' ),
					'1-4'   => __( '25%', 'baklon' ),
					'1-5'   => __( '20%', 'baklon' ),
					'1-6'   => __( '16%', 'baklon' ),
				),
				'description' => __('To view the changes, go to the single product page manually', 'baklon' ),
			);

			/**
			 * section archive_layout
			 * add field single_post_recent_tab_lndscp_column
			 */
			$dv_field[] = array(
				'type'      => 'select',
				'settings'  => 'tablet_landscape_column',
				'label'     => __( 'Tablet Landscape Column', 'baklon' ),
				'transport' => 'postMessage',
				'default'   => '1-4',
				'choices'   => array(
					'1-1'   => __( '100%', 'baklon' ),
					'5-6'   => __( '83%', 'baklon' ),
					'4-5'   => __( '80%', 'baklon' ),
					'3-5'   => __( '60%', 'baklon' ),
					'1-2'  	=> __( '50%', 'baklon' ),
					'1-3'   => __( '33%', 'baklon' ),
					'1-4'   => __( '25%', 'baklon' ),
					'1-5'   => __( '20%', 'baklon' ),
					'1-6'   => __( '16%', 'baklon' ),
				),
				'description' => __('To view the changes, go to the single product page manually', 'baklon' ),
			);
			

			/**
			 * section archive_layout
			 * add field single_post_recent_phone_lndscp_column
			 */
			$dv_field[] = array(
				'type'      => 'select',
				'settings'  => 'phone_landscape_column',
				'label'     => __( 'Phone Landscape Column', 'baklon' ),
				'transport' => 'postMessage',
				'default'   => '3-5',
				'choices'   => array(
					'1-1'   => __( '100%', 'baklon' ),
					'5-6'   => __( '83%', 'baklon' ),
					'4-5'   => __( '80%', 'baklon' ),
					'3-5'   => __( '60%', 'baklon' ),
					'1-2'  	=> __( '50%', 'baklon' ),
					'1-3'   => __( '33%', 'baklon' ),
					'1-4'   => __( '25%', 'baklon' ),
					'1-5'   => __( '20%', 'baklon' ),
					'1-6'   => __( '16%', 'baklon' ),
				),
				'description' => __('To view the changes, go to the single product page manually', 'baklon' ),
			);

			/**
			 * section archive_layout
			 * add field single_post_recent_phone_ptrt_column
			 */
			$dv_field[] = array(
				'type'      => 'select',
				'settings'  => 'phone_potrait_column',
				'label'     => __( 'Phone Potrait Column', 'baklon' ),
				'transport' => 'postMessage',
				'default'   => '3-5',
				'choices'   => array(
					'1-1'   => __( '100%', 'baklon' ),
					'5-6'   => __( '83%', 'baklon' ),
					'4-5'   => __( '80%', 'baklon' ),
					'3-5'   => __( '60%', 'baklon' ),
					'1-2'  	=> __( '50%', 'baklon' ),
					'1-3'   => __( '33%', 'baklon' ),
					'1-4'   => __( '25%', 'baklon' ),
					'1-5'   => __( '20%', 'baklon' ),
					'1-6'   => __( '16%', 'baklon' ),
				),
				'description' => __('To view the changes, go to the single product page manually', 'baklon' ),
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

			return $dv_field;

		}

	}

}