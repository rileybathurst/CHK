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

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

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
								<input type="text" required pattern="[a-zA-Z]+" name="name" id="name"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->display_name; ?>"
									<?php } else { ?>
										placeholder="Name"
									<?php } ?>
								>

								<?php echo $current_user->user_email; ?>

								<!-- email -->
								<input type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" id="email"
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo $current_user->user_email; ?>"
									<?php } else { ?>
										placeholder="email"
									<?php } ?>
								>

								<?php echo $current_user->user_email; ?>

								<!-- phone -->
								<input type="text" name="phone" id="phone" required pattern="[0-9]" 
									<?php if ( is_user_logged_in() ) { ?>
										value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
									<?php } else { ?>
										placeholder="phone"
									<?php } ?>
								>

								<!-- details -->
								<textarea placeholder="Enter text here..." name="details" id="details"></textarea> 

								<!-- recaptcha -->
								<div class="g-recaptcha" data-sitekey="6LdEgUcUAAAAAAXTbz8HDCt4MunPvI6l4tmtrMzL"></div><!-- this can be updated to v3 but not the first thing to do -->

								<!-- submit -->
								<button type="submit" value="Submit">Send</button>≈
							</form>

						</article>

					<?php endwhile; // while have posts

				} ?><!-- if have posts -->

			</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
