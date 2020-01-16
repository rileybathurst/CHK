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
						<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>">
							<!-- <div class="round any-center hover-back" style="margin: 0 2em; padding: 1em;">
							!-- put these styles in the css --
								<svg enable-background="new 0 0 126 126" viewBox="0 0 126 126" xmlns="http://www.w3.org/2000/svg"><path fill="white" d="m76.89 30.12c-5.45.85-11.26.85-12.84 1.33-1.58.36-1.94 1.09-8.72 1.09s-8.72-.24-13.32.24c-4.48.48-5.93 1.94-9.32 2.3-3.27.37-6.66.49-8.48 1.7s-2.78 1.45-2.78 1.45h-.36s.48-1.45-.37-1.57c-.72-.24-.6.24-1.33-.49-.85-.73-.85-.97-1.82-.85-.85.24-.73.97-1.33.97s-.97-.73-2.06 0c-1.09.85-1.09 1.33-1.33 1.94s-.12.85-.12.85-.48.61-1.82 1.33c-1.33.73-2.18 1.21-2.18 1.21s-.97-1.7-2.78-1.7c-1.82 0-3.76.73-4.85 1.57-1.09.85-.24 2.42.97 3.39 1.09.97 2.79 1.7 4.72 1.94 1.94.24 2.3-.37 2.3-.37h.85s-.97 1.09-.73 1.45c.37.49.73.36.73.36s.61.12.49.97.24 1.82.61 3.03.73 2.79 1.21 3.88c.36 1.09.73 1.58.61 3.15s-.36 3.39.12 3.75 1.45 0 1.57.36c.24.48.73 1.09 1.57 1.21h1.58c.73 0 .48.24 1.33.12.97-.12 1.21-.48 1.21-.48s.85.73 1.45 1.21c.49.6.12 1.58.97 2.3.85.73 1.7 1.45 1.94 3.51.36 2.18.97 3.88 2.18 5.81 1.21 1.94 1.82 1.82 2.3 2.54.6.73.85.85 1.33 1.33.49.36.97.49.97.49s-.48 3.02-.36 5.21c.12 2.3.6 1.7 0 3.39-.49 1.69-.97 3.03-1.82 4.72-.97 1.82-1.7 2.54-2.06 3.27s.97 1.33 3.27.73c2.3-.61 2.54-1.82 2.54-1.82s.85.12 1.09-.36c.24-.49.85-3.27.97-4.24 0-1.09.49-2.91 1.09-4.12.6-1.33 1.57-1.7 2.06-2.91.6-1.33.72-2.18.72-2.18s2.42-.24 4.12-1.33c1.69-.97 3.27-1.94 3.27-1.94s1.21 2.79 2.18 4.84c.97 2.06 2.06 3.39 2.42 4.48.36 1.21.49 1.57.49 3.27 0 1.69.6 3.15.48 4.72 0 1.45-.36 1.82-.36 2.42-.12.61.48.97 1.7.97 1.21-.12 2.54-.49 3.03-1.09.48-.73.36-1.58.36-1.58s.61.12.73-.24c.24-.36-.97-3.39-1.21-4.97-.24-1.57-1.09-4-1.09-4.96-.12-1.09.12-2.3 0-4.72-.12-2.3-.24-4.48-.36-5.09 0-.73 0-1.7 0-1.7s3.27-1.21 4.97-1.45c1.82-.24 6.78-1.09 11.87-.49 5.09.73 7.51 1.09 8.36 1.09.73 0 2.3-.36 4.48-1.7 2.06-1.45 4.36-2.79 7.51-4.24 3.03-1.57 5.93-3.51 5.93-3.51s1.21.24 1.21 3.03c.12 2.66 0 4.36.73 6.3.61 1.94 1.7 3.15 1.09 4.6-.48 1.33 0 1.45 0 3.03 0 1.57-.97 4.6-1.81 6.42-.97 1.7-2.79 5.81-3.63 7.15-.73 1.33-1.09 2.3 1.09 2.18 2.3-.12 4.36-.61 4.85-1.09.48-.61.48-1.21.48-1.21s1.33.36 1.45-.36c0-.85.36-2.3.49-2.79.24-.61 2.06-5.09 2.79-7.39.72-2.3 1.82-5.45 2.54-6.42.73-.85 1.7-1.45 1.7-1.45s.49 1.57.73 3.63c.12 1.94.36 2.91.24 4.96-.12 1.94.36 1.82-.37 4.36s-.73 2.67-1.21 4.24-1.21 2.06-.73 2.67c.48.48 4.6.61 5.21-.12.6-.85 1.09-1.82 1.09-1.82s1.09.61 1.09-.36-.24-3.03 0-5.33.49-8.24 1.45-11.26c.97-3.03 1.09-3.75.61-5.93-.49-2.18-2.91-6.54-2.3-9.45.48-3.03 1.45-4.24 2.06-7.99.73-3.75.61-4.36 1.7-5.57 1.21-1.33 1.09-1.45 1.09-1.45s-.36 7.99-.24 11.38c.24 3.27 1.46 1.57.73 8.24-.61 6.54-1.21 7.27-.61 9.81.61 2.54 1.21.97 1.21 3.39.12 2.54-.49 2.54.97 4 1.45 1.46.97 2.06.48-.48-.48-2.54-.61-2.42-.12-4.24.49-1.7-1.94-2.66-.61-6.54 1.33-3.75.73-7.39.73-7.39s.24 2.91.12 4.72c0 1.7-.12 3.51-.12 3.51s.49-1.57.49-4.36c0-2.66-.12-5.21-.12-5.21s.85 1.94.85 3.64c0 1.69-.12 1.57-.12 1.57s.85-1.57.24-4.72-.97-3.27-1.57-4.48c-.49-1.21-.49-1.57-.49-3.63 0-2.18 0-4.72 0-6.3 0-1.45-.72-8.72-.6-11.63s-1.94-7.51-3.63-9.57c-1.57-1.94-3.03-4.6-6.54-4.72s-5.33.48-9.2.36c-3.75 0-4.72-.61-8.6.73-3.75 1.21-7.99 2.3-11.63 2.54-3.56.28-6.11 1.01-6.11 1.01z"/></svg>
							</div> -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" loading="lazy" />
							</a> <!-- these need to be tested as svg, its not great they are part of the theme but for now it will do -->
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
						<a href="<?php echo home_url(); ?>/alpaca-llama">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" loading="lazy" />
						</a>
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