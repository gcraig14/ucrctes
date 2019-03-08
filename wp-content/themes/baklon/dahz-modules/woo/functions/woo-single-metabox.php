<?php

if( !class_exists( 'Dahz_Framework_Modules_Product_Metabox' ) ){

	Class Dahz_Framework_Modules_Product_Metabox {

		function __construct(){
			
            add_action( 'dahz_framework_metabox_dahz_meta_product', array( $this, 'dahz_framework_register_panel_product_header' ), 10 );
            
			add_action( 'dahz_framework_metabox_dahz_meta_product', array( $this, 'dahz_framework_register_panel_product_content' ), 10 );
			
			add_action( 'dahz_framework_metabox_dahz_meta_product', array( $this, 'dahz_framework_register_panel_product_footer' ), 10 );
			
		}

		public function dahz_framework_register_panel_product_header( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'product-header',esc_html__('Header', 'baklon' ) );

			do_action( 'dahz_framework_metabox_before_header_dahz_meta_product', $dahz_meta );

			$dahz_meta->dahz_framework_metabox_add_field(
				'product-header',
				array(
					'id'			=> 'header_transparent_skin',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Header Transparent Skin', 'baklon' ),
					'description'	=> esc_html__( 'According to the color scheme you choose the text colors will be changed to make it more readable. If you choose theme default the displaying will correspond to the theme options settings', 'baklon' ),
					'options'		=> array(
						'inherit'			=> esc_html__( 'Inherit', 'baklon' ),
						'no-transparency'	=> esc_html__( 'No Transparency', 'baklon' ),
						'transparent-light'	=> esc_html__( 'Light', 'baklon' ),
						'transparent-dark'	=> esc_html__( 'Dark', 'baklon' ),
					)
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'product-header',
				array(
					'id'			=> 'overide_main_menu',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Menu', 'baklon' ),
					'description'	=> esc_html__( 'Overide Main menu', 'baklon' ),
					'options'		=> dahz_framework_get_all_menu(),
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'product-header',
				array(
					'id'			=> 'before_header',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Before Header', 'baklon' ),
					'description'	=> esc_html__('Display a custom area before & after header area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'product-header',
				array(
					'id'			=> 'after_header',
					'type'			=> 'select',
					'title'			=> esc_html__( 'After Header', 'baklon' ),
					'description'	=> esc_html__('Display a custom area before & after header area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

        }
        
        public function dahz_framework_register_panel_product_content( $dahz_meta ) {
           
			$dahz_meta->dahz_framework_metabox_add_section( 'product-content',esc_html__('Content', 'baklon' ) );

			$dahz_meta->dahz_framework_metabox_add_field(
				'product-content',
				array(
					'id'			=> 'video_content_modal',
					'type'			=> 'textarea',
					'title'			=> esc_html__( 'Video Product', 'baklon' ),
					'description'	=> esc_html__( 'Embed Your Video Detail Product Here', 'baklon' ),
					'default'		=> ''
				)
			);

        }

		public function dahz_framework_register_panel_product_footer( $dahz_meta ){

			$dahz_meta->dahz_framework_metabox_add_section( 'footer-product',esc_html__('Footer', 'baklon' ) );

			do_action( 'dahz_framework_metabox_before_footer_dahz_meta_product', $dahz_meta );

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-product',
				array(
					'id'			=> 'before_footer',
					'type'			=> 'select',
					'title'			=> esc_html__( 'Before Footer', 'baklon' ),
					'description'	=> esc_html__('Display a custom area before footer area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

			$dahz_meta->dahz_framework_metabox_add_field(
				'footer-product',
				array(
					'id'			=> 'after_footer',
					'type'			=> 'select',
					'title'			=> esc_html__( 'After Footer', 'baklon' ),
					'description'	=> esc_html__('Display a custom area after footer area. You can use custom content block to display globally', 'baklon' ),
					'options'		=> dahz_framework_get_content_block( true ),
					'default'		=> 'inherit'
				)
			);

		}

	}

	new Dahz_Framework_Modules_Product_Metabox();

}
