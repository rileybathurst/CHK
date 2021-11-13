<?php
/*
 *  Template Name: order small goods
 * The sg_ have been removed as there is no checkbox its just a weight
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

						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" id="small-order" method="post">
							<fieldset class="run-the-stripes">

							<input type="hidden" name="action" value="ordersmallgoodsupdate">
							<input type="hidden" name="data" value="ordersmallgoodsupdateid"><!-- slightly different value to differentiate, not used -->

							<!-- use the url unid variable in the form to keep it on the same one -->
							<input type="hidden" name="unid" value="<?php echo $unid; ?>">

							<?php $orders = $wpdb->get_results("SELECT * FROM meatorders WHERE unid = '$unid';");
								foreach ( $orders as $order ) { ?>

								<!-- take the animal through so it can confirm to the right one -->
								<input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
							
							<?php } ?>

							<h4>Sausages</h4>

							<p>Please give a minimum weight of 5kg to all sausages ordered.</p >
							<p>GF indicates Gluten Free</p>

							<hr>

							<!-- part of order-small-goods php -->

							<!-- t_porkherb -->
							<div>
								<label for="t_porkherb">Pork &amp; Herb <em>- GF</em></label>
								<input type="number" pattern="\d*" id="t_porkherb" name="t_porkherb" />
								<span class="postfix">KG</span><!-- this might be easier if I just rename it as its only a regular space left -->
							</div>	

								<!-- t_lambmint -->
							<div>
								<label for="t_lambmint">Lamb &amp; Mint <em>- GF</em></label>
								<input type="number" pattern="\d*" id="t_lambmint" name="t_lambmint" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_bratwurst -->
							<div>
								<label for="t_bratwurst">Bratwurst <em>- GF</em></label>
								<input type="number" pattern="\d*" id="t_bratwurst" name="t_bratwurst" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_bratwurst_fennel -->
							<div>
								<label for="t_bratwurst_fennel">Bratwurst with Fennel<em>- GF</em></label>
								<input type="number" pattern="\d*" id="t_bratwurst_fennel" name="t_bratwurst_fennel" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_texan_chile -->
							<div>
								<label for="t_texan_chile">Texan Chile <em>- GF</em></label>	
								<input type="number" pattern="\d*" id="t_texan_chile" name="t_texan_chile" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_texan_chilli_cheese -->
							<div>
								<label for="t_texan_chilli_cheese">Texan Chilli – smoked with cheese</label>	
								<input type="number" pattern="\d*" id="t_texan_chilli_cheese" name="t_texan_chilli_cheese" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_chorizo -->
							<div>
								<label for="t_chorizo">Chorizo <em>- GF</em></label>
								<input type="number" pattern="\d*" id="t_chorzio" name="t_chorizo" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_tomatobasil -->
							<div>
								<label for="t_tomatobasil">Tomato &amp; Basil <em>- GF</em></label>
								<input type="number" pattern="\d*" id="t_tomatobasil" name="t_tomatobasil" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_herbgarlic -->
							<div>
								<label for="t_herbgarlic">Herb &amp; Garlic <em>- GF</em></label>
								<input type="number"  pattern="\d*" id="t_herbgarlic" name="t_herbgarlic" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_peppersonion -->
							<div>
								<label for="t_peppersonion">Green Capsicum &amp; Onion</label>
								<input type="number" pattern="\d*" id="t_peppersonion" name="t_peppersonion" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_gf_capsicum -->
							<div>
								<label for="t_gf_capsicum">Green Capsicum &amp; Onion -<br /><em>Gluten Free</em></label>
								<input type="number" pattern="\d*" id="t_gf_capsicum" name="t_gf_capsicum" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_steak_onion -->
							<div>
								<label for="t_steak_onion">Steak and Onion</label>
								<input type="number" pattern="\d*" id="t_steak_onion" name="t_steak_onion" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_manuka_honey_hickory -->
							<div>
								<label for="t_manuka_honey_hickory">Manuka Honey and Hickory</label>
								<input type="number" pattern="\d*" id="t_manuka_honey_hickory" name="t_manuka_honey_hickory" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_old_english -->
							<div>
								<label for="t_old_english">Old English</label>
								<input type="number" pattern="\d*" id="t_old_english" name="t_old_english" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_boerewors -->
							<div>
								<label for="t_boerewors">Boerewors</label>
								<input type="number" pattern="\d*" id="t_boerewors" name="t_boerewors" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_cheese_krnasky -->
							<div>
								<label for="t_cheese_krnasky">Cheese Kransky - smoked</label>
								<input type="number" pattern="\d*" id="t_cheese_krnasky" name="t_cheese_krnasky" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_plain -->
							<div>
								<label for="t_plain">Plain - Bulk</label>
								<input type="number" pattern="\d*" id="t_plain" name="t_plain" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_gf_plain -->
							<div>
								<label for="t_gf_plain">Plain - <em>Gluten Free</em></label>
								<input type="number" pattern="\d*" id="t_gf_plain" name="t_gf_plain" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_saveloys -->
							<div>
								<label for="t_plain">Saveloys</label>
								<input type="number" pattern="\d*" id="t_saveloys" name="t_saveloys" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_hogg_casing -->
							<div>
								<p>All small goods are made with collagen casings, hogg casings are available at $1.50 per kg additional charge</p>
								<label for="sg_hogg_casing">Hogg Casings</label>
								<input type="checkbox" id="sg_hogg_casing" name="sg_hogg_casing" />
							</div>

							<!-- sg_gormet_cheese -->
							<div>
								<label for="sg_gormet_cheese">Add cheese to gourmet sausages - <br/><em>additional $1.50 per kg</em></label>
								<input type="checkbox" id="sg_gormet_cheese" name="sg_gormet_cheese" />
							</div>
	
							<hr>

							<h4>BUILD YOUR OWN</h4>
							<div>
								<p>Ideal for those with ideal allergies, dietary restrictions or those wishing to have something of their own involved in the flavour, all extra ingedients must be provided. <em>Minimum of 5kg</em><p>
							</div>

							<!-- t_create -->
							<div>
								<label for="t_create">Build Your Own </label>
								<input type="number" pattern="\d*" id="t_create" name="t_create" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>PATTIES</h4>

							<!-- t_patties -->
							<div>
								<label for="t_patties">Patties - <em>Minimum of 8kg</em></label>
								<input type="number" pattern="\d*" id="t_patties" name="t_patties" />
								<span class="postfix">KG</span>
							</div>

							<!-- t_gf_patties -->
							<div>
								<label for="t_gf_patties">Patties - <em>Gluten Free <br />- Minimum of 8kg</em></label>
								<input type="number" pattern="\d*" id="t_gf_patties" name="t_gf_patties" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>SALAMI</h4>

							<!-- t_salami salami_t salami_s -->
							<div>
								<label for="t_salami">Salami -<em> Minimum of 4 per flavour</em></label>
								<input type="number" pattern="\d*" id="t_salami" name="t_salami" />

								<select id="salami_t" name="salami_t">
									<option value="" disabled selected>Select</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="chilli">Chilli</option>
									<option value="danish-garlic">Danish Garlic</option>
								</select>
							
								<select id="salami_s" name="salami_s">
									<option value="" disabled selected>Select</option>
									<option value="strong">Strong</option>
									<option value="mild">Mild</option>
								</select>
							</div>

							<hr>

							<h4>CHEERIO</h4>

							<!-- t_cheerio -->
							<div>
								<label for="t_cheerio">Cheerio</label>
								<input type="number" pattern="\d*" id="t_cheerio" name="t_cheerio" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>FRANKFURTER</h4>

							<!-- t_frankfurter -->
							<div>
								<label for="t_frankfurter">Frankfurter</label>
								<input type="number" pattern="\d*" id="t_frankfurter" name="t_frankfurter" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>BIERSTICKS</h4>

							<!-- t_biersticks -->
							<div>
								<label for="t_biersticks"><em>Minimum order 5kg</em></label>
								<input type="number" pattern="\d*" id="t_biersticks" name="t_biersticks" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>RISSOLES</h4>

							<!-- t_rissoles rissoles_t -->
							<div>
								<label for="t_rissoles">
								crumbed and hand rolled<br />
								<em> Minimum order of 5kg</em>
								</label>
								<input type="number" pattern="\d*" id="t_rissoles" name="t_rissoles" />
								<span class="postfix">KG</span>

								<select id="rissoles_t" name="rissoles_t">
									<option value="" disabled selected>Select</option>
									<option value="pork-pineapple">Pork and Pineapple</option>
									<option value="bacon-onion">Bacon and Onion</option>
									<option value="steak-onion">Steak and Onion</option>
									<option value="venison-bacon-onion">Venison, Bacon and Onion</option>
								</select>

								<hr /> 

								<h4>KOFTAS</h4>

								<!-- t_koftas -->
								<div>
									<label for="t_koftas">Beef, Lamb and Venison only</label>
									<input type="number" pattern="\d*" id="t_koftas" name="t_koftas" />
									<span class="postfix">KG</span>
								</div>

								<hr>

							<input type="submit" value="Submit">

						</fieldset>
					</form>

					<!-- extra jquery needed for validation -->        
					<!-- I should definatley have jquery already -->
					<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
					<!-- <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script> -->
					<!-- <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script> -->

					<!-- validation of checked -->
					<!-- the checkboxes have been removed so this no longer does anything -->
					<!-- <script>
						// validates only if selected when checked
						jQuery.validator.setDefaults();
						$( "#small-order" ).validate({
						rules: {
							// sg_porkherb t_porkherb
							t_porkherb: { required: "#sg_porkherb:checked" },
							// sg_lambmint t_lambmint
							t_lambmint: { required: "#sg_lambmint:checked" },
							// sg_bratwurst t_bratwurst
							t_bratwurst: { required: "#sg_bratwurst:checked" },
							// sg_texan_chile t_texan_chile
							t_texan_chile: { required: "#sg_texan_chile:checked" },
							// sg_chorizo t_chorizo
							t_chorizo: { required: "#sg_chorizo:checked" },
							// sg_tomatobasil t_tomatobasil
							t_tomatobasil: { required: "#sg_tomatobasil:checked" },
							// sg_herbgarlic t_herbgarlic
							t_herbgarlic: { required: "#sg_herbgarlic:checked" },
							// sg_peppersonion t_peppersonion
							t_peppersonion: { required: "#sg_peppersonion:checked" },
							// sg_gf_capsicum t_gf_capsicum
							t_gf_capsicum: { required: "#sg_gf_capsicum:checked" },
							// sg_plain t_plain
							t_plain: { required: "#sg_plain:checked" },
							// sg_gf_plain t_gf_plain
							t_gf_plain: { required: "#sg_gf_plain:checked" },
							// sg_saveloys t_saveloys
							t_saveloys: { required: "#sg_saveloys:checked" },
							// sg_create t_create
							t_create: { required: "#sg_create:checked" },
							// sg_patties t_patties
							t_patties: { required: "#sg_patties:checked" },
							// sg_gf_patties t_gf_patties
							t_gf_patties: { required: "#sg_gf_patties:checked" },
							// sg_salami t_salami salami_t salami_s
							t_salami: { required: "#sg_salami:checked" },
							salami_t: { required: "#sg_salami:checked" },
							salami_s: { required: "#sg_salami:checked" }
							}
						});
					</script> -->

				</article>

			<?php endwhile; // while have posts

			} ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
	</div>
<?php get_footer(); ?>
