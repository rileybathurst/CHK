<?php
/*
 *  Template Name: order small goods
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

							<?php $orders = $wpdb->get_results("SELECT * FROM 'meatorders' WHERE unid = '$unid';");
								foreach ( $orders as $order ) { ?>

								<!-- take the animal through so it can confirm to the right one -->
								<input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
							
							<?php } ?>

							<h4>Sausages</h4>

							<p>Please give a minimum weight of 5kg to all sausages ordered.</p >
							<p>GF indicates Gluten Free</p>

							<hr>

							<!-- part of order-small-goods-....php -->

							<!-- sg_porkherb t_porkherb -->
							<div>
								<label for="sg_porkherb">Pork &amp; Herb <em>- GF</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_porkherb" name="t_porkherb" />
								<span class="postfix">KG</span><!-- this might be easier if I just rename it as its only a regular space left -->
							</div>	

								<!-- sg_lambmint t_lambmint -->
							<div>
								<label for="sg_lambmint">Lamb &amp; Mint <em>- GF</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_lambmint" name="t_lambmint" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_bratwurst t_bratwurst -->
							<div>
								<label for="sg_bratwurst">Bratwurst <em>- GF</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_bratwurst" name="t_bratwurst" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_bratwurst_fennel t_bratwurst_fennel -->   
							<div>
								<label for="sg_bratwurst_fennel">Bratwurst with Fennel<em>- GF</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_bratwurst_fennel" name="t_bratwurst_fennel" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_texan_chile t_texan_chile -->
							<div>
								<label for="sg_texan_chile">Texan Chile <em>- GF</em></label>	
								<input type="number" placeholder="5" pattern="\d*" id="t_texan_chile" name="t_texan_chile" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_chorizo t_chorizo -->
							<div>
								<label for="sg_chorizo">Chorizo <em>- GF</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_chorzio" name="t_chorizo" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_tomatobasil t_tomatobasil -->
							<div>
								<label for="sg_tomatobasil">Tomato &amp; Basil <em>- GF</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_tomatobasil" name="t_tomatobasil" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_herbgarlic t_herbgarlic -->
							<div>
								<label for="sg_herbgarlic">Herb &amp; Garlic <em>- GF</em></label>
								<input type="number" placeholder="5"  pattern="\d*" id="t_herbgarlic" name="t_herbgarlic" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_peppersonion t_peppersonion -->
							<div>
								<label for="sg_peppersonion">Green Capsicum &amp; Onion</label>
								<input type="number" placeholder="5" pattern="\d*" id="t_peppersonion" name="t_peppersonion" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_gf_capsicum t_gf_capsicum -->
							<div>
								<label for="sg_gf_capsicum">Green Capsicum &amp; Onion -<br /><em>Gluten Free</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_gf_capsicum" name="t_gf_capsicum" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_plain t_plain -->
							<div>
								<label for="sg_plain">Plain</label>
								<input type="number" placeholder="5" pattern="\d*" id="t_plain" name="t_plain" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_gf_plain t_gf_plain -->
							<div>
								<label for="sg_gf_plain">Plain - <em>Gluten Free</em></label>
								<input type="number" placeholder="5" pattern="\d*" id="t_gf_plain" name="t_gf_plain" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_saveloys t_saveloys -->
							<div>
								<label for="sg_saveloys">Saveloys -<em> Minimum of 8kg</em></label>
								<input type="number" placeholder="8" pattern="\d*" id="t_saveloys" name="t_saveloys" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_gf_saveloys t_gf_saveloys -->
							<div>
								<label for="sg_gf_saveloys">Saveloys - <em>Gluten Free</em> -<em> Minimum of 8kg</em></label>
								<input type="number" placeholder="8" pattern="\d*" id="t_gf_saveloys" name="t_gf_saveloys" />
								<span class="postfix">KG</span>
							</div>
	
							<hr>

							<h4>BUILD YOUR OWN</h4>
							<div>
								<p>Ideal for those with ideal allergies, dietary restrictions or those wishing to have something of their own involved in the flavour, all extra ingedients must be provided. <em>Minimum of 5kg</em><p>
							</div>

							<!-- sg_create t_create -->
							<div>
								<label for="sg_create">Build Your Own </label>
								<input type="number" placeholder="5" pattern="\d*" id="t_create" name="t_create" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>PATTIES</h4>

							<!-- sg_patties t_patties -->
							<div>
								<label for="sg_patties">Patties - <em>Minimum of 8kg</em></label>
								<input type="number" placeholder="8" pattern="\d*" id="t_patties" name="t_patties" />
								<span class="postfix">KG</span>
							</div>

							<!-- sg_gf-patties t_gf-patties -->
							<div>
								<label for="sg_gf_patties">Patties - <em>Gluten Free <br />- Minimum of 8kg</em></label>
								<input type="number" placeholder="8" pattern="\d*" id="t_gf_patties" name="t_gf_patties" />
								<span class="postfix">KG</span>
							</div>

							<hr>

							<h4>SALAMI</h4>

							<!-- sg_salami t_salami salami_t salami_s -->
							<div>
								<label for="sg_salami">Salami -<em> Minimum of 4 per flavour</em></label>
								<input type="number" placeholder="4" pattern="\d*" id="t_salami" name="t_salami" />

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

							<input type="submit" value="Submit">

						</fieldset>
					</form>

					<!-- extra jquery needed for validation -->        
					<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> <!-- I should definatley have jquery already -->
					<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
					<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

					<!-- validation of checked -->
					<script>
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
					</script>

				</article>

			<?php endwhile; // while have posts

			} ?><!-- if have posts -->

		</section><!-- container -->
	</main><!-- over-background main-border -->

	<?php get_sidebar(); ?> <!-- symantically this should be outside the main -->
	</div>
<?php get_footer(); ?>
