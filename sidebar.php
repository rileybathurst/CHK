<div class="large-6 columns light-back show-for-large" data-equalizer-watch>
	<?php
	// first loop
	$args = array( 'posts_per_page' => 1, 'category_name' => 'recipes', 'orderby' => 'rand', ); // can this be done with a widget?
	$query1 = new WP_Query( $args );

	// The Loop
	while ( $query1->have_posts() ) {
		$query1->the_post(); ?>

		<div class="row any-collapse">
			<div class="large-12 columns any-collapse img-min-100">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>

		<div class="small-12 columns drop">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>

	<?php }
	wp_reset_postdata(); ?>
	</div>
</div><!-- large-6 columns show-for-lage -->