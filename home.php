<?php get_header(); ?>

<div class="contentful">
	<main class="over-background main-border">
		<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little convaluted but its fine for now -->
			
		<hr>
		
		<p class="drop"><?php echo (get_page_by_title('Intro')->post_content); ?></p>

		<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>" class="button">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h4>
			</div>
		</div>
		
		<hr>
		
		<div><!-- How -->
			<p><?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?></p>
		
			<div class="row">   
				<div class="small-12 columns">
					<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>" class="button drop"><?php echo (get_page_by_title('Prices')->post_title); ?></a></h3>
				</div>
			</div>
			
			<div class="row">
				<div class="small-12 columns">
					<p>The first step to having us work on your animal would be our online booking form.</p>
				</div>
			</div>
			
				<div class="row">   
				<div class="small-12 columns">
					<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Booking Form')->ID); ?>" class="button drop"><?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3>
				</div>
			</div> -->
		
		</div><!-- How -->
	</main><!-- First Two -->
			 
	<section class="light-back">
 
		<div class="flagbanner drop">
			<h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3>
		</div>               

		<p class="drop"><?php echo (get_page_by_title('order')->post_content); ?></p>

		<div class="small-12 medium-6 columns drop">
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" /></a>
			<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="button center-button">Beef</a></h3>
		</div>

		<div class="small-12 medium-6 columns drop">
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" /></a>
			<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="button center-button">Deer</a></h3>
		</div>

		<div class="small-12 medium-6 columns drop">
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" /></a>
			<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="button center-button">Pig</a></h3>
		</div>

		<div class="small-12 medium-6 columns drop">
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" /></a>
			<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="button center-button">Sheep</a></h3>
		</div>

		<div class="small-12 medium-6 columns end drop">
			<a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo content_url(); ?>/uploads/2016/03/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" /></a>
			<h3 class="text-center">
				<a href="<?php echo home_url(); ?>/alpaca-llama" class="button center-button">Alpaca /</a>
				<a href="<?php echo home_url(); ?>/alpaca-llama" class="button center-button"> llama</a>
			</h3>
		</div>

		<hr>
		
		<?php if ( is_user_logged_in() ) { ?>

			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">Welcome</h3>
			</div>
	
			<?php 
				$current_user = wp_get_current_user();
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
					<ul class="no-bullet stripes"> <!-- this shouldn't be a list its limited to one but I guess I wanted the styling?-->
						<li>
							<div class="row">
								<div class="small-2 columns">
									<a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a>
								</div>
									
								<div class="small-1 columns stripe-breaker">|</div>

								<div class="small-2 columns">
									<?php echo $order->amp; ?>
								</div>
									
								<div class="small-1 columns stripe-breaker">|</div>

								<div class="small-6 columns">
									<?php echo $order->timenow; ?>
								</div>
							</div>
						</li>
						
					</ul> 

				<?php } ?>

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
	
<div class="contentful"><!-- make sure reusing this works as expected -->
	<section class="">
		<hr> <!-- doesnt seem like a great way to start a section -->
		<div class="flagbanner drop fall">
			<h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
		</div>
		<p class="drop"><?php echo (get_page_by_title('Contact Us')->post_content); ?></p>
	</section>

	<img src="<?php echo content_url(); ?>/uploads/2016/02/iStock_000021247297_recipe.jpg" alt="cooking">
</div>
	
<?php get_footer(); ?> 