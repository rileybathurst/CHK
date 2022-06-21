<?php
// TODO this is showing a warning
// Warning: Use of undefined constant meatorders - assumed 'meatorders' (this will throw an Error in a future version of PHP) in /var/www/html/wp-content/themes/chk/inc/decleration-beef.php on line 11
// template-animal deals with first step of each animal
// deals with variable set through form _POST
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