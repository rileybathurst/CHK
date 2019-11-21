<?php
/*
 *  Template Name: view profile
 */

get_header();

//define variable for url bar .php?n=
$unid = $_GET['n'];
$off = $_GET['offset'];
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
							);
							foreach ( $orders as $order ) 
							{
								echo '<div>
									<a href="' . home_url() . '/view-order?n=' . $order->unid . '">'.

										$order->unid . 

									'</a>' .

									'<span class="stripe-breaker"> | </span>' . 

									$order->amp .

									'<span class="stripe-breaker"> | </span>' .

									$order->timenow .

								'</div>';
							} ?>

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
						<?php } else { ?> <!-- if user logged in -->
							<h4>Welcome, visitor!</h4>
						<?php } ?>

					</article>

			<?php endwhile;
		} ?><!-- if have posts -->

	</section><!-- container -->
</main><!-- over-background main-border -->

	<!-- this is where the sidebar usually goes -->
	<div>

		<h2>Profile Info</h2>

		<hr>

		<?php $current_user = wp_get_current_user(); ?>

			<ul class="no-bullet stripes"> 
				<li><div class="row"><div class="small-12 columns">Name: <?php echo $current_user->display_name; ?></div></div></li>

				<li><div class="row"><div class="small-12 columns">email: <?php echo $current_user->user_email; ?></div></div></li>

				<li><div class="row"><div class="small-12 columns">Address: <?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?></div></div></li>

				<li><div class="row"><div class="small-12 columns">Phone: <?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?></div></div></li>

				<li><div class="row"><div class="small-12 columns">Mobile: <?php echo bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()); ?></div></div></li>

				<li><div class="row"><div class="small-12 columns">Anything need to be changed?</div></div></li>

				<div class="row"><div class="small-12 columns"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>" class="button drop">Update Info</a></div></div>
				
				<hr>
				
			</ul>
	</div>

</div><!-- row -->

<?php get_footer(); ?>