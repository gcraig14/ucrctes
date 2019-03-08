<?php
/**
 * Day View Single Featured Event
 * This file contains one featured event in the day view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/single-featured.php
 *
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue = ( $venue_details ) ? ' vcard' : '';
$featured_image = tribe_event_featured_image( null, 'large', false, false );
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

?>
<div class="uk-flex uk-flex-middle" data-uk-grid>
	<div class="uk-width-1-3@m">
		<div class="de-ratio de-ratio-1-1 uk-background-cover uk-background-center-center" style="background-color:#e0e0e0;<?php echo ! empty( $featured_image ) ? "background-image:url({$featured_image});" : '';?>">
		</div>
	</div>
	<div class="uk-width-expand@m">
		<div class="de-events-list__title uk-flex uk-flex-middle uk-margin-small-bottom" data-uk-grid>
			<div class="uk-width-expand@m">
				<!-- Event Title -->
				<?php do_action( 'tribe_events_before_the_event_title' ) ?>
				<h3 class="tribe-events-list-event-title">
					<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
						<?php the_title() ?>
					</a>
				</h3>
				<?php do_action( 'tribe_events_after_the_event_title' ) ?>
			</div>
			<!-- Event Cost -->
			<?php if ( tribe_get_cost() ) : ?>
				<div class="tribe-events-event-cost featured-event uk-width-auto@m uk-text-right">
					<span class="ticket-cost"><?php echo esc_html( tribe_get_cost( null, true ) ); ?></span>
					<?php
					/** This action is documented in the-events-calendar/src/views/list/single-event.php */
					do_action( 'tribe_events_inside_cost' )
					?>
				</div>
			<?php endif; ?>
		</div>
		<!-- Event Meta -->
		<div class="uk-text-small uk-margin-bottom">
			<?php do_action( 'tribe_events_before_the_meta' ) ?>
			<div class="author <?php echo esc_attr( $has_venue_address ); ?>">

				<!-- Schedule & Recurrence Details -->
				<div class="tribe-event-schedule-details">
					<?php echo tribe_events_event_schedule_details() ?>
				</div>

				<?php if ( $venue_details ) : ?>
					<!-- Venue Display Info -->
					<div class="tribe-events-venue-details">
						<?php echo implode( ', ', $venue_details ); ?>
						<?php
						if ( tribe_show_google_map_link() ) {
							echo tribe_get_map_link_html();
						}
						?>
					</div> <!-- .tribe-events-venue-details -->
				<?php endif; ?>

			</div>
			<?php do_action( 'tribe_events_after_the_meta' ) ?>
		</div><!-- .tribe-events-event-meta -->
		<!-- Event Content -->
		<div>
			<?php do_action( 'tribe_events_before_the_content' ) ?>
			<div class="tribe-events-list-event-description tribe-events-content uk-margin-medium-top">
				<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
				<div class="uk-margin-medium-top">
					<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more uk-button uk-button-default" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a>
				</div>
			</div><!-- .tribe-events-list-event-description -->
			<?php do_action( 'tribe_events_after_the_content' );?>
		</div>
	</div>
</div>