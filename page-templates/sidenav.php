<?php
/*
Template Name: Sidenav Page

This template is used to display a sidenav for l o n g content

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
		benjamin_sticky_sidenav( $post->ID );
	endif;
	?>
	<div class="main-content usa-width-two-thirds">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/singles/content', 'page' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
	<?php
	if ( $sidebar_position === 'right' ) {
		benjamin_sticky_sidenav( $post->ID );
	}
	?>

</section>

	<?php
endif;
get_footer();
