<?php

function prefix_admin_sendTest() {
    
  $captcha = $_POST['g-recaptcha'];
  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".getenv('RECAPTCHA_SECRET_KEY')."&response=".$captcha);
  $responseKeys = json_decode($response,true);

		$developer = 'riley@rileybathurst.com'; // testing email

		$subject = 'sendTest test: ' . $_POST['name'];

		$txt = $_POST['name']	. ' has submitted the sendTest form.<br />' . $responseKeys["success"] . '<br />' . $responseKeys["score"];

		add_filter( 'wp_mail_from_name', function( $name ) {
			return 'Canterbury Homekill';
		});

		wp_mail($developer , $subject , $txt );

		wp_redirect( home_url() . '/sendTest-thanks' );

exit;

}

add_action( 'admin_post_sendTest', 'prefix_admin_sendTest' );
add_action( 'admin_post_nopriv_sendTest', 'prefix_admin_sendTest' );