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
							
							<?php get_template_part('components/animals'); ?>

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

</div>
<?php get_footer(); ?>
