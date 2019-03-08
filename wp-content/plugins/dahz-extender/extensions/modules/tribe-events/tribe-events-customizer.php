<?php

if ( !class_exists( 'Dahzextender_Archive_Tribe_Events_Customizer' ) ) {

	Class Dahzextender_Archive_Tribe_Events_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer() {
			
			$dv_field = array();
			
			$img_url = get_template_directory_uri() . '/assets/images/customizer/blog/';

			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => "custom_title_blog_archive_layout",
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Layout', 'baklon' ) .'</div>',
			);

			/**
			 * section archive_layout
			 * add field archive_layout_sidebar
			 */
			$dv_field[] =  array(
				'type'        => 'radio-image',
				'settings'    => 'layout_sidebar',
				'label'       => __( 'Sidebar Layout', 'baklon' ),
				'default'     => 'sidebar-right',
				'choices'     => array(
					'fullwidth'		=> $img_url . 'df_body-full.svg',
					'sidebar-left'	=> $img_url . 'df_body-left-sidebar.svg',
					'sidebar-right'	=> $img_url . 'df_body-right-sidebar.svg',
				),
				'description' => __( 'To view the changes, go to your blog pages manually', 'baklon' ),
			);
			
									
			return $dv_field;
			
		}

	}

}

if ( !class_exists( 'Dahzextender_General_Tribe_Events_Customizer' ) ) {

	Class Dahzextender_General_Tribe_Events_Customizer extends Dahz_Framework_Customizer_Extend {

		public function dahz_framework_set_customizer() {
			
			$dv_field = array();
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'heading_calendar_background',
				'label'       => __( 'Heading Event Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'heading_calendar_color',
				'label'       => __( 'Heading Event Calendar Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'day_heading_calendar_background',
				'label'       => __( 'Day Heading Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'day_heading_calendar_color',
				'label'       => __( 'Day Heading Calendar Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'day_calendar_background',
				'label'       => __( 'Day Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'day_calendar_hover_background',
				'label'       => __( 'Day Calendar Hover Background Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'day_heading_calendar_active_background',
				'label'       => __( 'Day Active Heading Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'day_heading_calendar_active_color',
				'label'       => __( 'Day Active Heading Calendar Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'event_calendar_background',
				'label'       => __( 'Event Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'event_calendar_color',
				'label'       => __( 'Event Calendar Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'event_calendar_hover_background',
				'label'       => __( 'Event Calendar Hover Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'event_calendar_hover_color',
				'label'       => __( 'Event Calendar Hover Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'type'     => 'custom',
				'settings' => 'custom_title_other_month',
				'label'    => '',
				'default'  => '<div class="de-customizer-title">'. esc_html__( 'Other Month', 'baklon' ) .'</div>',
				'priority' => 10,
			);
						
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_day_heading_calendar_background',
				'label'       => __( 'Day Heading Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_day_heading_calendar_color',
				'label'       => __( 'Day Heading Calendar Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_day_calendar_background',
				'label'       => __( 'Day Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_day_calendar_hover_background',
				'label'       => __( 'Day Calendar Hover Background Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_event_calendar_background',
				'label'       => __( 'Event Calendar Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_event_calendar_color',
				'label'       => __( 'Event Calendar Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_event_calendar_hover_background',
				'label'       => __( 'Event Calendar Hover Background', 'baklon' ),
				'default'     => '#000000',
			);

			$dv_field[] = array(
				'priority'		=> 10,
				'type'        => 'color',
				'settings'    => 'other_month_event_calendar_hover_color',
				'label'       => __( 'Event Calendar Hover Color', 'baklon' ),
				'default'     => '#ffffff',
			);
			
			return $dv_field;
			
		}

	}

}