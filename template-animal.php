<?php
/*  
 *  Template Name: animal
 */ 
?>

<!-- posts and pages -->
<?php get_header(); ?>

<div class="container main-border over-background">
	<main>

		<!-- Start the main container -->
		<section role="document" class="set-in">

			<?php if (have_posts()) {
				while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

						<?php the_post_thumbnail(); ?>

						<h2 class="featured-title">Featured:</h2>
						<h2><?php the_title(); ?></h2>

						<hr>

						<?php the_content(); ?>

						<hr>
						<!-- small goods -->
						<h3>Small Goods</h3>

						<ul class="stripes"><li><a href="<?php echo home_url('/'); ?>small-goods">Check here</a> for small goods prices</li></ul><!-- a little over the top for a single element for a list but it styles as the others do -->

						<hr>
						<!-- offal -->
						<h3>Offal</h3>
						
						<ul class="stripes">
							<li>$5 processed &amp; packaged per animal</li>
							<li>No charge collected and left on property in customer container</li>
						</ul>

						<!-- bookings
						<h3>Bookings</h3>

						<p>For Canterbury Homekill to take an order we first need to have the animal booked in, this can be done through our <a href=" php echo home_url(); ?>/booking">booking form</a> or phone <a href="tel:03-313-4771">(03) 313 4771</a></p>

						<h4><a href=" php echo home_url(); ?>/booking" class="button">BOOKING FORM</a></h4>

						<p>Once your animal is booked in you must get your order in the day your animal is killed.</p>

						-->

						<!-- order -->
						
						<?php 
							$str = get_the_title();
							$space=preg_replace('/\s+/', '', $str); // remove spaces from the title
						?>

						<h4 class="small-push-1"><a href="<?php echo home_url(); ?>/order-declaration/?a=<?php echo $space; ?>" class="button">Order</a></h4>

					</article>

				<?php endwhile; // while have posts

			} ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>





























