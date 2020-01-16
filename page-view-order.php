<?php
/*
* Template Name: view order
*/
get_header();

// define variable for url bar .php?n=
$unid = $_GET['n'];
?>

<div class="container main-border over-background">
	<main class="no-side">

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_post_thumbnail(); ?>

						<h2 class="hide-for-print"><?php the_title(); ?></h2>

						<hr class="hide-for-print">

						<?php the_content(); ?>

						<!-- multiple options due to not being logged in would see all guest orders -->
						<?php
							if ( is_user_logged_in() ) {

								// first extract the current user email as the variable 
								$current_user = wp_get_current_user();
								$current_email = $current_user->user_email;

								// then search for orders -->
								$orders = $wpdb->get_results( 
									"
									SELECT * 
									FROM meatorders
									WHERE unid = '$unid';
									"
								);
								foreach ( $orders as $order )
									{ ?>

										<div class="run-the-stripes">
											<!-- unid -->
											<div class="print-top-line">
												Order Number
												| 
												<strong class="print-highlights">
													<?php echo $order->unid; ?>
												</strong>
											</div>

											<div class="half"><!-- print group -->
												<!-- confirm -->
												<div>
													<?php if ($order->confirm == 1) { ?>
														<span class="unicode highlights spacer">✓</span>
													<?php } else { echo ' '; } ?>
													<strong>Confirmation</strong>
												</div>

												<!-- timenow -->
												<div>
													Date
													| 
													<strong>
														<?php echo $order->timenow; ?>
													</strong>
												</div>
											</div>

											<!-- name -->
											<div>
												Name
												| 
												<strong>
													<?php echo $order->name; ?>
												</strong>
											</div>

											<!-- add1 -->
											<div>
												Address
												| 
												<strong>
													<?php echo $order->add1; ?>
												</strong>
											</div>

											<div class="half"><!-- print group -->
												<!-- phone -->
												<div>
													Phone
													| 
													<strong>
														<?php echo $order->phone; ?>
													</strong>
												</div>

												<!-- phone2 -->
												<div>
													Mobile
													| 
													<strong>
														<?php echo $order->phone2; ?>
													</strong>
												</div>
											</div>

											<!-- email -->
											<div>
												Email | 
												<strong>
													<?php echo $order->email; ?>
												</strong>
											</div>

											<!-- amp -->
											<div>
												Animal To Be Processed
												| 
												<strong>
													<?php echo $order->amp; ?>
												</strong>
											</div>

											<div class="half"><!-- print group -->
												<!-- people -->
												<div>
													No. Of People
													| 
													<strong>
														<?php echo $order->people; ?>
													</strong>
												</div>

												<!-- people -->
												<div>
													Decleration
													| 
													<strong>
														<?php echo $order->declaration; ?>
													</strong>
												</div>
											</div>

											<div class="view-order-options"><!-- print group -->
												<div class="run-the-stripes"><!-- print group -->
													<!-- Breaks down the forms into each option -->
													<?php
														if ($order->animal == "beef") {
															include("view-beef.php");
														}

														elseif ($order->animal == "pig") {
															include("view-pig.php");
														}

														elseif ($order->animal == "deer") {
															include("view-deer.php");
														}

														elseif ($order->animal == "sheep") {
															include("view-sheep.php");
														}

														elseif ($order->animal == "alpacallama") {
															include("view-alpaca-llama.php");
														}
													?>
												</div>

												<div class="run-the-stripes"><!-- print group -->
													<?php include("view-small-goods.php"); ?>
												</div>
											</div>

											<div>
												SPECIAL INSTRUCTIONS
												| 
												<strong>
													<?php echo $order->spins; ?>
												</strong>
											</div>

											<hr class="hide-for-print">

											<?php if(current_user_can('administrator')) { ?>

												<div class="hide-for-print">
													<a href="<?php echo home_url(); ?>/view-all" class="button san-serif">Back to all orders</a>

													<!-- back and forward -->
													<?php
													$above = $unid + 1;
													$below = $unid - 1;
													?>

													<a href="<?php esc_url( home_url( '/' ) ); ?>view-order/?n=<?php echo $above; ?>" aria-label="Next" class="button san-serif">Next Order</a>
													<?php if ($unid>0)  { ?><a href="<?php esc_url( home_url( '/' ) ); ?>view-order/?n=<?php echo $below; ?>" aria-label="Previous" class="button san-serif">Previous Order</a><?php } ;?>
												</div>

											<?php } else { // if admin ?>
												<div class="hide-for-print">
													<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>" class="button san-serif">Back to your orders</a>
												</div>
											<?php } ?>

										</div><!-- run the stripes -->
									<?php } // For each
									
								} else { ?> <!-- logged in -->

									<h4>Welcome, visitor!</h4>

								<?php } ?> <!-- not logged in -->

					</article>

				<?php endwhile;
			} ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->
</div>
<?php get_footer(); ?>