<?php
/*  
 *  Template Name: contact us
 */ 
?>

<!-- posts and pages -->
<?php get_header(); ?>

<div class="container main-border over-background">
	<main>

			<!-- Start the main container -->
			<section role="document" class="set-in">

				<?php if (have_posts()) {
					while (have_posts()) : the_post(); ?>

						<article
						id="post-<?php the_ID(); ?>" 
						<?php post_class(); ?>
						><!-- post open -->

							<?php the_post_thumbnail(); ?>

							<h2 class="featured-title">Featured:</h2>
							<h2><?php the_title(); ?></h2>

							<hr>

							<div class="home-contact">
								<?php the_content(); ?>
							</div>
							
							<h3>Contact Form</h3>

							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

								<input type="hidden" name="action" value="contact"><!-- hidden inputs submit to the corrent place in wp functions -->
								<input type="hidden" name="data" value="contact">

								<!-- name -->
								<input type="text" required pattern="[a-zA-Z\s]+" name="name" id="name"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->display_name; ?>"
									<?php } else { ?>
										placeholder="Name"
									<?php } ?>
								>

								<!-- email -->
								<input
								type="email"
								required
								name="email"
								id="email"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->user_email; ?>"
									<?php } else { ?>
										placeholder="email"
									<?php } ?>
								>

								<!-- phone this will break if buddypress is not installed-->
								<input
								type="text"
								name="phone"
								id="phone"
								required 
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
									<?php } else { ?>
										placeholder="phone"
									<?php } ?>

								<!-- details -->
								<textarea
									placeholder="Enter text here..."
									name="details"
									id="details"
									>
								</textarea> 

								<input type="hidden" id="g-recaptcha" name="g-recaptcha">

								<button
									type="submit"
									value="Submit"
									id="submit"
								>
									Send
								</button>

								<?php $siteKey = '6LcG240qAAAAAEIEo3YRUIoKwf44GNqk_3ruJIok'; ?>

								<script src="https://www.google.com/recaptcha/api.js?render=<?php echo $siteKey; ?>"></script>
								<script>
									const siteKey = '<?php echo $siteKey; ?>';
									grecaptcha.ready(function() {
										grecaptcha.execute(siteKey, {action: 'submit'}).then(function(token) {
											document.getElementById('g-recaptcha').value = token;
										});
									});
								</script>
							</form>

						</article>

					<?php endwhile; // while have posts

				} ?><!-- if have posts -->

			</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
