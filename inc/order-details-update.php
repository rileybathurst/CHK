<?php
// Update details and send off to order of specific animal page 
// deals with variable set through form _POST
function prefix_admin_orderdetailsupdate() {

	// Extremley Important to set
	global $wpdb;

	// Whats inserted
	$wpdb->update( meatorders ,

	array(
		'name'   => $_POST['name'] ,
		'add1'   => $_POST['add1'] ,
		'email'  => $_POST['email'] ,
		'phone'  => $_POST['phone'] ,
		'phone2' => $_POST['phone2'] ,
		'amp'    => $_POST['amp'] ,
		'people' => $_POST['people'] 
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