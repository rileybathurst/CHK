<?php
// PIG
function prefix_admin_declarationPig() {

	// Extremely Important to set
	global $wpdb;

	// Whats inserted
	$wpdb->insert( 'meatorders' ,
		array(
			'unid'          => '$unid' ,
			'animal'        => 'pig' ,
			'declaration'   => $_POST['declaration'] ,
		) ,
		array(
			'%s' ,
			'%s' ,
			'%s'
		) 
	);

	// this give the unid in the next url
	$id = $wpdb->insert_id;

	// Redirect
	wp_redirect( home_url() . '/order-details?n=' . $id );
	exit();

}
add_action( 'admin_post_declarationPig', 'prefix_admin_declarationPig' );
add_action( 'admin_post_nopriv_declarationPig', 'prefix_admin_declarationPig' );