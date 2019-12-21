<?php
// SHEEP
function prefix_admin_ordersheepupdate() {
	// Extremley Important to set
	global $wpdb;

	//create variables
	$l_shoulder = $_POST['l_shoulder']; if($l_shoulder == 'on'){$l_shoulder=1;}else{$l_shoulder=0;}
	$shoulder_lb = $_POST['shoulder_lb'];
	$l_flaps = $_POST['l_flaps']; if($l_flaps == 'on'){$l_flaps=1;}else{$l_flaps=0;}
	$flaps_lb = $_POST['flaps_lb'];
	$l_loin = $_POST['l_loin']; if($l_loin == 'on'){$l_loin=1;}else{$l_loin=0;}
	$loin_lb = $_POST['loin_lb'];
	$l_leg = $_POST['l_leg']; if($l_leg == 'on'){$l_leg=1;}else{$l_leg=0;}
	$leg_lb = $_POST['leg_lb'];
	$spins = $_POST['spins'];

	//create small goods variable
	$url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}

	// Whats inserted
	$wpdb->update( 'meatorders' , 

	array(
		'l_shoulder'       => $l_shoulder ,
		'shoulder_lb'      => $shoulder_lb ,
		'l_flaps'          => $l_flaps ,
		'flaps_lb'         => $flaps_lb ,
		'l_loin'           => $l_loin ,
		'loin_lb'          => $loin_lb ,
		'l_leg'            => $l_leg ,
		'leg_lb'           => $leg_lb ,
		'spins'            => $spins ,
		'small'            => $url
	) ,

	// where
	array(
		'unid' => $_POST['unid'] )
	);

	 // small goods send
	if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );
	} else {
		wp_redirect( home_url() . '/confirm-sheep?n=' . $_POST['unid'] );
	}
}
add_action( 'admin_post_ordersheepupdate', 'prefix_admin_ordersheepupdate' );
add_action( 'admin_post_nopriv_ordersheepupdate', 'prefix_admin_ordersheepupdate' );