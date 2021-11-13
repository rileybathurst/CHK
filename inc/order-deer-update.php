<?php
function prefix_admin_orderdeerupdate() {
	// Extremley Important to set
	global $wpdb;

	//create variables
	$v_shoulder = $_POST['v_shoulder']; if($v_shoulder == 'on'){$v_shoulder=1;}else{$v_shoulder=0;}
	$v_loin = $_POST['v_loin']; if($v_loin == 'on'){$v_loin=1;}else{$v_loin=0;}
	$v_leg = $_POST['v_leg']; if($v_leg == 'on'){$v_leg=1;}else{$v_leg=0;}
	$leg_v = $_POST['leg_v'];
	$leg_v = $_POST['leg_v'];
	$v_leg_whole_half = $_POST['v_leg_whole_half'];
	$v_excess_trim = $_POST['v_excess_trim']; if($v_excess_trim == 'on'){$v_excess_trim=1;}else{$v_excess_trim=0;}
	$excess_trim_v = $_POST['excess_trim_v'];
	$spins = $_POST['spins'];

	//create small goods variable
	if (isset($_POST['small_goods'])) {
		$url = $_POST['small_goods']; if($url == 'yes'){$url=1;}else{$url=0;}
	} else {
		$url = 0;
	}

	// Whats inserted
	$wpdb->update( 'meatorders' ,

	array(
		'v_shoulder'        =>      $v_shoulder ,
		'shoulder_v'        =>      $_POST['shoulder_v'] ,
		'v_loin'            =>      $v_loin ,
		'loin_v'            =>      $_POST['loin_v'] ,
		'v_leg'             =>      $v_leg ,
		'leg_v'             =>      $_POST['leg_v'] ,
		'v_leg_whole_half'  =>      $_POST['v_leg_whole_half'] ,
		'v_excess_trim'     =>      $_POST['v_excess_trim'] ,
		'excess_trim_v'     =>      $_POST['excess_trim_v'] ,
		'spins'             =>      $spins ,
		'small'             =>      $url
	) ,

	// where
	array(
		'unid' => $_POST['unid'] )
	);

	// small goods send
	if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
	}    else   {
		wp_redirect( home_url() . '/confirm-deer?n=' . $_POST['unid'] );
	}
}
add_action( 'admin_post_orderdeerupdate', 'prefix_admin_orderdeerupdate' );
add_action( 'admin_post_nopriv_orderdeerupdate', 'prefix_admin_orderdeerupdate' );