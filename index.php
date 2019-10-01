<?php get_header(); ?>

<main class="over-background main-border">

    <!-- Start the main container -->
    <section class="container" role="document">

		<?php if (have_posts()) { ?>
			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

					<?php the_post_thumbnail(); ?>

					<div class="flagbanner">
						<h2 class="flagbuttonbanner featured-title">Featured:</h2>
						<h2 class="flagbuttonbanner category-title"><?php the_title(); ?></h2>
					</div> 
					
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
				<ul class="full nobottom no-bullet">

					<p class="small-6 columns">Check out some other posts</p>
					<li class="small-3 columns"><p class=""><?php previous_post_link( '%link', '%title', TRUE ); ?></p></li>
					<li class="small-3 columns"><p class="text-right"> <?php next_post_link( '%link', '%title', TRUE ); ?> </p></li>

				</ul>	
			<?php } // if is single

			// pagination
			if ( $wp_query->max_num_pages > 1 ) : ?>	
				<div class="full drop">
					<h4 class="small-12 large-4 columns drop fall">Look deeper into the site</h4>
					<h4 class="small-12 large-4 columns drop fall"><?php next_posts_link ( '<span class="meta-nav">&larr;</span> Older posts' ) ; ?></h4>
					<h4 class="small-12 large-4 columns drop fall"><?php previous_posts_link ( '<span class="meta-nav">&rarr;</span> Newer posts' ) ; ?></h4>
				</div>
			<?php endif; // if pagination

		} else { ?>
			<section>
				<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
				<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
			</section><!-- row -->

		<?php } ?><!-- if have posts -->

		</section><!-- container -->
    
	<?php get_sidebar(); ?>
        
	</main><!-- over-background main-border -->
			
<?php get_footer(); ?>