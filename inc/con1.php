<?php
// deals with variable set through form _POST
function prefix_admin_con1() {

	//opens direct access to mysql database
	global $wpdb;

	// Whats inserted
	$wpdb->update( meatorders ,

		array(
			'confirm' => '1' 
		) ,

		// where
		array(
			'unid' => $_POST['unid'] )
		);

		//email confirmations
		// $to = 'riley@rileybathurst.com';
		$tochk = 'info@canterburyhomekill.co.nz';
		$tosender = $_POST['email'];

		$subject = 'Canterbury Homekill Order: ' . $_POST['unid'];

		$top = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Untitled Document</title>
			</head>

			<body bgcolor="#ebebeb">
				<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
					<tbody>
						<tr>
							<table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">

								<tr>
									<td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
										<img src="https://canterburyhomekill.co.nz/wp-content/themes/CHK-0-3/img/CHK-logo-600.png" alt="canterburyhomekill logo" />
									</td>
								</tr>

								<tr>
									<td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
										<p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz Order '.
											$_POST['unid'] .
										'</p>
									</td>
								</tr>

								<tr>
									<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Name 
											<strong>'.
												$_POST['name'].
											'</strong>
										</p>

										<p>
											Date 
											<strong>'.
												$_POST['timenow'].
											'</strong>
										</p>

										<p>
											Phone
											<strong>'.
												$_POST['phone'].
											'</strong>
										</p>

										<p>
											Mobile
											<strong>'.
												$_POST['phone2'].
											'</strong>
										</p>

										<p>
											Order details
											<strong>'.
												$_POST['unid'].
											'</strong>
										</p>

										<p>
											email
											<strong>'.
												$_POST['email'].
											'</strong>
										</p>

										<p>
											Animal
											<strong>'.
												$_POST['amp'].
											'</strong>
										</p>

										<p>
											Number of People
											<strong>'.
												$_POST['people'].
											'</strong>
										</p>';

									$beef = ' 
										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<h3>Beef Options</h3>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Fillet  
											<strong>'.
												$_POST['b_fillet'].
											'</strong>
											<em> '.
												$_POST['fillet_bf'].
											'</em>
										</p>

										<p>
											Portherhouse   
											<strong>'.
												$_POST['b_porterhouse'].
											'</strong>
											<em> '.
												$_POST['porterhouse_bf'].
											'</em>
										</p>

										<p>
											T-Bone  
											<strong>'.
												$_POST['b_tbone'].
											'</strong>
											<em> '.
												$_POST['tbone_bf'].
											'</em>
										</p>

										<p>
											Ribeye  
											<strong>'.
												$_POST['b_ribeye'].
											'</strong>
											<em> '.
												$_POST['ribeye_bf'].
											'</em>
										</p>

										<p>
											Rump Steak  
											<strong>'.
												$_POST['b_rump'].
											'</strong>
											<em> '.
												$_POST['rump_bf'].
											'</em>
										</p>

										<p>
											Topside   
											<strong>'.
												$_POST['b_topside'].
											'</strong>
											<em> '.
												$_POST['topside_bf'].
											'</em>
										</p>

										<p>
											Rolled Roast   
											<strong>'.
												$_POST['b_rolledroast'].
											'</strong>
											<em> '.
												$_POST['rolledroast_bf'].
											'</em>
										</p>

										<p>
											Wiener Schnitzel   
											<strong>'.
												$_POST['b_weinerschnitzel'].
											'</strong>
											<em> '.
												$_POST['wienerschnitzel_bf'].
											'</em>
										</p>

										<p>
											Silverside   
											<strong>'.
												$_POST['b_silverside'].
											'</strong>
											<em> '.
												$_POST['silverside_bf'].
											'</em>
										</p>

										<p>
											Blade  
											<strong>'.
												$_POST['b_blade'].
											'</strong>
											<em> '.
												$_POST['blade_bf'].
											'</em>
										</p>

										<p>
											Shin Fillet   
											<strong>'.
												$_POST['b_shinfillet'].
											'</strong>
											<em> '.
												$_POST['shinfillet_bf'].
											'</em>
										</p>

										<p>
											Chuck Steak   
											<strong>'.
												$_POST['b_chucksteak'].
											'</strong>
											<em> '.
												$_POST['chucksteak_bf'].
											'</em>
										</p>

										<p>
											Skirt Steak   
											<strong>'.
												$_POST['b_skirtsteak'].
											'</strong>
											<em> '.
												$_POST['skirtsteak_bf'].
											'</em>
										</p>

										<p>
											Mince   
											<strong>'.
												$_POST['b_mince'].
											'</strong>
										</p>
							';

								$pig = ' 
										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<h3>Pig Options</h3>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<strong>Shoulder</strong>

										<p>
											Rolled Shoulder  
											<strong>'.
												$_POST['ps_rolledshoulder'].
											'</strong>
											<em> '.
												$_POST['rolledshoulder_ps'].
											'</em>
										</p>

										<p>
											Bacon   
											<strong>'.
												$_POST['ps_bacon'].
											'</strong>
										</p>

										<p>
											Pickled Pork  
											<strong>'.
												$_POST['ps_pickledpork'].
											'</strong>
										</p>

										<p>
											Chops  
											<strong>'.
												$_POST['ps_chops'].
											'</strong>
										</p>

										<p>
											Pressed Ham   
											<strong>'.
												$_POST['ps_pressedham'].
											'</strong>
											<em> '.
												$_POST['pressedham_ps'].
											'</em>
										</p>

										<p>
											Mince   
											<strong>'.
												$_POST['ps_mince'].
											'</strong>
										</p>

										<p>
											Diced Pork   
											<strong>'.
												$_POST['ps_dicedpork'].
											'</strong>
										</p>

										<p>
											Roast Jointed   
											<strong>'.
												$_POST['ps_roastjointed'].
											'</strong>
											<em> '.
												$_POST['roastjointed_ps'].
											'</em>
										</p>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<strong>Loin</strong>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Chops   
											<strong>'.
												$_POST['pl_chops'].
											'</strong>
										</p>

										<p>
											Loin Steaks  
											<strong>'.
												$_POST['pl_loinsteaks'].
											'</strong>
										</p>

										<p>
											Roast Jointed   
											<strong>'.
												$_POST['pl_roastjointed'].
											'</strong>
											<em> '.
												$_POST['roastjointed_pl'].
											'</em>
										</p>

										<p>
											Bacon   
											<strong>'.
												$_POST['pl_bacon'].
											'</strong>
										</p>

										<p>
											Bacon Chops   
											<strong>'.
												$_POST['pl_baconchops'].
											'</strong>
										</p>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<strong>Belly</strong>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Bacon   
											<strong>'.
												$_POST['pb_bacon'].
											'</strong>
										</p>

										<p>
											Bacon Strips    
											<strong>'.
												$_POST['pb_baconstrips'].
											'</strong>
										</p>

										<p>
											Rolled   
											<strong>'.
												$_POST['pb_rolled'].
											'</strong>
										</p>

										<p>
											Roast   
											<strong>'.
												$_POST['pb_whole'].
											'</strong>
											<em> '.
												$_POST['whole_pb'].
											'</em>
										</p>

										<p>
											Strips   
											<strong>'.
												$_POST['pb_strips'].
											'</strong>
										</p>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<strong>Leg</strong>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Ham On The Bone   
											<strong>'.
												$_POST['pg_hamonthebone'].
											'</strong>
											<em> '.
												$_POST['hamonthebone_cook'].
											'</em> '.
											$_POST['hamonthebone_size'].
										'</p>

										<p>
											Pressed Ham   
											<strong>'.
												$_POST['pg_pressedham'].
											'</strong>
											<em> '.
												$_POST['pressedham_cook'].
											'</em> '.
											$_POST['pressedham_size'].
										'</p>

										<p>
											Roast   
											<strong>'.
												$_POST['pg_roast'].
											'</strong>
											<em> '.
												$_POST['roast_pg'].
											'</em>
										</p>

										<p>
											Mince   
											<strong>'.
												$_POST['pg_mince'].
											'</strong>
										</p>

										<p>
											Diced   
											<strong>'.
												$_POST['pg_diced'].
											'</strong>
										</p>

										<p>
											Leg Steaks   
											<strong>'.
												$_POST['pg_legsteaks'].
											'</strong>
										</p>

										<p>
											Bacon   
											<strong>'.
												$_POST['pg_bacon'].
											'</strong>
										</p>
							';

								$deer = ' 
										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<h3>Deer Options</h3>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Shoulder   
											<strong>'.
												$_POST['v_shoulder'].
											'</strong>
											<em> '.
												$_POST['shoulder_v'].
											'</em>
										</p>

										<p>
											Loin    
											<strong>'.
												$_POST['v_loin'].
											'</strong>
											<em> '.
												$_POST['loin_v'].
											'</em>
										</p>

										<p>
											Leg    
											<strong>'.
												$_POST['v_leg'].
											'</strong>
											<em> '.
												$_POST['leg_v'].
											'</em> '.
											$_POST['v_leg_whole_half'].
										'</p>
							';                

								$sheep = ' 
										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<h3>Sheep Options</h3>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Shoulder  
											<strong>'.
												$_POST['l_shoulder'].
											'</strong>
											<em> '.
												$_POST['shoulder_lb'].
											'</em>
										</p>

										<p>
											Loin   
											<strong>'.
												$_POST['l_loin'].
											'</strong>
											<em> '.
												$_POST['loin_lb'].
											'</em>
										</p>

										<p>
											Flaps  
											<strong>'.
												$_POST['l_flaps'].
											'</strong>
											<em> '.
												$_POST['flaps_lb'].
											'</em>
										</p>

										<p>
											Leg  
											<strong>'.
												$_POST['l_leg'].
											'</strong>
											<em> '.
												$_POST['leg_lb'].
											'</em>
										</p>
							';

								$alpacalama = ' 
										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<h3>Alpaca / Llama Options</h3>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Shoulder  
											<strong>'.
												$_POST['l_shoulder'].
											'</strong>
											<em> '.
												$_POST['shoulder_lb'].
											'</em>
										</p>

										<p>
											Loin   
											<strong>'.
												$_POST['l_loin'].
											'</strong>
											<em> '.
												$_POST['loin_lb'].
											'</em>
										</p>

										<p>
											Flaps  
											<strong>'.
												$_POST['l_flaps'].
											'</strong>
											<em> '.
												$_POST['flaps_lb'].
											'</em>
										</p>

										<p>
											Leg  
											<strong>'.
												$_POST['l_leg'].
											'</strong>
											<em> '.
												$_POST['leg_lb'].
											'</em>
										</p>
							';

							$tail = '<p>
											Special Instructions     
											<strong>'.
												$_POST['spins'].
											'</strong>
										</p>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<h3>Small Goods Options</h3>

										<p>All weights in KG</p3>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Pork &amp; Herb Sausages    
											<strong>'.
												$_POST['t_porkherb'].
											'</strong>
										</p>

										<p>
											Lamb &amp; Mint Sausages    
											<strong>'.
												$_POST['t_lambmint'].
											'</strong>
										</p>

										<p>
											Bratwurst Sausages    
											<strong>'.
												$_POST['t_bratwurst'].
											'</strong>
										</p>

										<p>
											Bratwurst with Fennel Sausages    
											<strong>'.
												$_POST['t_bratwurst_fennel'].
											'</strong>
										</p>

										<p>
											Texan Chile Sausages    
											<strong>'.
												$_POST['t_texan_chile'].
											'</strong>
										</p>

										<p>
											Chorizo Sausages    
											<strong>'.
												$_POST['t_chorizo'].
											'</strong>
										</p>

										<p>
											Tomato &amp; Basil Sausages    
											<strong>'.
												$_POST['t_tomatobasil'].
											'</strong>
										</p>

										<p>
											Herb &amp; Garlic Sausages    
											<strong>'.
												$_POST['t_herbgarlic'].
											'</strong>
										</p>

										<p>
											Green Capsicum &amp; Onion Sausages    
											<strong>'.
												$_POST['t_peppersonion'].
											'</strong>
										</p>

										<p>
											Green Capsicum &amp; Onion <em>- GF</em> Sausages    
											<strong>'.
												$_POST['t_gf_capsicum'].
											'</strong>
										</p>

										<p>
											Plain Sausages    
											<strong>'.
												$_POST['t_plain'].
											'</strong>
										</p>

										<p>
											Plain <em>- GF</em> Sausages    
											<strong>'.
												$_POST['t_gf_plain'].
											'</strong>
										</p>

										<p>
											Saveloys    
											<strong>'.
												$_POST['t_saveloys'].
											'</strong>
										</p>

										<p>
											Saveloys <em>- GF</em>    
											<strong>'.
												$_POST['t_gf_saveloys'].
											'</strong>
										</p>

										<p>
											Build Your Own Sausages    
											<strong>'.
												$_POST['t_create'].
											'</strong>
										</p>

										<p>
											Patties    
											<strong>'.
												$_POST['t_patties'].
											'</strong>
										</p>

										<p>
											Patties <em>- GF</em>    
											<strong>'.
												$_POST['t_gf_patties'].
											'</strong>
										</p>

										<p>
											Salami    
											<strong>'.
												$_POST['t_salami'].
											'</strong>
											<em> '.
												$_POST['salami_t'].
											'</em>
											<strong> '.
												$_POST['salami_s'].
											'</strong>
										</p>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   
								</tr>

								<tr>
									<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: center;" align="center">
										<span style="font-size: 11px; color: #575757; line-height: 200%; font-family: arial; text-decoration: none;">
											Canterbury Homekill. 26 Merton Road. RD 1. Rangiora 7471<br />
											<a href="mailto:info@canterburyhomekill.co.nz">info@canterburyhomekill.co.nz</a><br />
											Phone (03) 313 4771
										</span>
									</td>
								</tr>

						</table>
					</tr>
				</tbody>
			</table>
			</body>
			</html>
		';

	// fixes orders 0 and 1's to Y's and N's
	$number = array("0", "1");
	$letter = array("N", "Y");

	// pick the right animal
	if ($_POST['animal'] == 'beef') {
		$middle = str_replace($number, $letter, $beef);
	} elseif ($_POST['animal'] == 'pig') {
		$middle = str_replace($number, $letter, $pig);
	} elseif ($_POST['animal'] == 'deer') {
		$middle = str_replace($number, $letter, $deer);
	} elseif ($_POST['animal'] == 'sheep') {
		$middle = str_replace($number, $letter, $sheep);  
	} elseif ($_POST['animal'] == 'alpacallama') {
		$middle = str_replace($number, $letter, $alpacallama);
	} 

// places both parts of the message together
	$message = 
				$top .
				$middle .
				$tail;

	add_filter( 'wp_mail_from_name', function( $name ) {
		return 'Canterbury Homekill';
	});

	add_filter( 'wp_mail_content_type', 'set_content_type' );
		function set_content_type( $content_type ) {
			return 'text/html';
	}

	// wp_mail($to , $subject , $message );
	wp_mail($tosender , $subject , $message );
	wp_mail($to , $subject , $message );
	wp_mail($tochk , $subject , $message );

	wp_redirect( home_url() . '/thanks' );
	exit;
}

add_action( 'admin_post_con1', 'prefix_admin_con1' );
add_action( 'admin_post_nopriv_con1', 'prefix_admin_con1' );