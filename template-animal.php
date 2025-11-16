<?php
/*
 *  Template Name: animal
 */

get_header(); ?>

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

						<?php the_content(); ?>

						<hr>

						<h3>Small Goods</h3>
						<p class="single-stripe"><a href="<?php echo home_url('/'); ?>small-goods">Check here</a> for small goods prices</p>

						<hr>

						<h3>Offal</h3>
						<p class="single-stripe">$5 processed &amp; packaged per animal</p>
						<p class="set-in">No charge collected and left on property in customer container</p>
						
						<!-- bookings
						<h3>Bookings</h3>

						<p>For Canterbury Homekill to take an order we first need to have the animal booked in, this can be done through our <a href=" php echo home_url(); ?>/booking">booking form</a> or phone <a href="tel:03-313-4771">(03) 313 4771</a></p>

						<h4><a href=" php echo home_url(); ?>/booking" class="button">BOOKING FORM</a></h4>

						<p>Once your animal is booked in you must get your order in the day your animal is killed.</p>

						-->

						<!-- order -->
						
						<?php 
							$str = get_the_title();
							$space=preg_replace('/\s+/', '', $str); // remove spaces from the title really needed for alpaca llama
						?>

						<a href="<?php echo home_url(); ?>/order-declaration/?a=<?php echo $space; ?>" class="button">Order</a>

					</article>

				<?php endwhile; // while have posts

			} ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>





























