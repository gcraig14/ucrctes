<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
wp_enqueue_script( 'theia-script' );

remove_action( 'tribe_events_single_event_after_the_content', array( tribe( 'tec.iCal' ), 'single_event_links' ), 10, 1 );

$events_label_singular 	= tribe_get_event_label_singular();
$events_label_plural   	= tribe_get_event_label_plural();
$event_id 				= get_the_ID();
$featured_image 		= tribe_event_featured_image( $event_id, 'full', false );
$map 					= tribe_get_embedded_map( $event_id, '100%', '100%' );
$api_key 				= tribe_get_option( 'google_maps_js_api_key' );
$enable_map				= ! empty( $map ) && ! empty( $api_key ) && tribe_embed_google_map();
?>

<div id="tribe-events-content" class="tribe-events-single">

	<div class="tribe-events-back uk-child-width-1-2" data-uk-grid>
		<div class="uk-text-left">
			<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
		</div>
		<div class="uk-text-right">
			<?php tribe( 'tec.iCal' )->single_event_links();?>
		</div>
	</div>

	<!-- Notices -->
	<?php tribe_the_notices() ?>
	<!-- Event featured image, but exclude link -->
	<?php if( !empty( $featured_image ) || ( $enable_map ) ):?>
		<div data-uk-grid data-uk-height-match="target: > div;row:false;">
			<?php if ( ! empty( $featured_image ) ):?>
				<div class="uk-width-expand@m">
					<?php echo $featured_image; ?>
				</div>
			<?php endif;?>
			<?php
			if ( $enable_map ):?>
				<div class="<?php echo empty( $featured_image ) ? 'uk-width-1-1 uk-height-large' : 'uk-width-1-3@m'; ?> uk-position-relative">
					<div class="uk-width-1-1 tribe-events-venue-map uk-height-1-1 uk-inline">
						<?php
							// Display the map.
							do_action( 'tribe_events_single_meta_map_section_start' );
							echo $map;
							do_action( 'tribe_events_single_meta_map_section_end' );
						?>
					</div>
				</div>
			<?php endif;?>
		</div>
	<?php endif;?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-uk-grid>
		<div class="uk-width-expand@m de-single-event__content">
			<div class="uk-flex uk-flex-top uk-margin-remove-bottom" data-uk-grid>
				<div class="uk-width-expand">
					<?php the_title( '<h1 class="tribe-events-single-event-title uk-h2 uk-margin-small">', '</h1>' ); ?>
					<?php echo tribe_events_event_schedule_details( $event_id, '<h2 class="uk-margin-remove-top uk-h5">', '</h2>' ); ?>
				</div>
				<div class="uk-width-auto">
					<div class="tribe-events-schedule tribe-clearfix">
						<?php if ( tribe_get_cost() ) : ?>
							<h2 class="tribe-events-cost uk-h5"><?php echo tribe_get_cost( null, true ) ?></h2>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content uk-margin-medium">
				<?php the_content(); ?>
				<?php remove_all_filters( 'the_content' );?>
			</div>
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
		</div>
		<div class="uk-width-1-3@m de-single-event__meta">
			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
			<!-- .tribe-events-single-event-description -->
			
			<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
		</div>
		
	</div>
	<!-- Event footer -->
	<div id="tribe-events-footer" class="uk-margin-medium">
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav uk-flex uk-flex-wrap-between uk-padding-remove">
				<li class="tribe-events-nav-previous uk-width-1-2 uk-text-left"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next uk-width-1-2 uk-text-right"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->
