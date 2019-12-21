<?php
// SMALL GOODS
function prefix_admin_ordersmallgoodsupdate() {
	// Extremley Important to set
	global $wpdb;

	// Whats inserted
	$wpdb->update( 'meatorders' ,

	array(
		't_porkherb'          => $_POST['t_porkherb'] ,
		't_lambmint'          => $_POST['t_lambmint'] ,
		't_bratwurst'         => $_POST['t_bratwurst'] ,
		't_bratwurst_fennel'  => $_POST['t_bratwurst_fennel'] ,
		't_texan_chile'       => $_POST['t_texan_chile'] ,
		't_chorizo'           => $_POST['t_chorizo'] ,
		't_tomatobasil'       => $_POST['t_tomatobasil'] ,
		't_herbgarlic'        => $_POST['t_herbgarlic'] ,
		't_peppersonion'      => $_POST['t_peppersonion'] ,
		't_gf_capsicum'       => $_POST['t_gf_capsicum'] ,
		't_plain'             => $_POST['t_plain'] ,
		't_gf_plain'          => $_POST['t_gf_plain'] ,
		't_saveloys'          => $_POST['t_saveloys'] ,
		't_gf_saveloys'       => $_POST['t_gf_saveloys'] ,
		't_create'            => $_POST['t_create'] ,
		't_patties'           => $_POST['t_patties'] ,
		't_gf_patties'        => $_POST['t_gf_patties'] ,
		't_salami'            => $_POST['t_salami'] ,
		'salami_t'            => $_POST['salami_t'] ,
		'salami_s'            => $_POST['salami_s']
	) ,

	// where
	array(
		'unid' => $_POST['unid'] )
	);

	wp_redirect( home_url() . '/confirm-' . $_POST['animal'] . '?n=' . $_POST['unid'] );
	exit;
}

add_action( 'admin_post_ordersmallgoodsupdate', 'prefix_admin_ordersmallgoodsupdate' );
add_action( 'admin_post_nopriv_ordersmallgoodsupdate', 'prefix_admin_ordersmallgoodsupdate' );