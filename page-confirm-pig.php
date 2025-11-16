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

									<h4>Pig Options</h4>

									<!-- animal options -->
									<!-- SHOULDER -->
									<h3>Shoulder</h3>

									<!-- ps_rolledshoulder rolledshoulder_ps -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- ps_bacon -->
									<div>
										<p>
											<?php if ($order->ps_bacon == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="ps_bacon" value="<?php echo $order->ps_bacon; ?>">
											<strong>Bacon</strong>
										</p>
									</div>

									<!-- ps_pickledpork -->
									<div>
										<p>
											<?php if ($order->ps_pickledpork == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="ps_pickledpork" value="<?php echo $order->ps_pickledpork; ?>">
											<strong>Pickledpork</strong>
										</p>
									</div>

									<!-- ps_chops -->
									<div>
										<p>
											<?php if ($order->ps_chops == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="ps_chops" value="<?php echo $order->ps_chops; ?>">
											<strong>Chops</strong>
										</p>
									</div>

									<!-- ps_pressedham pressedham_ps -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- ps_mince -->
									<div>
										<p>
											<?php if ($order->ps_mince == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="ps_mince" value="<?php echo $order->ps_mince; ?>">
											<strong>Mince</strong>
										</p>
									</div>

									<!-- ps_dicedpork -->
									<div>
										<p>
											<?php if ($order->ps_dicedpork == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="ps_dicedpork" value="<?php echo $order->ps_dicedpork; ?>">
											<strong>Diced Pork</strong>
										</p>
									</div>

									<!-- ps_roastjointed roastjointed_ps -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- ps_bostonbutt -->
									<div>
										<p>
											<?php if ($order->ps_bostonbutt == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="ps_bostonbutt" value="<?php echo $order->ps_bostonbutt; ?>">
											<strong>Boston Butt - Pulled Pork</strong>
										</p>
									</div>

									<!-- /Shoulder -->

									<hr>

									<!-- LOIN -->
									<h3>Loin</h3>

									<!-- pl_chops -->
									<div>
										<p>
											<?php if ($order->pl_chops == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pl_chops" value="<?php echo $order->pl_chops; ?>">
											<strong>Chops</strong>
										</p>
									</div>

									<!-- pl_loinsteaks -->
									<div>
										<p>
											<?php if ($order->pl_loinsteaks == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pl_loinsteaks" value="<?php echo $order->pl_loinsteaks; ?>">
											<strong>Loin Steaks</strong>
										</p>
									</div>

									<!-- pl_roastjointed roastjointed_pl  -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- pl_bacon -->
									<div>
										<p>
											<?php if ($order->pl_bacon == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pl_bacon" value="<?php echo $order->pl_bacon; ?>">
											<strong>Bacon</strong>
										</p>
									</div>

									<!-- pl_baconchops -->
									<div>
										<p>
											<?php if ($order->pl_baconchops == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pl_baconchops" value="<?php echo $order->pl_baconchops; ?>">
											<strong>Bacon Chops</strong>
										</p>
									</div>

									<!-- pl_bellybacon -->
									<div>
										<p>
											<?php if ($order->pl_bellybacon == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pl_bellybacon" value="<?php echo $order->pl_bellybacon; ?>">
											<strong>Loin Belly Bacon</strong>
										</p>
									</div>

									<!-- pb_rolled -->
									<div>
										<p>
											<?php if ($order->pb_rolled == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pb_rolled" value="<?php echo $order->pb_rolled; ?>">
											<strong>Belly Bacon Rolled With Loin Bacon</strong>
										</p>
									</div>

									<!-- /Loin -->

									<hr>

									<!-- BELLY -->
									<h3>Belly</h3>

									<!-- pb_bacon -->
									<div>
										<p>
											<?php if ($order->pb_bacon == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pb_bacon" value="<?php echo $order->pb_bacon; ?>">
											<strong>Bacon</strong>
										</p>
									</div>

									<!-- pb_baconstrips -->
									<div>
										<p>
											<?php if ($order->pb_baconstrips == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pb_baconstrips" value="<?php echo $order->pb_baconstrips; ?>">
											<strong>Bacon Strips</strong>
										</p>
									</div>

									<!-- pb_whole whole_pb -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- pb_marinate marinate_pb -->
									<div>
										<p>
											<?php if ($order->pb_marinate == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pb_whole" value="<?php echo $order->pb_marinate; ?>">
											<strong>Marinate Cook in a Bag</strong>

											<?php if ($order->pb_marinate == 1) { 
												echo $order->marinate_pb;
											} else { echo ' '; } ?>
											<input type="hidden" name="marinate_pb" value="<?php echo $order->marinate_pb; ?>">
										</p>
									</div>

									<!-- /Belly -->

									<hr>

									<!-- Leg -->
									<h3>Leg</h3>

									<!-- hamonthebone_cook hamonthebone_size --> 
									<div>
										<p>
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
										</p>
									</div>

									<!-- pg_pressedham pressedham_cook pressedham_size -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- pg_roast roast_pg -->
									<div>
										<p>
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
										</p>
									</div>

									<!-- pg_mince -->
									<div>
										<p>
											<?php if ($order->pg_mince == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pg_mince" value="<?php echo $order->pg_mince; ?>">
											<strong>Mince</strong>
										</p>
									</div>

									<!-- pg_diced -->
									<div>
										<p>
											<?php if ($order->pg_diced == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pg_diced" value="<?php echo $order->pg_diced; ?>">
											<strong>Diced</strong>
										</p>
									</div>

									<!-- pg_legsteaks -->
									<div>
										<p>
											<?php if ($order->pg_legsteaks == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pg_legsteaks" value="<?php echo $order->pg_legsteaks; ?>">
											<strong>Leg Steaks</strong>
										</p>
									</div>

									<!-- pg_bacon -->
									<div>
										<p>
											<?php if ($order->pg_bacon == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pg_bacon" value="<?php echo $order->pg_bacon; ?>">
											<strong>Bacon</strong>
										</p>
									</div>

									<!-- pg_hocks hocks_pg -->
									<div>
										<p>
											<?php if ($order->pg_hocks == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="pg_hocks" value="<?php echo $order->pg_hocks; ?>">
											<strong>Hocks</strong>

											<?php if ($order->pg_hocks == 1) { 
												echo $order->hocks_pg;
											} else { echo ' '; } ?>
											<input type="hidden" name="hocks_pg" value="<?php echo $order->hocks_pg; ?>">
										</p>
									</div>

									<!-- /Leg -->

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
