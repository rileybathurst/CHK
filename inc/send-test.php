<?php

function prefix_admin_sendTest() {
    
  $captcha = $_POST['g-recaptcha'];

	$string = 'https://www.google.com/recaptcha/api/siteverify?secret='.getenv('RECAPTCHA_SECRET_KEY').'&response='.$captcha;

  $response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret='.getenv('RECAPTCHA_SECRET_KEY').'&response='.$captcha);
  $responseBody = wp_remote_retrieve_body($response);
  $responseKeys = json_decode($responseBody, true);

	$developer = 'riley@rileybathurst.com'; // testing email

	$subject = 'sendTest test: ' . $_POST['name'];

	$txt =  $captcha . '<br /><br />' . json_encode($responseKeys) . '<br /><br />' . $string. '<br /><br /> email me the secret key' . getenv('RECAPTCHA_SECRET_KEY'); ;

		add_filter( 'wp_mail_from_name', function( $name ) {
			return 'Canterbury Homekill';
		});

    add_filter( 'wp_mail_content_type', 'set_content_type' );
		function set_content_type( $content_type ) {
			return 'text/html';
		}

		wp_mail($developer , $subject , $txt );

		wp_redirect( home_url() . '/send-test' );

exit;

}

add_action( 'admin_post_sendTest', 'prefix_admin_sendTest' );
add_action( 'admin_post_nopriv_sendTest', 'prefix_admin_sendTest' );