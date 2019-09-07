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
                                        <h4 class="button-banner">Beef Options</h4>
                                    </div>
                                </div>
                            </div>        

                        <!-- beef options -->     
                        <!-- b_fillet   fillet_bf -->   
                                <div class="row second-background">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_fillet == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_fillet" value="<?php echo $order->b_fillet; ?>">
                                            <strong>Fillet</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_fillet == 1) { 
                                                echo $order->fillet_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="fillet_bf" value="<?php echo $order->fillet_bf; ?>">
                                        </p>
                                     </div>
                                </div>

                        <!-- b_porterhouse    porterhouse_bf -->
                                <div class="row off-stripe">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_porterhouse == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_porterhouse" value="<?php echo $order->b_porterhouse; ?>">
                                            <strong>Porterhouse</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_porterhouse == 1) { 
                                                echo $order->porterhouse_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="porterhouse_bf" value="<?php echo $order->porterhouse_bf; ?>">
                                        </p>
                                     </div>
                                </div>

                        <!-- b_tbone -->
                                <div class="row second-background">
                                    <div class="small-12 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_tbone == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_tbone" value="<?php echo $order->b_tbone; ?>">
                                            <strong>T-Bone</strong>
                                        </p>
                                    </div>
                                </div>

                        <!-- b_ribeye    ribeye_bf -->
                                <div class="row off-stripe">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_ribeye == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_ribeye" value="<?php echo $order->b_ribeye; ?>">
                                            <strong>Ribeye</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_ribeye == 1) { 
                                                echo $order->ribeye_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="ribeye_bf" value="<?php echo $order->ribeye_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_rump    rump_bf -->
                                <div class="row second-background">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_rump == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_rump" value="<?php echo $order->b_rump; ?>">
                                            <strong>Rump</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_rump == 1) { 
                                                echo $order->rump_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="rump_bf" value="<?php echo $order->rump_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_topside    topside_bf -->
                                <div class="row off-stripe">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_topside == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_topside" value="<?php echo $order->b_topside; ?>">
                                            <strong>Topside</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_topside == 1) { 
                                                echo $order->topside_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="topside_bf" value="<?php echo $order->topside_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_rolledroast    rolledroast_bf -->
                                <div class="row second-background">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_rolledroast == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_rolledroast" value="<?php echo $order->b_rolledroast; ?>">
                                            <strong>Rolled Roast</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_rolledroast == 1) { 
                                            echo $order->rolledroast_bf;
                                                } else { echo ' '; } ?>
                                            <input type="hidden" name="rolledroast_bf" value="<?php echo $order->rolledroast_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_weinerschnitzel    weienerschnitzel_bf -->
                                <div class="row off-stripe">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_weinerschnitzel == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_weinerschnitzel" value="<?php echo $order->b_weinerschnitzel; ?>">
                                            <strong>Weiner Schnitzel</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_weinerschnitzel == 1) { 
                                                echo $order->weinerschnitzel_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="weinerschnitzel_bf" value="<?php echo $order->weinerschnitzel_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_silverside    silverside_bf -->
                                <div class="row second-background">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_silverside == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_silverside" value="<?php echo $order->b_silverside; ?>">
                                            <strong>Silverside</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_silverside == 1) { 
                                                echo $order->silverside_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="silverside_bf" value="<?php echo $order->silverside_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_blade    blade_bf -->
                                <div class="row off-stripe">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_blade == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_blade" value="<?php echo $order->b_blade; ?>">
                                            <strong>Blade</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_blade == 1) { 
                                                echo $order->blade_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="blade_bf" value="<?php echo $order->blade_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_shinfillet    shinfillet_bf -->
                                <div class="row second-background">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_shinfillet == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_shinfillet" value="<?php echo $order->b_shinfillet; ?>">
                                            <strong>Shinfillet</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_shinfillet == 1) { 
                                                echo $order->shinfillet_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="shinfillet_bf" value="<?php echo $order->shinfillet_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_chucksteak    chucksteak_bf -->
                                <div class="row off-stripe">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_chucksteak == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_chucksteak" value="<?php echo $order->b_chucksteak; ?>">
                                            <strong>Chucksteak</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_chucksteak == 1) { 
                                                echo $order->chucksteak_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="chucksteak_bf" value="<?php echo $order->chucksteak_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_skirtsteak    skirtsteak_bf -->
                                <div class="row second-background">
                                    <div class="small-6 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_skirtsteak == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_skirtsteak" value="<?php echo $order->b_skirtsteak; ?>">
                                            <strong>Skirtsteak</strong>
                                        </p>
                                    </div>
                                    <div class="small-6 columns capitalize">
                                        <p class="no-bottom">
                                            <?php if ($order->b_skirtsteak == 1) { 
                                                echo $order->skirtsteak_bf;
                                            } else { echo ' '; } ?>
                                            <input type="hidden" name="skirtsteak_bf" value="<?php echo $order->skirtsteak_bf; ?>">
                                        </p>
                                    </div>
                                </div>

                        <!-- b_mince -->
                                <div class="row off-stripe">
                                    <div class="small-12 columns">
                                        <p class="no-bottom">
                                            <?php if ($order->b_mince == 1) { ?>
                                                <span class="unicode check spacer">✓</span>
                                            <?php } else { ?>
                                                <span class="unicode cross spacer">✗</span>
                                            <?php } ?>
                                            <input type="hidden" name="b_mince" value="<?php echo $order->b_mince; ?>">
                                            <strong>Mince</strong>
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