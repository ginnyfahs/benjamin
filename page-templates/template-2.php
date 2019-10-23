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
	<style>
			.required {
					color: red;
					white-space: pre;
			}

			body {
					font-size: 24px;
			}
	</style>

	<div class="main-content <?php echo esc_attr( $main_width ); ?>">
		<form action="/confirmation" method="post">
			<label>What was the case ID for your previous case?<span class="required">*</span>
				<input type="text" required>
			</label>

			<label>
				Please explain any changes to your case. Try to be as descriptive as possible.<span class="required">*</span>
				<textarea required></textarea>
			</label>

			<label>
				If you’d like to provide additional documentation, you may upload it here.
				<input type="file">
			</label>

			<button>
				Submit Updates
			</button>
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
