<?php
function prefix_admin_orderpigupdate() {

	// Opens direct access to mysql database
	global $wpdb;

	//create variables
	//Shoulder
	$ps_rolledshoulder = $_POST['ps_rolledshoulder']; if($ps_rolledshoulder == 'on'){$ps_rolledshoulder=1;}else{$ps_rolledshoulder=0;}
	$ps_bacon = $_POST['ps_bacon']; if($ps_bacon == 'on'){$ps_bacon=1;}else{$ps_bacon=0;}
	$ps_pickledpork = $_POST['ps_pickledpork']; if($ps_pickledpork == 'on'){$ps_pickledpork=1;}else{$ps_pickledpork=0;}
	$ps_chops = $_POST['ps_chops']; if($ps_chops == 'on'){$ps_chops=1;}else{$ps_chops=0;}
	$ps_pressedham = $_POST['ps_pressedham']; if($ps_pressedham == 'on'){$ps_pressedham=1;}else{$ps_pressedham=0;}
	$pressedham_ps = $_POST['pressedham_ps'];
	$ps_mince = $_POST['ps_mince']; if($ps_mince == 'on'){$ps_mince=1;}else{$ps_mince=0;}
	$ps_dicedpork = $_POST['ps_dicedpork']; if($ps_dicedpork == 'on'){$ps_dicedpork=1;}else{$ps_dicedpork=0;}
	$ps_roastjointed = $_POST['ps_roastjointed']; if($ps_roastjointed == 'on'){$ps_roastjointed=1;}else{$ps_roastjointed=0;}
	$roastjointed_ps = $_POST['roastjointed_ps'];
	$ps_bostonbutt = $_POST['ps_bostonbutt']; if($ps_bostonbutt == 'on'){$ps_bostonbutt=1;}else{$ps_bostonbutt=0;}

	//Loin
	$pl_chops = $_POST['pl_chops']; if($pl_chops == 'on'){$pl_chops=1;}else{$pl_chops=0;}
	$pl_loinsteaks = $_POST['pl_loinsteaks']; if($pl_loinsteaks == 'on'){$pl_loinsteaks=1;}else{$pl_loinsteaks=0;}
	$pl_roastjointed = $_POST['pl_roastjointed']; if($pl_roastjointed == 'on'){$pl_roastjointed=1;}else{$pl_roastjointed=0;}
	$roastjointed_pl = $_POST['roastjointed_pl'];
	$pl_bacon = $_POST['pl_bacon']; if($pl_bacon == 'on'){$pl_bacon=1;}else{$pl_bacon=0;}
	$pl_baconchops = $_POST['pl_baconchops']; if($pl_baconchops == 'on'){$pl_baconchops=1;}else{$pl_baconchops=0;}
	$pl_bellybacon = $_POST['pl_bellybacon']; if($pl_bellybacon == 'on'){$pl_bellybacon=1;}else{$pl_bellybacon=0;}
	$pb_rolled = $_POST['pb_rolled']; if($pb_rolled == 'on'){$pb_rolled=1;}else{$pb_rolled=0;}

	//Belly
	$pb_bacon = $_POST['pb_bacon']; if($pb_bacon == 'on'){$pb_bacon=1;}else{$pb_bacon=0;}
	$pb_baconstrips = $_POST['pb_baconstrips']; if($pb_baconstrips == 'on'){$pb_baconstrips=1;}else{$pb_baconstrips=0;}
	$pb_whole = $_POST['pb_whole']; if($pb_whole == 'on'){$pb_whole=1;}else{$pb_whole=0;}
	$whole_pb = $_POST['whole_pb'];
	// $pb_strips = $_POST['pb_strips']; if($pb_strips == 'on'){$pb_strips=1;}else{$pb_strips=0;}
	$pb_marinate = $_POST['pb_marinate']; if($pb_marinate == 'on'){$pb_marinate=1;}else{$pb_marinate=0;}
	$marinate_pb = $_POST['marinate_pb'];

	//Leg
	$pg_hamonthebone = $_POST['pg_hamonthebone']; if($pg_hamonthebone == 'on'){$pg_hamonthebone=1;}else{$pg_hamonthebone=0;}
	$hamonthebone_cook = $_POST['hamonthebone_cook'];
	$hamonthebone_size = $_POST['hamonthebone_size'];
	$pg_pressedham = $_POST['pg_pressedham']; if($pg_pressedham == 'on'){$pg_pressedham=1;}else{$pg_pressedham=0;}
	$pressedham_cook = $_POST['pressedham_cook'];
	$pressedham_size = $_POST['pressedham_size'];
	$pg_roast = $_POST['pg_roast']; if($pg_roast == 'on'){$pg_roast=1;}else{$pg_roast=0;}
	$roast_pg = $_POST['roast_pg'];
	$pg_mince = $_POST['pg_mince']; if($pg_mince == 'on'){$pg_mince=1;}else{$pg_mince=0;}
	$pg_diced = $_POST['pg_diced']; if($pg_diced == 'on'){$pg_diced=1;}else{$pg_diced=0;}
	$pg_legsteaks = $_POST['pg_legsteaks']; if($pg_legsteaks == 'on'){$pg_legsteaks=1;}else{$pg_legsteaks=0;}
	$pg_bacon = $_POST['pg_bacon']; if($pg_bacon == 'on'){$pg_bacon=1;}else{$pg_bacon=0;}
	$pg_hocks = $_POST['pg_hocks']; if($pg_hocks == 'on'){$pg_hocks=1;}else{$pg_hocks=0;}
	$hocks_pg = $_POST['hocks_pg'];

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
		'ps_rolledshoulder' => $ps_rolledshoulder ,
		'rolledshoulder_ps' => $_POST['rolledshoulder_ps'] ,
		'ps_bacon'          => $ps_bacon ,
		'ps_pickledpork'    => $ps_pickledpork ,
		'ps_chops'          => $ps_chops ,
		'ps_pressedham'     => $ps_pressedham ,
		'pressedham_ps'     => $pressedham_ps ,
		'ps_mince'          => $ps_mince ,
		'ps_dicedpork'      => $ps_dicedpork ,
		'ps_roastjointed'   => $ps_roastjointed ,
		'roastjointed_ps'   => $roastjointed_ps ,
		'ps_bostonbutt'     => $ps_bostonbutt ,

		'pl_chops'          => $pl_chops ,
		'pl_loinsteaks'     => $pl_loinsteaks ,
		'pl_roastjointed'   => $pl_roastjointed ,
		'roastjointed_pl'   => $roastjointed_pl ,
		'pl_bacon'          => $pl_bacon ,
		'pl_baconchops'     => $pl_baconchops ,
		'pl_bellybacon'     => $pl_bellybacon ,
		'pb_rolled'         => $pb_rolled ,

		'pb_bacon'          => $pb_bacon ,
		'pb_baconstrips'    => $pb_baconstrips ,
		'pb_whole'          => $pb_whole ,
		'whole_pb'          => $whole_pb ,
		'pb_marinate'       => $pb_marinate ,
		'marinate_pb'       => $marinate_pb ,

		'pg_hamonthebone'   => $pg_hamonthebone ,
		'hamonthebone_cook' => $hamonthebone_cook ,
		'hamonthebone_size' => $hamonthebone_size ,
		'pg_pressedham'     => $pg_pressedham ,
		'pressedham_cook'   => $pressedham_cook ,
		'pressedham_size'   => $pressedham_size ,
		'pg_roast'          => $pg_roast ,
		'roast_pg'          => $roast_pg ,
		'pg_mince'          => $pg_mince ,
		'pg_diced'          => $pg_diced ,
		'pg_legsteaks'      => $pg_legsteaks ,
		'pg_bacon'          => $pg_bacon ,
		'pg_hocks'          => $pg_hocks ,
		'hocks_pg'          => $hocks_pg ,

		'assistance'        => $assistance ,
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
		wp_redirect( home_url() . '/confirm-pig?n=' . $_POST['unid'] );
	}
}
add_action( 'admin_post_orderpigupdate', 'prefix_admin_orderpigupdate' );
add_action( 'admin_post_nopriv_orderpigupdate', 'prefix_admin_orderpigupdate' );