<?php
/**
 * Please see single-event.php in this directory for detailed instructions on how to use and modify these templates.
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/month/tooltip.php
 * @version 4.6.21
 */
?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip uk-box-shadow-large uk-box-shadow-hover-xlarge" style="border:none;">
		<div class="uk-padding-small">
			<p class="entry-title summary uk-h4 uk-margin-remove">[[=raw title]]<\/p>

			<div class="tribe-events-event-body">
				<div class="tribe-event-duration">
					<p class="tribe-events-abbr tribe-event-date-start uk-text-small">[[=dateDisplay]] <\/p>
				<\/div>
				[[ if(imageTooltipSrc.length) { ]]
				<div class="tribe-events-event-thumb uk-margin-bottom">
					<img src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
				<\/div>
				[[ } ]]
				[[ if(excerpt.length) { ]]
				<div class="tribe-event-description">[[=raw excerpt]]<\/div>
				[[ } ]]
				<span class="tribe-events-arrow"><\/span>
			<\/div>
		<\/div>
	<\/div>
</script>

<script type="text/html" id="tribe_tmpl_tooltip_featured">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip tribe-event-featured uk-box-shadow-large uk-box-shadow-hover-xlarge" style="border:none;">
		<div class="uk-padding-small">
			[[ if(imageTooltipSrc.length) { ]]
				<div class="tribe-events-event-thumb uk-width-1-1">
					<img src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
				<\/div>
			[[ } ]]

			<p class="entry-title summary uk-h4 uk-margin-remove">[[=raw title]]<\/p>

			<div class="tribe-events-event-body">
				<div class="tribe-event-duration">
					<p class="tribe-events-abbr tribe-event-date-start uk-text-small">[[=dateDisplay]] <\/p>
				<\/div>

				[[ if(excerpt.length) { ]]
				<div class="tribe-event-description">[[=raw excerpt]]<\/div>
				[[ } ]]
				<span class="tribe-events-arrow"><\/span>
			<\/div>
		<\/div>
	<\/div>
</script>
