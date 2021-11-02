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

								<!-- comes from original naming of venison -->
								<!-- deer shoulder v_shoulder shoulder_v -->
								<div>
									<input  name="v_shoulder" id="v_shoulder" type="checkbox">
									<label for="v_shoulder">Shoulder</label>

									<select name="shoulder_v" id="shoulder_v" required>
										<option value="" disabled selected>Select</option>
										<option name="shoulder_v" value="stew">Stew</option>
										<option name="shoulder_v" value="mince">Mince</option>
										<option name="shoulder_v" value="small goods">Small Goods</option>
										<option name="shoulder_v" value="roast">Roast</option>
										<option name="shoulder_v" value="smoked shoulder patties">Smoked Shoulder Patties</option>
									</select>
								</div>

								<!-- deer Backstrap and fillets v_loin loin_v -->
								<div>
									<input  name="v_loin" id="v_loin" type="checkbox">
									<label for="v_loin">Backstrap and Fillets</label>

									<select name="loin_v" id="loin_v" required>
										<option value="" disabled selected>Select</option>
										<option name="loin_v" value="saddle chops">Saddle Chops</option>
										<option name="loin_v" value="mince">Mince</option>
										<option name="loin_v" value="small goods">Small Goods</option>
									</select>
								</div>
			
								<!-- deer leg v_leg leg_v -->
								<div>
									<input id="v_leg" name="v_leg" type="checkbox">
									<label for="v_leg">Leg (Size option depends on choice)</label>
											
									<select name="leg_v" id="leg_v">
										<option value="" disabled selected>Select</option>
										<option name="leg_v" value="leg roast">Leg Roast</option><!-- options for whole / half -->
										<option name="leg_v" value="leg primals">Leg Primal's</option><!-- options for whole / half -->
										<option name="leg_v" value="leg steaks">Leg Steaks</option>
										<option name="leg_v" value="mince">Mince</option>
										<option name="leg_v" value="small goods">Small Goods</option>
										<option name="leg_v" value="bacon">Bacon</option>
										<option name="leg_v" value="corned primal">Corned Primal</option>
										<option name="leg_v" value="ham">Ham</option><!-- options for whole / half / third -->
									</select>
									
									<!-- this should only come up with leg roast, leg primals, ham -->
									<!-- written into /js/app.sj -->
									<select name="v_leg_whole_half" id="v_leg_whole_half" disabled>
										<option value="" disabled selected>Select</option>
										<option name="v_leg_whole_half" value="whole">whole</option>
										<option name="v_leg_whole_half" value="half">Half</option>
										<option name="v_leg_whole_half" id="v_leg_third" value="third">Third</option>
									</select>
								</div>

								<!-- <script>
									this is jquery so that needs to be removed and converted to js
									$(document).ready(function () {
										$("#leg_v").change(function () {
											var val = $(this).val();
											if (val == "leg roast") {
												$("#v_leg_whole_half").html("<option value='whole'>Whole</option><option value='half'>Half</option>");
											} else if (val == "leg primals") {
												$("#v_leg_whole_half").html("<option value='whole'>Whole</option><option value='half'>Half</option>");
											} else {
												$("#v_leg_whole_half").html("<option value='v_leg_whole_half' disabled>NA</option>");
											}
										});
									});
								</script> -->

								<!-- order small goods and special instructions -->        
								<?php include("order-extra.php"); ?>
							
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
