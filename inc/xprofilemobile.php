<?php
// deals with variable set through form _POST
function prefix_admin_xprofileaddmobile() {

	// Extremely Important to set
			global $wpdb;
	
			// Whats inserted
			$wpdb->insert( chk_bp_xprofile_data , 
						  
				array(
					'value' => $_POST['mobile'] ,
					'user_id' => $_POST['user_id'] ,
					'field_id' => $_POST['mobile_field'] ,
				) , 
				// where
				array(
					'%s' , // these should be documented about whats going on
					'%s' ,
					'%s'
				)
			);

			// Redirect
			wp_redirect( home_url() . '/update' );
			exit();

}
add_action( 'admin_post_xprofileaddmobile', 'prefix_admin_xprofileaddmobile' );
add_action( 'admin_post_nopriv_xprofileaddmobile', 'prefix_admin_xprofileaddmobile' );