<?php
/*  
 *  Template Name: order pig
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
                            <div class="row">
                                <div class="small-12 medium-8 large-12 columns end text-justify">
                                
                                <p>If you don't understand an option feel free to <a href="contact.php">contact us</a><br />
                                on <a href="tel:03-313-4771">(03) 313 4771</a></p>
                                
                                </div>
                            </div>
                                
                        <!-- start form -->
    
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                                    </div>
                                    
                                    <input type="hidden" name="action" value="orderpigupdate">
                                    <input type="hidden" name="data" value="orderpigupdateid"><!-- slightly different value to differentiate, not used -->
                                    
                                    <!-- use the url unid variable in the form to keep it on the same one -->
                                    <input type="hidden" name="unid" value="<?php echo $unid; ?>">
                                    
                                    <hr>
                                
                                    <!-- shoulder -->
                                    <div class="row">   
                                        <div class="small-12 columns">
                                            <div class="banner drop">
                                                <h4 class="button-banner">Shoulder</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="small-12 columns">There are two shoulders, if you want two options please check two boxes.</p>
                                    </div>

                            <!-- ps_rolledshoulder rolledshouder_ps  -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input id="ps_rolledshoulder" type="checkbox" name="ps_rolledshoulder">
                                            <label for="ps_rolledshoulder">Rolled Shoulder</label>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="rolledshoulder_ps" id="rolledshoulder_ps"> 
                                                <option value="" disabled selected>Select</option>
                                                <option value="whole">Whole</option>
                                                <option value="half">Half</option>
                                                <option value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- ps_bacon --> 
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="ps_bacon" name="ps_bacon" type="checkbox"><label for="ps_bacon">Bacon</label>
                                        </div>
                                    </div>

                            <!-- ps_pickledpork -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="ps_pickledpork" name="ps_pickledpork" type="checkbox"><label for="ps_pickledpork">Pickled Pork</label>
                                        </div>
                                    </div>

                            <!-- ps_chops -->
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="ps_chops" name="ps_chops" type="checkbox"><label for="ps_chops">Chops</label>
                                        </div>
                                    </div>

                            <!-- ps_pressedham  pressedham_ps -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input id="ps_pressedham" name="ps_pressedham" type="checkbox">
                                            <label for="ps_pressedham">Pressed Ham</label>
                                        </div>

                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="pressedham_ps" name="pressedham_ps">
                                                <option value="" disabled selected>Select</option>
                                                <option value="whole">Whole</option>
                                                <option value="half">Half</option>
                                                <option value="third">Third</option>
                                                <option value="sliced">Sliced</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- ps_mince -->
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="ps_mince" name="ps_mince" type="checkbox"><label for="ps_mince">Mince</label>
                                        </div>
                                    </div>

                            <!-- ps_dicedpork  -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="ps_dicedpork" name="ps_dicedpork" type="checkbox"><label for="ps_dicedpork">Diced Pork</label>
                                        </div>
                                    </div>

                            <!-- ps_roastjointed    roastjointed_ps -->
                                    <div class="row off-stripe">
                                        <div class="small-6 columns">
                                            <input id="ps_roastjointed" name="ps_roastjointed" type="checkbox">
                                            <label for="ps_roastjointed">Roast Jointed</label>
                                        </div>

                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="roastjointed_ps" name="roastjointed_ps">
                                                <option value="" disabled selected>Select</option>
                                                <option value="whole">Whole</option>
                                                <option value="half">Half</option>
                                                <option value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <hr>

                            <!-- LOIN -->
                                   <div class="row off-stripe">   
                                        <div class="small-12 columns">
                                            <div class="banner drop">
                                                <h4 class="button-banner">LOIN</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="small-12 columns">there are two loins, if you want two options please check two boxes.</p>
                                    </div>

                            <!-- pl_chops -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="pl_chops" name="pl_chops" type="checkbox"><label for="pl_chops">Chops</label>
                                        </div>
                                    </div>

                            <!-- pl_loinsteaks -->
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="pl_loinsteaks" name="pl_loinsteaks" type="checkbox"><label for="pl_loinsteaks">Loin Steaks</label>
                                        </div>
                                    </div>

                            <!--pl_roastjointed roastjointed_pl -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input id="pl_roastjointed" name="pl_roastjointed" type="checkbox">
                                            <label for="pl_roastjointed">Roast Jointed</label>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="roastjointed_pl" name="roastjointed_pl">
                                                <option value="" disabled selected>Select</option>
                                                <option value="whole">Whole</option>
                                                <option value="half">Half</option>
                                                <option value="third">Third</option>
                                                <option value="sliced">Sliced</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- pl_bacon -->
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="pl_bacon" name="pl_bacon" type="checkbox"><label for="pl_bacon">Bacon</label>
                                        </div>
                                    </div>

                            <!-- pl_baconchops -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="pl_baconchops" name="pl_baconchops" type="checkbox"><label for="pl_baconchops">Bacon Chops</label>
                                        </div>
                                    </div>
                                    
                                    <hr>

                            <!-- BELLY -->
                                    <div class="row off-stripe">   
                                        <div class="small-12 columns">
                                            <div class="banner drop">
                                                <h4 class="button-banner">BELLY</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="small-12 columns">there are two bellies, if you want two options please check two boxes.</p>
                                    </div>

                            <!-- pb_bacon -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="pb_bacon" name="pb_bacon" type="checkbox"><label for="pb_bacon">Streaky Bacon</label>
                                        </div>
                                    </div>

                            <!-- pb_baconstrips -->
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="pb_baconstrips" name="pb_baconstrips" type="checkbox"><label for="pb_baconstrips">Bacon Strips</label>
                                        </div>
                                    </div>

                            <!-- pb_rolled -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="pb_rolled" name="pb_rolled" type="checkbox"><label for="pb_rolled">Belly Bacon Rolled With Loin Bacon</label>
                                        </div>
                                    </div>

                            <!-- pb_whole   whole_pb  - now labeled as roast -->
                                    <div class="row off-stripe">    
                                        <div class="small-6 columns">
                                            <input id="pb_whole" name="pb_whole" type="checkbox">
                                            <label for="pb_whole">Roast</label>
                                        </div>

                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="whole_pb" name="whole_pb">
                                                <option value="" disabled selected>Select</option>
                                                <option value="whole">Whole</option>
                                                <option value="half">Half</option>
                                                <option value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- pb_strips -->
                                    <div class="row second-background">
                                        <div class="small-12 columns">
                                            <input id="pb_strips" name="pb_strips" type="checkbox"><label for="pb_strips">Strips</label>
                                        </div>
                                    </div>
                                    
                                    <hr>

                            <!-- LEG -->            
                                    <div class="row">   
                                        <div class="small-12 columns">
                                            <div class="banner drop">
                                                <h4 class="button-banner">LEG</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="small-12 columns">there are two legs, if you want two options please check two boxes.</p>
                                    </div>

                            <!-- pg_hameonthebone hamonthebone_cook hamonthebone_size -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input id="pg_hamonthebone" name="pg_hamonthebone" type="checkbox">
                                            <label for="pg_hamonthebone">Ham On The Bone</label>
                                        </div>

                                        <div class="small-6 columns">
                                            <select class="small-6 columns" id="hamonthebone_cook" name="hamonthebone_cook">
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
                                    </div>

                            <!-- pg_pressedham pressedham_cook pressedham_size -->
                                    <div class="row off-stripe">
                                        <div class="small-6 columns">
                                            <input id="pg_pressedham" name="pg_pressedham" type="checkbox">
                                            <label for="pg_pressedham">Pressed Ham</label>
                                        </div>

                                        <div class="small-6 columns">
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
                                    </div>

                            <!-- pg_roast   roast_pg -->
                                    <div class="row second-background">    
                                        <div class="small-6 columns">
                                            <input id="pg_roast" name="pg_roast" type="checkbox">
                                            <label for="pg_roast">Roast</label>
                                        </div>

                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="roast_pg" name="roast_pg">
                                                <option value="" disabled selected>Select</option>
                                                <option value="whole">Whole</option>
                                                <option value="half">Half</option>
                                                <option value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- pg_mince -->
                                    <div class="row off-stripe">
                                        <div class="small-12 columns">
                                            <input id="pg_mince" name="pg_mince" type="checkbox"><label for="pg_mince">Mince</label>
                                        </div>
                                    </div>

                            <!-- pg_diced -->
                                    <div class="row second-background">       
                                        <div class="small-12 columns">
                                            <input id="pg_diced" name="pg_diced" type="checkbox"><label for="pg_diced">Diced</label>
                                        </div>
                                    </div>

                            <!-- pg_legsteaks -->
                                    <div class="row off-stripe">    
                                        <div class="small-12 columns">
                                            <input id="pg_legsteaks" name="pg_legsteaks" type="checkbox"><label for="pg_legsteaks">Leg Steaks</label>
                                        </div>
                                    </div>

                            <!-- pg_bacon -->
                                    <div class="row second-background">   
                                        <div class="small-12 columns">
                                            <input id="pg_bacon" name="pg_bacon" type="checkbox"><label for="pg_bacon">Bacon</label>
                                        </div>
                                    </div>   

                            <!-- order small goods and special instructions -->        
                                    <?php include("order-extra.php"); ?>
                            
                            <!-- next -->
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <button type="submit" id="add" name="add">Next Step</button>
                                        </div>
                                    </div>

                                </form>
                                
                        </div><!-- small-12 columns -->

                    <?php endwhile; ?><!-- while have posts -->

                <?php else : ?>
                    <div class="row">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
                            <p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
                         </div><!--.entry-->
                    </div><!-- else row -->

                <?php endif; ?><!-- if have posts -->
            
            </div><!-- container -->
        
        </div><!-- equilizer watch -->

    <?php get_sidebar(); ?>
        
</div><!-- row -->

<?php get_footer(); ?>        