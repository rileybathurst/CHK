<?php
/*
 *  Template Name: order alpaca llama
 */

get_header();

//define variable for url bar .php?n=
$unid = $_GET['n'];
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

						<?php the_content(); ?> <!-- always double check the code editor if there are issues with the columns -->

						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
							<fieldset class="run-the-stripes">

								<input type="hidden" name="action" value="orderalpacallamaupdate">
								<input type="hidden" name="data" value="orderalpacallamaupdateid"><!-- slightly different value to differentiate, not used -->
								
								<!-- use the url unid variable in the form to keep it on the same one -->
								<input type="hidden" name="unid" value="<?php echo $unid; ?>">

								<!-- l_shoulder shoulder_lb -->
								<div>
									<input id="l_shoulder" name="l_shoulder" type="checkbox">
									<label for="l_shoulder">Shoulder</label>
			
									<select id="shoulder_lb" name="shoulder_lb" ><small class="error">If selected a choice is required.</small>
											<option value="" disabled selected>Select</option>
											<option value="chops">Chops</option>
											<option value="roll">Roll</option>
											<option value="seasoned">Seasoned</option>
											<option value="jointed whole">Jointed whole</option>
											<option value="jointed half">Jointed half</option>
									</select>
								</div>

								<!-- l_flaps flaps_lb -->
								<div>
									<input id="l_flaps" name="l_flaps" type="checkbox">
									<label for="l_flaps">Flaps</label>

									<select id="flaps_lb" name="flaps_lb" >
										<option value="" disabled selected>Select</option>
										<option value="strips">Strips</option>
										<option value="roll">Roll</option>
										<option value="seasoned">Seasoned</option>
										<option value="dog food">Dog Food</option>
									</select>
								</div>

								<!-- l_loin loin_lb-->
								<div>
									<input id="l_loin" name="l_loin" type="checkbox">
									<label for="l_loin">Loin</label>

									<select id="loin_lb" name="loin_lb" >
										<option value="" disabled selected>Select</option>
										<option value="chops">Chops</option>
										<option value="french racks">French Racks</option>
										<option value="roast in half jointed">Roast in Half Jointed</option>
									</select>
								</div>

								<!-- l_leg leg_lb -->
								<div>
									<input id="l_leg" name="l_leg" type="checkbox">
									<label for="l_leg">Leg</label>

									<select id="leg_lb" name="leg_lb" >
										<option value="" disabled selected>Select</option>
										<option value="chops">Chops</option>
										<option value="roll">Roll</option>
										<option value="mutton ham">Mutton Ham</option>
										<option value="steak">Steak</option>
										<option value="roast half">Roast Half</option>
										<option value="roast third">Roast Third</option>
									</select>
								</div>

								<!-- order small goods and special instructions -->        
								<?php include("order-extra.php"); ?>
							
								<?php include get_parent_theme_file_path( '/inc/submitted.php' ); ?>

								<!-- next -->
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