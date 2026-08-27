<?php
// deals with variable set through form _POST
function prefix_admin_orderpiesupdate() {
	// Extremely Important to set
	global $wpdb;

	//create variables
	$pie_steak = $_POST['pie_steak']; if($pie_steak == 'yes'){$pie_steak=1;}else{$pie_steak=0;}
	$pie_steak_size = isset($_POST['pie_steak_size']) ? sanitize_text_field($_POST['pie_steak_size']) : '';
	$pie_steak_cheese = $_POST['pie_steak_cheese']; if($pie_steak_cheese == 'yes'){$pie_steak_cheese=1;}else{$pie_steak_cheese=0;}
	$pie_steak_cheese_size = isset($_POST['pie_steak_cheese_size']) ? sanitize_text_field($_POST['pie_steak_cheese_size']) : '';
	$pie_mince = $_POST['pie_mince']; if($pie_mince == 'yes'){$pie_mince=1;}else{$pie_mince=0;}
	$pie_mince_size = isset($_POST['pie_mince_size']) ? sanitize_text_field($_POST['pie_mince_size']) : '';
	$pie_mince_cheese = $_POST['pie_mince_cheese']; if($pie_mince_cheese == 'yes'){$pie_mince_cheese=1;}else{$pie_mince_cheese=0;}
	$pie_mince_cheese_size = isset($_POST['pie_mince_cheese_size']) ? sanitize_text_field($_POST['pie_mince_cheese_size']) : '';
	$pie_big_sausage_rolls = $_POST['pie_big_sausage_rolls']; if($pie_big_sausage_rolls == 'yes'){$pie_big_sausage_rolls=1;}else{$pie_big_sausage_rolls=0;}
	
	// Whats inserted
	$wpdb->update( 'meatorders' ,
		array(
			'pie_steak' => $pie_steak ,
			'pie_steak_size' => $pie_steak_size ,
			'pie_steak_cheese' => $pie_steak_cheese ,
			'pie_steak_cheese_size' => $pie_steak_cheese_size ,
			'pie_mince' => $pie_mince ,
			'pie_mince_size' => $pie_mince_size ,
			'pie_mince_cheese' => $pie_mince_cheese ,
			'pie_mince_cheese_size' => $pie_mince_cheese_size ,
			'pie_big_sausage_rolls' => $pie_big_sausage_rolls
		) ,

		// where
		array(
			'unid' => $_POST['unid'] )
		);

		wp_redirect( home_url() . '/confirm-' . $_POST['animal'] . '?n=' . $_POST['unid'] );

}
add_action( 'admin_post_orderpiesupdate', 'prefix_admin_orderpiesupdate' );
add_action( 'admin_post_nopriv_orderpiesupdate', 'prefix_admin_orderpiesupdate' );