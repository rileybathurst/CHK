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
										<option name="shoulder_v" value="rolled">Rolled</option>
										<option name="shoulder_v" value="rolled seasoned">Rolled and Seasoned</option>
										<option name="shoulder_v" value="diced">Diced</option>
										<option name="shoulder_v" value="small goods">Small Goods</option>
										<option name="shoulder_v" value="mince">Mince</option>
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
									<label for="v_leg">Leg</label>
											
									<select name="leg_v" id="leg_v">
										<option value="" disabled selected>Select</option>
										<option name="leg_v" value="leg roast">Leg Roast</option>
										<option name="leg_v" value="leg primals">Leg Primal's</option>
										<option name="leg_v" value="leg steaks">Leg Steaks</option>
										<option name="leg_v" value="schnitzel">Schnitzel</option>
										<option name="leg_v" value="mince">Mince</option>
										<option name="leg_v" value="small goods">Small Goods</option>
										<option name="leg_v" value="diced">Diced</option>
									</select>
									
									<select name="v_leg_whole_half" id="v_leg_whole_half">
										<option value="">Select</option>
									</select>
								</div>

								<!-- <script>
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
