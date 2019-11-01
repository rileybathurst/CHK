<?php
// SHEEP
function prefix_admin_declarationSheep() {

	// Extremley Important to set
	global $wpdb;

	// Whats inserted
	$wpdb->insert( meatorders ,
		array(
			'unid'          => '$unid' ,
			'animal'        => 'sheep' ,
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
add_action( 'admin_post_declarationSheep', 'prefix_admin_declarationSheep' );
add_action( 'admin_post_nopriv_declarationSheep', 'prefix_admin_declarationSheep' );