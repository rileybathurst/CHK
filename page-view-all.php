<?php
/*
* Template Name: view all
*/

get_header();

//define variable for url bar .php?n=
$unid = $_GET['n'];

//define variable for url bar .php?n=
$off = $_GET['offset'];
?>

<div class="row over-background border drop">
	<div class="small-12 columns">

		<!-- Start the main container -->
		<div class="container" role="document">

			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post -->

						<?php include("page-title.php");

						// multiple options due to not being logged in would see all guest orders
						$current_user = wp_get_current_user();
						$current_id = $current_user->ID;    
						$user_info = get_userdata( $current_id );
						if (is_user_logged_in ()) {
							$user_role = implode(', ', $user_info->roles);
						}

						if ($user_role == 'administrator') { ?>

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>

								<div data-abide-error class="alert callout" style="display: none;">
									<p><i class="fi-alert"></i> There are some errors in your form.</p>
								</div>

								<input type="hidden" name="action" value="viewresults">
								<input type="hidden" name="data" value="viewresultsid"><!-- slightly different value to differentiate, not used -->

								<!-- use the url unid variable in the form to keep it on the same one -->

								<div class="row">

									<div class="small-12 columns show-for-small-only">
										<label for="search" class="inline">Search:</label>
									</div>

									<div class="medium-2 large-1 columns show-for-medium">
										<label for="search" class="text-right">Search:</label>
									</div>

									<div class="small-12 medium-8 large-5 columns">
										<input name="name" type="text" required id="name" placeholder="Joe Smith" />
										<!-- error -->
										<small class="form-error">A name is required.</small>
									</div>

									<div class="small-12 medium-2 end columns">
										<button type="submit">Search</button>
									</div>

								</div>
							</form>

							<hr>

							<div class="row">
								<div class="small-12 medium-8 large-12 columns medium-centered"><!-- why no columns? -->
									<ul class="no-bullet stripes">
										<?php
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
											WHERE confirm = 1
											ORDER by unid desc
											LIMIT $offset , $items_per_page
											"
										);
										foreach ( $orders as $order ) 
										{ ?>
											<li class="small-12 columns"><a href="<?php echo home_url(); ?>'/view-order?n='<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a> | <?php echo $order->name; ?> | <?php echo $order->email; ?> | <?php echo $order->animal; ?> | <?php echo $order->amp; ?> | <?php echo $order->timenow; ?></li>
										<?php } ?>
									</ul>
								</div>
							</div><!-- row -->
							<hr>
							<!-- create variable -->
							<?php
							$over = $off + 1;
							$under = $off - 1; ?>

							<div class="row">
								<div class="small-12 columns">
									<p>
										<span class="fake-button">You're on page <?php if ($off>0) { echo $over; } else { echo '1'; } ?></span>

										<!-- If more than 0 previous is OK -->
										<?php if ($off>0) {
											echo '<a href=" ' . home_url() . '/view/?offset=' . $under . '" aria-label="Previous" class="button">Previous <span class="show-for-sr">page</span></a>' ;
										} ?>

										<a href="<?php echo home_url(); ?>/view/?offset=<?php echo $over; ?>" aria-label="Previous" class="button">Next <span class="show-for-sr">page</span></a>
									</p>

								</div>
							</div>

						<?php } else { ?>
							<div class="row">
								<div class="small-12 medium-8 large-12 columns medium-centered stripes">
									<h4>Sorry your not an admin.</h4>
								</div>
							</div>
						<?php }; ?>
					</div><!-- post -->
				<?php endwhile; // while have posts
			endif; ?><!-- if have posts -->
		</div><!-- container -->
	</div><!-- columns -->
</div><!-- row -->
<?php get_footer(); ?>