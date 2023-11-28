<?php
/*
 *  Template Name: confirm deer
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
								<fieldset class="run-the-stripes">

									<input type="hidden" name="action" value="con1">
									<input type="hidden" name="data" value="con1id"><!-- slightly different value to differentiate, not used -->

									<!-- use the url unid variable in the form to keep it on the same one -->
									<input type="hidden" name="unid" value="<?php echo $unid; ?>">

									<!-- needed to show animal & date variable in email -->
									<input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
									<input type="hidden" name="timenow" value="<?php echo $order->timenow; ?>">

									<!-- confirm details -->   
									<?php include("confirm-details.php"); ?>   

									<h4>Deer Options</h4>

									<!-- deer options -->
									<!-- v_fillet fillet_v --> 
									<div>
										<p>
											<?php if ($order->v_fillet == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="v_fillet" value="<?php echo $order->v_fillet; ?>">
											<strong>Fillet</strong>
											
											<?php if ($order->v_fillet == 1) { 
												echo $order->fillet_v;
											} else { echo ' '; } ?>
											<input type="hidden" name="fillet_v" value="<?php echo $order->fillet_v; ?>">
										</p>
									</div>

									<!-- v_backstrap backstrap_v --> 
									<div>
										<p>
											<?php if ($order->v_backstrap == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="v_backstrap" value="<?php echo $order->v_backstrap; ?>">
											<strong>Backstrap</strong>
											
											<?php if ($order->v_backstrap == 1) { 
												echo $order->backstrap_v;
											} else { echo ' '; } ?>
											<input type="hidden" name="backstrap_v" value="<?php echo $order->backstrap_v; ?>">
										</p>
									</div>

									<!-- v_rump rump_v --> 
									<div>
										<p>
											<?php if ($order->v_rump == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="v_rump" value="<?php echo $order->v_rump; ?>">
											<strong>Rump</strong>
											
											<?php if ($order->v_rump == 1) { 
												echo $order->rump_v;
											} else { echo ' '; } ?>
											<input type="hidden" name="rump_v" value="<?php echo $order->rump_v; ?>">
										</p>
									</div>


									<!-- v_excess_trim excess_trim_v -->
									<div>
										<p>
											<?php if ($order->v_excess_trim == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="v_excess_trim" value="<?php echo $order->v_excess_trim; ?>">
											<strong>Excess Trim</strong>
											
											<?php if ($order->v_excess_trim == 1) { 
												echo $order->excess_trim_v;
											} else { echo ' '; } ?>
											<input type="hidden" name="excess_trim_v" value="<?php echo $order->excess_trim_v; ?>">
										</p>
									</div>

									<!-- assistance -->
									<div>
										<p>
											<?php if ($order->assistance == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="assistance" value="<?php echo $order->assistance; ?>">
											<strong>Need assistance, not sure if my cuts are correct</strong>
										</p>
									</div>

									<!-- spins -->
									<div>
										<p>
											<em>
												Special instructions
											</em>
											<strong>
												<?php echo $order->spins; ?>
												<input type="hidden" name="spins" value="<?php echo $order->spins; ?>">
											</strong>
										</p>
									</div>

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
