<?php
// deals with variable set through form _POST
// this has to be hidden from github due to the recaptcha secret key

function prefix_admin_cap3() {
// Check if captcha has been checked
$captcha = $_POST['g-recaptcha'];

// If no captcha 
if(!$captcha){
	// Redirect
	wp_redirect( home_url() . '/no-cap' );
	exit;
}


console.log($captcha);

// When the captcha is checked make sure its not spam
$secretKey = "6LcG240qAAAAALJWeiRe_i4SjX9IDbeIPM4PIEoQ";

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
$responseKeys = json_decode($response,true);

// ! this is where it also needs the and score of 0.5
	if(intval($responseKeys["success"]) !== 1) {

	// Spam
	wp_redirect( home_url() . '/cap-3-sorry' );

	} else {

		$developer = 'riley@rileybathurst.com'; // testing email

		$subject = 'cap 3 test: ' . $_POST['name'];

		$txt = $_POST['name']	. ' has submitted the cap 3 form.';

		add_filter( 'wp_mail_from_name', function( $name ) {
			return 'Canterbury Homekill';
		});

		wp_mail($developer , $subject , $txt );

		wp_redirect( home_url() . '/cap-3-thanks' );

	}

exit;

}

add_action( 'admin_post_cap3', 'prefix_admin_cap3' );
add_action( 'admin_post_nopriv_cap3', 'prefix_admin_cap3' );