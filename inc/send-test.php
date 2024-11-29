<?php

function prefix_admin_sendTest() {

    // echo "<script>console.log('🦄');</script>";

		$developer = 'riley@rileybathurst.com'; // testing email

		$subject = 'sendTest test: ' . $_POST['name'];

		$txt = $_POST['name']	. ' has submitted the sendTest form.';

		add_filter( 'wp_mail_from_name', function( $name ) {
			return 'Canterbury Homekill';
		});

		wp_mail($developer , $subject , $txt );

		wp_redirect( home_url() . '/sendTest-thanks' );

exit;

}

add_action( 'admin_post_sendTest', 'prefix_admin_sendTest' );
add_action( 'admin_post_nopriv_sendTest', 'prefix_admin_sendTest' );