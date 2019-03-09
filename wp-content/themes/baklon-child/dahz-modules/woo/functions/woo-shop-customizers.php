<?php
/*
 * 1. class : Dahz_Framework_Modules_Woo_Shop_Customizer
 */
if ( !class_exists( 'Dahz_Framework_Modules_Woo_Shop_Customizer' ) ) {

	Class Dahz_Framework_Modules_Woo_Shop_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer() {

			$dv_field = array();

			$img_url = get_template_directory_uri() . '/assets/images/customizer/woocommerce/';

			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 10,
				'settings'	=> 'custom_title_layout',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">Layout</div>',
			);
			$dv_field[] = array(
				'type'		=> 'checkbox',
				'priority'	=> 10,
				'settings'	=> 'filter_sidebar_area',
				'label'		=> __( 'Display Sidebar Area', 'baklon' ),
				'default'	=> '1',
			);
			$dv_field[] = array(
				'type'				=> 'radio-image',
				'priority'			=> 10,
				'settings'			=> 'sidebar_position',
				'label'				=> __( 'Sidebar Position', 'baklon' ),
				'transport'			=> 'refresh',
				'default'			=> 'left',
				'multiple'			=> 1,
				'choices'			=> array(
					'left'			=> $img_url . 'df_shop-sidebar-left.svg',
					'right'			=> $img_url . 'df_shop-sidebar-right.svg',
				),
			);
			$dv_field[] = array(
				'type'		=> 'switch',
				'priority'	=> 10,
				'settings'	=> 'is_hide_rating',
				'label'		=> __( 'hide stars on archive & shortcode', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 'off',
				'choices'	=> array(
					'on'	=> esc_attr__( 'On', 'baklon' ),
					'off'	=> esc_attr__( 'Off', 'baklon' )
				)
			);
			$dv_field[] = array(
				'type'		=> 'checkbox',
				'priority'	=> 10,
				'settings'	=> 'display_brand_category',
				'label'		=> __( 'Display Category', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> '1',
			);
			$dv_field[] = array(
				'type'		=> 'slider',
				'priority'	=> 10,
				'settings'	=> 'desktop_column',
				'label'		=> __( 'Column Desktop', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 3,
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 6,
					'step'	=> 1,
				),
			);
			$dv_field[] = array(
				'type'		=> 'slider',
				'priority'	=> 10,
				'settings'	=> 'tablet_column',
				'label'		=> __( 'Column Tablet Landscape', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 2,
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 6,
					'step'	=> 1,
				),
			);
			$dv_field[] = array(
				'type'		=> 'slider',
				'priority'	=> 10,
				'settings'	=> 'mobile_column',
				'label'		=> __( 'Column Mobile Potrait', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 1,
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 6,
					'step'	=> 1,
				),
			);
			$dv_field[] = array(
				'type'		=> 'slider',
				'priority'	=> 10,
				'settings'	=> 'mobile_landscape_column',
				'label'		=> __( 'Column Mobile Landscape', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 2,
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 6,
					'step'	=> 1,
				),
			);
			$dv_field[] = array(
				'type'		=> 'slider',
				'priority'	=> 10,
				'settings'	=> 'product_per_page',
				'label'		=> __( 'Product per-Page', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 12,
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 48,
					'step'	=> 1,
				),
			);
			$dv_field[] = array(
				'type'		=> 'select',
				'priority'	=> 10,
				'settings'	=> 'column_gap',
				'label'		=> __( 'Column Gap', 'baklon' ),
				'default'	=> '',
				'multiple'	=> 1,
				'choices'	=> array(
					'' 					=> __( 'Default', 'baklon' ),
					'uk-grid-small'		=> __( 'Small', 'baklon' ),
					'uk-grid-medium'	=> __( 'Medium', 'baklon' ),
					'uk-grid-large'		=> __( 'Large', 'baklon' ),
					'uk-grid-collapse'	=> __( 'Collapse', 'baklon' ),
				),
			);
			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 10,
				'settings'	=> 'custom_title_hover_animation',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">'. __( 'Transition & Hover Transition', 'baklon' ) .'</div>',
			);
			$dv_field[] = array(
				'type'		=> 'checkbox',
				'priority'	=> 10,
				'settings'	=> 'image_hover_animation',
				'label'		=> __( 'Image Hover Animation', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> '1',
			);

			$dv_field[] = array(
				'type'		=> 'radio-image',
				'priority'	=> 10,
				'settings'	=> 'sale_flash',
				'label'		=> __( 'Sale Flash', 'baklon' ),
				'transport'	=> 'refresh',
				'default'	=> 'text',
				'multiple'	=> 1,
				'choices'	=> array(
					'disable'	 => $img_url . 'df_badge-none.svg',
					'text'		 => $img_url . 'df_badge-sale.svg',
					'percentage' => $img_url . 'df_badge-percent.svg',
				)
			);

			/**
			 * Woocommerce Shop
			 * Section Shop Homepage
			 */
			$dv_field[] = array(
				'type'		=> 'custom',
				'priority'	=> 10,
				'settings'	=> 'custom_title_shop_homepage',
				'label'		=> '',
				'default'	=> '<div class="de-customizer-title">Shop Homepage</div>',
			);
			/* Shop Homepage: Shop Homepage Replace Header */
			$dv_field[] = array(
				'type'			=> 'select',
				'priority'		=> 10,
				'settings'		=> 'element_replace_homepage_title',
				'label'			=> __( 'Add Element After Header', 'baklon' ),
				'choices'     	=> dahz_framework_get_content_block(),
				'transport'		=> 'postMessage',
				'description'	=> __('Add custom HTML code here', 'baklon' ),
			);
			/* Shop Homepage: Shop Homepage Content */
			$dv_field[] = array(
				'type'			=> 'select',
				'priority'		=> 10,
				'settings'		=> 'element_replace_homepage_content',
				'label'			=> __( 'Shop Homepage Content', 'baklon' ),
				'choices'     	=> dahz_framework_get_content_block(),
				'transport'		=> 'postMessage',
				'description'	=> __('Add custom HTML code here', 'baklon' ),
			);
			/* End of Section Shop Homepage */

			return $dv_field;

		}

	}

}
