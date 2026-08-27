<?php
// PIES
add_action( 'wp_footer', function() {
	?>
	<script>console.log( 'CHK: inc/decleration-pies.php loaded.' );</script>
	<?php
} );

function prefix_admin_declarationPies() {

	// Extremely Important to set
			global $wpdb;

			// Whats inserted
			$wpdb->insert( 'meatorders' ,
				array(
					'unid'          => '$unid' ,
					'animal'        => 'pies' ,
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
add_action( 'admin_post_declarationPies', 'prefix_admin_declarationPies' );
add_action( 'admin_post_nopriv_declarationPies', 'prefix_admin_declarationPies' );