<?php
/*
 * Template Name: booking
 */
get_header(); ?>

<div class="row over-background border drop" data-equalizer><!-- lets do this with css instead of js as its lighter -->
	<div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

		<!-- Start the main container -->
		<div class="container" role="document">

			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>

					<div class="row"><!-- row open --> 
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

							<div class="small-12 columns uppercase"><!-- title -->

								<?php include("page-title.php");
								the_post_thumbnail();
								the_content()?>

								<p></p><!-- any reason for this? -->

								<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>
									<div data-abide-error class="alert callout" style="display: none;">
										<p><i class="fi-alert"></i> There are some errors in your form.</p>
									</div>

									<input type="hidden" name="action" value="booking">
									<input type="hidden" name="data" value="booking"><!-- slightly different value to differentiate, not used -->

									<!-- name -->
									<div class="small-12 columns">
										<input type="text" required pattern="[a-zA-Z]+" name="name" id="name"
											<?php if ( is_user_logged_in() ) { ?>
												value="<?php echo $current_user->display_name; ?>"
											<?php } else { ?>
												placeholder="Name"
											<?php } ?> 
										>
										<span class="form-error">Your name is required.</span>
									</div>

									<!-- email -->
									<div class="small-12 columns">
										<input type="text" required pattern="email" name="email" id="email"
											<?php if ( is_user_logged_in() ) { ?>
												value="<?php echo $current_user->user_email; ?>"
											<?php } else { ?>
												placeholder="email"
											<?php } ?>
										>
										<span class="form-error">An email is required.</span>
									</div>

									<!-- phone -->
									<div class="small-12 columns">
										<input type="text" name="phone" id="phone"
											<?php if ( is_user_logged_in() ) { ?>
												value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
											<?php } else { ?>
												placeholder="phone"
											<?php } ?>
										>
									</div>

									<!-- address -->
									<div class="small-12 columns">
										<input type="text" name="address" id="address"
											<?php if ( is_user_logged_in() ) { ?>
												value="<?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?>"
											<?php } else { ?>
												placeholder="address"
											<?php } ?>
										>
									</div>

									<!-- details -->
									<div class="small-12 columns">
										<textarea placeholder="Enter text here..." name="details" id="details"></textarea> 
									</div>

									<!-- submit -->
									<div class="small-12 columns">
										<button type="submit" value="Submit">Send</button>
									</div>

								</form>

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