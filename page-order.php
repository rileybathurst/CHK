<?php
/*  
 *  Template Name: order
 */

// posts and pages
get_header(); ?>

<div class="container main-border over-background">
	<main>
		<!-- <div class="set-in"> -->

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
                            
                            <div class="animals">
				<div> <!-- these need to be contained for the animals flex -->
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" /></a> <!-- these need to be tested as svg, its not great they are part of the theme but for now it will do -->
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="animals-link">Beef</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="animals-link">Deer</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="animals-link">Pig</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" /></a>
					<h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="animals-link">Sheep</a></h3>
				</div>

				<div class="">
					<a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo get_template_directory_uri(); ?>/img/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" /></a>
					<h3 class="text-center">
						<a href="<?php echo home_url(); ?>/alpaca-llama" class="animals-link">Alpaca / llama</a>
					</h3>
				</div>
			</div>

						</article>

					<?php endwhile; // while have posts

				} else { ?>
					<section>
						<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
						<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
					</section><!-- row -->

				<?php } ?><!-- if have posts -->

			</section><!-- container -->
		<!-- </div> -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
