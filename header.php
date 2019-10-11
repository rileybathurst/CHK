<!doctype html>
<html class="no-js" lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?> 

	<!-- <script> // documentation on this?
		var url = document.location.href;
		jQuery(document).ready(function() {
		//copy profile name to account name during registration
		if (url.indexOf("register/") >= 0) {
			jQuery('label[for=signup_username],#signup_username').css('display','none');
			jQuery('#field_1').blur(function(){
				jQuery("#signup_username").val(jQuery("#field_1").val());
			});
		}
		});
	</script> -->

	<!-- analytics I think I can put this in the footer or jetpack if I use that -->
	<!-- <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12917302-6', 'auto');
		ga('send', 'pageview');
	</script> -->

	<!-- recaptcha enqueue this probably in the footer -->
	<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->

	</head>
	<body>
		<!-- facebook I can do something better with this quite possibly just keep the fiv and -->
		<!-- <div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=163256807043192";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script> -->

		<div id="minimenu" class="hide-for-print">
			<?php if ( has_custom_logo() ) { ?>
				<div class="minimenu-logo"><?php the_custom_logo(); ?></div>
				<span class="screen-reader"><?php echo get_bloginfo( 'name' ); ?></span>
			<?php } else { ?>
				<h2><?php $blog_info = get_bloginfo( 'name' ); ?></h2>
			<?php } ?>

			<?php if ( is_user_logged_in() ) {
				$current_user = wp_get_current_user();
				$current_login = $current_user->user_login; ?>
				<li>
					<h2 class="seconds">
						Welcome back <?php echo $current_login; ?>
					</h2>
				</li>
			<?php }

			wp_nav_menu( array(
				'theme_location' => 'primary'
			) );
			
			if ( is_user_logged_in() ) { ?>
				<button href=" php echo home_url(); ?>/logout" class="">logout</button>
			<?php } else { ?>
				<h2>Login</h2>  
				<?php 
					$mini_login = array (
						'form_id'			=> 'mini_login'
						// 'label_username'	=> ''
					);
					wp_login_form( $mini_login );
				?>
				<button href=" php echo home_url(); ?>/?page_id= php echo (get_page_by_title('register')->ID); ?>" class="button drop">Sign Up</button>
			<?php } ?>
		</div>

		<!-- top bar remove this while im working on putting everything back together -->
		<section class="top-bar hide-for-print">
			<?php if ( is_user_logged_in() ) { ?>
				<div>
					<p>Welcome back,<?php echo $current_user->display_name; ?></p>
					<a href="<?php echo home_url(); ?>/view-profile">View Previous Orders</a>
				</div>
				<button href=" php echo home_url(); ?>/logout" class="">logout</button><!-- this should be a button -->
			<?php } else { ?>
				<div class="top-bar--together">
					<p>Hey, Your currently not logged in.</p>
					<button href=" php echo home_url(); ?>/login" class="hide-for-large">LOG IN</button><!-- button might be to a pop up? I hate those but this is generated by a click -->

					<!-- <div class="show-for-large"> show for the right size but large will do for now -->
						<!-- php
							$side_log = array (
								'form_id'        => 'side_log',
								'label_username' => 'email',
							); 
							wp_login_form( $side_log );
						?>
					</div> -->

					<button href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('register')->ID); ?>" class="">Sign Up</button>
					<!-- why would a customer sign up should go here -->
				</div>
			<?php } ?>
			<!-- show for either login state -->
			<button href=" php echo home_url(); ?>/contact" class="top-bar--contact"><?php echo (get_page_by_title('Contact Us')->post_title); ?></button>
		</section>

		<div class="page-layout">
			<div class="top-background-image hide-for-print">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/iStock_000051038948_large.jpg" media="(min-width: 1440px)">
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/iStock_000051038948_medium.jpg" media="(min-width: 640px)">
					<img src="<?php echo get_template_directory_uri(); ?>/img/iStock_000051038948_small.jpg">
				</picture>
			</div>
			<header class="hide-for-print">
				
				<!-- logo wordpress default config -->
				<?php if ( has_custom_logo() ) { ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
					<span class="screen-reader"><?php echo get_bloginfo( 'name' ); ?></span>
				<?php } else { ?>
					<?php $blog_info = get_bloginfo( 'name' ); ?>
				<?php } ?>

				<!-- small nav --> 
				<div class="small-nav"> <!-- being top level of the grid makes the button want to be full height -->
					<button onclick="touchMenu()" class="hide-for-print">Menu</button> <!-- hide-for-large -->
					<!-- <button onclick="window.location.href = '#minimenu'">Menu</button>toggle off canvas -->
				</div>

				<!-- medium up nav -->
			<nav id="mediummenu" class="show-for-medium hide-for-print"> <!-- medium up nav -->
				<?php wp_nav_menu( array(
					'theme_location' => 'primary'
				) ); ?>
			</nav>

		</header>
