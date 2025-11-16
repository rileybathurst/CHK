<?php
// SMALL GOODS

function prefix_admin_ordersmallgoodsupdate() {
	// Extremley Important to set
	global $wpdb;

	// create boolean variables
	$sg_hogg_casing = $_POST['sg_hogg_casing']; if($sg_hogg_casing == 'on'){$sg_hogg_casing=1;}else{$sg_hogg_casing=0;}
	$sg_gormet_cheese = $_POST['sg_gormet_cheese']; if($sg_gormet_cheese == 'on'){$sg_gormet_cheese=1;}else{$sg_gormet_cheese=0;}
	$individual_packs = $_POST['individual_packs']; if($individual_packs == 'on'){$individual_packs=1;}else{$individual_packs=0;}

	// Whats inserted
	$wpdb->update( 'meatorders' ,

	array(
		't_porkherb'             => $_POST['t_porkherb'] ,
		't_lambmint'             => $_POST['t_lambmint'] ,
		't_bratwurst'            => $_POST['t_bratwurst'] ,
		't_bratwurst_fennel'     => $_POST['t_bratwurst_fennel'] ,
		't_texan_chile'          => $_POST['t_texan_chile'] ,
		't_texan_chilli_cheese'  => $_POST['t_texan_chilli_cheese'] ,
		't_chorizo'              => $_POST['t_chorizo'] ,
		't_tomatobasil'          => $_POST['t_tomatobasil'] ,
		't_herbgarlic'           => $_POST['t_herbgarlic'] ,
		't_peppersonion'         => $_POST['t_peppersonion'] ,
		't_gf_capsicum'          => $_POST['t_gf_capsicum'] ,
		't_steak_onion'          => $_POST['t_steak_onion'] ,
		't_manuka_honey_hickory' => $_POST['t_manuka_honey_hickory'] ,
		't_old_english'          => $_POST['t_old_english'] ,
		't_boerewors'            => $_POST['t_boerewors'] ,
		't_cheese_krnasky'       => $_POST['t_cheese_krnasky'] ,
		't_plain'                => $_POST['t_plain'] ,
		't_gf_plain'             => $_POST['t_gf_plain'] ,
		't_saveloys'             => $_POST['t_saveloys'] ,
		'sg_hogg_casing'         => $sg_hogg_casing ,
		'sg_gormet_cheese'       => $sg_gormet_cheese ,
		'individual_packs'       => $individual_packs ,
		't_create'               => $_POST['t_create'] ,
		't_patties'              => $_POST['t_patties'] ,
		't_gf_patties'           => $_POST['t_gf_patties'] ,
		't_salami'               => $_POST['t_salami'] ,
		'salami_t'               => $_POST['salami_t'] ,
		'salami_s'               => $_POST['salami_s'],
		'salami_danish'          => $_POST['salami_danish'],
		'salami_danish_s'        => $_POST['salami_danish_s'],
		'salami_pepperoni'       => $_POST['salami_pepperoni'],
		'salami_pepperoni_s'     => $_POST['salami_pepperoni_s'],
		'salami_chilli'          => $_POST['salami_chilli'],
		'salami_chilli_s'        => $_POST['salami_chilli_s'],
		'salami_rf_garlic'       => $_POST['salami_rf_garlic'],
		'salami_rf_garlic_s'     => $_POST['salami_rf_garlic_s'],
		'salami_rf_pepperoni'    => $_POST['salami_rf_pepperoni'],
		'salami_rf_pepperoni_s'  => $_POST['salami_rf_pepperoni_s'],
		'salami_jalapenos'       => $_POST['salami_jalapenos'],
		'salami_jalapenos_s'     => $_POST['salami_jalapenos_s'],
		'salami_italian'         => $_POST['salami_italian'],
		'salami_italian_s'       => $_POST['salami_italian_s'],
		't_cheerio'              => $_POST['t_cheerio'],
		't_frankfurter'          => $_POST['t_frankfurter'],
		't_biersticks'           => $_POST['t_biersticks'],
		't_rissoles'             => $_POST['t_rissoles'],
		'rissoles_t'             => $_POST['rissoles_t'],
		't_koftas'               => $_POST['t_koftas'],
		't_bbq_grill_stick'      => $_POST['t_bbq_grill_stick'],
		'bbq_grill_stick_t'      => $_POST['bbq_grill_stick_t']
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