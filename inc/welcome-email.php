<?php
//send a welcome email when a user account is activated
add_action( 'bp_core_activated_user', 'bpdev_welcome_user_notification', 10, 3 );
function bpdev_welcome_user_notification( $user_id, $key = false, $user = false ) {
	//send the welcome mail to user
	//welcome message

	$welcome_email = __( 'Dear USER_DISPLAY_NAME,

	Your new account is set up.

	You can log in with the following information:
	Username: USERNAME
	LOGINLINK

	Thanks!

	--The Team @ SITE_NAME' ); // are these variables working?

	//get user details
	$user = get_userdata( $user_id );
	//get site name
	$site_name = get_bloginfo( 'name' );
	//update the details in the welcome email
	$welcome_email = str_replace( 'USER_DISPLAY_NAME', $user->first_name, $welcome_email );
	$welcome_email = str_replace( 'SITE_NAME', $site_name, $welcome_email );
	$welcome_email = str_replace( 'USERNAME', $user->user_login, $welcome_email );
	$welcome_email = str_replace( 'LOGINLINK', wp_login_url(), $welcome_email );

	//from email
	$admin_email = get_site_option( 'admin_email' );

	if ( empty( $admin_email ) ) {
		$admin_email = 'support@' . $_SERVER['SERVER_NAME'];
	}

	$from_name = $site_name . "<$admin_email>" ;//from
	$message_headers =  array(
		'from'          => $from_name,
		'content-type'  => 'text/plain; charset='. get_option('blog_charset')
	);

	//EMAIL SUBJECT
	$subject = sprintf( __( 'Welcome to   %1$s ' ), $site_name ) ;
	//SEND THE EMAIL
	wp_mail( $user->user_email, $subject, $welcome_email, $message_headers );

	return true;
}