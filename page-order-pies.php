<?php
/*
 *  Template Name: order pies
 */

get_header();

//define variable for url bar .php?n=
$unid = isset($_GET['n']) ? sanitize_text_field(wp_unslash($_GET['n'])) : '';
?>

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

						<!-- // TODO: theres a line break in the phone number make sure that can't happen with a span -->
						<?php the_content(); ?> <!-- always double check the code editor if there are issues with the columns -->

								

						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
							<fieldset class="run-the-stripes">

								<input type="hidden" name="action" value="orderbeefupdate">
								<input type="hidden" name="data" value="orderbeefupdateid"><!-- slightly different value to differentiate, not used -->
										
								<!-- use the url unid variable in the form to keep it on the same one -->
								<input type="hidden" name="unid" value="<?php echo $unid; ?>">

								<div class="form-inline">
										<h3>Pies</h3>									
								</div>

								<div class="form-inline">

									<label for="b_fillet">Family Pie</label>
									<select name="fillet_bf" id="fillet_bf" required class="select-css">
										<option value="" disabled selected>Select</option>
										<option name="fillet_bf" value="steak">Steak N Cheese</option>
										<option name="fillet_bf" value="whole">Steak</option>
										<option name="fillet_bf" value="half">Mince N Cheese </option>
										<option name="fillet_bf" value="third">Mince</option>
									</select>
								</div>

								<?php include get_parent_theme_file_path( '/inc/submitted.php' ); ?>

								<button type="submit" id="add" name="add">Next Step</button>
							</fieldset>
						</form>

					</article>

				<?php endwhile; // while have posts

			} ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
</div>
<?php get_footer(); ?>
