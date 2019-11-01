<?php
// deals with variable set through form _POST
function prefix_admin_xprofileupdate() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->update( chk_users , 
                          
                array(
                    'display_name' => $_POST['name'] ,
                ) , 

                // where          
                array(          
                    'id' => $_POST['user_id']
                )
            );
    
            // Whats inserted
            $wpdb->update( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['address'] ,
                ) , 
                // where          
                array(          
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['address_field']
                )
            );
    
            // Whats inserted
            $wpdb->update( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['phone'] ,
                ) , 
                // where          
                array(          
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['phone_field']
                )
            );
    
            // Whats inserted
            $wpdb->update( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['mobile'] ,
                ) , 
                // where          
                array(          
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['mobile_field']
                )
            );
    
            // Redirect
            wp_redirect( home_url() . '/view-profile' );
            exit();

}
add_action( 'admin_post_xprofileupdate', 'prefix_admin_xprofileupdate' );
add_action( 'admin_post_nopriv_xprofileupdate', 'prefix_admin_xprofileupdate' );