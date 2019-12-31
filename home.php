<?php get_header(); ?>

<div class="container main-border over-background">
	<main>
		<div> <!-- due to the flex on the layer below I have to nest the padding -->
			<h2>Welcome to <?php echo get_bloginfo( 'name' ); ?> Ltd</h2> <!-- this is probably a little slower but its fine for now -->

			<hr>
			<?php $intro = get_page_by_title('Intro');
			if ( $intro == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No Intro page</p>
				<?php } // admin
			} else { ?>
				<p><?php echo (get_page_by_title('Intro')->post_content); ?></p><!-- not quite sure why this isnt bringing in the p tags by default -->
			<?php } 

			$about =  get_page_by_title('about');
			if ( $about == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No about page</p>
				<?php } // admin
			} else { ?>
				<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h3>

				<hr> <!-- purposley inside the if incase we dont have it looks wierd -->
			<?php } ?>

			<?php $how =  get_page_by_title('HOW CHK WORKS');
			if ( $how == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No HOW CHK WORKS page</p>
				<?php } // admin
			} else { ?>
				<?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?>
			<?php }

			$prices =  get_page_by_title('Prices');
			if ( $prices == '') {
				if(current_user_can('administrator')) { // but only to an admin ?>
					<p>No Prices page</p>
				<?php } // admin
			} else { ?>	
				<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>"><?php echo (get_page_by_title('Prices')->post_title); ?></a></h3>
			<?php } ?>
		
			<!-- <p>The first step to having us work on your animal would be our online booking form.</p>
			<h3><a href="?php echo home_url(); ?>/?page_id=?php echo (get_page_by_title('Booking Form')->ID); ?>">?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3> this hasnt been built yet-->
		</div>
	</main><!-- first area -->
			
	<div class="light-back"> <!-- hold the second area together -->
		<section><!-- Order Animals -->

			<div class="set-in"> <!-- this cant be higher level as the animals go all the way to the edge -->

				<?php $order =  get_page_by_title('Order');
				if ( $order == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No order page</p>
					<?php } // admin
				} else { ?>
					<h3 class="set-in"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3> <!-- this has a double set in which makes things go wrong in a print style -->

					<?php echo (get_page_by_title('order')->post_content);
				} ?>
			</div>

			<div class="animals">

				<?php $beef =  get_page_by_title('beef');
				if ( $beef == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No beef page</p> <!-- if more than one of these they will sit in a line due to the animals flex as its an error only admins can see its down the list on a fix -->
					<?php } // admin
				} else { ?>
					<div> <!-- these need to be contained for the animals flex -->
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" loading="lazy" /></a> <!-- these need to be tested as svg, its not great they are part of the theme but for now it will do -->
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="animals-link">Beef</a></h3>
					</div>
				<?php }

				$deer =  get_page_by_title('deer');
				if ( $deer == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No deer page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" loading="lazy" /></a>
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="animals-link">Deer</a></h3>
					</div>
				<?php }

				$pig =  get_page_by_title('pig');
				if ( $pig == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No pig page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" loading="lazy" /></a>
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="animals-link">Pig</a></h3>
					</div>
				<?php }

				$sheep =  get_page_by_title('pig');
				if ( $sheep == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No sheep page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" loading="lazy" /></a>
						<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="animals-link">Sheep</a></h3>
					</div>
				<?php }

				$alpaca =  get_page_by_title('pig');
				if ( $alpaca == '') {
					if(current_user_can('administrator')) { // but only to an admin ?>
						<p>No alpaca llama page</p>
					<?php } // admin
				} else { ?>
					<div>
						<a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo get_template_directory_uri(); ?>/img/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" loading="lazy" /></a>
						<h3 class="text-center">
							<a href="<?php echo home_url(); ?>/alpaca-llama" class="animals-link">Alpaca / llama</a>
						</h3>
					</div>
				<?php } ?>
			</div>
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
				
				<p>Become a member to be able to search previous orders and have your sigin in information auto fill.</p>
				<!-- <button><a href=" php echo home_url(); ?>/?page_id= php echo (get_page_by_title('register')->ID); ?>" class="button drop left">Sign Up</a> this is a button -->
				<button>Sign Up</button> <!-- needs to be linked up -->
			</div>
					
		<?php } ?>

		<hr class="hide-for-medium"> <!-- I dont like starting with an hr I can design better around this -->
		
	</div> <!-- the second area -->

	<div class="home-contact"><!-- seconday set of grid to allow for margins on 1 or 2 columns // outside of row on purpose -->
		<?php 
			$contact_home = get_page_by_title('Contact Us'); // avoid stepping on $contact in header.php but it cant be used without new variable
			if ( $contact_home == '') { // $contact comes from header.php
				if(current_user_can('administrator')) { ?>
					<p class="set-in">No Contact Us page</p>
				<?php } // admin
			} else { // if contact ?>
				<div class="set-in"> <!-- being the next element up breaks the flex -->
					<h3><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
					
					<?php echo (get_page_by_title('Contact Us')->post_content); ?>
				</div>
			<?php }
		?>
	</div><!-- columns -->

	<picture class="home-image hide-for-print">
		 <!-- this is its own area and needs to be written into the theme in a better way including come from the wp customizer -->
		<source srcset="<?php echo get_template_directory_uri(); ?>/img/iStock_000021247297_recipe.jpg" alt="cooking"  type="image/webp">
		<img src="<?php echo get_template_directory_uri(); ?>/img/iStock_000021247297_recipe.jpg" alt="cooking" loading="lazy">
	</picture>

</div> <!-- .container -->
	
<?php get_footer(); ?> 