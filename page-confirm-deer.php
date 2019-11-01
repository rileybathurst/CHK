<?php
/*  
 *  Template Name: confirm deer
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
                                        <h4 class="button-banner">Deer Options</h4>
                                    </div>
                                </div>
                            </div>    
                                 
                            <ul class="no-bullet stripes">
                                 
                        <!-- deer options -->
                        <!-- v_shoulder --> 
                                <li>
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <p class="no-bottom">
                                                <?php if ($order->v_shoulder == 1) { ?>
                                                    <span class="unicode check spacer">✓</span>
                                                <?php } else { ?>
                                                    <span class="unicode cross spacer">✗</span>
                                                <?php } ?>
                                                <input type="hidden" name="v_shoulder" value="<?php echo $order->v_shoulder; ?>">
                                                <strong>Shoulder</strong>
                                            </p>
                                        </div>
                                        
                                        <div class="small-6 columns capitalize">
                                            <p class="no-bottom">
                                                <?php if ($order->v_shoulder == 1) { 
                                                    echo $order->shoulder_v;
                                                } else { echo ' '; } ?>
                                                <input type="hidden" name="shoulder_v" value="<?php echo $order->shoulder_v; ?>">
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            <!-- v_loin -->
                                <li>
                                    <div class="row off-stripe">
                                        <div class="small-6 columns">
                                            <p class="no-bottom">
                                                <?php if ($order->v_loin == 1) { ?>
                                                    <span class="unicode check spacer">✓</span>
                                                <?php } else { ?>
                                                    <span class="unicode cross spacer">✗</span>
                                                <?php } ?>
                                                <input type="hidden" name="v_loin" value="<?php echo $order->v_loin; ?>">
                                                <strong>Backstrap and Fillets</strong>
                                            </p>
                                        </div>
                                        
                                        <div class="small-6 columns capitalize">
                                            <p class="no-bottom">
                                                <?php if ($order->v_loin == 1) { 
                                                    echo $order->loin_v;
                                                } else { echo ' '; } ?>
                                                <input type="hidden" name="loin_v" value="<?php echo $order->loin_v; ?>">
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            <!-- v_leg -->
                                <li>
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <p class="no-bottom">
                                                <?php if ($order->v_leg == 1) { ?>
                                                    <span class="unicode check spacer">✓</span>
                                                <?php } else { ?>
                                                    <span class="unicode cross spacer">✗</span>
                                                <?php } ?>
                                                <input type="hidden" name="v_leg" value="<?php echo $order->v_leg; ?>">
                                                <strong>Leg</strong>
                                            </p>
                                        </div>
                                        
                                        <div class="small-3 columns capitalize">
                                            <p class="no-bottom">
                                                <?php if ($order->v_leg == 1) { 
                                                    echo $order->leg_v;
                                                } else { echo ' '; } ?>
                                                <input type="hidden" name="leg_v" value="<?php echo $order->leg_v; ?>">
                                            </p>
                                        </div>
                                        <div class="small-3 columns capitalize">
                                            <p class="no-bottom">
                                                <?php if ($order->v_leg == 1) { 
                                                    echo $order->v_leg_whole_half;
                                                } else { echo ' '; } ?>
                                                <input type="hidden" name="v_leg_whole_half" value="<?php echo $order->v_leg_whole_half; ?>">
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            <!-- spins -->
                                <li>
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
                                </li>

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