<?php
/**
 * Single Event Meta (Map) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/map.php
 *
 * @package TribeEventsCalendar
 * @version 4.4
 */

$map = tribe_get_embedded_map();

$api_key = tribe_get_option( 'google_maps_js_api_key' );

if ( empty( $map ) || empty( $api_key ) ) {
	return;
}

?>

<div class="tribe-events-venue-map">
	<?php
	// Display the map.
	do_action( 'tribe_events_single_meta_map_section_start' );
	echo $map;
	do_action( 'tribe_events_single_meta_map_section_end' );
	?>
</div>
