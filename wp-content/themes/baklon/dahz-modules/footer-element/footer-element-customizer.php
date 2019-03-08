<?php
if( !class_exists( 'Dahz_Framework_Footer_Element_Customizer' ) ){

	Class Dahz_Framework_Footer_Element_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer(){

			$dv_field = array();
			$transport = array(
				'selector' 		  => '#de-site-footer',
				'render_callback' => 'dahz_framework_get_footer'
			);
			
			$dv_field[]	= array(
				'type'		=> 'custom',
				'settings'	=> 'custom_title_section_footer_logo',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Footer Logo', 'baklon' ) .'</div>',
				'priority'	=> 12,
			);
			
			$dv_field[] = array(
				'type'      => 'image',
				'settings'  => 'logo_normal',
				'label'     => esc_html__( 'Normal Logo', 'baklon' ),
				'priority'  => 12,
				'partial_refresh' => array(
					'footer_element_logo_normal' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'image',
				'settings'  => 'logo_retina',
				'label'     => esc_html__( 'Retina Logo', 'baklon' ),
				'priority'  => 12,
				'partial_refresh' => array(
					'footer_element_logo_retina' => $transport
				)
			);
			
			$dv_field[]	= array(
				'type'		=> 'custom',
				'settings'	=> 'custom_title_section_payment_logo',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Footer Payment Logo', 'baklon' ) .'</div>',
				'priority'	=> 12,
			);
			
			$dv_field[] = array(
				'type'      => 'image',
				'settings'  => 'payment_logo_normal',
				'label'     => esc_html__( 'Payment Normal Logo', 'baklon' ),
				'priority'  => 12,
				'partial_refresh' => array(
					'footer_element_payment_logo_normal' => $transport
				)
			);

			$dv_field[] = array(
				'type'      => 'image',
				'settings'  => 'payment_logo_retina',
				'label'     => esc_html__( 'Payment Retina Logo', 'baklon' ),
				'priority'  => 12,
				'partial_refresh' => array(
					'footer_element_payment_logo_retina' => $transport
				)
			);
			
			$dv_field[]	= array(
				'type'		=> 'custom',
				'settings'	=> 'custom_title_section_stacked_element',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Footer item in column', 'baklon' ) .'</div>',
				'priority'	=> 12,
			);
			
			$dv_field[] = array(
				'type'		=> 'switch',
				'settings'	=> 'enable_stacked_item',
				'label'		=> __( 'Enable stacked item in column', 'baklon' ),
				'default'	=> 'on',
				'priority'	=> 12,
				'choices'	=> array(
					'on'	=> __( 'On', 'baklon' ),
					'off'	=> __( 'Off', 'baklon' )
				),
				'partial_refresh' => array(
					'footer_element_enable_stacked_item' => $transport
				)
			);
			
			return $dv_field;

		}

	}

}