<?php
// DEER
function prefix_admin_declarationDeer() {

	// Extremley Important to set
			global $wpdb;

			// Whats inserted
			$wpdb->insert( 'meatorders' ,
				array(
					'unid'          => '$unid' ,
					'animal'        => 'deer' ,
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
add_action( 'admin_post_declarationDeer', 'prefix_admin_declarationDeer' );
add_action( 'admin_post_nopriv_declarationDeer', 'prefix_admin_declarationDeer' );