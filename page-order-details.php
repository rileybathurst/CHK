<?php
/*
 *  Template Name: order details
 */

get_header();

//define variable for url bar .php?n=
$unid = $_GET['n'];
?>

<div class="container main-border over-background">
	<main>

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

						<?php the_post_thumbnail(); ?>

						<h2><?php the_title(); ?></h2>

						<hr>
						
						<?php if ( is_user_logged_in() ) { ?>
							<div class=""></div><!-- is this just left here incase we put something in? -->
						<?php } else { ?>
							<div class="row">
								<div class="small-12 columns">
									<p>Your currently not logged in, if you are these fields will automatically get filled in <a href="<?php echo home_url(); ?>/login">log in here</a></p>
								</div>
							</div>
						<?php } ?>

						<?php the_content(); ?>

						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
							<fieldset class="run-the-stripes">

							<?php // search for orders to bring back animal name -->
								$orders = $wpdb->get_results( 
										"SELECT * FROM meatorders WHERE unid = '$unid';"
									);
								foreach ( $orders as $order ) {?>
									
									<input type="hidden" name="action" value="orderdetailsupdate">
									<input type="hidden" name="data" value="orderdetailsupdateid">
									
									<!-- take the animal through so it can confirm to the right one -->
									<input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
									
								<!-- close animal name -->
							<?php } ?>

							<!-- use the url unid variable in the form to keep it on the same one -->
							<input type="hidden" name="unid" value="<?php echo $unid; ?>">

							<div>
								<label for="name">Full Name:</label>
								<input name="name" type="text" required id="name"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->display_name; ?>"
									<?php } else { ?>
										placeholder="Joe Smith"
									<?php } ?>
								/>
							</div>

							<div>
								<label for="add1">Address:</label>
								<input name="add1" type="text" required id="add1" 
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?>"
									<?php } else { ?>
										placeholder="26 Merton Road, RD 1, Rangiora 7471"
									<?php } ?>
								/> <!-- very specific placeholder -->
							</div>

							<div>
								<label for="email">email:</label>
								<input name="email" type="email" required  id="email"  
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->user_email; ?>"
									<?php } else { ?>
										placeholder="info@canterburyhomekill.co.nz"
									<?php } ?>
								/>
							</div>

							<div>
								<label for="phone">Phone:</label>
								<input name="phone" type="tel" required id="phone"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
									<?php } else { ?>
										placeholder="03 313 4771"
									<?php } ?>
								>
							</div>

							<div>
								<label for="phone2">Mobile:</label>
								<input name="phone2" type="tel" required id="phone2"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()); ?>"
									<?php } else { ?>
										placeholder="0274 312 804"
									<?php } ?>
								> <!-- double check this placeholder, might be able to bring it in from a variable -->
							</div>
							
							<div>
								<label for="animal">Animal:</label>
									<p class="preselected-options"><span class="custom-check"><span class="screen-reader">✓</span></span><?php echo $order->animal; ?></p><!-- leaving the html checkmark for screenreaders but using a fancy css shape one when we can -->
							</div>

							<div>
								<label for="amp">Animal to be processed:</label>
								<textarea name="amp" type="text" required placeholder="Old heifer" id="amp"></textarea>
							</div>

							<div>
								<label for="people">Number of people to be packed for:</label>
								<input type="number" placeholder="2 or more" required pattern="\d*" min="2" name="people" id="people">
							</div>
							
							<button type="submit">Next Step</button>
						</form>

					</article>

				<?php endwhile; // while have posts
			
				// single comments -->
				if (is_single()) {

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>

					<!-- single pagination -->
					<ul>

						<p>Check out some other posts</p>
						<li><p><?php previous_post_link( '%link', '%title', TRUE ); ?></p></li>
						<li><p> <?php next_post_link( '%link', '%title', TRUE ); ?> </p></li>

					</ul>
				<?php } // if is single

				// pagination
				if ( $wp_query->max_num_pages > 1 ) : ?>	
					<h4>Look deeper into the site</h4>
					<h4><?php next_posts_link ( '<span class="meta-nav">&larr;</span> Older posts' ) ; ?></h4>
					<h4><?php previous_posts_link ( '<span class="meta-nav">&rarr;</span> Newer posts' ) ; ?></h4>
				<?php endif; // if pagination

			} else { ?>
				<section>
					<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
					<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
				</section><!-- row -->

			<?php } ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
