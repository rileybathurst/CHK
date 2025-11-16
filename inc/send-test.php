<?php

function prefix_admin_sendTest() {
    
  $captcha = $_POST['g-recaptcha'];

	// this comes from wp-config.php and is not in the repo it can be found at https://www.google.com/recaptcha/admin
	$secret = RECAPTCHA_SECRET_KEY;
	if (!$secret) {
		wp_redirect( home_url() . '/no-secret' );
		exit;
	}

  $response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret='.RECAPTCHA_SECRET_KEY.'&response='.$captcha);
  $responseBody = wp_remote_retrieve_body($response);
  $responseKeys = json_decode($responseBody, true);

	if($responseKeys['success'] == true && $responseKeys['score'] > 0.5) {
		$developer = 'riley@rileybathurst.com'; // testing email

		$subject = 'sendTest test: ' . $_POST['name'];

		$txt =  'Name: ' . $_POST['name'] . '<br> <br>' . 'Response: ' . $responseBody;

		add_filter( 'wp_mail_from_name', function( $name ) {
			return 'Canterbury Homekill';
		});

    add_filter( 'wp_mail_content_type', 'set_content_type' );
		function set_content_type( $content_type ) {
			return 'text/html';
		}

		wp_mail($developer , $subject , $txt );

		wp_redirect( home_url() . '/send-test' );
	} else {
		wp_redirect( home_url() . '/no-robot' );
	}

exit;

}

add_action( 'admin_post_sendTest', 'prefix_admin_sendTest' );
add_action( 'admin_post_nopriv_sendTest', 'prefix_admin_sendTest' );