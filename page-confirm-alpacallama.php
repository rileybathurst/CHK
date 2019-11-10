<?php
/*
 * Template Name: confirm alpaca llama
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
						<?php the_content();
			
						// then search for orders -->
						$orders = $wpdb->get_results( 
								"
								SELECT * 
								FROM meatorders
								WHERE unid = '$unid';
								"
							);
							foreach ( $orders as $order ) 
							{
						?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
								<fieldset>

									<input type="hidden" name="action" value="con1">
									<input type="hidden" name="data" value="con1id"><!-- slightly different value to differentiate, not used -->

									<!-- use the url unid variable in the form to keep it on the same one -->
									<input type="hidden" name="unid" value="<?php echo $unid; ?>">

									<!-- needed to show animal & date variable in email -->
									<input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
									<input type="hidden" name="timenow" value="<?php echo $order->timenow; ?>">

									<!-- confirm details -->
									<?php include("confirm-details.php"); ?>

									<h4>Alpaca / Llama Options</h4>

									<!-- alpaca / llama options -->
									<!-- l_shoulder shoulder_lb -->
									<div>
										<?php if ($order->l_shoulder == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="l_shoulder" value="<?php echo $order->l_shoulder; ?>">
										<Strong>Shoulder</Strong>
									
										<?php if ($order->l_shoulder == 1) { 
											echo $order->shoulder_lb;
										} else { echo ' '; } ?>
										<input type="hidden" name="shoulder_lb" value="<?php echo $order->shoulder_lb; ?>">
									</div>

									<!-- l_flaps flaps_lb -->
									<div>
										<?php if ($order->l_flaps == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="l_flaps" value="<?php echo $order->l_flaps; ?>">
										<Strong>Flaps</Strong>
									
										<?php if ($order->l_flaps == 1) { 
											echo $order->flaps_lb;
										} else { echo ' '; } ?>
										<input type="hidden" name="flaps_lb" value="<?php echo $order->flaps_lb; ?>">
									</div>

									<!-- l_loin loin_lb --> 
									<div>
										<?php if ($order->l_loin == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="l_loin" value="<?php echo $order->l_loin; ?>">
										<Strong>Loin</Strong>
									
										<?php if ($order->l_loin == 1) { 
											echo $order->loin_lb;
										} else { echo ' '; } ?>
										<input type="hidden" name="loin_lb" value="<?php echo $order->loin_lb; ?>">
									</div>

									<!-- l_leg leg_lb --> 
									<div>
										<?php if ($order->l_leg == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="l_leg" value="<?php echo $order->l_leg; ?>">
										<Strong>Leg</Strong>

										<?php if ($order->l_leg == 1) { 
											echo $order->leg_lb;
										} else { echo ' '; } ?>
										<input type="hidden" name="leg_lb" value="<?php echo $order->leg_lb; ?>">
									</div>

									<!-- spins -->
									<p>
										<em>
											Special instructions
										</em>
										<strong>
											<?php echo $order->spins; ?>
											<input type="hidden" name="spins" value="<?php echo $order->spins; ?>">
										</strong>
									</p>

									<?php include("confirm-small-goods.php"); ?>

									<input type="submit" value="Submit">
								</fieldset>
							</form>
						<?php } ?>
					</article>

				<?php endwhile; // while have posts
			} // if have posts ?>

		</section><!-- row -->
	</main><!-- over-background main-border -->

<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
