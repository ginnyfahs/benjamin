<?php
/*
Template Name: Template Page 2

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
extract( benjamin_template_settings() );

if ( ! $hide_content ) :
	?>

<section id="primary" class="usa-grid usa-section">

	<?php
	if ( $sidebar_position === 'left' ) :
		benjamin_get_sidebar( $template, $sidebar_position, $sidebar_size );
	endif;
	?>
	<div class="main-content <?php echo esc_attr( $main_width ); ?>">
		<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
			<label>What was your previous case ID?
				<input type="text">
			</label>
			
			<label>
				Let us know what has changed! Please try to be as descriptive as possible.
				<textarea><textarea>
			</label>

			<label>
				Do you have any additional documentation you'd like us to have?
				<input type="file">
			</label>

			<input type="submit" placeholder="Submit updates">
		</form>

	</div>
	<?php
	if ( $sidebar_position === 'right' ) :
		benjamin_get_sidebar( $template, $sidebar_position, $sidebar_size );
	endif;
	?>

</section>

	<?php
endif;


get_footer();
