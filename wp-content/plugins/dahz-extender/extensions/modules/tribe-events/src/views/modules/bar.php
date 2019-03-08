<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/Bar.php
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/modules/bar.php
 *
 * @package  TribeEventsCalendar
 * @version 4.6.19
 */
?>

<?php

$filters = tribe_events_get_filters();
$views   = tribe_events_get_views();

$current_url = tribe_events_get_current_filter_url();
?>

<?php do_action( 'tribe_events_bar_before_template' ) ?>
<div id="tribe-events-bar" class="uk-margin uk-margin-remove-top">

	<h2 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Search and Views Navigation', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?></h2>

	<form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">
		
		<div class="uk-grid-small uk-flex uk-flex-bottom" data-uk-grid>
			<!-- Mobile Filters Toggle -->

			<div id="tribe-bar-collapse-toggle" class="uk-hidden@m uk-width-1-1 <?php if ( count( $views ) == 1 ) { ?> tribe-bar-collapse-toggle-full-width<?php } ?>">
				<?php printf( esc_html__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?><span class="tribe-bar-toggle-arrow"></span>
			</div>

			<!-- Views -->
			<?php if ( ! empty( $filters ) ) { ?>
				<div class="tribe-bar-filters uk-width-expand@m">
					<div class="tribe-bar-filters-inner tribe-clearfix">
						<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Search', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?></h3>
						<div class="uk-flex uk-flex-bottom" data-uk-grid>
							<div class="uk-width-expand@m">
								<div class="uk-child-width-1-2@m" data-uk-grid>
								<?php foreach ( $filters as $filter ) : ?>
									<div class="<?php echo esc_attr( $filter['name'] ) ?>-filter">
										<label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo $filter['caption'] ?></label>
										<?php echo $filter['html'] ?>
									</div>
								<?php endforeach; ?>
								</div>
							</div>
							<div class="tribe-bar-submit uk-width-auto@m">
								<button
									class="tribe-events-button tribe-no-param uk-button uk-button-default uk-width-1-1"
									type="submit"
									name="submit-bar"
									aria-label="<?php printf( esc_attr__( 'Submit %s search', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>"
									value="<?php printf( esc_attr__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>"
								>
									<?php printf( esc_attr__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>
								</button>
							</div>
						</div>
						<!-- .tribe-bar-submit -->
					</div>
					<!-- .tribe-bar-filters-inner -->
				</div><!-- .tribe-bar-filters -->
			<?php } // if ( !empty( $filters ) ) ?>
			<?php if ( count( $views ) > 1 ) { ?>
				<div id="tribe-bar-views" class="uk-width-auto@m">
					<div class="tribe-bar-views-inner tribe-clearfix uk-text-right">
						<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Views Navigation', 'the-events-calendar' ), tribe_get_event_label_singular() ); ?></h3>
						<label class="uk-text-right uk-text-left@m"><?php esc_html_e( 'View As', 'the-events-calendar' ); ?></label>
						<?php 
						$current_view = '';
						$options_tribe_bar_views = '';
						foreach ( $views as $view ) : 
							$current_view = tribe_is_view( $view['displaying'] ) ? $view : $current_view;
							$options_tribe_bar_views .= sprintf(
								'
								<option %1$s value="%2$s" data-view="%3$s">
									%4$s
								</option>
								',
								tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive',
								esc_attr( $view['url'] ),
								esc_attr( $view['displaying'] ),
								$view['anchor']
							);
						endforeach; 
						$current_list = '';
						if( ! empty( $current_view ) ){
							$current_list = sprintf( 
								'<span class="uk-margin-small-right" data-uk-icon="%1$s"></span>
								<span>%2$s</span>
								',
								$current_view['displaying'] !== 'list' ? 'calendar' : 'list',
								$current_view['anchor']
							);
						}
						?>
						<button class="uk-button uk-button-secondary uk-padding-small uk-padding-remove-vertical" type="button"><?php echo $current_list;?></button>
						<div data-uk-dropdown="offset:0;" class="uk-background-default uk-box-shadow-small uk-text-left">
							<select
								class="tribe-bar-views-select tribe-no-param"
								name="tribe-bar-view"
								aria-label="<?php printf( esc_attr__( 'View %s As', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>"
							>
								<?php echo $options_tribe_bar_views;?>
							</select>
						</div>
					</div>
					<!-- .tribe-bar-views-inner -->
				</div><!-- .tribe-bar-views -->
			<?php } // if ( count( $views ) > 1 ) ?>
		</div>
	</form>
	<!-- #tribe-bar-form -->

</div><!-- #tribe-events-bar -->
<?php
do_action( 'tribe_events_bar_after_template' );
