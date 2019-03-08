<?php

if ( !class_exists( 'Dahz_Framework_Modules_Color_General_Customizer' ) ) {

	Class Dahz_Framework_Modules_Color_General_Customizer extends Dahz_Framework_Customizer_Extend{

		public function dahz_framework_set_customizer() {

			$dv_field = array();

			/**
			 * section general
			 * add field main_accent_color_regular
			 */
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'pagination_text_color',
				'label'       => __( 'Pagination Color Regular', 'baklon' ),
				'description' => esc_attr__( 'Main Accent Pagination Text Color Regular', 'baklon' ),
				'default'     => '#0088CC',
				'transport'		=> 'postMessage',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'pagination_text_color_active',
				'label'       => __( 'Pagination Color Active & Hover', 'baklon' ),
				'description' => esc_attr__( 'Main Accent Pagination Text Color Active & Hover', 'baklon' ),
				'default'     => '#0088CC',
				'transport'		=> 'postMessage',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'pagination_bg_color_active',
				'label'       => __( 'Pagination Color Background', 'baklon' ),
				'description' => esc_attr__( 'Main Accent Pagination Background Color when Active', 'baklon' ),
				'default'     => '#0088CC',
				'transport'		=> 'postMessage',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'pagination_bg_color_hover',
				'label'       => __( 'Pagination Color Background', 'baklon' ),
				'description' => esc_attr__( 'Main Accent Pagination Background Color when Hover', 'baklon' ),
				'default'     => '#0088CC',
				'transport'		=> 'postMessage',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'pagination_border_color',
				'label'       => __( 'Pagination Border Color', 'baklon' ),
				'description' => esc_attr__( 'Main Accent Pagination Border Color', 'baklon' ),
				'default'     => '#0088CC',
				'transport'		=> 'postMessage',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'			=> 'multicolor',
				'settings'		=> 'main_accent_color_regular',
				'label'			=> __( 'Accent Color ', 'baklon' ),
				'description'	=> __( 'Main accent (link)', 'baklon' ),
				'default'		=> array(
					'regular'	=> '#686868',
					'hover'		=> '#a2a2a2',
				),
				'choices'		=> array(
					'regular'	=> esc_attr__( 'Regular', 'baklon' ),
					'hover'		=> esc_attr__( 'Hover', 'baklon' ),
				),
				'transport'		=> 'postMessage',
			);

			/**
			 * section general
			 * add field hover_style
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'select',
				'settings'	=> 'hover_style',
				'label'		=> __( 'Hover Style', 'baklon' ),
				'default'	=> 'change-color',
				'choices'	=> array(
					'change-color'		=> esc_attr__( 'Change Color', 'baklon' ),
					'underline'	=> esc_attr__( 'Underline', 'baklon' ),
				),
			);

			/**
			 * section general
			 * add field body_text_color
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'color',
				'choices'	=> array(
					'alpha'	=> true,
				),
				'settings'	=> 'body_text_color',
				'label'		=> __( 'Body Text Color', 'baklon' ),
				'default'	=> '#67686e',
				'transport'	=> 'postMessage',
				'js_vars'	=> array(
					array(
						'element'	=> 'p, li, .de-product-single__wrapper .sku_wrapper span, .yith-wcwl-add-to-wishlist span',
						'function'	=> 'css',
						'property'	=> 'color'
					),
				),
			);

			/**
			 * section general
			 * add field heading_text_color
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'color',
				'choices'	=> array(
					'alpha'	=> true,
				),
				'settings'	=> 'heading_text_color',
				'label'		=> __( 'Heading Text Color', 'baklon' ),
				'default'	=> '#0c0c0c',
				'transport'	=> 'postMessage',
				'js_vars'	=> array(
					array(
						'element'	=> 'h1, h2:not(.de-widget-title):not(.widgettitle), h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .de-product-single__wrapper .price del, .de-product-single__wrapper .price ins, .de-product-single__wrapper .price del span, .de-product-single__wrapper .price ins span, .woocommerce #reviews .comment-form label',
						'function'	=> 'css',
						'property'	=> 'color'
					),
				),
			);

			/**
			 * section general
			 * add field extra_color
			 */
			
			/**
			 * section general
			 * add field general_widget_title_color
			 */
			$dv_field[] = array(
				'priority'		=> 10,
				'type'			=> 'color',
				'choices'		=> array(
					'alpha'	=> true,
				),
				'settings'		=> 'general_widget_title_color',
				'label'			=> __( 'Widget Title Color', 'baklon' ),
				'description'	=> __( 'Color for widget title on sidebar', 'baklon' ),
				'default'		=> '#0c0c0c',
				'transport'		=> 'postMessage',
				'js_vars'		=> array(
					array(
						'element'  => '#de-content-wrapper .de-widget-title, #de-content-wrapper .widgettitle',
						'function' => 'css',
						'property' => 'color'
					),
				),
			);

			/**
			 * section general
			 * add field divider_color
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'color',
				'choices'	=> array(
					'alpha'	=> true,
				),
				'settings'	=> 'divider_color',
				'label'		=> __( 'Divider Color', 'baklon' ),
				'default'	=> '#e5e5e5',
				'transport'	=> 'postMessage',
				'js_vars'	=> array(
					array(
						'element'	=> '.widget ul li, .widget.widget_search input.de-form-search, .widget.widget_search i, .widget.widget_tag_cloud .tagcloud a, .de-archive__content .de-social-share, .achilles .de-archive__item .de-social-share, .aleixo .de-archive__item:first-child .de-social-share, .alika .de-archive__item:first-child .de-social-share, .alfio .de-archive__item:first-child .de-social-share, .de-separator, table tbody tr, table tbody tr:nth-child(1), .de-single__section-social .de-social-share, .de-single__comments-area-item, .woocommerce-cart .entry-content .woocommerce table thead, .woocommerce-cart .entry-content .woocommerce table tbody tr.cart_item, .woocommerce-cart .entry-content .woocommerce .cart_totals h4, .woocommerce-cart .entry-content .woocommerce .cart_totals table tr, .woocommerce-cart .entry-content .woocommerce table tbody td.actions input#coupon_code, .woocommerce-cart .entry-content .woocommerce table tbody td.product-quantity input, .woocommerce-cart .entry-content .woocommerce table tbody .coupon h4, .woocommerce-cart .entry-content .woocommerce .cart-collaterals, .woocommerce form.woocommerce-shipping-calculator select, .woocommerce form.woocommerce-shipping-calculator input, form.woocommerce-checkout input:not(.de-btn), form.woocommerce-checkout table thead, form.woocommerce-checkout table tfoot tr, form.woocommerce-checkout .woocommerce-checkout-payment ul li, form.woocommerce-checkout .select2-container .select2-choice, form.woocommerce-checkout textarea, form.woocommerce-checkout .de-order-details, form.track_order input, .de-customer-account__option a, .de-account-registration input, .woocommerce-MyAccount-content input, .woocommerce-MyAccount-content .select2-container .select2-choice, .woocommerce-account .woocommerce-MyAccount-navigation > ul li.woocommerce-MyAccount-navigation-link, .woocommerce #reviews #review_form_wrapper, .woocommerce #reviews .comment-form-author input, .woocommerce #reviews .comment-form-email input, .widget.widget_archive select, .de-widget__aboutme, .widget.widget_categories select',
						'function'	=> 'css',
						'property'	=> 'border-color'
					),
				),
			);

			/**
			 * section general
			 * add field dot_nav_color
			 */
			$dv_field[] = array(
				'priority'	=> 10,
				'type'		=> 'color',
				'choices'	=> array(
					'alpha'	=> true,
				),
				'settings'	=> 'dot_nav_color',
				'label'		=> __( 'Dot Nav Color', 'baklon' ),
				'default'	=> '#e5e5e5',
				'transport'	=> 'postMessage',
				'js_vars'	=> array(
					array(
						'element'	=> '.widget ul li, .widget.widget_search input.de-form-search, .widget.widget_search i, .widget.widget_tag_cloud .tagcloud a, .de-archive__content .de-social-share, .achilles .de-archive__item .de-social-share, .aleixo .de-archive__item:first-child .de-social-share, .alika .de-archive__item:first-child .de-social-share, .alfio .de-archive__item:first-child .de-social-share, .de-separator, table tbody tr, table tbody tr:nth-child(1), .de-single__section-social .de-social-share, .de-single__comments-area-item, .woocommerce-cart .entry-content .woocommerce table thead, .woocommerce-cart .entry-content .woocommerce table tbody tr.cart_item, .woocommerce-cart .entry-content .woocommerce .cart_totals h4, .woocommerce-cart .entry-content .woocommerce .cart_totals table tr, .woocommerce-cart .entry-content .woocommerce table tbody td.actions input#coupon_code, .woocommerce-cart .entry-content .woocommerce table tbody td.product-quantity input, .woocommerce-cart .entry-content .woocommerce table tbody .coupon h4, .woocommerce-cart .entry-content .woocommerce .cart-collaterals, .woocommerce form.woocommerce-shipping-calculator select, .woocommerce form.woocommerce-shipping-calculator input, form.woocommerce-checkout input:not(.de-btn), form.woocommerce-checkout table thead, form.woocommerce-checkout table tfoot tr, form.woocommerce-checkout .woocommerce-checkout-payment ul li, form.woocommerce-checkout .select2-container .select2-choice, form.woocommerce-checkout textarea, form.woocommerce-checkout .de-order-details, form.track_order input, .de-customer-account__option a, .de-account-registration input, .woocommerce-MyAccount-content input, .woocommerce-MyAccount-content .select2-container .select2-choice, .woocommerce-account .woocommerce-MyAccount-navigation > ul li.woocommerce-MyAccount-navigation-link, .woocommerce #reviews #review_form_wrapper, .woocommerce #reviews .comment-form-author input, .woocommerce #reviews .comment-form-email input, .widget.widget_archive select, .de-widget__aboutme, .widget.widget_categories select',
						'function'	=> 'css',
						'property'	=> 'border-color'
					),
				),
			);


			return $dv_field;
		}

	}

}
