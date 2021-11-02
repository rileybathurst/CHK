<?php
/*
 * Template Name: prices
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

						<!-- sheep -->
						<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><?php echo (get_page_by_title('Sheep')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Sheep')->post_content); ?>
						<hr>

						<!-- pig -->
						<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><?php echo (get_page_by_title('Pig')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Pig')->post_content); ?>
						<hr>

						<!-- deer -->
						<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><?php echo (get_page_by_title('Deer')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Deer')->post_content); ?>
						<hr>

						<!-- beef -->
						<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><?php echo (get_page_by_title('Beef')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Beef')->post_content); ?>
						<hr>

						<!-- Alpaca Llama -->
						<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('alpaca llama')->ID); ?>"><?php echo (get_page_by_title('Alpaca Llama')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Alpaca Llama')->post_content); ?>
						<hr>

						<!-- small goods -->
						<h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('small goods')->ID); ?>"><?php echo (get_page_by_title('Small Goods')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Small Goods')->post_content); ?>
						<hr>

						<!-- delivery -->
						<h3><a href="<?php echo home_url(); ?>/order"><?php echo (get_page_by_title('Delivery')->post_title); ?></a></h3>
						<?php echo (get_page_by_title('Delivery')->post_content); ?>
						<hr>

						<a href="<?php echo home_url(); ?>/order" class="button"><?php echo (get_page_by_title('Order')->post_title); ?></a>

					</article>
				<?php endwhile; // while have posts
			} ?><!-- if have posts -->
		</section><!-- container -->
	</main><!-- columns -->

	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>