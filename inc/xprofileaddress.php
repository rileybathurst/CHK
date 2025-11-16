<?php
// Add xprofile data into blank forms as update wont work on those
// deals with variable set through form _POST
function prefix_admin_xprofileaddress() {

	// Extremely Important to set
			global $wpdb;

			// Whats inserted
			$wpdb->insert( chk_bp_xprofile_data , 

				array(
					'value' => $_POST['address'] ,
					'user_id' => $_POST['user_id'] ,
					'field_id' => $_POST['address_field'] ,
				) , 
				// where
				array(
					'%s' ,
					'%s' ,
					'%s'
				)
			);
	
			// Redirect
			wp_redirect( home_url() . '/update' );
			exit();

}
add_action( 'admin_post_xprofileaddress', 'prefix_admin_xprofileaddress' );
add_action( 'admin_post_nopriv_xprofileaddress', 'prefix_admin_xprofileaddress' );