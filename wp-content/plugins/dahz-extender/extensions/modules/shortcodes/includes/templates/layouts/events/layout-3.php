<?php
	
$wrapper_attributes = array(
	'class' 			=> array(
		"uk-text-{$post_alignment}",
		'entry-wrapper uk-background-cover',
		$box_shadow,
		$hover_box_shadow,
		"de-ratio de-ratio-{$media_ratio}"
	),
	'style' 			=> array(),
	'data-uk-margin'	=> 'margin:uk-margin',
);

$wrapper_attributes['style'][] = ( !empty( $bg_color ) ) ? "background-color:{$bg_color};" : "background-color:#e0e0e0;";
	
$image_src = get_the_post_thumbnail_url( get_the_ID(), 'large' );

if( !empty( $image_src ) ) $wrapper_attributes['style'][] = "background-image:url({$image_src});";

$item_class = ! empty( $item_class ) ? $item_class : '';

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>
<li <?php post_class( 'de-sc-post-slider__item uk-margin-remove-bottom ' . $item_class );?>>
	<div <?php
		dahz_shortcode_set_attributes(
			$wrapper_attributes,
			'post_slider_items'
		);?>>
		<div class="de-ratio-content uk-inline-clip uk-transition-toggle">
			<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="<?php echo !empty( $overlay_color ) ? "background-color:{$overlay_color};" : '';?>">
				<?php
					$meta_uppercase = !empty( $is_meta_uppercase ) ? esc_attr( "uk-text-uppercase" ) : '';
					dahz_framework_post_meta( 
						get_the_ID(),
						array(
							'items_wrap'	=> '<ul class="' . "uk-flex uk-flex-{$post_alignment}" . ' de-sc-post-slider__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small-bottom'. $meta_uppercase . '">%1$s</ul>',
							'metas'			=> array( 
								( empty( $is_hide_category ) ? 'categories' : '' ),
								( empty( $is_hide_author ) ? 'author' : '' ),
								( empty( $is_hide_date ) ? 'date' : '' )
							),
							'meta_params'	=> array( 'categories' => array( get_the_ID(), 'tribe_events_cat' ) ),
						)
					);
					dahz_framework_title( array(
						'title_tag'	=> $title_element_tag,
						'class'		=> !empty( $is_title_uppercase ) ? 'de-sc-post-slider__item--title uk-text-uppercase uk-margin-remove' : 'de-sc-post-slider__item--title uk-margin-remove',
					) );
				?>
				<?php if ( tribe_get_cost() ) : ?>
					<div class="tribe-events-event-cost">
						<span class="ticket-cost"><?php echo esc_html( tribe_get_cost( null, true ) ); ?></span>
						<?php
						/** This action is documented in the-events-calendar/src/views/list/single-event.php */
						do_action( 'tribe_events_inside_cost' )
						?>
					</div>
				<?php endif; ?>
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
							<?php
								$address_delimiter = empty( $venue_address ) ? ' ' : ', ';

								// These details are already escaped in various ways earlier in the process.
								echo implode( $address_delimiter, $venue_details );

								if ( tribe_show_google_map_link() ) {
									echo tribe_get_map_link_html();
								}
							?>
							</div> <!-- .tribe-events-venue-details -->
						<?php endif; ?>

					</div>
					<?php do_action( 'tribe_events_after_the_meta' ) ?>
				</div><!-- .tribe-events-event-meta -->
				<?php 
				if( empty( $is_hide_excerpt ) ):?>
					<?php
					$excerpt = dahz_framework_get_excerpt( 
						array(
							'button_type'	=> $button_type,
							'button_size'	=> $button_size,
							'show_readmore'	=> empty( $is_hide_button_readmore ) ,
							'num_words'		=> $excerpt_length,
						)
					);
					?>
					<?php if( ! empty( $excerpt ) ):?>
						<div class="de-archive__featured-content uk-margin uk-margin-remove-bottom">
							<?php echo $excerpt;?>
						</div>
					<?php endif;?>
				<?php endif;?>
			</div>
		</div>
	</div>
</li>