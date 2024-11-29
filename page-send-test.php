<?php
/*  
 *  Template Name: sendTest
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
						id="sendTest"
						<?php post_class(); ?>
						><!-- post open -->

							<h3>Send Test</h3>

							<form
							action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
							method="post"
							>

								<!-- hidden inputs submit to the corrent place in wp functions -->
								<input type="hidden" name="action" value="sendTest">
								<input type="hidden" name="data" value="sendTest">

								<!-- name -->
								<input
								type="text"
								required
								name="name"
								id="name"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->display_name; ?>"
									<?php } else { ?>
										placeholder="Name"
									<?php } ?>
								>

								<input type="hidden" id="g-recaptcha" name="g-recaptcha">
								<button
									id="submit"
									type="submit"
									value="submit"
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

					<?php endwhile;
				} ?>

			</section>
	</main>

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
