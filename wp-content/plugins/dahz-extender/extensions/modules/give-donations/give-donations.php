<?php

if ( !class_exists( 'Dahzextender_Give_Donations' ) ) {
	/**
	 * Dahzextender Give Donations
	 *
	 * @since 1.0
	 * @author Dahz | Eka
	 */
	Class Dahzextender_Give_Donations {

		public function __construct() {
			
			add_action( 'dahzextender_module_give-donations_init', array( $this, 'dahzextender_give_donations_init' ) );
			
			add_filter( 'template_include', array( $this, 'dahzextender_template_loader' ), 100 );
			
			add_filter( 'give_template_paths', array( $this, 'dahzextender_give_get_template_part' ), 10 );
			
			add_filter( 'give_get_template', array( $this, 'dahzextender_give_get_template' ), 10, 5 );
			
			add_filter( 'dahz_framework_attributes_content_args', array( $this, 'dahz_framework_attributes_content_args' ) );
			
			add_filter( 'dahz_framework_default_styles', array( $this, 'dahz_framework_give_donations_style' ) );
			
			add_action( 'wp_enqueue_scripts', array( $this, 'dahzextender_scripts' ), 11 );
			
			add_action( 'dahz_framework_page_title_customizers', array( $this, 'dahzextender_page_title_customizers' ) );
			
			add_filter( 'dahz_framework_register_page_title', array( $this, 'dahz_framework_register_page_title' ), 10, 2 );
			
			add_action( 'dahz_framework_after_main_content', array( $this, 'dahz_framework_blog_archive_pagination' ) );
			
			add_filter( 'dahz_framework_register_sidebar', array( $this, 'dahzextender_archive_donations_register_sidebar' ) );
			
			add_filter( 'give_donation_form_submit_button', array( $this, 'dahzextender_give_donation_form_submit_button' ), 10, 2 );
			
			remove_action( 'give_after_donation_levels', 'give_display_checkout_button', 10 );
			
			add_action( 'give_after_donation_levels', array( $this, 'dahzextender_give_display_checkout_button' ), 10, 2 );
			
			add_filter( 'give_magnific_options', array( $this, 'dahzextender_give_magnific_options' ) );
						 
		}
		
		public function dahzextender_scripts(){
			
			wp_add_inline_script(
				'uikit',
				'(function($) {
					$( document ).on( "ready", function(){
						if( typeof $.fn.theiaStickySidebar === "undefined" ){return;}
						var admin = $("#wpadminbar").length ? 52 : 20;
						$( ".entry-summary, .give-sidebar", $( ".give_forms" ) ).theiaStickySidebar({
							additionalMarginTop: $("#de-header-horizontal-desktop .de-header__sticky--wrapper").length ? ($(".de-header__section--show-on-sticky").height() + admin) : admin
						});
					} );
				})(jQuery);'
			);
			
		}
						
		public function dahzextender_give_donations_init( $path ){
			
			if ( is_customize_preview() ){
				
				if ( class_exists( 'Kirki' ) ) {
					Kirki::add_panel( 
						'donations',
						array(
							'title'			=> esc_html__( 'Donations', 'kitring' ),
							'description'	=> esc_html__( 'Change Tribe Events Options here.', 'kitring' ),
							'priority'		=> 7
						) 
					);
					
					Kirki::add_section( 
						'single_donations', 
						array(
							'title'       => __( 'Single Events', 'df_textdomain' ),
							'panel'       => 'donations'
						) 
					);
					
				}
				
				dahz_framework_include( $path . '/give-donations-customizer.php' );
				
			}
			
			dahz_framework_register_customizer(
				'Dahzextender_Archive_Give_Donations_Customizer',
				array(
					'id'	=> 'archive_donations',
					'title'	=> array( 'title' => esc_html__( 'Archive Donations', 'df_textdomain' ), 'priority' => 1 ),
					'panel'	=> 'donations'
				),
				array()
			);
			
			dahz_framework_register_customizer(
				'Dahzextender_General_Give_Donations_Customizer',
				array(
					'id'	=> 'general_donations',
					'title'	=> array( 'title' => esc_html__( 'General Donations', 'df_textdomain' ), 'priority' => 1 ),
					'panel'	=> 'donations'
				),
				array()
			);

		}
		
		public function dahzextender_template_loader( $template ) {
			
			$find = array();
			
			$file = '';

			if ( is_single() && get_post_type() == 'give_forms' ) {
				
				$file   = 'single-give-form.php';
				
				$find[] = $file;
			
			} elseif( is_post_type_archive( 'give_forms' ) ){
				
				$file   = 'archive-give-form.php';
				
				$find[] = $file;
				
			}

			if ( $file ) {
				
				$template = locate_template( array_unique( $find ) );
				
				if ( ! $template ) {
					
					$template = DAHZEXTENDER_MODULES_ABSPATH . 'give-donations/templates/' . $file;
				
				}
			
			}

			return $template;
		}
		
		public function dahzextender_give_get_template_part( $paths ){

			$paths[50] = DAHZEXTENDER_MODULES_ABSPATH . 'give-donations/templates/';
			
			return $paths;
			
		}
		
		public function dahzextender_give_get_template( $located, $template_name, $args, $template_path, $default_path ){
			switch( $template_name ){
				case 'shortcode-register':
					$located = DAHZEXTENDER_MODULES_ABSPATH . 'give-donations/templates/shortcode-register.php';
					break;
				case 'shortcode-login':
					$located = DAHZEXTENDER_MODULES_ABSPATH . 'give-donations/templates/shortcode-login.php';
					break;
			}
			
			return $located;
			
		}
				
		public function dahz_framework_attributes_content_args( $args ){
			
			$larger = false;
			
			if( is_post_type_archive( 'give_forms' ) ){
				
				$larger = dahz_framework_get_option( 'archive_donations_larger', 0 );
				
				$args['class'][] = 'uk-child-width-1-' . dahz_framework_get_option( 'archive_donations_column', 2 ) . '@m';
				
			}
			
			if( $larger ){
				
				$args['class'][] = 'uk-grid-large';
				
			}
			
			return $args;
			
		}
		
		public function dahz_framework_give_donations_style( $styles ){
			
			$styles .= '
				form[id*=give-form] #give-gateway-radio-list>li input[type=radio]{
					width:var(--form-radio-size);
					height:var(--form-radio-size);
					display:inherit;
				}
				form[id*=give-form] #give-donation-level-radio-list>li input[type=radio]{
					width:var(--form-radio-size);
					height:var(--form-radio-size);
				}
				.give-progress-bar span,
				.give-progress-bar{
					border-radius:0px;
				}
				form[id*=give-form] #give-final-total-wrap .give-donation-total-label,
				form[id*=give-form] .give-donation-amount .give-currency-symbol{
					background-color:transparent;
				}
				table.give-table:not(#wp-calendar) tbody tr td:first-child, 
				table.give-table:not(#wp-calendar) tbody tr th:first-child, 
				table.give-table:not(#wp-calendar) tfoot tr td:first-child, 
				table.give-table:not(#wp-calendar) tfoot tr th:first-child, 
				table.give-table:not(#wp-calendar) thead tr td:first-child, 
				table.give-table:not(#wp-calendar) thead tr th:first-child{
					padding: 17px 16px;
				}
				table.give-table tbody tr:nth-child(2n) td,
				table.give-table th,
				table.give-table{
					background:transparent;
				}
				table.give-table:not(#wp-calendar) th{
					text-align:center;
				}
				.give-form fieldset{
					border:none;
					padding:0;
				}
				form#give-email-access-form div.g-recaptcha, 
				form#give-email-access-form input#give-email{
					margin:0;
				}
				[id*=give-form].give-fl-form .give-fl-wrap-select:after{
					background:none;
				}
				.de-content__wrapper * :not(.uk-pagination):not(.uk-tab) > :not(h1):not(h2):not(h3):not(h4):not(h5):not(h6):not(.uk-h1):not(.uk-h2):not(.uk-h3):not(.uk-h4):not(.uk-h5):not(.uk-h6):not(.de-social-accounts) > a:not(.uk-button):not(.button).give-card{
					color:'. dahz_framework_get_option( 'color_general_body_text_color', '#000000' ) .'
				}
			';
			
			return $styles;
			
		}
		
		public function dahzextender_page_title_customizers( $page_title_customizers ){
			
			$field = $page_title_customizers->dahz_framework_page_title_fields( '', 'archive_donations', 7 );

			$field[] = array(
				'type'     => 'custom',
				'settings' => 'custom_title_archive_events',
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Page Title', 'baklon' ) .'</div>',
				'priority' => 5,
			);
	
			$field[] = array(
				'type'			=> 'textarea',
				'settings'		=> "page_title_description",
				'label'			=> esc_html__( 'Description', 'baklon' ),
				'description'	=> esc_html__( 'Select your page title description globally for loop', 'baklon' ),
				'priority'		=> 6,
				'default'		=> ''
			);


			$page_title_customizers->dahz_framework_add_field_customizer( 'archive_donations', $field );
			
			$field = $page_title_customizers->dahz_framework_page_title_fields( '', 'single_donations', 2 );

			$field[] = array(
				'type'     => 'custom',
				'settings' => 'custom_title_single_events',
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Page Title', 'baklon' ) .'</div>',
				'priority' => 1,
			);

			$page_title_customizers->dahz_framework_add_field_customizer( 'single_donations', $field );
			
		}
		
		public function dahz_framework_register_page_title( $page_title, $page_title_class ){
			
			if( is_post_type_archive( 'give_forms' ) ){
				
				$page_title['layout'] = dahz_framework_get_option( 'archive_donations_page_title', 'tasia' );
				$page_title['color'] = dahz_framework_get_option( 'archive_donations_text_color', 'tasia' );
				$page_title['background'] = $page_title_class->dahz_framework_page_title_background(
					array(
						'background_color'		=> dahz_framework_get_option( 'archive_donations_background_color', '#fff' ),
						'background_image'		=> dahz_framework_get_option( 'archive_donations_background_image', '' ),
						'background_size'		=> dahz_framework_get_option( 'archive_donations_background_size', 'cover' ),
						'background_repeat'		=> dahz_framework_get_option( 'archive_donations_background_repeat', 'no-repeat' ),
						'background_position'	=> dahz_framework_get_option( 'archive_donations_background_position', 'left top' ),
						'background_attachment'	=> dahz_framework_get_option( 'archive_donations_background_attachment', 'scroll' ),
					) 
				);
				
			} elseif( is_singular( 'give_forms' ) ){
				
				$page_title = array(
					'render_location'			=> 'archive',
					'layout'					=> dahz_framework_get_option( 'single_donations_page_title', 'tasia' ),
					'breadcrumb'				=> dahz_framework_breadcrumbs(),
					'title'						=> get_the_title(),
					'description'				=> '',
					'background'				=> $page_title_class->dahz_framework_page_title_background( 
						array(
							'background_color'		=> dahz_framework_get_option( 'single_donations_background_color', '#fff' ),
							'background_image'		=> dahz_framework_get_option( 'single_donations_background_image', '' ),
							'background_size'		=> dahz_framework_get_option( 'single_donations_background_size', 'cover' ),
							'background_repeat'		=> dahz_framework_get_option( 'single_donations_background_repeat', 'no-repeat' ),
							'background_position'	=> dahz_framework_get_option( 'single_donations_background_position', 'left top' ),
							'background_attachment'	=> dahz_framework_get_option( 'single_donations_background_attachment', 'scroll' ),
						) 
					),
					'color'					=> dahz_framework_get_option( 'single_donations_text_color', '#000000' ),
					'color_scheme'			=> 'custom-color'
				);
				
			}
			
			return $page_title;
			
		}
		
		public function dahz_framework_blog_archive_pagination() {
			
			if( ! is_post_type_archive( 'give_forms' ) ){ return; }
			
			$pagination = dahz_framework_get_option( 'archive_donations_layout_pagination', 'number' );

			echo dahz_framework_pagination( $pagination );

		}
		
		public function dahzextender_archive_donations_register_sidebar( $args ){
			
			if( ! is_post_type_archive( 'give_forms' ) ){ return $args; }
			
			$args['sidebar_layout'] = dahz_framework_get_option( 'archive_donations_layout_sidebar', 'sidebar-right' );
			
			return $args;
			
		}
		
		public function dahzextender_give_donation_form_submit_button( $button_output, $form_id ){
			
			$display_label_field = give_get_meta( $form_id, '_give_checkout_label', true );
			$display_label       = ( ! empty( $display_label_field ) ? $display_label_field : esc_html__( 'Donate Now', 'give' ) );
			$button_style		 = dahz_framework_get_option( 'general_donations_button_style', 'uk-button-default' );
			ob_start();
			?>
			<div class="give-submit-button-wrap give-clearfix">
				<button type="submit" class="give-submit give-btn uk-button <?php echo esc_attr( $button_style );?>" id="give-purchase-button" name="give-purchase" data-before-validation-label="<?php echo $display_label; ?>">
					<?php echo $display_label; ?>
				</button>
				<span class="give-loading-animation"></span>
			</div>
			<?php
			
			return ob_get_clean();
			
		}
		
		public function dahzextender_give_display_checkout_button( $form_id, $args ){
			
			$display_option = ( isset( $args['display_style'] ) && ! empty( $args['display_style'] ) )
				? $args['display_style']
				: give_get_meta( $form_id, '_give_payment_display', true );

			if ( 'button' === $display_option ) {
				$display_option = 'modal';
			} elseif ( $display_option === 'onpage' ) {
				return '';
			}
			$button_style		 = dahz_framework_get_option( 'general_donations_button_style', 'uk-button-default' );
			$display_label_field = give_get_meta( $form_id, '_give_reveal_label', true );
			$display_label       = ! empty( $args['continue_button_title'] ) ? $args['continue_button_title'] : ( ! empty( $display_label_field ) ? $display_label_field : esc_html__( 'Donate Now', 'give' ) );

			$output = '<button type="button" class="give-btn-' . $display_option . ' uk-button ' . $button_style . '">' . $display_label . '</button>';

			echo apply_filters( 'give_display_checkout_button', $output );
			
		}
		
		public function dahzextender_give_magnific_options( $options ){
			
			$options['close_on_bg_click'] = true;
			
			return $options;
			
		}
		
	}

	new Dahzextender_Give_Donations();
	
}