<div id="sidebar" class="light-back show-for-large">

		<?php
		// first loop
		$args = array( 'posts_per_page' => 1, 'category_name' => 'recipes', 'orderby' => 'rand', ); // can this be done with a widget?
		$query1 = new WP_Query( $args );

		// The Loop
		while ( $query1->have_posts() ) {
			$query1->the_post();

			the_post_thumbnail(); ?>

			<h3 class="set-in"><?php the_title(); ?></h3>
			<div class="set-in"><?php the_content(); ?></div>

		<?php }
		wp_reset_postdata(); ?>
</div><!-- light-back show-for-lage -->