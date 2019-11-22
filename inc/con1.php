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
		// $to = 'riley@rileybathurst.com'; // developer account should be off by default
		$tochk = 'info@canterburyhomekill.co.nz';
		$tosender = $_POST['email'];

		$subject = 'Canterbury Homekill Order: ' . $_POST['unid'];

		// $custom-logo = the_custom_logo(); I presume this doent work but do some testing
		$theme = 'https://canterburyhomekill.co.nz/wp-content/themes/CHK-0-5-0';
		$updating = get_template_directory_uri();

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
										<img src="'.
										$theme .
										'/img/CHK-logo-600.png" alt="canterburyhomekill logo" loading="lazy" />
										<img src="'.
										$updating .
										'/img/CHK-logo-600.png" alt="canterburyhomekill logo" loading="lazy" />
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
		include get_parent_theme_file_path( '/inc/email-beef.php' );
		$middle = str_replace($number, $letter, $beef);
	} elseif ($_POST['animal'] == 'pig') {
		include get_parent_theme_file_path( '/inc/email-pig.php' );
		$middle = str_replace($number, $letter, $pig);
	} elseif ($_POST['animal'] == 'deer') {
		include get_parent_theme_file_path( '/inc/email-deer.php' );
		$middle = str_replace($number, $letter, $deer);
	} elseif ($_POST['animal'] == 'sheep') {
		include get_parent_theme_file_path( '/inc/email-sheep.php' );
		$middle = str_replace($number, $letter, $sheep);
	} elseif ($_POST['animal'] == 'alpacallama') {
		include get_parent_theme_file_path( '/inc/email-alpaca-llama.php' );
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
	// wp_mail($to , $subject , $message );
	wp_mail($tochk , $subject , $message );

	wp_redirect( home_url() . '/thanks' );
	exit;
}

add_action( 'admin_post_con1', 'prefix_admin_con1' );
add_action( 'admin_post_nopriv_con1', 'prefix_admin_con1' );
