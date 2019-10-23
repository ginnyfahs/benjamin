<?php
/*
Template Name: Template Page 1

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
		<p>
		Thank you for coming to report a scam or hack that has affected you. Reporting is the best way to help the government prevent scams like yours in the future, and it will help protect your neighbors and friends from similar incidents. The FBI sees all reports that come in through this form, and we take every report seriously. We investigate the cases that we can.
		</p>
		<p>
			We’re about to ask for a lot of information about the scam or hack that affected you, including as much information as you can provide about your scammer (usernames, locations, IP address if you know it, etc). We will also ask you to screenshot or re-copy correspondences you’ve had with scammers or hackers so we can analyze their tactics. Sharing this information is optional and you can submit a report without providing these details. However, details are very helpful for our investigators and they increase the chance of our unit investigating your case.
		</p>
		<p>
			We invite you to gather as much information about your case as you can right now, before beginning the form, if it will help your process.
		</p>
		<p>
			Upon submitting this report, the information will be sent to officials at the Internet Crime Complaint Center unit within the FBI. We will also allow you to print and download your responses, which will serve as your copy of your official report. If you choose to work with insurance, your bank, or particular companies to try and recoup the money lost, having a copy of your report on hand may be helpful.
		</p>
		<p>
			If you have trouble filling out the online form or would prefer to report via phone, you can call 2-1-1 and we will make sure your information reaches the FBI.
		</p>
		<a href="/ic3-form">
			<button>
				Submit A Report
			</button>
		</a>

		<a href="/update-case">
			<button>
				Submit A Report
			</button>
		</a>



	</div>
</section>

	<?php
endif;

get_footer();
