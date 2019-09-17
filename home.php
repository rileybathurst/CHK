<?php get_header(); ?>

<div class="contentful main-border">
	<main class="over-background">
		<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little convaluted but its fine for now -->
		
		<hr>
		
		<p class="drop"><?php echo (get_page_by_title('Intro')->post_content); ?></p>
		<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>" class="button">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h4>
		
		<hr>

		<p><?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?></p> <!-- why is a page title a p? -->
		<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>" class="button drop"><?php echo (get_page_by_title('Prices')->post_title); ?></a></h3>
		
		<p>The first step to having us work on your animal would be our online booking form.</p>
		
		<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Booking Form')->ID); ?>" class="button drop"><?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3>
		
	</main><!-- First Two -->
			 
	<section class="light-back">
 
		<div class="flagbanner drop">
			<h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3>
		</div>

		<p><?php echo (get_page_by_title('order')->post_content); ?></p>

		<div class="farm">
			<div class="animal">		
				<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" /></a>
				<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="a-mega">Beef</a></h3>
			</div>

			<div class="animal">
				<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" /></a>
				<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="a-mega">Deer</a></h3>
			</div>

			<div class="animal">
				<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" /></a>
				<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="a-mega">Pig</a></h3>
			</div>

			<div class="animal">
				<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" /></a>
				<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="a-mega">Sheep</a></h3>
			</div>

			<div class="animal">
				<a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo content_url(); ?>/uploads/2016/03/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" /></a>
				<h3 class="text-center"><a href="<?php echo home_url(); ?>/alpaca-llama" class="a-mega">Alpaca / llama</a></h3>
			</div>
		</div>

		<hr>
		
		<?php if ( is_user_logged_in() ) { ?>

			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">Welcome</h3>
			</div>
	
			<?php 
				$current_user = wp_get_current_user(); // I would guess this can be simplified
				$current_login = $current_user->user_login;
				$current_email = $current_user->user_email;
			?>

			<p>
				Welcome back <?php echo $current_login; ?><br />
				Your most recent order was:<br />
			</p>

			<?php // then search for orders -->
			$orders = $wpdb->get_results(
					"
					SELECT * 
					FROM meatorders
					WHERE email = '$current_email'
					ORDER by unid desc
					LIMIT 1;
					"
				);
				foreach ( $orders as $order ) 
				{ ?>
					<a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a> | <?php echo $order->amp; ?> | <?php echo $order->timenow;
				} ?>

			<p>Would you like to view <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>">your previous orders?</a></p> <!-- im not entirley sure about these all being sepetate <p> tags but its fine for now -->
			<p><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>">Check or modify your current info</a></p>
			<p><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('logout')->ID); ?>" class="button drop">logout</a></p>

		<?php } else { ?> <!-- user not logged in -->
			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">Login</h3>
			</div>  

			<p><em>Usernames have no spaces or special charachters.</em></p>
	
			<?php wp_login_form(); ?>
	
			<p><em><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a></em></p>
			<hr>
			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">New Users</h3>
			</div>
			
			<p>Become a member to be able to search previous and have your sigin in information auto fill.</p>
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('register')->ID); ?>" class="button drop left">Sign Up</a>
					
		<?php } ?>
	</section> <!-- .light-back -->
</div> <!-- contentful -->
	
<div class="contentful main-border"><!-- make sure reusing this works as expected -->
	<section class="">
		<hr> <!-- doesnt seem like a great way to start a section -->

		<div class="flag-before"><!-- stay gold --></div>
		<h3 class="flagbanner"><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
		<div class="flag-after"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-after.png"></div>

		<p class="drop"><?php echo (get_page_by_title('Contact Us')->post_content); ?></p>
	</section>

	<img src="<?php echo content_url(); ?>/uploads/2016/02/iStock_000021247297_recipe.jpg" alt="cooking" class="img-min-100">
</div>
	
<?php get_footer(); ?> 