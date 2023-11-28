<?php
function prefix_admin_orderdeerupdate() {
	// Extremley Important to set
	global $wpdb;

	//create variables
	$v_fillet = $_POST['v_fillet']; if($v_fillet == 'on'){$v_fillet=1;}else{$v_fillet=0;}
	$fillet_v = $_POST['fillet_v'];
	$v_backstrap = $_POST['v_backstrap']; if($v_backstrap == 'on'){$v_backstrap=1;}else{$v_backstrap=0;}
	$backstrap_v = $_POST['backstrap_v'];
	$v_rump = $_POST['v_rump']; if($v_rump == 'on'){$v_rump=1;}else{$v_rump=0;}
	$rump_v = $_POST['rump_v'];
	$v_excess_trim = $_POST['v_excess_trim']; if($v_excess_trim == 'on'){$v_excess_trim=1;}else{$v_excess_trim=0;}
	$excess_trim_v = $_POST['excess_trim_v'];
	$spins = isset($_POST['spins']) ? sanitize_text_field($_POST['spins']) : '';

	$assistance = $_POST['assistance']; if($assistance == 'on'){$assistance=1;}else{$assistance=0;}

	//create small goods variable
	if (isset($_POST['small_goods'])) {
		$url = $_POST['small_goods']; if($url == 'yes'){$url=1;}else{$url=0;}
	} else {
		$url = 0;
	}

	// Whats inserted
	$wpdb->update( 'meatorders' ,

	array(
		'v_fillet'         =>      $v_fillet ,
		'fillet_v'          =>      $_POST['fillet_v'] ,
		'v_backstrap'       =>      $v_backstrap ,
		'backstrap_v'       =>      $_POST['backstrap_v'] ,
		'v_rump'            =>      $v_rump ,
		'rump_v'            =>      $_POST['rump_v'] ,
		'v_excess_trim'     =>      $v_excess_trim ,
		'excess_trim_v'     =>      $_POST['excess_trim_v'] ,
		'assistance'        =>      $assistance ,
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