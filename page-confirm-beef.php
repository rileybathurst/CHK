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

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="drop">
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
									
								<div class="small-12 columns">
									<div class="banner drop">
										<h4 class="button-banner">Beef Options</h4>
									</div>
								</div>
							</div>        

						<!-- beef options -->     
						<!-- b_fillet   fillet_bf -->   
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_fillet == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_fillet" value="<?php echo $order->b_fillet; ?>">
											<strong>Fillet</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_fillet == 1) { 
												echo $order->fillet_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="fillet_bf" value="<?php echo $order->fillet_bf; ?>">
										</p>
									 </div>
								</div>

						<!-- b_porterhouse    porterhouse_bf -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_porterhouse == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_porterhouse" value="<?php echo $order->b_porterhouse; ?>">
											<strong>Porterhouse</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_porterhouse == 1) { 
												echo $order->porterhouse_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="porterhouse_bf" value="<?php echo $order->porterhouse_bf; ?>">
										</p>
									 </div>
								</div>

						<!-- b_tbone -->
								<div class="row second-background">
									<div class="small-12 columns">
										<p class="no-bottom">
											<?php if ($order->b_tbone == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_tbone" value="<?php echo $order->b_tbone; ?>">
											<strong>T-Bone</strong>
										</p>
									</div>
								</div>

						<!-- b_ribeye    ribeye_bf -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_ribeye == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_ribeye" value="<?php echo $order->b_ribeye; ?>">
											<strong>Ribeye</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_ribeye == 1) { 
												echo $order->ribeye_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="ribeye_bf" value="<?php echo $order->ribeye_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_rump    rump_bf -->
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_rump == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_rump" value="<?php echo $order->b_rump; ?>">
											<strong>Rump</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_rump == 1) { 
												echo $order->rump_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="rump_bf" value="<?php echo $order->rump_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_topside    topside_bf -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_topside == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_topside" value="<?php echo $order->b_topside; ?>">
											<strong>Topside</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_topside == 1) { 
												echo $order->topside_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="topside_bf" value="<?php echo $order->topside_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_rolledroast    rolledroast_bf -->
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_rolledroast == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_rolledroast" value="<?php echo $order->b_rolledroast; ?>">
											<strong>Rolled Roast</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_rolledroast == 1) { 
											echo $order->rolledroast_bf;
												} else { echo ' '; } ?>
											<input type="hidden" name="rolledroast_bf" value="<?php echo $order->rolledroast_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_weinerschnitzel    weienerschnitzel_bf -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_weinerschnitzel == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_weinerschnitzel" value="<?php echo $order->b_weinerschnitzel; ?>">
											<strong>Weiner Schnitzel</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_weinerschnitzel == 1) { 
												echo $order->weinerschnitzel_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="weinerschnitzel_bf" value="<?php echo $order->weinerschnitzel_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_silverside    silverside_bf -->
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_silverside == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_silverside" value="<?php echo $order->b_silverside; ?>">
											<strong>Silverside</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_silverside == 1) { 
												echo $order->silverside_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="silverside_bf" value="<?php echo $order->silverside_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_blade    blade_bf -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_blade == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_blade" value="<?php echo $order->b_blade; ?>">
											<strong>Blade</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_blade == 1) { 
												echo $order->blade_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="blade_bf" value="<?php echo $order->blade_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_shinfillet    shinfillet_bf -->
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_shinfillet == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_shinfillet" value="<?php echo $order->b_shinfillet; ?>">
											<strong>Shinfillet</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_shinfillet == 1) { 
												echo $order->shinfillet_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="shinfillet_bf" value="<?php echo $order->shinfillet_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_chucksteak    chucksteak_bf -->
								<div class="row off-stripe">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_chucksteak == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_chucksteak" value="<?php echo $order->b_chucksteak; ?>">
											<strong>Chucksteak</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_chucksteak == 1) { 
												echo $order->chucksteak_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="chucksteak_bf" value="<?php echo $order->chucksteak_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_skirtsteak    skirtsteak_bf -->
								<div class="row second-background">
									<div class="small-6 columns">
										<p class="no-bottom">
											<?php if ($order->b_skirtsteak == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_skirtsteak" value="<?php echo $order->b_skirtsteak; ?>">
											<strong>Skirtsteak</strong>
										</p>
									</div>
									<div class="small-6 columns capitalize">
										<p class="no-bottom">
											<?php if ($order->b_skirtsteak == 1) { 
												echo $order->skirtsteak_bf;
											} else { echo ' '; } ?>
											<input type="hidden" name="skirtsteak_bf" value="<?php echo $order->skirtsteak_bf; ?>">
										</p>
									</div>
								</div>

						<!-- b_mince -->
								<div class="row off-stripe">
									<div class="small-12 columns">
										<p class="no-bottom">
											<?php if ($order->b_mince == 1) { ?>
												<span class="unicode check spacer">✓</span>
											<?php } else { ?>
												<span class="unicode cross spacer">✗</span>
											<?php } ?>
											<input type="hidden" name="b_mince" value="<?php echo $order->b_mince; ?>">
											<strong>Mince</strong>
										</p>
									</div>
								</div>

						<!-- spins -->
								
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
											</fieldset>
									</form>

</article>

<?php endwhile; // while have posts

// single comments -->
if (is_single()) {

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
} ?>

<!-- single pagination -->
<ul>

	<p>Check out some other posts</p>
	<li><p><?php previous_post_link( '%link', '%title', TRUE ); ?></p></li>
	<li><p> <?php next_post_link( '%link', '%title', TRUE ); ?> </p></li>

</ul>
<?php } // if is single

// pagination
if ( $wp_query->max_num_pages > 1 ) : ?>	
<h4>Look deeper into the site</h4>
<h4><?php next_posts_link ( '<span class="meta-nav">&larr;</span> Older posts' ) ; ?></h4>
<h4><?php previous_posts_link ( '<span class="meta-nav">&rarr;</span> Newer posts' ) ; ?></h4>
<?php endif; // if pagination

} else { ?>
<section>
<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
</section><!-- row -->

<?php } ?><!-- if have posts -->

</section><!-- container -->
</main><!-- over-background main-border -->

<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
