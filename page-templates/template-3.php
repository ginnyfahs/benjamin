<?php
/*
Template Name: Template Page 3

This is a copy of the standard "page" template, but exists to allow some
deviations to standard pages

*/

get_header();

/**
 * Get all the settings needed for the the template layout
 *
 * Returns:
 * $template
 * $main_width
 * $hide_content
 * $sidebar_position
 */
extract(benjamin_template_settings());

if (!$hide_content) :
	?>

<section id="primary" class="usa-grid usa-section">

	<?php
		if ($sidebar_position === 'left') {
			benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
		}
		?>
	<div class="main-content <?php echo esc_attr($main_width); ?>">
		<h1>Thanks for your submission!</h1>
		<h3>Your confirmation ID: <b>9PN3RLRMXA</b></h3>
		<p>We've successfully received your submission! You should print this page for your records. If you need to update your submission, please fill out the form again and include your confirmation ID.</p>

		<p>Our team will contact you if we have any updates on your case.</p>
	</div>
	<?php
		if ($sidebar_position === 'right') {
			benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
		}
		?>

</section>

<?php
endif;


get_footer();
