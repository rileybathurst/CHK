<?php
function prefix_admin_orderdeerupdate() {
	// Extremely Important to set
	global $wpdb;

	//create variables
	$v_fillet = isset($_POST['v_fillet']) && $_POST['v_fillet'] == 'on' ? 1 : 0;
	$fillet_v = isset($_POST['fillet_v']) ? $_POST['fillet_v'] : '';
	$v_backstrap = isset($_POST['v_backstrap']) && $_POST['v_backstrap'] == 'on' ? 1 : 0;
	$backstrap_v = isset($_POST['backstrap_v']) ? $_POST['backstrap_v'] : '';
	$v_rump = isset($_POST['v_rump']) && $_POST['v_rump'] == 'on' ? 1 : 0;
	$rump_v = isset($_POST['rump_v']) ? $_POST['rump_v'] : '';
	$v_shoulder = isset($_POST['v_shoulder']) && $_POST['v_shoulder'] == 'on' ? 1 : 0;
	$shoulder_v = isset($_POST['shoulder_v']) ? $_POST['shoulder_v'] : '';
	$v_loin = isset($_POST['v_loin']) && $_POST['v_loin'] == 'on' ? 1 : 0;
	$loin_v = isset($_POST['loin_v']) ? $_POST['loin_v'] : '';
	$v_bellies = isset($_POST['v_bellies']) && $_POST['v_bellies'] == 'on' ? 1 : 0;
	$bellies_v = isset($_POST['bellies_v']) ? $_POST['bellies_v'] : '';
	$v_leg = isset($_POST['v_leg']) && $_POST['v_leg'] == 'on' ? 1 : 0;
	$leg_v = isset($_POST['leg_v']) ? $_POST['leg_v'] : '';
	$v_excess_trim = isset($_POST['v_excess_trim']) && $_POST['v_excess_trim'] == 'on' ? 1 : 0;
	$excess_trim_v = isset($_POST['excess_trim_v']) ? $_POST['excess_trim_v'] : '';
	$spins = isset($_POST['spins']) ? sanitize_text_field($_POST['spins']) : '';

	$assistance = isset($_POST['assistance']) && $_POST['assistance'] == 'on' ? 1 : 0;

	//create small goods variable
	if (isset($_POST['small_goods'])) {
		$url = $_POST['small_goods']; if($url == 'yes'){$url=1;}else{$url=0;}
	} else {
		$url = 0;
	}

	// Whats inserted
	$wpdb->update( 'meatorders' ,

	array(
		'v_fillet'          =>      $v_fillet ,
		'fillet_v'          =>      $fillet_v ,
		'v_backstrap'       =>      $v_backstrap ,
		'backstrap_v'       =>      $backstrap_v ,
		'v_rump'            =>      $v_rump ,
		'rump_v'            =>      $rump_v ,
		'v_shoulder'        =>      $v_shoulder ,
		'shoulder_v'        =>      $shoulder_v ,
		'v_loin'            =>      $v_loin ,
		'loin_v'            =>      $loin_v ,
		'v_bellies'         =>      $v_bellies ,
		'bellies_v'         =>      $bellies_v ,
		'v_leg'             =>      $v_leg ,
		'leg_v'             =>      $leg_v ,
		'v_excess_trim'     =>      $v_excess_trim ,
		'excess_trim_v'     =>      $excess_trim_v ,
		'assistance'        =>      $assistance ,
		'spins'             =>      $spins ,
		'small'             =>      $url
	) ,

	// where
	array(
		'unid' => $_POST['unid'] )
	);

	// small goods send
	if ($url == 1) {
		wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );
		exit();
	} else {
		wp_redirect( home_url() . '/confirm-deer?n=' . $_POST['unid'] );
		exit();
	}
}
add_action( 'admin_post_orderdeerupdate', 'prefix_admin_orderdeerupdate' );
add_action( 'admin_post_nopriv_orderdeerupdate', 'prefix_admin_orderdeerupdate' );