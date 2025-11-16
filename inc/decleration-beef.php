<?php
// BEEF
function prefix_admin_declarationBeef() {

	// Extremley Important to set
			global $wpdb;

			// Whats inserted
			$wpdb->insert( 'meatorders' ,
				array(
					'unid'          => '$unid' ,
					'animal'        => 'beef' ,
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
add_action( 'admin_post_declarationBeef', 'prefix_admin_declarationBeef' );
add_action( 'admin_post_nopriv_declarationBeef', 'prefix_admin_declarationBeef' );