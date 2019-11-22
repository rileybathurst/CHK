<?php
/*
 * Template Name: View Results
 */

get_header();

//define name variable from url bar .php?r=
if (isset($_GET['r'])) {
	$result = $_GET['r'];
}

//define variable for url bar .php?offset=
if (isset($_GET['offset'])) {
	$off = $_GET['offset'];
} else {
	$off = 0;
}
?>

<div class="container main-border over-background">
	<main>

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

						<?php the_post_thumbnail(); ?>

						<h2><?php the_title(); ?> for <?php echo $result; ?></h2>

						<hr>

						<?php the_content(); ?>
							
							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>

								<fieldset>

									<input type="hidden" name="action" value="viewresults">
									<input type="hidden" name="data" value="viewresultsid"><!-- both are needed for wp backend -->

									<!-- use the url unid variable in the form to keep it on the same one -->
									<label for="search" class="inline">Search:</label>
									<input name="name" type="text" required id="name" placeholder="Joe Smith" />

									<button type="submit">Search</button>
								<fieldset>
							</form>

							<hr>

							<!-- multiple options due to not being logged in would see all guest orders -->
							<?php if(current_user_can('administrator')) {

								// set the number of items to display per page
								$items_per_page = 100;

								// set the offset the page number with a zero after
								$offset = $off . 00;


								// It would be nicer to not query twice 
								$rowcount = $wpdb->get_var("SELECT COUNT(*) FROM 
									meatorders
									WHERE ( name LIKE '$result%' OR name LIKE '%$result' OR email LIKE '$result%' OR email LIKE '%$result' AND confirm = 1 )
									ORDER by unid desc
									LIMIT $offset , $items_per_page
									;"
								); ?>

								<h3>Returned <?php echo $rowcount; ?> Results</h3>
								<?php if ($rowcount == 0) { ?>
									<p>Sorry no results try search for names or emails or check the <a href="<?php echo home_url(); ?>/view-all">view-all</a> area and search manually</p>
								<?php } else {

									// then search for orders
									$orders = $wpdb->get_results( 
										"
										SELECT * 
										FROM meatorders
										WHERE ( name LIKE '$result%' OR name LIKE '%$result' OR email LIKE '$result%' OR email LIKE '%$result' AND confirm = 1 )
										ORDER by unid desc
										LIMIT $offset , $items_per_page
										;"
									);
									foreach ( $orders as $order ) 
									{
										echo 
										'<li><a href="' . home_url() . '/view-order?n=' . $order->unid . '">' . $order->unid . '</a>' .
											' - ' . $order->name .
											' - ' . $order->email .
											' - ' . $order->animal .
											' - ' . $order->amp .
											' - ' . $order->timenow .
										'</li>' ;
									} ?>

									<!-- create variable -->
									<?php $over = $off + 1; ?>
									<?php $under = $off - 1; ?>

									<!-- this needs a result count and then if none print that rather than just fail -->
									<hr >

									<p>You're on page <?php if ($off>0) { echo $over; } else { echo '1'; } ?></p>

									<!-- If more than 0 previous is OK -->
									<?php if ($off>0)  {
											echo '<button><a href=" ' . home_url() . '/view-results/?r=' . $result . '/?offset=' . $under . '" aria-label="Previous">Previous <span class="show-for-sr">page</span></a></button>' ;
											} ?>

									<button><a href="<?php echo home_url(); ?>/view-results/?r=<?php echo $result; ?>/?offset=<?php echo $over; ?>" aria-label="Previous">Next <span class="show-for-sr">page</span></a></button>

								<?php } // more than zero results

							} else { ?> <!-- if admin -->
								<h4>Sorry your not an admin.</h4>';

								<?php wp_login_form(); ?>

								<p><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a></p><!-- this is more of a button? it does something? -->
							<?php }; ?>
					</article>
				<?php endwhile; // while have posts
			} ?><!-- if have posts -->
		</section><!-- container -->
	</main><!-- columns -->

	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>
