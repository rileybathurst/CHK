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
						<?php $page = get_page_by_path('sheep');
							if ($page) { ?>
								<h3>
									<a href="<?php echo get_permalink($page->ID); ?>">
										Sheep
									</a>
								</h3>
								<?php echo ($page->post_content); ?>
								<hr>
						<?php } ?>



						<!-- pig -->
						<?php $page = get_page_by_path('pig');
							if ($page) { ?>
								<h3>
									<a href="<?php echo get_permalink($page->ID); ?>">
										Pig
									</a>
								</h3>
								<?php echo ($page->post_content); ?>
								<hr>
						<?php } ?>

						<!-- deer -->
						<?php $page = get_page_by_path('deer');
							if ($page) { ?>
								<h3>
									<a href="<?php echo get_permalink($page->ID); ?>">
										Deer
									</a>
								</h3>
								<?php echo ($page->post_content); ?>
								<hr>
						<?php } ?>

						<!-- beef -->
						<?php $page = get_page_by_path('beef');
							if ($page) { ?>
								<h3>
									<a href="<?php echo get_permalink($page->ID); ?>">
										Beef
									</a>
								</h3>
								<?php echo ($page->post_content); ?>
								<hr>
						<?php } ?>

						<!-- Alpaca Llama -->
						<?php $page = get_page_by_path('alpaca-llama');
							if ($page) { ?>
						<h3>
							<a href="<?php echo get_permalink($page->ID); ?>">
								Alpaca Llama
							</a>
						</h3>
						<?php echo ($page->post_content); ?>
						<hr>

						<!-- small goods -->
						<?php $page = get_page_by_path('small-goods');
							if ($page) { ?>
								<h3>
									<a href="<?php echo get_permalink($page->ID); ?>">
										Small Goods
									</a>
								</h3>
								<?php echo ($page->post_content); ?>
								<hr>
						<?php } ?>

						<!-- delivery -->
						<?php $page = get_page_by_path('delivery');
							if ($page) { ?>
								<h3>
									<a href="<?php echo get_permalink($page->ID); ?>">
										Delivery
									</a>
								</h3>
								<?php echo ($page->post_content); ?>
								<hr>
						<?php } ?>

						<!-- order link -->
						<?php $page = get_page_by_path('order');
							if ($page) { ?>
							<a href="<?php echo get_permalink($page->ID); ?>" class="button">
								Order
							</a>
						<?php } ?>

					</article>
				<?php endwhile; // while have posts
			} ?><!-- if have posts -->
		</section><!-- container -->
	</main><!-- columns -->

	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>