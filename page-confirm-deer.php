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

									<h4>Deer Options</h4>

									<!-- deer options -->
									<!-- v_shoulder --> 
									<div>
										<?php if ($order->v_shoulder == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="v_shoulder" value="<?php echo $order->v_shoulder; ?>">
										<strong>Shoulder</strong>
										
										<?php if ($order->v_shoulder == 1) { 
											echo $order->shoulder_v;
										} else { echo ' '; } ?>
										<input type="hidden" name="shoulder_v" value="<?php echo $order->shoulder_v; ?>">
									</div>

									<!-- v_loin -->
									<div>
										<?php if ($order->v_loin == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="v_loin" value="<?php echo $order->v_loin; ?>">
										<strong>Backstrap and Fillets</strong>
										
										<?php if ($order->v_loin == 1) { 
											echo $order->loin_v;
										} else { echo ' '; } ?>
										<input type="hidden" name="loin_v" value="<?php echo $order->loin_v; ?>">
									</div>

									<!-- v_leg -->
									<div>
										<?php if ($order->v_leg == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="v_leg" value="<?php echo $order->v_leg; ?>">
										<strong>Leg</strong>

										<?php if ($order->v_leg == 1) { 
											echo $order->leg_v;
										} else { echo ' '; } ?>
										<input type="hidden" name="leg_v" value="<?php echo $order->leg_v; ?>">
										
										<?php if ($order->v_leg == 1) { 
											echo $order->v_leg_whole_half;
										} else { echo ' '; } ?>
										<input type="hidden" name="v_leg_whole_half" value="<?php echo $order->v_leg_whole_half; ?>">
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
