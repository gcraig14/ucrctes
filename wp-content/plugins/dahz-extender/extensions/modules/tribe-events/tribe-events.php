<?php

if ( !class_exists( 'Dahzextender_Tribe_Events' ) ) {

	Class Dahzextender_Tribe_Events {

		public function __construct() {
			
			add_action( 'dahzextender_module_tribe-events_init', array( $this, 'dahzextender_tribe_events_init' ) );
			
			add_filter( 'tribe_events_template_paths', array( $this, 'dahzextender_tribe_events_template_paths' ) );
			
			add_action( 'dahz_framework_page_title_customizers', array( $this, 'dahzextender_page_title_customizers' ) );
			
			add_filter( 'dahz_framework_register_page_title', array( $this, 'dahz_framework_register_page_title' ), 10, 2 );
			
			add_filter( 'dahz_framework_breadcrumb_items', array( $this, 'dahzextender_breadcrumb_items' ), 10, 3 );

			add_action( 'wp_enqueue_scripts', array( $this, 'dahzextender_tribe_events_inline_script' ), 11 );
			
			add_filter( 'dahz_framework_default_styles', array( $this, 'dahz_framework_tribe_events_style' ) );
			
			add_filter( 'dahz_framework_register_sidebar', array( $this, 'dahzextender_archive_events_register_sidebar' ) );

		}
		
		public function dahz_framework_tribe_events_style( $styles ){
			
			$name = tribe_get_option( 'stylesheetOption', 'tribe' );
			
			if( $name !== 'skeleton' ){return $styles;}
			
			$styles .= '
				@media only screen and (max-width: 959px) {
					#tribe-events-content .tribe-events-calendar td {
						height: 45px;
						padding: 0;
					}
					
					.tribe-events-calendar .tribe-events-has-events:after{
						content: "";
						display: block;
						height: 8px;
						width: 8px;
						padding: 0;
						border-radius: 50%;
						background-color: #333;
						margin: 5px auto;
					}
					
				}
				.events-archive.events-gridview #tribe-events-content table .type-tribe_events{
					margin:0;
				}
				.tribe-events-list-separator-month{
					overflow:hidden;
					text-align: center !important;
					margin-bottom:40px;
				}
				.tribe-events-list-separator-month > span {
					display: inline-block;
					position: relative;
				}
				.tribe-events-list-separator-month>::before{
				    right: 100%;
					margin-right: .6em;
				}
				.tribe-events-list-separator-month>::after {
					left: 100%;
					margin-left: .6em;
				}
				.tribe-events-list-separator-month>::before, .tribe-events-list-separator-month>::after {
					content: "";
					position: absolute;
					top: calc(50% - (1px / 2));
					width: 2000px;
					border-bottom: 1px solid #e5e5e5;
				}
				.tribe-events-cal-links :not(:first-child){
					margin-left:20px;
				}
				.datepicker table:not(#wp-calendar) td,
				.datepicker table:not(#wp-calendar) th{
					padding:10px 10px;
					padding-left:10px!important;
					text-align: center;
					-webkit-border-radius: 4px;
					-moz-border-radius: 4px;
					border-radius: 4px;
					border: none;
				}
			';
			
			$styles .= sprintf(
				'
				.tribe-events-calendar thead tr.de-tribe-events-calendar-heading th{
					background:%1$s;
					color:%2$s!important;
				}
				.tribe-events-calendar tbody tr td .de-tribe-events-daynum{
					background:%3$s;
				}
				.tribe-events-calendar tbody tr td .de-tribe-events-daynum,
				.tribe-events-calendar tbody tr td .de-tribe-events-daynum *{
					color:%4$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-present .de-tribe-events-daynum{
					background:%5$s;
					color:%6$s!important;
				}
				.tribe-events-calendar tbody tr td:not(.tribe-events-othermonth){
					background:%7$s;
				}
				.tribe-events-calendar tbody tr td{
					transition:.3s;
				}
				.tribe-events-calendar tbody tr td:not(.tribe-events-othermonth) .tribe_events{
					transition:.3s;
					background:%9$s;
					color:%10$s;
				}
				.tribe-events-calendar tbody tr td:not(.tribe-events-othermonth) .tribe_events * a{
					color:%10$s;
				}
				.tribe-events-calendar tbody tr td:not(.tribe-events-othermonth) .tribe_events:hover{
					background:%11$s;
					color:%12$s;
				}
				.tribe-events-calendar tbody tr td:not(.tribe-events-othermonth) .tribe_events:hover * a{
					color:%12$s!important;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .de-tribe-events-daynum{
					background:%13$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .de-tribe-events-daynum,
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .de-tribe-events-daynum *{
					color:%14$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth{
					background:%15$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .tribe_events{
					transition:.3s;
					background:%17$s;
					color:%18$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .tribe_events * a{
					color:%18$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .tribe_events:hover{
					background:%19$s;
					color:%20$s;
				}
				.tribe-events-calendar tbody tr td.tribe-events-othermonth .tribe_events:hover * a{
					color:%20$s!important;
				}
				',
				dahz_framework_get_option( 'general_events_heading_calendar_background', '#000000' ),
				dahz_framework_get_option( 'general_events_heading_calendar_color', '#ffffff' ),
				dahz_framework_get_option( 'general_events_day_heading_calendar_background', '#000000' ),
				dahz_framework_get_option( 'general_events_day_heading_calendar_color', '#ffffff' ),
				dahz_framework_get_option( 'general_events_day_heading_calendar_active_background', '#000000' ),
				dahz_framework_get_option( 'general_events_day_heading_calendar_active_color', '#ffffff' ),
				dahz_framework_get_option( 'general_events_day_calendar_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_day_calendar_hover_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_event_calendar_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_event_calendar_color', '#000000' ),
				dahz_framework_get_option( 'general_events_event_calendar_hover_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_event_calendar_hover_color', '#000000' ),
				dahz_framework_get_option( 'general_events_other_month_day_heading_calendar_background', '#000000' ),
				dahz_framework_get_option( 'general_events_other_month_day_heading_calendar_color', '#ffffff' ),
				dahz_framework_get_option( 'general_events_other_month_day_calendar_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_other_month_day_calendar_hover_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_other_month_event_calendar_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_other_month_event_calendar_color', '#000000' ),
				dahz_framework_get_option( 'general_events_other_month_event_calendar_hover_background', 'transparent' ),
				dahz_framework_get_option( 'general_events_other_month_event_calendar_hover_color', '#000000' )
			);
			
			return $styles;
			
		}
		
		public function dahzextender_tribe_events_inline_script(){
			
			$name = tribe_get_option( 'stylesheetOption', 'tribe' );
			
			if( $name !== 'skeleton' ){return;}
			
			wp_add_inline_script(
				'tribe-events-bar',
				'
				(function ($) {
					$( document ).on( "ready", function(){
						var icons = {
							month : "calendar",
							list: "list",
							day: "calendar"
						};
						$( ".tribe-bar-active", $( ".tribe-bar-views-list" ) ).addClass( "uk-hidden" );
						$( ".tribe-bar-views-list" ).addClass( "uk-nav uk-dropdown-nav" );
						$( ".tribe-bar-views-list li" ).each(function(){
							$( "a", this )
								.prepend( "<span class=de-tribe-bar-views-list-icon uk-margin-small-right></span>" )
						});
						$( ".de-tribe-bar-views-list-icon" ).each( function(){
							var iconType = $( this ).parents( "li" ).data( "view" ),
								icon = typeof icons[iconType] !== "undefined" ? icons[iconType] : "calendar";
							UIkit.icon(this, {icon:icon});
						});
					});
				})(jQuery);
				'
			);
			
			wp_add_inline_script(
				'uikit',
				'(function($) {
					$( document ).on( "ready", function(){
						if( typeof $.fn.theiaStickySidebar === "undefined" ){return;}
						var admin = $("#wpadminbar").length ? 52 : 20;
						$( ".de-single-event__content, .de-single-event__meta", $( ".tribe_events" ) ).theiaStickySidebar({
							additionalMarginTop: $("#de-header-horizontal-desktop .de-header__sticky--wrapper").length ? ($(".de-header__section--show-on-sticky").height() + admin) : admin
						});
					} );
				})(jQuery);'
			);
			
		}
				
		public function dahzextender_tribe_events_init( $path ){
			
			if ( is_customize_preview() ){
				
				if ( class_exists( 'Kirki' ) ) {
					Kirki::add_panel( 
						'events',
						array(
							'title'			=> esc_html__( 'Events', 'kitring' ),
							'description'	=> esc_html__( 'Change Tribe Events Options here.', 'kitring' ),
							'priority'		=> 6
						) 
					);
					
					Kirki::add_section( 
						'single_events', 
						array(
							'title'       => __( 'Single Events', 'df_textdomain' ),
							'panel'       => 'events'
						) 
					);
										
				}
				
				dahz_framework_include( $path . '/tribe-events-customizer.php' );
								
			}
			
			dahz_framework_register_customizer(
				'Dahzextender_General_Tribe_Events_Customizer',
				array(
					'id'	=> 'general_events',
					'title'	=> array( 'title' => esc_html__( 'General Events', 'df_textdomain' ), 'priority' => 11 ),
					'panel'	=> 'events'
				),
				array()
			);
			
			dahz_framework_register_customizer(
				'Dahzextender_Archive_Tribe_Events_Customizer',
				array(
					'id'	=> 'archive_events',
					'title'	=> array( 'title' => esc_html__( 'Archive Events', 'df_textdomain' ), 'priority' => 11 ),
					'panel'	=> 'events'
				),
				array()
			);

		}
		
		public function dahzextender_page_title_customizers( $page_title_customizers ){
			
			$field = $page_title_customizers->dahz_framework_page_title_fields( '', 'archive_events', 4 );

			$field[] = array(
				'type'     => 'custom',
				'settings' => 'custom_title_archive_events',
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Page Title', 'baklon' ) .'</div>',
				'priority' => 1,
			);
	
			$field[] = array(
				'type'			=> 'textarea',
				'settings'		=> "page_title_description",
				'label'			=> esc_html__( 'Description', 'baklon' ),
				'description'	=> esc_html__( 'Select your page title description globally for loop', 'baklon' ),
				'priority'		=> 3,
				'default'		=> ''
			);


			$page_title_customizers->dahz_framework_add_field_customizer( 'archive_events', $field );
			
			$field = $page_title_customizers->dahz_framework_page_title_fields( '', 'single_events', 2 );

			$field[] = array(
				'type'     => 'custom',
				'settings' => 'custom_title_single_events',
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Page Title', 'baklon' ) .'</div>',
				'priority' => 1,
			);

			$page_title_customizers->dahz_framework_add_field_customizer( 'single_events', $field );
			
		}
		
		public function dahzextender_tribe_events_template_paths( $paths ){
			
			$name = tribe_get_option( 'stylesheetOption', 'tribe' );
			
			if( $name === 'skeleton' ){
			
				array_unshift( $paths, DAHZEXTENDER_MODULES_ABSPATH . 'tribe-events/' );
			
			}
			
			return $paths;
			
		}
		
		public function dahz_framework_register_page_title( $page_title, $page_title_class ){
			
			if( is_post_type_archive( 'tribe_events' ) ){
				
				$layout = dahz_framework_get_option( 'archive_events_page_title', 'tasia' );
				
				$page_title = array(
					'render_location'			=> 'archive',
					'layout'					=> $layout,
					'breadcrumb'				=> dahz_framework_breadcrumbs(),
					'title'						=> tribe_get_events_title( false ),
					'title_class'				=> $layout !== 'trina' ? 'uk-text-center tribe-events-page-title' : 'uk-text-left tribe-events-page-title',
					'description'				=> dahz_framework_get_option( 'archive_events_page_title_description', '' ),
					'background'				=> $page_title_class->dahz_framework_page_title_background( 
						array(
							'background_color'		=> dahz_framework_get_option( 'archive_events_background_color', '#fff' ),
							'background_image'		=> dahz_framework_get_option( 'archive_events_background_image', '' ),
							'background_size'		=> dahz_framework_get_option( 'archive_events_background_size', 'cover' ),
							'background_repeat'		=> dahz_framework_get_option( 'archive_events_background_repeat', 'no-repeat' ),
							'background_position'	=> dahz_framework_get_option( 'archive_events_background_position', 'left top' ),
							'background_attachment'	=> dahz_framework_get_option( 'archive_events_background_attachment', 'scroll' ),
						) 
					),
					'color'					=> dahz_framework_get_option( 'archive_events_text_color', '#000000' ),
					'color_scheme'			=> 'custom-color'
				);
				
			} elseif( is_singular( 'tribe_events' ) ){
				
				$page_title = array(
					'render_location'			=> 'archive',
					'layout'					=> dahz_framework_get_option( 'single_events_page_title', 'tasia' ),
					'breadcrumb'				=> dahz_framework_breadcrumbs(),
					'title'						=> get_the_title(),
					'description'				=> '',
					'background'				=> $page_title_class->dahz_framework_page_title_background( 
						array(
							'background_color'		=> dahz_framework_get_option( 'single_events_background_color', '#fff' ),
							'background_image'		=> dahz_framework_get_option( 'single_events_background_image', '' ),
							'background_size'		=> dahz_framework_get_option( 'single_events_background_size', 'cover' ),
							'background_repeat'		=> dahz_framework_get_option( 'single_events_background_repeat', 'no-repeat' ),
							'background_position'	=> dahz_framework_get_option( 'single_events_background_position', 'left top' ),
							'background_attachment'	=> dahz_framework_get_option( 'single_events_background_attachment', 'scroll' ),
						) 
					),
					'color'					=> dahz_framework_get_option( 'single_events_text_color', '#000000' ),
					'color_scheme'			=> 'custom-color'
				);
				
			}
			
			return $page_title;
			
		}
		
		public function dahzextender_breadcrumb_items( $breadcrumb_item, $args, $is_active ){
			
			if( is_post_type_archive( 'tribe_events' ) && $is_active ){
				
				$breadcrumb_item = sprintf(
					'<li>
						<span %2$s>
							%1$s
						</span>
					</li>', 
					tribe_get_events_title( false ),
					dahz_framework_set_attributes(
						array(
							'class' => array( 'bread-current tribe-events-page-title' )
						),
						'breadcrumbs_link',
						array(),
						false
					)
				);
				
			}
			
			return $breadcrumb_item;
			
		}
		
		public function dahzextender_archive_events_register_sidebar( $args ){
			
			if( ! is_post_type_archive( 'tribe_events' ) ){ return $args; }
			
			$args['sidebar_layout'] = dahz_framework_get_option( 'archive_events_layout_sidebar', 'sidebar-right' );
			
			return $args;
			
		}
		
	}

	new Dahzextender_Tribe_Events();
	
}