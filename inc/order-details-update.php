<?php
// Update details and send off to order of specific animal page 
// deals with variable set through form _POST
function prefix_admin_orderdetailsupdate() {

	// Extremley Important to set
	global $wpdb;

	$name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
	$add1 = isset($_POST['add1']) ? sanitize_text_field($_POST['add1']) : '';
	$email = isset($_POST['email']) ? sanitize_text_field($_POST['email']) : '';
	$phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
	$phone2 = isset($_POST['phone2']) ? sanitize_text_field($_POST['phone2']) : '';
	$amp = isset($_POST['amp']) ? sanitize_text_field($_POST['amp']) : '';
	$people = isset($_POST['people']) ? sanitize_text_field($_POST['people']) : '';

	// Whats inserted
	$wpdb->update( 'meatorders' ,

	array(
		'name'   => $name ,
		'add1'   => $add1 ,
		'email'  => $email ,
		'phone'  => $phone ,
		'phone2' => $phone2 ,
		'amp'    => $amp ,
		'people' => $people 
	) ,

	// where
	array(
		'unid' => $_POST['unid'] )
	);

	// Redirect
	wp_redirect( home_url() . '/order-' . $_POST['animal'] . '?n=' . $_POST['unid'] );
	exit();

}
add_action( 'admin_post_orderdetailsupdate', 'prefix_admin_orderdetailsupdate' );
add_action( 'admin_post_nopriv_orderdetailsupdate', 'prefix_admin_orderdetailsupdate' );