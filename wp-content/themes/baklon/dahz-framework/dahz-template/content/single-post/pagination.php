<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baklon
 */
 if ( !apply_filters( 'dahz_framework_enable_post_navigation', true ) ) return;
 
 if( empty( get_previous_post_link() ) && empty( get_next_post_link() ) ){ return; }
 
 $prevPost = get_previous_post();
 $nextPost = get_next_post();
?>

<div class="uk-width-1-1">
	<hr class="uk-margin-medium">
	<div class="uk-child-width-1-2@m ds-post__navigation" data-uk-grid>
		<div class="nav-previous uk-text-center uk-text-left@m ds-post__navigation--prev uk-flex uk-flex-middle uk-flex-center uk-flex-left@m uk-position-relative">
			<?php
			if( ! empty( $prevPost ) ):
				$prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'thumbnail');
				previous_post_link(
					'<div class="uk-position-z-index ds-post__navigation--prev-title">%link</div>',
					'
					<p class="uk-text-small">' . __( 'Previous Reading', 'baklon' ) . '</p>
					<h4 class="uk-margin-remove">%title</h4>
					'				
				);
				printf(
					'<div class="uk-position-absolute ds-post__navigation--prev-image">
						<div class="uk-position-relative">
							<div class="uk-position-relative">
								%s
							</div>	
							<div class="uk-position-cover uk-overlay"></div>
						</div>
					</div>'
					,
					$prevthumbnail
				);
			endif;
			?>
		</div>
		<div class="nav-next uk-text-center uk-text-right@m ds-post__navigation--next uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-flex-right@m uk-position-relative">
			<?php
			if( ! empty( $nextPost ) ):
				$nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'thumbnail');
				next_post_link(
					'<div class="uk-position-z-index ds-post__navigation--next-title">%link</div>',
					'
					<p class="uk-text-small">' . __( 'Next Reading', 'baklon' ) . '</p>
					<h4 class="uk-margin-remove">%title</h4>
					'	
				);
				printf(
					'<div class="uk-position-absolute uk-position-center-right ds-post__navigation--next-image">
						<div class="uk-position-relative">
							<div class="uk-position-relative">
								%s
							</div>	
							<div class="uk-position-cover uk-overlay"></div>
						</div>
					</div>'
					,
					$nextthumbnail
				);
			endif;
 			?>
		</div>
	</div>
</div>