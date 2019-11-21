<?php
/*
* Template Name: view all
*/

get_header();

//define variable for url bar .php?n=
// this needs an if statement
if (isset($_GET['n'])) {
	$unid = $_GET['n'];
}

//define variable for url bar .php?n=
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

						<h2><?php the_title(); ?></h2>

						<hr>

						<?php the_content();

						if(current_user_can('administrator')) { ?>

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>
								<fieldset>
									<input type="hidden" name="action" value="viewresults">
									<input type="hidden" name="data" value="viewresultsid"><!-- slightly different value to differentiate, not used -->

									<!-- use the url unid variable in the form to keep it on the same one -->
									<label for="search" class="text-right">Search:</label>
									<input name="name" type="text" required id="name" placeholder="Joe Smith" />
									<button type="submit">Search</button>
								<fieldset>
							</form>

							<hr>

							<ul class="run-the-stripes ul-stripes">
								<?php

								// set the number of items to display per page
								$items_per_page = 100;

								// set the offset the page number with a zero after
								$offset = $off . 00;

								// then search for orders -->
								$orders = $wpdb->get_results( 
									"
									SELECT * 
									FROM meatorders
									WHERE confirm = 1
									ORDER by unid desc
									LIMIT $offset , $items_per_page
									"
								);
								foreach ( $orders as $order ) 
								{ ?>
									<li><a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a> | <?php echo $order->name; ?> | <?php echo $order->email; ?> | <?php echo $order->animal; ?> | <?php echo $order->amp; ?> | <?php echo $order->timenow; ?></li>
								<?php } ?>
							</ul>

							<hr>

							<!-- create variable -->
							<?php
							$over = $off + 1;
							$under = $off - 1; ?>

							<p>You're on page <?php if ($off>0) { echo $over; } else { echo '1'; }

								// If more than 0 previous is OK -->
								if ($off>0) {
									echo '<a href=" ' . home_url() . '/view/?offset=' . $under . '" aria-label="Previous" class="button">Previous <span class="show-for-sr">page</span></a>' ;
								} ?>

								<a href="<?php echo home_url(); ?>/view/?offset=<?php echo $over; ?>" aria-label="Previous" class="button">Next <span class="show-for-sr">page</span></a>
							</p>


						<?php } else { ?> <!-- if administrator -->
							<h4>Sorry your not an admin.</h4>
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
