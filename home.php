<?php get_header(); ?>

<div class="container main-border over-background">
	<main class="">
		<div> <!-- due to the flex on the layer below I have to nest the padding -->
			<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little convaluted but its fine for now -->

			<hr>
			<?php echo (get_page_by_title('Intro')->post_content); ?>
			<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>" class="">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h3>

			<hr>

			<?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?>

			<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>"><?php echo (get_page_by_title('Prices')->post_title); ?></a></h3>
		
			<!-- <p>The first step to having us work on your animal would be our online booking form.</p>
			<h3><a href="?php echo home_url(); ?>/?page_id=?php echo (get_page_by_title('Booking Form')->ID); ?>">?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3> this hasnt been built yet-->
		</div>
	</main><!-- first area -->
			
	<div class="light-back"> <!-- hold the second area together -->
		<section><!-- Order Animals -->

			<div class="set-in"> <!-- this cant be higher level as the animals go all the way to the edge -->
				<h3 class="set-in"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3>

				<?php echo (get_page_by_title('order')->post_content); ?>
			</div>

			<div class="animals">
				<div> <!-- these need to be contained for the animals flex -->
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" /></a> <!-- these need to be tested as svg, its not great they are part of the theme but for now it will do -->
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="animals-link">Beef</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="animals-link">Deer</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="animals-link">Pig</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="animals-link">Sheep</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo get_template_directory_uri(); ?>/img/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" /></a>
					<h3 class="text-center">
						<a href="<?php echo home_url(); ?>/alpaca-llama" class="animals-link">Alpaca / llama</a>
					</h3>
				</div>
			</div>
		</section>
		
		<?php if ( is_user_logged_in() ) { ?>
			<section class="set-in">
				<h3>Welcome</h3>
				
				<p>
					Welcome back <?php echo $current_user->user_login; ?><br /> <!-- $current_user comes from header.php -->
					Your most recent order was:<br />
				</p>
				
				<?php // then search for orders -->
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

				<?php } ?>
						
				<!--should these all be buttons? -->
				<p>Would you like to view <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>">your previous orders?</a></p>
				<p><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>">Check or modify your current info</a></p>
				<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('logout')->ID); ?>" class="button drop">logout</a> <!-- this actually is a button not a h ref -->
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

				<hr>

				<h3>New Users</h3>
				
				<p>Become a member to be able to search previous and have your sigin in information auto fill.</p>
				<!-- <button><a href=" php echo home_url(); ?>/?page_id= php echo (get_page_by_title('register')->ID); ?>" class="button drop left">Sign Up</a> this is a button -->
				<button>Sign Up</button> <!-- needs to be linked up -->
			</div>
					
		<?php } ?>

		<hr class="hide-for-medium"> <!-- I dont like starting with an hr I can design better around this -->
		
	</div> <!-- the second area -->

	<div class="home-contact"><!-- seconday set of grid to allow for margins on 1 or 2 columns // outside of row on purpose -->
		<div class="set-in"> <!-- being the next element up breaks the flex -->
			<h3><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
			
			<?php echo (get_page_by_title('Contact Us')->post_content); ?>
		</div>
	</div><!-- columns -->

	<img src="http://localhost:8888/chk/wp-content/uploads/2016/03/iStock_000021247297_recipe.jpg" alt="cooking" class="home-image"> <!-- this is its own area and needs to be written into the theme in a better way including as a responsive picture element -->
		
</div> <!-- .container -->
	
<?php get_footer(); ?> 