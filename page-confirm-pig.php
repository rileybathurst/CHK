<?php
/*  
 *  Template Name: confirm beef
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
            
                    // then search for orders -->
                    $orders = $wpdb->get_results( 
                            "
                            SELECT * 
                            FROM meatorders
                            WHERE unid = '$unid';
                            "
                        );
                        foreach ( $orders as $order ) 
                        {
                            ?>

                   
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php include("page-title.php"); ?>
                            
                            <!-- post -->
                        
                            <div class="row">
                                <div class="small-12 columns">
                                    <p class="drop">
                                        Please check all details thoroughly<br />
                                        A selected item will show with a &nbsp;<span class="unicode check spacer">✓</span><br />
                                        An un-selected item will show with a &nbsp;<span class="unicode cross spacer">✗</span>
                                    </p>
                                </div>
                            </div>

                            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="drop">
                                    
                                <input type="hidden" name="action" value="con1">
                                <input type="hidden" name="data" value="con1id"><!-- slightly different value to differentiate, not used -->

                                <!-- use the url unid variable in the form to keep it on the same one -->
                                <input type="hidden" name="unid" value="<?php echo $unid; ?>">

                                <!-- needed to show animal & date variable in email -->
                                <input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
                                <input type="hidden" name="timenow" value="<?php echo $order->timenow; ?>">

                            <!-- confirm details -->   
                                <?php include("confirm-details.php"); ?> 
                                
                                <div class="row">   
                                    <div class="small-12 columns">
                                        <div class="banner drop">
                                            <h4 class="button-banner">Pig Options</h4>
                                        </div>
                                    </div>
                                </div> 
                                
                                <hr>
                                
                    <!-- animal options -->    
                        <!-- SHOULDER -->
                        <div class="row">
                            <div class="small-12 columns">
                                <h3>Shoulder</h3>
                            </div>
                        </div>
                           
                    <!-- ps_rolledshoulder    rolledshoulder_ps -->    
                            <div class="row second-background">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_rolledshoulder == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_rolledshoulder" value="<?php echo $order->ps_rolledshoulder; ?>">
                                        <strong>Rolled Shoulder</strong>
                                    </p>
                                </div>
                                <div class="small-6 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_rolledshoulder == 1) { 
                                            echo $order->rolledshoulder_ps;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="rolledshoulder_ps" value="<?php echo $order->rolledshoulder_ps; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- ps_bacon -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_bacon == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_bacon" value="<?php echo $order->ps_bacon; ?>">
                                        <strong>Bacon</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- ps_pickledpork -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_pickledpork == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_pickledpork" value="<?php echo $order->ps_pickledpork; ?>">
                                        <strong>Pickledpork</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- ps_chops -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_chops == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_chops" value="<?php echo $order->ps_chops; ?>">
                                        <strong>Chops</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- ps_pressedham    pressedham_ps -->
                            <div class="row second-background">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_pressedham == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_pressedham" value="<?php echo $order->ps_pressedham; ?>">
                                        <strong>Pressed Ham</strong>
                                    </p>
                                </div>
                                <div class="small-6 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_pressedham == 1) { 
                                            echo $order->pressedham_ps;
                                        } else { echo ' '; } ?>
                                    <input type="hidden" name="pressedham_ps" value="<?php echo $order->pressedham_ps; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- ps_mince -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_mince == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_mince" value="<?php echo $order->ps_mince; ?>">
                                        <strong>Mince</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- ps_dicedpork -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_dicedpork == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_dicedpork" value="<?php echo $order->ps_dicedpork; ?>">
                                        <strong>Diced Pork</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- ps_roastjointed    roastjointed_ps -->   
                            <div class="row off-stripe">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_roastjointed == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="ps_roastjointed" value="<?php echo $order->ps_roastjointed; ?>">
                                        <strong>Roast Jointed</strong>
                                    </p>
                                </div>
                                <div class="small-6 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->ps_roastjointed == 1) { 
                                            echo $order->roastjointed_ps;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="roastjointed_ps" value="<?php echo $order->roastjointed_ps; ?>">
                                    </p>
                                </div>
                            </div>
                                
                                <hr>
                            
                    <!-- LOIN -->
                        <div class="row">
                            <div class="small-12 columns drop">
                                <h3>Loin</h3>
                            </div>
                        </div>

                    <!-- pl_chops -->
                        <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pl_chops == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pl_chops" value="<?php echo $order->pl_chops; ?>">
                                        <strong>Chops</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pl_loinsteaks -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pl_loinsteaks == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pl_loinsteaks" value="<?php echo $order->pl_loinsteaks; ?>">
                                        <strong>Loin Steaks</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pl_roastjointed    roastjointed_pl  -->  
                            <div class="row second-background">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pl_roastjointed == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pl_roastjointed" value="<?php echo $order->pl_roastjointed; ?>">
                                        <strong>Roast Jointed</strong>
                                    </p>
                                </div>
                                <div class="small-6 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pl_roastjointed == 1) { 
                                            echo $order->roastjointed_pl;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="roastjointed_pl" value="<?php echo $order->roastjointed_pl; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- pl_bacon -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pl_bacon == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pl_bacon" value="<?php echo $order->pl_bacon; ?>">
                                        <strong>Bacon</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pl_baconchops -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pl_baconchops == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pl_baconchops" value="<?php echo $order->pl_baconchops; ?>">
                                        <strong>Bacon Chops</strong>
                                    </p>
                                </div>
                            </div>
                                
                            <hr>

                    <!-- BELLY -->
                        <div class="row">
                            <div class="small-12 columns drop">
                                <h3>Belly</h3>
                            </div>
                        </div>

                    <!-- pb_bacon -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pb_bacon == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pb_bacon" value="<?php echo $order->pb_bacon; ?>">
                                        <strong>Bacon</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pb_baconstrips -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pb_baconstrips == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pb_baconstrips" value="<?php echo $order->pb_baconstrips; ?>">
                                        <strong>Bacon Strips</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pb_rolled -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pb_rolled == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pb_rolled" value="<?php echo $order->pb_rolled; ?>">
                                        <strong>Belly Bacon Rolled With Loin Bacon</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pb_whole    whole_pb -->
                            <div class="row off-stripe">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pb_whole == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pb_whole" value="<?php echo $order->pb_whole; ?>">
                                        <strong>Roast</strong>
                                    </p>
                                </div>
                                <div class="small-6 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pb_whole == 1) { 
                                            echo $order->whole_pb;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="whole_pb" value="<?php echo $order->whole_pb; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- pb_strips -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pb_strips == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pb_strips" value="<?php echo $order->pb_strips; ?>">
                                        <strong>Strips</strong>
                                    </p>
                                </div>
                            </div>
                                
                            <hr>

                    <!-- Leg -->
                            <div class="row">
                                <div class="small-12 columns drop">
                                    <h3>Leg</h3>
                                </div>
                            </div>

                    <!-- pg_hamonthebone  hamonthebone_cook hamonthebone_size --> 
                            <div class="row second-background">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_hamonthebone == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_hamonthebone" value="<?php echo $order->pg_hamonthebone; ?>">
                                        <strong>Ham On The Bone</strong>
                                    </p>
                                </div>
                                <div class="small-3 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_hamonthebone == 1) { 
                                            echo $order->hamonthebone_cook;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="hamonthebone_cook" value="<?php echo $order->hamonthebone_cook; ?>">
                                    </p>
                                </div>
                                <div class="small-3 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_hamonthebone == 1) { 
                                            echo $order->hamonthebone_size;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="hamonthebone_size" value="<?php echo $order->hamonthebone_size; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- pg_pressedham  pressedham_cook pressedham_size -->   
                            <div class="row off-stripe">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_pressedham == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_pressedham" value="<?php echo $order->pg_pressedham; ?>">
                                        <strong>Pressed Ham</strong>
                                    </p>
                                </div>
                                <div class="small-3 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_pressedham == 1) { 
                                            echo $order->pressedham_cook;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="pressedham_cook" value="<?php echo $order->pressedham_cook; ?>">
                                    </p>
                                </div>
                                <div class="small-3 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_pressedham == 1) { 
                                            echo $order->pressedham_size;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="pressedham_size" value="<?php echo $order->pressedham_size; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- pg_roast    roast_pg -->
                            <div class="row second-background">
                                <div class="small-6 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_roast == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_roast" value="<?php echo $order->pg_roast; ?>">
                                        <strong>Roast</strong>
                                    </p>
                                </div>
                                <div class="small-6 columns capitalize">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_roast == 1) { 
                                            echo $order->roast_pg;
                                        } else { echo ' '; } ?>
                                        <input type="hidden" name="roast_pg" value="<?php echo $order->roast_pg; ?>">
                                    </p>
                                </div>
                            </div>

                    <!-- pg_mince -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_mince == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_mince" value="<?php echo $order->pg_mince; ?>">
                                        <strong>Mince</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pg_diced -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_diced == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_diced" value="<?php echo $order->pg_diced; ?>">
                                        <strong>Diced</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pg_legsteaks -->
                            <div class="row off-stripe">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_legsteaks == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_legsteaks" value="<?php echo $order->pg_legsteaks; ?>">
                                        <strong>Leg Steaks</strong>
                                    </p>
                                </div>
                            </div>

                    <!-- pg_bacon -->
                            <div class="row second-background">
                                <div class="small-12 columns">
                                    <p class="no-bottom">
                                        <?php if ($order->pg_bacon == 1) { ?>
                                            <span class="unicode check spacer">✓</span>
                                        <?php } else { ?>
                                            <span class="unicode cross spacer">✗</span>
                                        <?php } ?>
                                        <input type="hidden" name="pg_bacon" value="<?php echo $order->pg_bacon; ?>">
                                        <strong>Bacon</strong>
                                    </p>
                                </div>
                            </div>  
                            
                        <!-- spins -->
                                <div class="row">
                                    <div class="small-12 columns drop">
                                        <p class="no-bottom">
                                            <em>
                                                Special instructions
                                            </em>
                                            <strong>
                                                <?php echo $order->spins; ?>
                                                <input type="hidden" name="spins" value="<?php echo $order->spins; ?>">
                                            </strong>
                                        </p>
                                    </div>
                                </div>

                        <?php include("confirm-small-goods.php"); ?>
                                    
                                    <input type="submit" value="Submit">
                                </form>
            
           

                        </div><!-- post -->

         <?php    } ?><!-- close off the open show this post -->
            
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