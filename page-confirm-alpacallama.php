<?php
/*
 * Template Name: confirm alpaca llama
 */

get_header();

//define variable for url bar .php?n=
$unid = $_GET['n'];
?>

<div class="row over-background border drop" data-equalizer>
	<div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

		<!-- Start the main container -->
		<div class="container" role="document">

			<?php if (have_posts()) :
				while (have_posts()) : the_post(); 

					// then search for orders
					$orders = $wpdb->get_results( 
						"
						SELECT * 
						FROM meatorders
						WHERE unid = '$unid';
						"
					);
					foreach ( $orders as $order ) 
					{ ?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php include("page-title.php");
							the_content(); ?>

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="drop">

								<input type="hidden" name="action" value="con1">
								<input type="hidden" name="data" value="con1id"><!-- slightly different value to differentiate, not used -->

								<!-- use the url unid variable in the form to keep it on the same one -->
								<input type="hidden" name="unid" value="<?php echo $unid; ?>">

								<!-- needed to show animal & date variable in email -->
								<input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
								<input type="hidden" name="timenow" value="<?php echo $order->timenow; ?>">

								<!-- confirm details -->
								<?php include("confirm-details.php"); ?>

								<div class="row">
									<div class="small-12 columns">
										<div class="banner drop">
											<h4 class="button-banner">Alpaca / Llama Options</h4>
										</div>
									</div>
								</div>

								<!-- alpaca / llama options -->
								<!-- l_shoulder shoulder_lb -->
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->l_shoulder == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="l_shoulder" value="<?php echo $order->l_shoulder; ?>">
											<Strong>Shoulder</Strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
										<?php if ($order->l_shoulder == 1) { 
											echo $order->shoulder_lb;
											} else { echo ' '; } ?>
										<input type="hidden" name="shoulder_lb" value="<?php echo $order->shoulder_lb; ?>">
										</p>
									</div>
								</div>

							<!-- l_flaps flaps_lb -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->l_flaps == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="l_flaps" value="<?php echo $order->l_flaps; ?>">
											<Strong>Flaps</Strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->l_flaps == 1) { 
												echo $order->flaps_lb;
											} else { echo ' '; } ?>
											<input type="hidden" name="flaps_lb" value="<?php echo $order->flaps_lb; ?>">
										</p>
									</div>
								</div>

						<!-- l_loin loin_lb --> 
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->l_loin == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="l_loin" value="<?php echo $order->l_loin; ?>">
											<Strong>Loin</Strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->l_loin == 1) { 
												echo $order->loin_lb;
											} else { echo ' '; } ?>
											<input type="hidden" name="loin_lb" value="<?php echo $order->loin_lb; ?>">
										</p>
									</div>
								</div>

						<!-- l_leg leg_lb --> 
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->l_leg == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="l_leg" value="<?php echo $order->l_leg; ?>">
											<Strong>Leg</Strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->l_leg == 1) { 
												echo $order->leg_lb;
											} else { echo ' '; } ?>
										<input type="hidden" name="leg_lb" value="<?php echo $order->leg_lb; ?>">
										</p>
									</div>
								</div>

						<!-- spins -->
								<div class="row">
									<div class="small-12 columns drop">
										<p class="no-bottom">
										<em>
											Special instructions
										</em>
										<strong>
											<?php echo $order->spins; ?>
											<input type="hidden" name="spins" value="<?php echo $order->spins; ?>">
										</strong>
										</p>
									</div>
								</div>

								<?php include("confirm-small-goods.php"); ?>

								<input type="submit" value="Submit">
							</form>
						</div><!-- post -->
					<?php } // for each order

				endwhile; // while have posts
			endif; ?><!-- if have posts -->
		</div><!-- container -->
	</div><!-- equilizer watch -->
	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>