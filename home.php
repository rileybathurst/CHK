<?php get_header(); ?>

<div class="container main-border over-background">
	<main class="">
		<div> <!-- due to the flex on the layer below I have to nest the padding -->
			<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little convaluted but its fine for now -->

			<hr>
			<p class="drop"><?php echo (get_page_by_title('Intro')->post_content); ?></p>
			<h4><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>" class="">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h4>

			<hr>

			<p><?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?></p>

			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>"><?php echo (get_page_by_title('Prices')->post_title); ?></a>
		
			<!-- <p>The first step to having us work on your animal would be our online booking form.</p>
			<h3><a href="?php echo home_url(); ?>/?page_id=?php echo (get_page_by_title('Booking Form')->ID); ?>">?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3> this hasnt been built yet-->
		</div>
	</main><!-- first area -->
			
	<div class="light-back"> <!-- hold the second area together -->
		<section><!-- Order Animals -->
	
			<div class="flagbanner drop">
				<h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3>
			</div>

			<p><?php echo (get_page_by_title('order')->post_content); ?></p>

			<div class="animals">
				<div> <!-- these need to be contained for the animals flex -->
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="animals-link">Beef</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="animals-link">Deer</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="animals-link">Pig</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="animals-link">Sheep</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo content_url(); ?>/uploads/2016/03/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" /></a>
					<h3 class="text-center">
						<a href="<?php echo home_url(); ?>/alpaca-llama" class="animals-link">Alpaca / llama</a>
					</h3>
				</div>
			</div>
		</section>
		
		<?php if ( is_user_logged_in() ) { ?>
			
			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">Welcome</h3>
			</div>

			<p>
				Welcome back <?php echo $current_login; ?><br /> <!-- $current_login comes from the header -->
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
			foreach ( $orders as $order ) { ?>
				<ul class="no-bullet stripes">  <!-- its only ever one Im not 100% sure it should be a link even tho its an easy way to get visual consistency -->
					<li> <!-- keep thinking about if this should all be a php echo or keep going in and out -->
						<a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a>
						|
						<?php echo $order->amp; ?>
						|
						<?php echo $order->timenow; ?>
					</li>		
				</ul> 

			<?php } ?>
					
			<!--should these all be buttons? -->
			<p>Would you like to view <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>">your previous orders?</a></p>
			<p><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>">Check or modify your current info</a></p>
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('logout')->ID); ?>" class="button drop">logout</a> <!-- this actually is a button not a h ref -->
													
		<?php } else { ?> <!-- user not logged in -->
			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">Login</h3>
			</div>  

			<div class="light-back"> <!-- needs more than the login form for the for the section -->
				<p><em>Usernames have no spaces or special charachters.</em></p>

				<?php 
					$main_login = array (
						'form_id'			=> 'main_login'
					);
					wp_login_form( $main_login );
				?>

				<p><em><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a></em></p>
			</div>
			<hr>

			<div class="flagbanner drop fall">
				<h3 class="flagbuttonbanner a2">New Users</h3>
			</div>
			
			<p>Become a member to be able to search previous and have your sigin in information auto fill.</p>
			<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('register')->ID); ?>" class="button drop left">Sign Up</a> <!-- this is a button -->
					
		<?php } ?>

		<hr class="hide-for-medium"> <!-- I dont like starting with an hr I can design better around this -->
		
	</div> <!-- the second area -->

	<div class="home-contact"><!-- seconday set of grid to allow for margins on 1 or 2 columns // outside of row on purpose -->
			
		<div class="flagbanner drop fall">
			<h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
		</div>
		
		<p><?php echo (get_page_by_title('Contact Us')->post_content); ?></p>
			
	</div><!-- columns -->

	<img src="<?php echo content_url(); ?>/uploads/2016/02/iStock_000021247297_recipe.jpg" alt="cooking" class="home-image"> <!-- this is its own area -->
		
</div> <!-- .container -->
	
<?php get_footer(); ?> 