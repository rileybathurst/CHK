<?php
/*
 *  Template Name: view profile
 */

get_header();

//define name variable from url bar .php?n=
if (isset($_GET['n'])) {
	$unid = $_GET['n'];
}

if (isset($_GET['offset'])) {
	$off = $_GET['offset'];
} else {
	$off = 0;
}
?>

<div class="container main-border over-background">
	<main>

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_post_thumbnail(); ?>

						<h2 class="featured-title">Featured:</h2>
						<h2><?php the_title(); ?></h2>

						<hr>

						<?php the_content(); ?>

						<!-- multiple options due to not being logged in would see all guest orders -->
						<?php
							if ( is_user_logged_in() ) {

							// first extract the current user email as the variable 
							$current_user = wp_get_current_user();
							$current_email = $current_user->user_email;
								
							// set the number of items to display per page
							$items_per_page = 100;

							// set the offset the page number with a zero after
							$offset = $off . 00;

							// then search for orders -->
							$orders = $wpdb->get_results( 
								"
								SELECT * 
								FROM meatorders
								WHERE ( email = '$current_email' AND confirm = 1 )
								ORDER by unid desc
								LIMIT $offset , $items_per_page
								;"
							); ?>
							<div id="view-profile--orders" class="run-the-stripes"> <!-- quite possibly should have a p tag inside this -->
								<?php foreach ( $orders as $order ) 
								{
									echo '<div>
										<a href="' . home_url() . '/view-order?n=' . $order->unid . '">'.

											$order->unid . 

										'</a> | ' . 

										$order->amp .

										' | ' .

										$order->timenow .

									'</div>';
								} ?>
							</div>

							<!-- create variable -->
							<?php $over = $off + 1; ?>
							<?php $under = $off - 1; ?>

							<hr >

							<div>
								<p>
									You're on page <?php if ($off>0) { echo $over; } else { echo '1'; } ?>

									<!-- If more than 0 previous is OK -->
									<?php if ($off>0)  {
										echo '<a href=" ' . home_url() . '/view-profile/?offset=' . $under . '" aria-label="Previous" class="button">Previous <span class="show-for-sr">page</span></a>' ;
									} ?>

									<a href="<?php echo home_url(); ?>/view-profile/?offset=<?php echo $over; ?>" aria-label="Previous" class="button">Next <span class="show-for-sr">page</span></a>
								</p>

							</div>
						<?php } else { ?> <!-- if user logged in easier to stop and start this than deal with changing columns while using the if logged in -->
							<h4>Welcome, visitor!</h4>
							<?php wp_login_form(); ?>

							<h4><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a></h4><!-- this is more of a button? it does something? -->
						<?php } ?>

					</article>

			<?php endwhile;
		} ?><!-- if have posts -->

	</section><!-- container -->
</main><!-- over-background main-border -->

	<?php if ( is_user_logged_in() ) { ?>
		<!-- this is where the sidebar usually goes -->
		<div>
			<div class="set-in"> <!-- has to be down a set to not break the flex -->

				<h2>Profile Info</h2>

				<hr>

				<?php $current_user = wp_get_current_user(); ?>

					<div class="run-the-stripes"> 
						<div>Name: <?php echo $current_user->display_name; ?></div>

						<div>email: <?php echo $current_user->user_email; ?></div>

						<div>Address: <?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?></div>

						<div>Phone: <?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?></div>

						<div>Mobile: <?php echo bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()); ?></div>

						<!-- <div>Anything need to be changed?</div> I dont think this makes sense being here -->

						<div><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>" class="button">Update Info</a></div></div>
				</ul>
			</div>
		</div>
	<?php } else {
		get_sidebar();
	} ?>

</div><!-- row -->

<?php get_footer(); ?>