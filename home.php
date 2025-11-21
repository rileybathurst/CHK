<?php get_header(); ?>

<div class="container main-border over-background">
	<main>
		<div> <!-- due to the flex on the layer below I have to nest the padding -->
			<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little slower but its fine for now -->

			<hr>
			
			<?php $page = get_page_by_path('intro');
				if ($page) { echo ($page->post_content); 
			} ?>
				
			<?php $page = get_page_by_path('about');
			if ($page) { ?>
				<h3><a href="<?php echo get_permalink($page->ID); ?>" class="register__link">Read More About Us</a></h3>
				<hr> <!-- purposley inside the if incase we dont have it looks wierd -->
			<?php } ?>

			<?php $page = get_page_by_path('how-chk-works');
				if ($page) { echo ($page->post_content); 
			}

			$page = get_page_by_path('prices');
			if ($page) { ?>
				<h3><a href="<?php echo get_permalink($page->ID); ?>">Prices</a></h3>
			<?php } ?>
		
			<!-- <p>The first step to having us work on your animal would be our online booking form.</p> -->
		</div>
	</main><!-- first area -->
			
	<div class="light-back"> <!-- hold the second area together -->
		<section><!-- Order Animals -->

			<div class="set-in"> <!-- this cant be higher level as the animals go all the way to the edge -->

			<?php $page = get_page_by_path('order');
				if ($page) { echo ($page->post_content); 
			} ?>

			</div>

			<?php get_template_part('components/animals'); ?>
		</section>
		
		<?php if ( is_user_logged_in() ) { ?>
			<section class="set-in">
				<h4>Welcome back <?php echo $current_user->user_login; ?></h4> <!-- $current_user comes from header.php -->
				
				<?php // then search for orders -->
				$table_name = "meatorders"; // there might be good reason to put this in the header if this doesnt exist then very little of the site should work, it should throw a full admin error
				if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name) {

					echo "<p>Your most recent order was:</p>";
					
					$orders = $wpdb->get_results( 
						"
						SELECT * 
						FROM meatorders
						WHERE email = '$current_user->user_email'
						ORDER by unid desc
						LIMIT 1;
						"
					);
					foreach ( $orders as $order ) { ?>
						<ul class="stripes">  <!-- its only ever one Im not 100% sure it should be a link even tho its an easy way to get visual consistency -->
							<li> <!-- keep thinking about if this should all be a php echo or keep going in and out -->
								<a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a>
								|
								<?php echo $order->amp; ?>
								|
								<?php echo $order->timenow; ?>
							</li>
						</ul> 

					<?php } // order
				} else { // no table
					if(current_user_can('administrator')) {
						echo "<p>The meatorders table doesn't exist, this is really bad</p>";
					} // admin
				} // table ?>

				<!--// ?should these all be buttons? -->
				<?php $page = get_page_by_path('view-profile');
				if ($page) { ?>
					<p>Would you like to view <a href="<?php echo get_permalink($page->ID); ?>">your previous orders?</a></p>
				<?php } ?>
				<?php $page = get_page_by_path('update');
				if ($page) { ?>
					<p><a href="<?php echo get_permalink($page->ID); ?>">Check or modify your current info</a></p>
				<?php } ?>
				<?php $page = get_page_by_path('logout');
				if ($page) { ?>
					<a href="<?php echo get_permalink($page->ID); ?>" class="button drop">logout</a>
				<?php } ?>
			</section>

		<?php } else { ?> <!-- user not logged in -->
			<div class="set-in">
				<h3>Login</h3>

				<p><em>Usernames have no spaces or special charachters.</em></p>

				<?php 
					$main_login = array (
						'form_id'	=> 'main_login'
					);
					wp_login_form( $main_login ); // why is everything wrapped in p tags?
				?>

				<a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a><!-- this is more of a button? it does something? -->
				
				<?php $page = get_page_by_path('register');
				if ($page) { ?>
					<hr>
					<h3>New Users</h3>
					<p>Become a member to be able to search previous orders and have your sigin in information auto fill.</p>
					<a href="<?php echo get_permalink($page->ID); ?>" class="button">Sign Up</a>
				<?php } ?>
			</div>		
		<?php } ?>

		<hr class="hide-for-medium"> <!-- I dont like starting with an hr I can design better around this -->
		
	</div> <!-- the second area -->

	<div class="home-contact"><!-- seconday set of grid to allow for margins on 1 or 2 columns // outside of row on purpose -->
		<?php $page = get_page_by_path('contact-us');
		if ($page) { ?>
			<a href="<?php echo get_permalink($page->ID); ?>" class="top-bar--contact">Sign Up</a>
		<?php } else {
			if(current_user_can('administrator')) { ?>
			No Contact Us page
			<?php }
		} ?>
	</div><!-- columns -->

	<picture class="home-image hide-for-print">
		<!-- this is its own area and needs to be written into the theme in a better way including come from the wp customizer -->
		<source srcset="<?php echo get_template_directory_uri(); ?>/img/iStock_000021247297_recipe.webp" type="image/webp">
		<img src="<?php echo get_template_directory_uri(); ?>/img/iStock_000021247297_recipe.jpg" alt="cooking" loading="lazy">
	</picture>

</div> <!-- .container -->
	
<?php get_footer(); ?> 