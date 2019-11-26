<?php
/*
 * Template Name: booking
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

						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
							<fieldset class="run-the-stripes">


								<input type="hidden" name="action" value="booking">
								<input type="hidden" name="data" value="booking"><!-- slightly different value to differentiate, not used -->

								<!-- name -->
								<div>
									<input type="text" required pattern="[a-zA-Z]+" name="name" id="name"
										<?php if ( is_user_logged_in() ) { ?>
											value="<?php echo $current_user->display_name; ?>"
										<?php } else { ?>
											placeholder="Name"
										<?php } ?> 
									>
								</div>

								<!-- email -->
								<div>
									<input type="text" required pattern="email" name="email" id="email"
										<?php if ( is_user_logged_in() ) { ?>
											value="<?php echo $current_user->user_email; ?>"
										<?php } else { ?>
											placeholder="email"
										<?php } ?>
									>
								</div>

								<!-- phone -->
								<div>
									<input type="text" name="phone" id="phone"
										<?php if ( is_user_logged_in() ) { ?>
											value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
										<?php } else { ?>
											placeholder="phone"
										<?php } ?>
									>
								</div>

								<!-- address -->
								<div>
									<input type="text" name="address" id="address"
										<?php if ( is_user_logged_in() ) { ?>
											value="<?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?>"
										<?php } else { ?>
											placeholder="address"
										<?php } ?>
									>
								</div>

								<!-- details -->
								<div>
									<textarea placeholder="Enter text here..." name="details" id="details"></textarea> 
								</div>

								<!-- submit -->
								<div>
									<button type="submit" value="Submit">Send</button>
								</div>
							</fieldset>
						</form>

					</article>
				<?php endwhile; // while have posts
			} ?><!-- if have posts -->
		</section><!-- container -->
	</main><!-- columns -->

	<?php get_sidebar(); ?>
</div><!-- row -->
<?php get_footer(); ?>