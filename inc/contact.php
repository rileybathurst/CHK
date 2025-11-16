<?php
// deals with variable set through form _POST
// this has to be hidden from github due to the recaptcha secret key

function prefix_admin_contact() {
// Check if captcha has been checked
$captcha = $_POST['g-recaptcha'];

// If no captcha 
if(!$captcha){
	// Redirect
	wp_redirect( home_url() . '/recaptcha-fail' );
	exit;
}

	// this comes from wp-config.php and is not in the repo it can be found at https://www.google.com/recaptcha/admin
	$secret = RECAPTCHA_SECRET_KEY;
	if (!$secret) {
		wp_redirect( home_url() . '/no-secret' );
		exit;
	}

	$response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret='.RECAPTCHA_SECRET_KEY.'&response='.$captcha);
    $responseBody = wp_remote_retrieve_body($response);
    $responseKeys = json_decode($responseBody, true);

	if($responseKeys['success'] == true && $responseKeys['score'] > 0.5) {

		// Not Spam and checked captcha

		//email to info@canterburyhomekill.co.nz
		// $developer = 'riley@rileybathurst.com'; // testing email
		$tochk = 'info@canterburyhomekill.co.nz';
		$to2 = $_POST['email'];

		$subject = 'Homekill Website enquiry: ' . $_POST['name'];

		$theme = get_template_directory_uri();

		$txt = '
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<title>Canterbury Homekill Contact</title>
				</head>

				<body bgcolor="#ebebeb">

					<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
						<tbody>
							<tr> 
								<table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">

									<tr>
										<td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
											<img src=" '.
											
											$theme .
											
											'/img/CHK-logo-600.png" alt="canterburyhomekill logo" />
										</td>
									</tr>

									<tr>
										<td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
											<p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz</p>
										</td>
									</tr>

									<tr>
										<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">

											<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

											<p>
												Thanks for your contact, '.
													$_POST['name'] .
												' we will be in touch ASAP.
											</p>

											<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   

											<p>
												For your records the message was,
											</p>

											<p> ' .
												$_POST['details'] .
											'</p>

											<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   

											<p>
												We will contact you back on, ' .
													$_POST['email'] .
												' or '.
													$_POST['phone'] .
											'</p>

											<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/> 

										</td>
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

		add_filter( 'wp_mail_from_name', function( $name ) {
			return 'Canterbury Homekill';
		});

		add_filter( 'wp_mail_content_type', 'set_content_type' );
		function set_content_type( $content_type ) {
			return 'text/html';
		}

		// wp_mail($developer , $subject , $txt );
		wp_mail($tochk , $subject , $txt );
		wp_mail($to2 , $subject , $txt );

		wp_redirect( home_url() . '/thanks' );

	}  else {
		wp_redirect( home_url() . '/no-robot' );
	}

	exit;

}

add_action( 'admin_post_contact', 'prefix_admin_contact' );
add_action( 'admin_post_nopriv_contact', 'prefix_admin_contact' );