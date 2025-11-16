<?php
/*
 *  Template Name: order deer
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

								<input type="hidden" name="action" value="orderdeerupdate">
								<input type="hidden" name="data" value="orderdeerupdateid"><!-- slightly different value to differentiate, not used -->

								<!-- use the url unid variable in the form to keep it on the same one -->
								<input type="hidden" name="unid" value="<?php echo $unid; ?>">

								<!-- deer fillet v_fillet fillet_v -->
								<div>
									<input  name="v_fillet" id="v_fillet" type="checkbox">
									<label for="v_fillet">Fillet</label>

									<select name="fillet_v" id="fillet_v" required>
										<option value="" disabled selected>Select</option>
										<option name="fillet_v" value="whole">Whole</option>
										<option name="fillet_v" value="mince">Mince</option>
									</select>
								</div>

								<!-- deer backstrap v_backstrap backstrap_v -->
								<div>
									<input  name="v_backstrap" id="v_backstrap" type="checkbox">
									<label for="v_backstrap">Backstrap</label>

									<select name="backstrap_v" id="backstrap_v" required>
										<option value="" disabled selected>Select</option>
										<option name="backstrap_v" value="whole">Whole</option>
										<option name="backstrap_v" value="half">Half</option>
										<option name="fillebackstrap_vt_v" value="mince">Mince</option>
									</select>
								</div>

								<!-- deer rump v_rump rump_v -->
								<div>
									<input  name="v_rump" id="v_rump" type="checkbox">
									<label for="v_rump">Rump * Staff suggestion is left whole or mince</label>
									<p>We can slice into steaks but cooks better in a piece.</p>

									<select name="rump_v" id="rump_v" required>
										<option value="" disabled selected>Select</option>
										<option name="rump_v" value="whole">Whole</option>
										<option name="rump_v" value="legs">Legs</option>
										<option name="rump_v" value="steak">Steak</option>
										<option name="rump_v" value="mince">Mince</option>
									</select>
								</div>

								<!-- v_shoulder shoulder_v -->
								<div>
									<input  name="v_shoulder" id="v_shoulder" type="checkbox">
									<label for="v_shoulder">Shoulders</label>

									<select name="shoulder_v" id="shoulder_v" required>
										<option value="" disabled selected>Select</option>
										<option name="shoulder_v" value="small goods">Small Goods</option>
										<option name="shoulder_v" value="mince">Mince</option>
										<option name="shoulder_v" value="rolled">Rolled</option>
										<option name="shoulder_v" value="stuffed rolled">Stuffed and Rolled</option>
									</select>
								</div>

								<!-- v_loin loin_v -->
								<div>
									<input  name="v_loin" id="v_loin" type="checkbox">
									<label for="v_loin">Loin</label>

									<select name="loin_v" id="loin_v" required>
										<option value="" disabled selected>Select</option>
										<option name="loin_v" value="backstraps whole">Backstraps Whole</option>
										<option name="loin_v" value="backstraps half">Backstraps Half</option>
										<option name="loin_v" value="backstraps thirds">Backstraps Thirds</option>
										<option name="loin_v" value="saddle chops">Saddle Chops</option>
									</select>
									<p>*Stuff may change cut size for portion control - that is for the backstrap options</p>
								</div>

								<!-- v_bellies bellies_v -->
								<div>
									<input  name="v_bellies" id="v_bellies" type="checkbox">
									<label for="v_bellies">Bellies</label>

									<select name="bellies_v" id="bellies_v" required>
										<option value="" disabled selected>Select</option>
										<option name="bellies_v" value="mince">Mince</option>
										<option name="bellies_v" value="small goods">Small Goods</option>
										<option name="bellies_v" value="ribs full bellies">Ribs - full bellies</option>
										<option name="bellies_v" value="oven bag ribs no marinate">Oven Bag Ribs - No Marinate</option>
										<option name="bellies_v" value="oven bag ribs bbq">Oven Bag Ribs - BBQ Marinate</option>
										<option name="bellies_v" value="oven bag ribs sweet and spicy">Oven Bag Ribs - Sweet and Spicy Marinate</option>
									</select>
								</div>

								<!-- v_leg leg_v -->
								<div>
									<input  name="v_leg" id="v_leg" type="checkbox">
									<label for="v_leg">Leg</label>

									<select name="leg_v" id="leg_v" required>
										<option value="" disabled selected>Select</option>
										<option name="leg_v" value="steaks standard">Steaks - Standard</option>
										<option name="leg_v" value="steaks bbq">Steaks Tenderised Marinated - BBQ</option>
										<option name="leg_v" value="steaks sweet and spicy">Steaks Tenderised Marinated - Sweet and Spicy</option>
										<option name="leg_v" value="chops">Chops</option>
										<option name="leg_v" value="roast whole">Roast Whole</option>
										<option name="leg_v" value="roast half">Roast Half</option>
									</select>
								</div>

								<!-- v_excess_trim excess_trim_v -->
								<div>
									<input  name="v_excess_trim" id="v_excess_trim" type="checkbox">
									<label for="v_excess_trim">Trim</label>

									<select name="excess_trim_v" id="excess_trim_v" required>
										<option value="" disabled selected>Select</option>
										<option name="excess_trim_v" value="mince">Mince</option>
										<option name="excess_trim_v" value="small goods">Small Goods</option>
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
