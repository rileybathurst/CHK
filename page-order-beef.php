<?php
/*
 *  Template Name: order beef
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

						<!-- // TODO: theres a line break in the phone number make sure that can't happen with a span -->
						<?php the_content(); ?> <!-- always double check the code editor if there are issues with the columns -->

								

						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
							<fieldset class="run-the-stripes">

								<input type="hidden" name="action" value="orderbeefupdate">
								<input type="hidden" name="data" value="orderbeefupdateid"><!-- slightly different value to differentiate, not used -->
										
								<!-- use the url unid variable in the form to keep it on the same one -->
								<input type="hidden" name="unid" value="<?php echo $unid; ?>">
								
<div class="form-inline">
	<div>
	<h3>Mince</h3>
									<p>Customers will receive mince from trim and any other cuts selected as mince.</p>
			</div>
								</div>

								<!-- // TODO: remove the .form-inline and do it programitacally -->
								<div class="form-inline">
									<input id="b_fillet" type="checkbox" name="b_fillet" required checked>
									<label for="b_fillet">Fillet</label>
									<select name="fillet_bf" id="fillet_bf" required class="select-css">
										<option value="" disabled selected>Select</option>
										<option name="fillet_bf" value="steak">Steak</option>
										<option name="fillet_bf" value="whole">Whole</option>
										<option name="fillet_bf" value="half">Half</option>
										<option name="fillet_bf" value="third">Third</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_porterhouse" name="b_porterhouse" type="checkbox" required checked>
									<label for="b_porterhouse">Porterhouse</label>
									<select name="porterhouse_bf" id="porterhouse_bf" required>
										<option name="porterhouse_bf" value="" disabled selected>Select</option>
										<option name="porterhouse_bf" value="steak">Steak</option>
										<option name="porterhouse_bf" value="whole">Whole</option>
										<option name="porterhouse_bf" value="half">Half</option>
										<option name="porterhouse_bf" value="third">Third</option>
									</select>
								</div>

								<div class="form-inline">
										<input id="b_tbone" name="b_tbone" type="checkbox">
										<label for="b_tbone">T-Bone</label>
										<p>
											T-Bone is made up from the fillet and porterhouse, if you tick T-Bone they don&apos;t get fillet and porterhouse
									</p>
								</div>

								<div class="form-inline">
									<input id="b_ribeye" name="b_ribeye" type="checkbox" required checked>
									<label for="b_ribeye">Ribeye</label>
									<select name="ribeye_bf" id="ribeye_bf" required>
										<option name="ribeye_bf" value="" disabled selected>Select</option>
										<option name="ribeye_bf" value="steak">Steak</option>
										<option name="ribeye_bf" value="whole">Whole</option>
										<option name="ribeye_bf" value="half">Half</option>
										<option name="ribeye_bf" value="third">Third</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_rump" type="checkbox" name="b_rump" required checked>
									<label for="b_rump">Rump</label>
									<select name="rump_bf" id="rump_bf" required>
										<option name="rump_bf" value="" disabled selected>Select</option>
										<option name="rump_bf" value="steak">Steak</option>
										<option name="rump_bf" value="roast">Roast</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_topside" name="b_topside" type="checkbox" required checked>
									<label for="b_topside">Topside</label>
									<select name="topside_bf" id="topside_bf" required>
										<option name="topside_bf" value="" disabled selected>Select</option>
										<option name="topside_bf" value="steak">Steak</option>
										<option name="topside_bf" value="roast">Roast</option>
										<option name="topside_bf" value="schnitzel">Schnitzel</option>
										<option name="topside_bf" value="tenderized">Tenderized</option>
										<option name="topside_bf" value="mince">Mince</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_rolledroast" name="b_rolledroast" type="checkbox" required checked>
									<label for="b_rolledroast">Rolled Roast</label>
									<select name="rolledroast_bf" id="rolledroast_bf" required>
										<option name="rolledroast_bf" value="" disabled selected>Select</option>
										<option name="rolledroast_bf" value="mince">Mince</option>
										<option name="rolledroast_bf" value="rolled roast">Rolled Roast</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_weinerschnitzel" type="checkbox" name="b_weinerschnitzel" required checked>
									<label for="b_weinerschnitzel">Weiner Schnitzel</label>
									<select name="weinerschnitzel_bf" id="weinerschnitzel_bf" required>
										<option name="weinerschnitzel_bf" value="" disabled selected>Select</option>
										<option name="weinerschnitzel_bf" value="schnitzel">Schnitzel</option>
										<option name="weinerschnitzel_bf" value="steak">Steak</option>
										<option name="weinerschnitzel_bf" value="tenderised">Tenderised</option>
										<option name="weinerschnitzel_bf" value="mince">Mince</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_silverside" name="b_silverside" type="checkbox" required checked>
									<label for="b_silverside">Silverside</label>
									<select name="silverside_bf" id="silverside_bf" required>
										<option name="silverside_bf" value="" disabled selected>Select</option>
										<option name="silverside_bf" value="roast">Roast</option>
										<option name="silverside_bf" value="corned">Corned</option>
										<option name="silverside_bf" value="steak">Steak</option>
										<option name="silverside_bf" value="mince">Mince</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_blade" name="b_blade" type="checkbox" required checked>
									<label for="b_blade">Blade</label>
									<select name="blade_bf" id="blade_bf" required>
										<option name="blade_bf" value="" disabled selected>Select</option>
										<option name="blade_bf" value="steak">Steak</option>
										<option name="blade_bf" value="roast">Roast</option>
										<option name="blade_bf" value="tenderized">Tenderized</option>
										<option name="blade_bf" value="mince">Mince</option>
									</select>
								</div>

								<div class="form-inline">
									<p>When Blade is left as roast it becomes a bolar roast and when cut as a steak it’s just blade steak. <em>There are x2 Bolars on a body of beef.</em></p>
								</div>

								<div class="form-inline">
									<input id="b_shinfillet" name="b_shinfillet" type="checkbox" required checked>
									<label for="b_shinfillet">Shin Fillet</label>
									<select name="shinfillet_bf" id="shinfillet_bf" required>
										<option name="shinfillet_bf" value="" disabled selected>Select</option>
										<option name="shinfillet_bf" value="stew">Stew</option>
										<option name="shinfillet_bf" value="mince">Mince</option>
										<option name="shinfillet_bf" value="onthebone">On The Bone</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_chucksteak" name="b_chucksteak" type="checkbox" required checked>
									<label for="b_chucksteak">Chuck Steak</label>
									<select name="chucksteak_bf" id="chucksteak_bf" required>
										<option name="chucksteak_bf" value="" disabled selected>Select</option>
<!-- 										<option name="chucksteak_bf" value="chuckroast">Chuck Roast</option>
										<option name="chucksteak_bf" value="stew">Stew</option>
										<option name="chucksteak_bf" value="mince">Mince</option>
										<option name="chucksteak_bf" value="roast">Roast</option> -->
										<option name="chucksteak_bf" value="steak">Steak</option>
										<option name="chucksteak_bf" value="flat">Flat</option>
										<option name="chucksteak_bf" value="low and slow">Low and Slow</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_skirtsteak" name="b_skirtsteak" type="checkbox" required checked>
									<label for="b_skirtsteak">Skirt Steak</label>
									<select name="skirtsteak_bf" id="skirtsteak_bf" required>
										<option name="skirtsteak_bf" value="" disabled selected>Select</option>
										<option name="skirtsteak_bf" value="stew">Stew</option>
										<option name="skirtsteak_bf" value="mince">Mince</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_brisket" name="b_brisket" type="checkbox" required checked>
									<label for="b_brisket">Brisket</label>
									<select name="brisket_bf" id="brisket_bf" required>
										<option name="brisket_bf" value="" disabled selected>Select</option>
										<option name="brisket_bf" value="whole">Whole</option>
										<option name="brisket_bf" value="half">Half</option>
										<option name="brisket_bf" value="mince">Mince</option>
										<option name="brisket_bf" value="smoked brisket patties">Smoked Brisket Patties</option>
									</select>
								</div>

								<div class="form-inline">
									<input id="b_shortribs" name="b_shortribs" type="checkbox" required checked>
									<label for="b_shortribs">Short Ribs</label>
								</div>

								<div class="form-inline">
									<input id="b_smoker" name="b_smoker" type="checkbox" required checked>
									<label for="b_smoker">Alter cut to low and slow smoker style</label>
								</div>

								<div class="form-inline">
									<input id="b_assistance" name="b_assistance" type="checkbox" required checked>
									<label for="b_assistance">Need assistance, not sure if my cuts are correct</label>
								</div>

								<?php include("order-extra.php"); ?>

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
