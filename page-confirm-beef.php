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
									
									<h4>Beef Options</h4>

									<!-- beef options -->
									<!-- b_fillet fillet_bf -->
									<div>
										<p>
											<?php if ($order->b_fillet == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_fillet" value="<?php echo $order->b_fillet; ?>">
											<strong>Fillet</strong>

											<?php if ($order->b_fillet == 1) { 
												echo $order->fillet_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="fillet_bf" value="<?php echo $order->fillet_bf; ?>">
										</p>
									</div>

									<!-- b_porterhouse porterhouse_bf -->
									<div>
										<p>
											<?php if ($order->b_porterhouse == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_porterhouse" value="<?php echo $order->b_porterhouse; ?>">
											<strong>Porterhouse</strong>

											<?php if ($order->b_porterhouse == 1) { 
												echo $order->porterhouse_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="porterhouse_bf" value="<?php echo $order->porterhouse_bf; ?>">
										</p>
									</div>

									<!-- b_tbone -->
									<div>
										<p>
											<?php if ($order->b_tbone == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_tbone" value="<?php echo $order->b_tbone; ?>">
											<strong>T-Bone</strong>
										</p>
									</div>

									<!-- b_ribeye ribeye_bf -->
									<div>
										<p>
											<?php if ($order->b_ribeye == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_ribeye" value="<?php echo $order->b_ribeye; ?>">
											<strong>Ribeye</strong>

											<?php if ($order->b_ribeye == 1) { 
												echo $order->ribeye_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="ribeye_bf" value="<?php echo $order->ribeye_bf; ?>">
										</p>
									</div>

									<!-- b_rump rump_bf -->
									<div>
										<p>
											<?php if ($order->b_rump == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_rump" value="<?php echo $order->b_rump; ?>">
											<strong>Rump</strong>

											<?php if ($order->b_rump == 1) { 
												echo $order->rump_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="rump_bf" value="<?php echo $order->rump_bf; ?>">
										</p>
									</div>

									<!-- b_topside topside_bf -->
									<div>
										<p>
											<?php if ($order->b_topside == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_topside" value="<?php echo $order->b_topside; ?>">
											<strong>Topside</strong>

											<?php if ($order->b_topside == 1) { 
												echo $order->topside_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="topside_bf" value="<?php echo $order->topside_bf; ?>">
										</p>
									</div>

									<!-- b_rolledroast rolledroast_bf -->
									<div>
										<p>
											<?php if ($order->b_rolledroast == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_rolledroast" value="<?php echo $order->b_rolledroast; ?>">
											<strong>Rolled Roast</strong>

											<?php if ($order->b_rolledroast == 1) { 
												echo $order->rolledroast_bf;
													} else { echo ' '; } ?>
											<input type="hidden" name="rolledroast_bf" value="<?php echo $order->rolledroast_bf; ?>">
										</p>
									</div>

									<!-- b_weinerschnitzel weienerschnitzel_bf -->
									<div>
										<p>
											<?php if ($order->b_weinerschnitzel == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_weinerschnitzel" value="<?php echo $order->b_weinerschnitzel; ?>">
											<strong>Weiner Schnitzel</strong>

											<?php if ($order->b_weinerschnitzel == 1) { 
												echo $order->weinerschnitzel_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="weinerschnitzel_bf" value="<?php echo $order->weinerschnitzel_bf; ?>">
										</p>
									</div>

									<!-- b_silverside silverside_bf -->
									<div>
										<p>
											<?php if ($order->b_silverside == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_silverside" value="<?php echo $order->b_silverside; ?>">
											<strong>Silverside</strong>

											<?php if ($order->b_silverside == 1) { 
												echo $order->silverside_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="silverside_bf" value="<?php echo $order->silverside_bf; ?>">
										</p>
									</div>

									<!-- b_blade blade_bf -->
									<div>
										<p>
											<?php if ($order->b_blade == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_blade" value="<?php echo $order->b_blade; ?>">
											<strong>Blade</strong>

											<?php if ($order->b_blade == 1) { 
												echo $order->blade_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="blade_bf" value="<?php echo $order->blade_bf; ?>">
										</p>
									</div>

									<!-- b_shinfillet shinfillet_bf -->
									<div>
										<p>
											<?php if ($order->b_shinfillet == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_shinfillet" value="<?php echo $order->b_shinfillet; ?>">
											<strong>Shinfillet</strong>

											<?php if ($order->b_shinfillet == 1) { 
												echo $order->shinfillet_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="shinfillet_bf" value="<?php echo $order->shinfillet_bf; ?>">
										</p>
									</div>

									<!-- b_chucksteak chucksteak_bf -->
									<div>
										<p>
											<?php if ($order->b_chucksteak == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_chucksteak" value="<?php echo $order->b_chucksteak; ?>">
											<strong>Chucksteak</strong>

											<?php if ($order->b_chucksteak == 1) { 
												echo $order->chucksteak_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="chucksteak_bf" value="<?php echo $order->chucksteak_bf; ?>">
										</p>
									</div>

									<!-- b_skirtsteak skirtsteak_bf -->
									<div>
										<p>
											<?php if ($order->b_skirtsteak == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_skirtsteak" value="<?php echo $order->b_skirtsteak; ?>">
											<strong>Skirtsteak</strong>
											
											<?php if ($order->b_skirtsteak == 1) { 
												echo $order->skirtsteak_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="skirtsteak_bf" value="<?php echo $order->skirtsteak_bf; ?>">
										</p>
									</div>

									<!-- b_brisket brisket_bf -->
									<div>
										<p>
											<?php if ($order->b_brisket == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_brisket" value="<?php echo $order->b_brisket; ?>">
											<strong>Brisket</strong>

											<?php if ($order->b_brisket == 1) { 
												echo $order->brisket_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="brisket_bf" value="<?php echo $order->brisket_bf; ?>">
										</p>
									</div>

									<!-- b_shortribs -->
									<div>
										<p>
											<?php if ($order->b_shortribs == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_shortribs" value="<?php echo $order->b_shortribs; ?>">
											<strong>Short Ribs</strong>
										</p>
									</div>

									<!-- b_smoker -->
									<div>
										<p>
											<?php if ($order->b_smoker == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_smoker" value="<?php echo $order->b_smoker; ?>">
											<strong>Alter cut to low and slow smoker style</strong>
										</p>
									</div>

									<!-- b_assistance -->
									<div>
										<p>
											<?php if ($order->b_assistance == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_assistance" value="<?php echo $order->b_assistance; ?>">
											<strong>Need assistance, not sure if my cuts are correct</strong>
										</p>
									</div>

									<!-- spins -->
									<div>
										<p>
											<em>Special instructions</em>
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
