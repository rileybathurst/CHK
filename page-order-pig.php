<?php
/*
 *  Template Name: order pig
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

								<input type="hidden" name="action" value="orderpigupdate">
								<input type="hidden" name="data" value="orderpigupdateid"><!-- slightly different value to differentiate, not used -->
								
								<!-- use the url unid variable in the form to keep it on the same one -->
								<input type="hidden" name="unid" value="<?php echo $unid; ?>">
								
								<hr>
								
								<!-- shoulder -->
								<h4>Shoulder</h4>

								<p>There are two shoulders, if you want two options please check two boxes.</p>

								<!-- ps_rolledshoulder rolledshouder_ps  -->
								<div>
									<input id="ps_rolledshoulder" type="checkbox" name="ps_rolledshoulder">
									<label for="ps_rolledshoulder">Rolled Shoulder</label>
								
									<select name="rolledshoulder_ps" id="rolledshoulder_ps"> 
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
									</select>
								</div>

								<!-- ps_bacon --> 
								<div>
									<input id="ps_bacon" name="ps_bacon" type="checkbox"><label for="ps_bacon">Bacon</label>
								</div>

								<!-- ps_pickledpork -->
								<div>
									<input id="ps_pickledpork" name="ps_pickledpork" type="checkbox"><label for="ps_pickledpork">Pickled Pork</label>
								</div>

								<!-- ps_chops -->
								<div>
									<input id="ps_chops" name="ps_chops" type="checkbox"><label for="ps_chops">Chops</label>
								</div>

								<!-- ps_pressedham pressedham_ps -->
								<div>
									<input id="ps_pressedham" name="ps_pressedham" type="checkbox">
									<label for="ps_pressedham">Pressed Ham</label>

									<select id="pressedham_ps" name="pressedham_ps">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
										<option value="sliced">Sliced</option>
										<option value="ham steaks">Ham Steaks</option>
									</select>
								</div>

								<!-- ps_mince -->
								<div>
									<input id="ps_mince" name="ps_mince" type="checkbox"><label for="ps_mince">Mince</label>
								</div>

								<!-- ps_dicedpork  -->
								<div>
									<input id="ps_dicedpork" name="ps_dicedpork" type="checkbox"><label for="ps_dicedpork">Diced Pork</label>
								</div>

								<!-- ps_roastjointed roastjointed_ps -->
								<div>
									<input id="ps_roastjointed" name="ps_roastjointed" type="checkbox">
									<label for="ps_roastjointed">Roast Jointed</label>

									<select id="roastjointed_ps" name="roastjointed_ps">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
									</select>
								</div>

								<!-- ps_bostonbutt  -->
								<div>
									<input id="ps_bostonbutt" name="ps_bostonbutt" type="checkbox"><label for="ps_bostonbutt">Boston Butt - Pulled Pork</label>
								</div>

								<hr>

								<!-- LOIN -->
								<h4>LOIN</h4>

								<p>there are two loins, if you want two options please check two boxes.</p>
	
								<!-- pl_chops -->
								<div>
									<input id="pl_chops" name="pl_chops" type="checkbox"><label for="pl_chops">Chops</label>
								</div>

								<!-- pl_loinsteaks -->
								<div>
									<input id="pl_loinsteaks" name="pl_loinsteaks" type="checkbox"><label for="pl_loinsteaks">Loin Steaks</label>
								</div>

								<!--pl_roastjointed roastjointed_pl -->
								<div>
									<input id="pl_roastjointed" name="pl_roastjointed" type="checkbox">
									<label for="pl_roastjointed">Roast Jointed</label>
								
									<select id="roastjointed_pl" name="roastjointed_pl">
									<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
										<option value="sliced">Sliced</option>
										<option value="boneless">Boneless Roast</option>
									</select>
								</div>

								<!-- pl_bacon -->
								<div>
									<input id="pl_bacon" name="pl_bacon" type="checkbox"><label for="pl_bacon">Bacon</label>
								</div>

								<!-- pl_baconchops -->
								<div>
									<input id="pl_baconchops" name="pl_baconchops" type="checkbox"><label for="pl_baconchops">Bacon Chops</label>
								</div>

								<!-- pl_bellybacon -->
								<div>
									<input id="pl_bellybacon" name="pl_bellybacon" type="checkbox"><label for="pl_baconchops">Loin Belly Bacon</label>
								</div>

								<!-- pb_rolled -->
								<div>
									<input id="pb_rolled" name="pb_rolled" type="checkbox"><label for="pb_rolled">Belly Bacon Rolled With Loin Bacon</label>
								</div>

								<hr>

								<!-- BELLY -->
								<h4>BELLY</h4>

								<p>there are two bellies, if you want two options please check two boxes.</p>

								<!-- pb_bacon -->
								<div>
									<input id="pb_bacon" name="pb_bacon" type="checkbox"><label for="pb_bacon">Streaky Bacon</label>
								</div>

								<!-- pb_baconstrips -->
								<div>
									<input id="pb_baconstrips" name="pb_baconstrips" type="checkbox"><label for="pb_baconstrips">Bacon Strips</label>
								</div>

							<!-- pb_whole whole_pb - now labeled as roast -->
								<div>
									<input id="pb_whole" name="pb_whole" type="checkbox">
									<label for="pb_whole">Roast</label>

									<select id="whole_pb" name="whole_pb">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
										<option value="boneless">Bonless</option>
									</select>
								</div>

								<!-- pb_marinate marinate_pb -->
								<div>
									<input id="pb_marinate" name="pb_marinate" type="checkbox">
									<label for="pb_marinate">Roast</label>

									<select id="marinate_pb" name="marinate_pb">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
									</select>
								</div>

								<hr>

								<!-- LEG -->
								<h4>LEG</h4>

								<p>there are two legs, if you want two options please check two boxes.</p>

								<!-- pg_hameonthebone hamonthebone_cook hamonthebone_size -->
								<div>
									<input id="pg_hamonthebone" name="pg_hamonthebone" type="checkbox">
									<label for="pg_hamonthebone">Ham On The Bone</label>

									<select id="hamonthebone_cook" name="hamonthebone_cook">
										<option value="" disabled selected>Select</option>
										<option value="cooked">Cooked</option>
										<option value="raw">Raw</option>
									</select>
									<select class="small-6 columns" id="hamonthebone_size" name="hamonthebone_size">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
									</select>
								</div>

								<!-- pg_pressedham pressedham_cook pressedham_size -->
								<div>
									<input id="pg_pressedham" name="pg_pressedham" type="checkbox">
									<label for="pg_pressedham">Pressed Ham</label>

									<select class="small-6 columns" id="pressedham_cook" name="pressedham_cook">
										<option value="" disabled selected>Select</option>
										<option value="cooked">Cooked</option>
										<option value="raw">Raw</option>
									</select>
									<select class="small-6 columns" id="pressedham_size" name="pressedham_size">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
										<option value="sliced">Sliced</option>
										<option value="ham-steaks">Ham Steaks</option>
									</select>
								</div>

								<!-- pg_roast roast_pg -->
								<div>
									<input id="pg_roast" name="pg_roast" type="checkbox">
									<label for="pg_roast">Roast</label>

									<select id="roast_pg" name="roast_pg">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="half">Half</option>
										<option value="third">Third</option>
									</select>
								</div>

								<!-- pg_mince -->
								<div>
									<input id="pg_mince" name="pg_mince" type="checkbox"><label for="pg_mince">Mince</label>
								</div>

								<!-- pg_diced -->
								<div>
									<input id="pg_diced" name="pg_diced" type="checkbox"><label for="pg_diced">Diced</label>
								</div>

								<!-- pg_legsteaks -->
								<div>
									<input id="pg_legsteaks" name="pg_legsteaks" type="checkbox"><label for="pg_legsteaks">Leg Steaks</label>
								</div>

								<!-- pg_bacon -->
								<div>
									<input id="pg_bacon" name="pg_bacon" type="checkbox"><label for="pg_bacon">Bacon</label>
								</div>

								<!-- pg_hocks hocks_pg -->
								<div>
									<input id="pg_hocks" name="pg_hocks" type="checkbox">
									<label for="pg_hocks">Hocks</label>

									<select id="hocks_pg" name="hocks_pg">
										<option value="" disabled selected>Select</option>
										<option value="whole">Whole</option>
										<option value="mince">Mince</option>
										<option value="sausage">sausage</option>
										<option value="bacon">bacon</option>
									</select>
								</div>

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
