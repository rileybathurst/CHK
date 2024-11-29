<?php
/*  
 *  Template Name: cap 3 test
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
						id="cap3"
						<?php post_class(); ?>
						><!-- post open -->

							<h3>Cap 3 Form</h3>

							<form
              action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
              method="post"
              >

								<!-- hidden inputs submit to the corrent place in wp functions -->
								<input type="hidden" name="action" value="cap3">
								<input type="hidden" name="data" value="cap3">

								<!-- name -->
								<input type="text" required pattern="[a-zA-Z\s]+" name="name" id="name"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->display_name; ?>"
									<?php } else { ?>
										placeholder="Name"
									<?php } ?>
								>

								<script>
                  function onSubmit(token) {
                    document.getElementById("cap3").submit();
                  }
                </script>

								<button
									type="submit"
									value="Submit"

									class="g-recaptcha" 
									data-sitekey="6LcG240qAAAAAEIEo3YRUIoKwf44GNqk_3ruJIok" 
									data-callback='onSubmit' 
									data-action='submit'
								>
									Send
								</button>
							</form>

						</article>

					<?php endwhile;
				} ?>

			</section>
	</main>

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
