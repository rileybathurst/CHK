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