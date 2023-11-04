<?php
// deals with variable set through form _POST
function prefix_admin_orderbeefupdate() {
	// Extremley Important to set
	global $wpdb;

	//create variables
	$b_fillet           = $_POST['b_fillet']; if($b_fillet == 'on'){$b_fillet=1;}else{$b_fillet=0;}
	$b_porterhouse      = $_POST['b_porterhouse']; if($b_porterhouse == 'on'){$b_porterhouse=1;}else{$b_porterhouse=0;}
	$b_tbone            = $_POST['b_tbone']; if($b_tbone == 'on'){$b_tbone=1;}else{$b_tbone=0;}
	$b_ribeye           = $_POST['b_ribeye']; if($b_ribeye == 'on'){$b_ribeye=1;}else{$b_ribeye=0;}
	$b_rump             = $_POST['b_rump']; if($b_rump == 'on'){$b_rump=1;}else{$b_rump=0;}
	$b_topside          = $_POST['b_topside']; if($b_topside == 'on'){$b_topside=1;}else{$b_topside=0;}
	$b_rolledroast      = $_POST['b_rolledroast']; if($b_rolledroast == 'on'){$b_rolledroast=1;}else{$b_rolledroast=0;}
	$b_weinerschnitzel  = $_POST['b_weinerschnitzel']; if($b_weinerschnitzel == 'on'){$b_weinerschnitzel=1;}else{$b_weinerschnitzel=0;}
	$b_silverside       = $_POST['b_silverside']; if($b_silverside == 'on'){$b_silverside=1;}else{$b_silverside=0;}
	$b_blade            = $_POST['b_blade']; if($b_blade == 'on'){$b_blade=1;}else{$b_blade=0;}
	$b_shinfillet       = $_POST['b_shinfillet']; if($b_shinfillet == 'on'){$b_shinfillet=1;}else{$b_shinfillet=0;}
	$b_chucksteak       = $_POST['b_chucksteak']; if($b_chucksteak == 'on'){$b_chucksteak=1;}else{$b_chucksteak=0;}
	$b_skirtsteak       = $_POST['b_skirtsteak']; if($b_skirtsteak == 'on'){$b_skirtsteak=1;}else{$b_skirtsteak=0;}
	// $b_mince            = $_POST['b_mince']; if($b_mince == 'on'){$b_mince=1;}else{$b_mince=0;}
	$b_brisket          = $_POST['b_brisket']; if($b_brisket == 'on'){$b_brisket=1;}else{$b_brisket=0;}
	$b_shortribs        = $_POST['b_shortribs']; if($b_shortribs == 'on'){$b_shortribs=1;}else{$b_shortribs=0;}
	$b_smoker           = $_POST['b_smoker']; if($b_smoker == 'on'){$b_smoker=1;}else{$b_smoker=0;}
	$b_assistance       = $_POST['b_assistance']; if($b_assistance == 'on'){$b_assistance=1;}else{$b_assistance=0;}

	//create small goods variable this is a strange variable needs documentation on why i chose url
	if (isset($_POST['small_goods'])) {
		$url = $_POST['small_goods']; if($url == 'yes'){$url=1;}else{$url=0;}
	} else {
		$url = 0;
	}
	
	// Whats inserted
	$wpdb->update( 'meatorders' ,

		array(
			'b_fillet'          => $b_fillet ,
			'fillet_bf'         => $_POST['fillet_bf'] ,
			'b_porterhouse'     => $b_porterhouse ,
			'porterhouse_bf'    => $_POST['porterhouse_bf'] ,
			'b_tbone'           => $b_tbone ,
			'b_ribeye'          => $b_ribeye ,
			'ribeye_bf'         => $_POST['ribeye_bf'] ,
			'b_rump'            => $b_rump ,
			'rump_bf'           => $_POST['rump_bf'] ,
			'b_topside'         => $b_topside ,
			'topside_bf'        => $_POST['topside_bf'] ,
			'b_rolledroast'     => $b_rolledroast ,
			'rolledroast_bf'    => $_POST['rolledroast_bf'] ,
			'b_weinerschnitzel' => $b_weinerschnitzel ,
			'weinerschnitzel_bf'=> $_POST['weinerschnitzel_bf'] ,
			'b_silverside'      => $b_silverside ,
			'silverside_bf'     => $_POST['silverside_bf'] ,
			'b_blade'           => $b_blade ,
			'blade_bf'          => $_POST['blade_bf'] ,
			'b_shinfillet'      => $b_shinfillet ,
			'shinfillet_bf'     => $_POST['shinfillet_bf'] ,
			'b_chucksteak'      => $b_chucksteak ,
			'chucksteak_bf'     => $_POST['chucksteak_bf'] ,
			'b_skirtsteak'      => $b_skirtsteak ,
			'skirtsteak_bf'     => $_POST['skirtsteak_bf'] ,
			// 'b_mince'           => $b_mince ,
			'b_brisket'         => $b_brisket ,
			'brisket_bf'        => $_POST['brisket_bf'] ,
			'b_shortribs'       => $_POST['b_shortribs'] ,
			'b_smoker'          => $_POST['b_smoker'] ,
			'b_assistance'      => $_POST['b_assistance'] ,
			'spins'             => $_POST['spins'],
			'small'             => $url
		) ,

		// where
		array(
			'unid' => $_POST['unid'] )
		);

		// small goods send
		if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
		} else {
			wp_redirect( home_url() . '/confirm-beef?n=' . $_POST['unid'] );
		}
}
add_action( 'admin_post_orderbeefupdate', 'prefix_admin_orderbeefupdate' );
add_action( 'admin_post_nopriv_orderbeefupdate', 'prefix_admin_orderbeefupdate' );