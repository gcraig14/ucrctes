<?php
/**
 * Day View Nav
 * This file contains the day view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<nav class="tribe-events-nav-pagination" aria-label="<?php esc_html_e( 'Day Navigation', 'the-events-calendar' ) ?>">
	<ul class="tribe-events-sub-nav uk-flex uk-flex-wrap-between uk-padding-remove">

		<!-- Previous Page Navigation -->
		<li class="tribe-events-nav-previous uk-width-1-3 uk-text-left"><?php tribe_the_day_link( 'previous day' ) ?></li>
		<li class="uk-width-1-3 uk-text-center">
			<?php tribe( 'tec.iCal' )->maybe_add_link();?>
		</li>
		<!-- Next Page Navigation -->
		<li class="tribe-events-nav-next uk-width-1-3 uk-text-right"><?php tribe_the_day_link( 'next day' ) ?></li>

	</ul>
</nav>