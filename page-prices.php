<?php
/*
 * Template Name: prices
 */
 get_header(); ?>

<div class="row over-background border drop" data-equalizer>
	<div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

		<!-- Start the main container -->
		<div class="container" role="document">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="row"><!-- row open --> 
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

							<div class="small-12 columns"><!-- title -->

								<?php include("page-title.php");
								the_post_thumbnail();
								th_content(); ?>

								<!-- sheep -->
								<div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Sheep')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Sheep')->post_content); ?>

								<!-- pig -->
								<div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Pig')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Pig')->post_content); ?>  

								<!-- deer -->
								<div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Deer')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Deer')->post_content); ?>

								<!-- beef -->
								<div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Beef')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Beef')->post_content); ?>

								 <!-- Alpaca Llama -->
								<div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Alpaca Llama')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Alpaca Llama')->post_content); ?>


								<!-- small goods -->
									 <div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Small Goods')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Small Goods')->post_content); ?>

								<!-- delivery -->
								<div class="row">
									<div class="small-12 columns">
										<div class="flagbanner">
											<h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Delivery')->post_title); ?></h3>
										</div> 
									</div>
								</div>
								<?php echo (get_page_by_title('Delivery')->post_content); ?>

								<h4><a href="<?php echo home_url(); ?>/order" class="button"><?php echo (get_page_by_title('Order')->post_title); ?></a></h4><!-- h4 button? this is really wierd -->

							</div><!-- small-12 -->

						</div><!-- post -->
					</div><!-- row -->

				<?php endwhile; // while have posts
			endif; ?><!-- if have posts -->
		</div><!-- container -->
	</div><!-- equilizer watch -->
	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>