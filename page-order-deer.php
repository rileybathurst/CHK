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
									<input  name="v_filllet" id="v_filllet" type="checkbox">
									<label for="v_filllet">Fillet</label>

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
