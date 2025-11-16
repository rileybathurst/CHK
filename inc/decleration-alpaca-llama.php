<?php
// ALPACA LLAMA
function prefix_admin_declarationAlpacaLlama() {
	// Extremely Important to set
	global $wpdb;

	// Whats inserted
	$wpdb->insert( 'meatorders' ,
		array(
			'unid'          => '$unid' ,
			'animal'        => 'alpacallama' ,
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
add_action( 'admin_post_declarationAlpacaLlama', 'prefix_admin_declarationAlpacaLlama' );
add_action( 'admin_post_nopriv_declarationAlpacaLlama', 'prefix_admin_declarationAlpacaLlama' );