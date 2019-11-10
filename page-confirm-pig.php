<?php
/*
 *  Template Name: confirm beef
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

									<h4>Pig Options</h4>

									<hr>

									<!-- animal options -->
									<!-- SHOULDER -->
									<h3>Shoulder</h3>

									<!-- ps_rolledshoulder rolledshoulder_ps -->
									<div>
										<?php if ($order->ps_rolledshoulder == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_rolledshoulder" value="<?php echo $order->ps_rolledshoulder; ?>">
										<strong>Rolled Shoulder</strong>

										<?php if ($order->ps_rolledshoulder == 1) { 
											echo $order->rolledshoulder_ps;
										} else { echo ' '; } ?>
										<input type="hidden" name="rolledshoulder_ps" value="<?php echo $order->rolledshoulder_ps; ?>">
									</div>

									<!-- ps_bacon -->
									<div>
										<?php if ($order->ps_bacon == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_bacon" value="<?php echo $order->ps_bacon; ?>">
										<strong>Bacon</strong>
									</div>

									<!-- ps_pickledpork -->
									<div>
										<?php if ($order->ps_pickledpork == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_pickledpork" value="<?php echo $order->ps_pickledpork; ?>">
										<strong>Pickledpork</strong>
									</div>

									<!-- ps_chops -->
									<div>
										<?php if ($order->ps_chops == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_chops" value="<?php echo $order->ps_chops; ?>">
										<strong>Chops</strong>
									</div>

									<!-- ps_pressedham pressedham_ps -->
									<div>
										<?php if ($order->ps_pressedham == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_pressedham" value="<?php echo $order->ps_pressedham; ?>">
										<strong>Pressed Ham</strong>

										<?php if ($order->ps_pressedham == 1) { 
											echo $order->pressedham_ps;
										} else { echo ' '; } ?>
										<input type="hidden" name="pressedham_ps" value="<?php echo $order->pressedham_ps; ?>">
									</div>

									<!-- ps_mince -->
									<div>
										<?php if ($order->ps_mince == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_mince" value="<?php echo $order->ps_mince; ?>">
										<strong>Mince</strong>
									</div>

									<!-- ps_dicedpork -->
									<div >
										<?php if ($order->ps_dicedpork == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_dicedpork" value="<?php echo $order->ps_dicedpork; ?>">
										<strong>Diced Pork</strong>
									</div>

									<!-- ps_roastjointed roastjointed_ps -->
									<div>
										<?php if ($order->ps_roastjointed == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="ps_roastjointed" value="<?php echo $order->ps_roastjointed; ?>">
										<strong>Roast Jointed</strong>

										<?php if ($order->ps_roastjointed == 1) { 
											echo $order->roastjointed_ps;
										} else { echo ' '; } ?>
										<input type="hidden" name="roastjointed_ps" value="<?php echo $order->roastjointed_ps; ?>">
									</div>

									<hr>

									<!-- LOIN -->
									<h3>Loin</h3>

									<!-- pl_chops -->
									<div>
										<?php if ($order->pl_chops == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pl_chops" value="<?php echo $order->pl_chops; ?>">
										<strong>Chops</strong>
									</div>

									<!-- pl_loinsteaks -->
									<div>
										<?php if ($order->pl_loinsteaks == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pl_loinsteaks" value="<?php echo $order->pl_loinsteaks; ?>">
										<strong>Loin Steaks</strong>
									</div>

									<!-- pl_roastjointed roastjointed_pl  -->
									<div>
										<?php if ($order->pl_roastjointed == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pl_roastjointed" value="<?php echo $order->pl_roastjointed; ?>">
										<strong>Roast Jointed</strong>

										<?php if ($order->pl_roastjointed == 1) { 
											echo $order->roastjointed_pl;
										} else { echo ' '; } ?>
										<input type="hidden" name="roastjointed_pl" value="<?php echo $order->roastjointed_pl; ?>">
									</div>

									<!-- pl_bacon -->
									<div>
										<?php if ($order->pl_bacon == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pl_bacon" value="<?php echo $order->pl_bacon; ?>">
										<strong>Bacon</strong>
									</div>

									<!-- pl_baconchops -->
									<div>
											<?php if ($order->pl_baconchops == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pl_baconchops" value="<?php echo $order->pl_baconchops; ?>">
											<strong>Bacon Chops</strong>
									</div>

									<hr>

									<!-- BELLY -->
									<h3>Belly</h3>

									<!-- pb_bacon -->
									<div>
										<?php if ($order->pb_bacon == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pb_bacon" value="<?php echo $order->pb_bacon; ?>">
										<strong>Bacon</strong>
									</div>

									<!-- pb_baconstrips -->
									<div>
										<?php if ($order->pb_baconstrips == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pb_baconstrips" value="<?php echo $order->pb_baconstrips; ?>">
										<strong>Bacon Strips</strong>
									</div>

									<!-- pb_rolled -->
									<div>
										<?php if ($order->pb_rolled == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pb_rolled" value="<?php echo $order->pb_rolled; ?>">
										<strong>Belly Bacon Rolled With Loin Bacon</strong>
									</div>

									<!-- pb_whole whole_pb -->
									<div>
										<?php if ($order->pb_whole == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pb_whole" value="<?php echo $order->pb_whole; ?>">
										<strong>Roast</strong>

										<?php if ($order->pb_whole == 1) { 
											echo $order->whole_pb;
										} else { echo ' '; } ?>
										<input type="hidden" name="whole_pb" value="<?php echo $order->whole_pb; ?>">
									</div>

									<!-- pb_strips -->
									<div>
										<?php if ($order->pb_strips == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pb_strips" value="<?php echo $order->pb_strips; ?>">
										<strong>Strips</strong>
									</div>

									<hr>

									<!-- Leg -->
									<h3>Leg</h3>

									<!--    hamonthebone_cook hamonthebone_size --> 
									<div>
										<?php if ($order->pg_hamonthebone == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_hamonthebone" value="<?php echo $order->pg_hamonthebone; ?>">
										<strong>Ham On The Bone</strong>

										<?php if ($order->pg_hamonthebone == 1) { 
											echo $order->hamonthebone_cook;
										} else { echo ' '; } ?>
										<input type="hidden" name="hamonthebone_cook" value="<?php echo $order->hamonthebone_cook; ?>">

										<?php if ($order->pg_hamonthebone == 1) { 
											echo $order->hamonthebone_size;
										} else { echo ' '; } ?>
										<input type="hidden" name="hamonthebone_size" value="<?php echo $order->hamonthebone_size; ?>">
									</div>

									<!-- pg_pressedham  pressedham_cook pressedham_size -->
									<div>
										<?php if ($order->pg_pressedham == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_pressedham" value="<?php echo $order->pg_pressedham; ?>">
										<strong>Pressed Ham</strong>

										<?php if ($order->pg_pressedham == 1) { 
											echo $order->pressedham_cook;
										} else { echo ' '; } ?>
										<input type="hidden" name="pressedham_cook" value="<?php echo $order->pressedham_cook; ?>">

										<?php if ($order->pg_pressedham == 1) { 
											echo $order->pressedham_size;
										} else { echo ' '; } ?>
										<input type="hidden" name="pressedham_size" value="<?php echo $order->pressedham_size; ?>">
									</div>

									<!-- pg_roast roast_pg -->
									<div>
										<?php if ($order->pg_roast == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_roast" value="<?php echo $order->pg_roast; ?>">
										<strong>Roast</strong>

										<?php if ($order->pg_roast == 1) { 
											echo $order->roast_pg;
										} else { echo ' '; } ?>
										<input type="hidden" name="roast_pg" value="<?php echo $order->roast_pg; ?>">
									</div>

									<!-- pg_mince -->
									<div>
										<?php if ($order->pg_mince == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_mince" value="<?php echo $order->pg_mince; ?>">
										<strong>Mince</strong>
									</div>

									<!-- pg_diced -->
									<div>
										<?php if ($order->pg_diced == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_diced" value="<?php echo $order->pg_diced; ?>">
										<strong>Diced</strong>
									</div>

									<!-- pg_legsteaks -->
									<div>
										<?php if ($order->pg_legsteaks == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_legsteaks" value="<?php echo $order->pg_legsteaks; ?>">
										<strong>Leg Steaks</strong>
									</div>

									<!-- pg_bacon -->
									<div>
										<?php if ($order->pg_bacon == 1) { ?>
											<span class="unicode check spacer">✓</span>
										<?php } else { ?>
											<span class="unicode cross spacer">✗</span>
										<?php } ?>
										<input type="hidden" name="pg_bacon" value="<?php echo $order->pg_bacon; ?>">
										<strong>Bacon</strong>
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
