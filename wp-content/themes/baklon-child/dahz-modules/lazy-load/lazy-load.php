<?php
if( !class_exists( 'Dahz_Framework_Lazyload' ) ){

	Class Dahz_Framework_Lazyload {

        public function __construct(){

            add_filter( 'body_class', array( $this, 'dahz_framework_lazy_load_class' ) );
			
            add_filter( 'wp_get_attachment_image_attributes', array( $this, 'dahz_framework_lazy_load' ), 9999, 3 );
			
			add_action( 'dahz_framework_module_lazy-load_init', array( $this, 'dahz_framework_lazy_load_init' ) );
			
			add_filter( 'dahz_framework_default_styles', array( $this, 'dahz_framework_lazyload_style' ) );

        }
				
		private function dahz_framework_is_lazy_load(){
			
			return !is_admin() && dahz_framework_get_option( 'global_enable_lazy_load', false ) && !isset( $_GET['vc_action'] ) && !isset( $_POST['vc_inline'] );
			
		}

		public function dahz_framework_lazy_load_init( $path ){

			if( is_customize_preview() ){

				dahz_framework_include( $path . '/lazy-load-customizers.php' );

			}

		}

        public function dahz_framework_lazy_load_class( $classes ){

			$value = '';

			if( $this->dahz_framework_is_lazy_load() ){

				$value = 'de-is-lazyload-image';

			}

			return array_merge( $classes, array( $value ) );

		}

		public function dahz_framework_lazy_load( $attr, $a, $size ){

            if( $this->dahz_framework_is_lazy_load() ){
				
				if( isset( $attr['data-is-ignore-lazyload'] ) ){
					return $attr;
				}
				
				$attr['data-uk-img'] = '';
				
				$attr['class'] = $attr['class'] . ' ds-lazy-image';
				
				if( isset( $attr['src'] ) ){
					
					$attr['data-src'] = $attr['src'];
				
					unset( $attr['src'] );
										
				}
                

				if ( isset( $attr['srcset'] ) ) {

					$attr['data-srcset'] = $attr['srcset'];
					
					unset( $attr['srcset'] );
					
				}

            }

            return $attr;

        }
		
		public function dahz_framework_lazyload_style( $default_styles ){
			
			$default_styles .= sprintf(
				'
				img[data-src][src*="data:image"]{background:%1$s;}
				',
				dahz_framework_get_option( 'global_lazy_load_placeholder_color', 'rgba(0,0,0,0.1)' )
			);
			
			return $default_styles;
			
		}

	}

    new Dahz_Framework_Lazyload();

}
