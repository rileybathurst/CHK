<?php
/*
 *  Template Name: order small goods
 */
?>

<?php get_header(); ?>

<?php 
    //define variable for url bar .php?n=
    $unid = $_GET['n'];
?>

<div class="row over-background border drop" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

        <!-- Start the main container -->
        <div class="container" role="document">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 

                    $format = get_post_format();
                    get_template_part( 'format', $format );
                    ?>

                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php include("page-title.php"); ?>

                            <!-- post -->
                            <div class="small-12 medium-8 large-12 columns end text-justify">
                                
                                <p>All options, except T-Bone are required and if an option is selected with a choice avaliable it must be made.</p>
                                <p>If you don't understand an option feel free to <a href="contact.php">contact us</a> on <a href="tel:03-313-4771">(03) 313 4771</a></p>
                            
                        <!-- start form -->
    
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" id="small-order" method="post">
                                    
                                    <input type="hidden" name="action" value="ordersmallgoodsupdate">
                                    <input type="hidden" name="data" value="ordersmallgoodsupdateid"><!-- slightly different value to differentiate, not used -->
                                    
                                    <!-- use the url unid variable in the form to keep it on the same one -->
                                    <input type="hidden" name="unid" value="<?php echo $unid; ?>">
                                    
                                    <?php $orders = $wpdb->get_results("SELECT * FROM meatorders WHERE unid = '$unid';");
                                        foreach ( $orders as $order ) { ?>
                                    
                                        <!-- take the animal through so it can confirm to the right one -->
                                        <input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
                                    
                                    <?php } ?>
                                
                                    <div class="row">   
                                        <div class="small-12 columns">
                                            <div class="banner drop">
                                                <h4 class="button-banner">Sausages</h4>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="row">   
                                        <p class="small-12 columns">Please give a minimum weight of 5kg to all sausages ordered.</p >
                                        <p class="small-12 columns">GF indicates Gluten Free</p>
                                    </div>
                                    
                                    <hr>

                            <!-- part of order-small-goods-....php -->
                            <ul class="no-bullet stripes">        
                            
                                <!-- sg_porkherb t_porkherb -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_porkherb">Pork &amp; Herb <em>- GF</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_porkherb" name="t_porkherb" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>    

                                        <!-- sg_lambmint t_lambmint -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_lambmint">Lamb &amp; Mint <em>- GF</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_lambmint" name="t_lambmint" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- sg_bratwurst t_bratwurst -->   
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_bratwurst">Bratwurst <em>- GF</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_bratwurst" name="t_bratwurst" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <!-- sg_bratwurst_fennel t_bratwurst_fennel -->   
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_bratwurst_fennel">Bratwurst with Fennel<em>- GF</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_bratwurst_fennel" name="t_bratwurst_fennel" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_texan_chile t_texan_chile -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_texan_chile">Texan Chile <em>- GF</em></label>	
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_texan_chile" name="t_texan_chile" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_chorizo t_chorizo -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_chorizo">Chorizo <em>- GF</em></label>	
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                           <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_chorzio" name="t_chorizo" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                           </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_tomatobasil t_tomatobasil -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_tomatobasil">Tomato &amp; Basil <em>- GF</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_tomatobasil" name="t_tomatobasil" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_herbgarlic t_herbgarlic -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_herbgarlic">Herb &amp; Garlic <em>- GF</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5"  pattern="\d*" id="t_herbgarlic" name="t_herbgarlic" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_peppersonion t_peppersonion -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_peppersonion">Green Capsicum &amp; Onion</label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_peppersonion" name="t_peppersonion" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_gf_capsicum t_gf_capsicum -->
                                <li>
                                    <div class="row">   
                                        <div class="small-6 columns">
                                            <label for="sg_gf_capsicum">Green Capsicum &amp; Onion -<br /><em>Gluten Free</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_gf_capsicum" name="t_gf_capsicum" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_plain t_plain -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_plain">Plain</label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_plain" name="t_plain" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_gf_plain t_gf_plain -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_gf_plain">Plain - <em>Gluten Free</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_gf_plain" name="t_gf_plain" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_saveloys t_saveloys -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_saveloys">Saveloys -<em> Minimum of 8kg</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="8" pattern="\d*" id="t_saveloys" name="t_saveloys" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- sg_gf_saveloys t_gf_saveloys -->
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_gf_saveloys">Saveloys - <em>Gluten Free</em> -<em> Minimum of 8kg</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="8" pattern="\d*" id="t_gf_saveloys" name="t_gf_saveloys" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>    
         
                            <hr>

                             <div class="row">   
                                <div class="small-12 columns">
                                    <div class="banner drop">
                                        <h4 class="button-banner">BUILD YOUR OWN</h4>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="small-12 columns">
                                    <p>Ideal for those with ideal allergies, dietary restrictions or those wishing to have something of their own involved in the flavour, all extra ingedients must be provided. <em>Minimum of 5kg</em><p>
                                </div>
                            </div>
                              
                            <!-- sg_create t_create -->
                            <ul class="no-bullet stripes">
                                <li>
                                    <div class="row">
                                        <div class="small-6 columns">
                                            <label for="sg_create">Build Your Own </label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="5" pattern="\d*" id="t_create" name="t_create" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                                    
                            <hr>

                            <div class="row">   
                                <div class="small-12 columns">
                                    <div class="banner drop">
                                        <h4 class="button-banner">PATTIES</h4>
                                    </div>
                                </div>
                            </div> 

                            <!-- sg_patties t_patties -->
                            <ul class="no-bullet stripes">
                                <li>
                                    <div class="row">       
                                        <div class="small-6 columns">
                                            <label for="sg_patties">Patties - <em>Minimum of 8kg</em></label>
                                        </div>
                                        <div class="small-6 medium-4 large-3 columns right">
                                            <div class="row collapse postfix-radius">
                                                <div class="small-6 columns"><input type="number" placeholder="8" pattern="\d*" id="t_patties" name="t_patties" /></div>
                                                <div class="small-6 columns"><span class="postfix">KG</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <!-- sg_gf-patties t_gf-patties -->
                            <div class="row drop">       
                                <div class="small-6 columns">
                                    <label for="sg_gf_patties">Patties - <em>Gluten Free <br />- Minimum of 8kg</em></label>
                                </div>
                                <div class="small-6 medium-4 large-3 columns right">
                                    <div class="row collapse postfix-radius">
                                        <div class="small-6 columns"><input type="number" placeholder="8" pattern="\d*" id="t_gf_patties" name="t_gf_patties" /></div>
                                        <div class="small-6 columns"><span class="postfix">KG</span></div>
                                    </div>
                                </div>
                            </div>
                                    
                            <hr>

                            <div class="row">   
                                <div class="small-12 columns">
                                    <div class="banner drop">
                                        <h4 class="button-banner">SALAMI</h4>
                                    </div>
                                </div>
                            </div> 

                            <!-- sg_salami t_salami salami_t salami_s -->
                            <ul class="no-bullet stripes">
                                <li>
                                    <div class="row">
                                        <div class="row">
                                            <div class="small-12 columns">
                                                <div class="small-9 columns">
                                                    <label for="sg_salami">Salami -<em> Minimum of 4 per flavour</em></label>
                                                </div>

                                                <div class="small-3 columns right">
                                                    <div class="row collapse postfix-radius">
                                                        <div class="small-6 columns"><input type="number" placeholder="4" pattern="\d*" id="t_salami" name="t_salami" /></div>
                                                        <div class="small-6 columns"><span class="postfix">#</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="small-6 columns">      
                                            <select class="small-12 columns" id="salami_t" name="salami_t">
                                                <option value="" disabled selected>Select</option>
                                                <option value="pepperoni">Pepperoni</option>
                                                <option value="chilli">Chilli</option>
                                                <option value="danish-garlic">Danish Garlic</option>
                                            </select>
                                        </div>

                                        <div class="small-6 columns">
                                            <select class="small-12 columns end" id="salami_s" name="salami_s">
                                                <option value="" disabled selected>Select</option>
                                                <option value="strong">Strong</option>
                                                <option value="mild">Mild</option>
                                            </select>
                                        </div> 
                                    </div>
                                </li>
                            </ul>

                                    <div class="row">
                                        <div class="small-12 columns drop">
                                            <input type="submit" value="Submit">
                                        </div>
                                    </div>

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
                    
                            </div>

                        </div><!-- post -->

                    <?php endwhile; ?><!-- while have posts -->

                <?php else : ?>
                    <div class="row">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
                            <p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
                         </div><!--.entry-->
                    </div>

                <?php endif; ?><!-- if have posts -->
            
        </div><!-- container -->
        
        </div><!-- equilizer watch -->

    <?php get_sidebar(); ?>    
        
</div><!-- row -->
			
<?php get_footer(); ?>        