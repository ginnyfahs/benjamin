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
		<form>
			<label>What was the case ID for your previous case?
				<input type="text" required>
			</label>

			<label>
				Please explain any changes to your case. Try to be as descriptive as possible.
				<textarea required></textarea>
			</label>

			<label>
				If you’d like to provide additional documentation, you may upload it here.
				<input type="file">
			</label>

			<a href="/confirmation" style="text-decoration: none;">
				<button>
					Submit Updates
				</button>
			</a>
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
