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

								<div class="stripe">
										<input type="radio" name="small_goods" id="yes" value="yes"/>
										<label for="b_fillet">Steak Pie</label>
										<select name="fillet_bf" id="fillet_bf" required class="select-css">
										<option value="" disabled selected>Select</option>
										<option name="fillet_bf" value="steak">Family Size</option>
										<option name="fillet_bf" value="whole">Smaller</option>
									</select>
									</div>
									<div>
										<input type="radio" name="small_goods" id="no" value="no"/>
										<label for="no">Steak N Cheese</label>
										<select name="fillet_bf" id="fillet_bf" required class="select-css">
										<option value="" disabled selected>Select</option>
										<option name="fillet_bf" value="steak">Family Size</option>
										<option name="fillet_bf" value="whole">Smaller</option>
									</select>
									</div>
									<div>
										<input type="radio" name="small_goods" id="no" value="no"/>
										<label for="no">Mince</label>
										<select name="fillet_bf" id="fillet_bf" required class="select-css">
										<option value="" disabled selected>Select</option>
										<option name="fillet_bf" value="steak">Family Size</option>
										<option name="fillet_bf" value="whole">Smaller</option>
									</select>
									</div>
									<div>
										<input type="radio" name="small_goods" id="no" value="no"/>
										<label for="no">Mince N Cheese</label>
										<select name="fillet_bf" id="fillet_bf" required class="select-css">
										<option value="" disabled selected>Select</option>
										<option name="fillet_bf" value="steak">Family Size</option>
										<option name="fillet_bf" value="whole">Smaller</option>
									</select>
									</div>
									<div>
										<input type="radio" name="small_goods" id="no" value="no"/>
										<label for="no">Big Sausage Rolls</label>
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
