<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Tta_Section
 */
$base_atts = WPBakeryShortCode_VC_Tta_Section::$tta_base_shortcode->atts;

$layout = WPBakeryShortCode_VC_Tta_Section::$tta_base_shortcode->layout;

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

$this->resetVariables( $atts, $content );

WPBakeryShortCode_VC_Tta_Section::$self_count ++;

WPBakeryShortCode_VC_Tta_Section::$section_info[] = $atts;

$tab_content_attributes = array( 'class' => array() );

if( !empty( $base_atts['content_css_animation'] ) )
		$tab_content_attributes['class'][] = $base_atts['content_css_animation'];

$isPageEditable = vc_is_page_editable();

$icon = '';

if( $layout === 'accordion' ){

	if( $base_atts['active_section'] == WPBakeryShortCode_VC_Tta_Section::$self_count )
			$tab_content_attributes['class'][] = 'uk-open';

}

if( $layout === 'tabs' ){

	$image_thumbnav = isset( $atts['image_thumbnav'] ) ? $atts['image_thumbnav'] : '';

}


$output = '';

$output .= sprintf(
	'
	<li %2$s>
		%3$s
		%4$s
		%1$s
		%5$s
	</li>
	',
	$this->getTemplateVariable( 'content' ),//1
	dahz_shortcode_set_attributes(
		$tab_content_attributes,
		'vc_section_wrapper',
		array(),
		false
	),//2
	$layout == 'accordion'
		?
		// dahz_framework_debug($atts);
		sprintf(
			'
			<a class="uk-accordion-title" href="#">
				<%1$s class="uk-margin-remove">
					%2$s
				</%1$s>
			</a>
			',
			$base_atts['tag'],
			esc_html( $atts['title'] ),
			$icon

		)
		:
		'', //3
	$layout == 'accordion' ? ' <div class="uk-accordion-content">' : '',
	$layout == 'accordion' ? ' </div>' : ''
);

echo $output;
