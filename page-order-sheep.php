<?php
/*  
 *  Template Name: order sheep
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
                                    
                                    <input type="hidden" name="action" value="ordersheepupdate">
                                    <input type="hidden" name="data" value="ordersheepupdateid"><!-- slightly different value to differentiate, not used -->
                                    
                                    <!-- use the url unid variable in the form to keep it on the same one -->
                                    <input type="hidden" name="unid" value="<?php echo $unid; ?>">
                                
                                    <!-- l_shoulder shoulder_lb -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                                <input id="l_shoulder" name="l_shoulder" type="checkbox">
                                                <label for="l_shoulder">Shoulder</label>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="shoulder_lb" name="shoulder_lb" ><small class="error">If selected a choice is required.</small>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="chops">Chops</option>
                                                    <option value="roll">Roll</option>
                                                    <option value="seasoned">Seasoned</option>
                                                    <option value="jointed-whole">Jointed whole</option>
                                                    <option value="jointed-half">Jointed half</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- l_flaps flaps_lb -->
                                    <div class="row off-stripe">
                                        <div class="small-6 columns">
                                                <input id="l_flaps" name="l_flaps" type="checkbox">
                                                <label for="l_flaps">Flaps</label>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns"  id="flaps_lb" name="flaps_lb" >
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="strips">Strips</option>
                                                    <option value="roll">Roll</option>
                                                    <option value="seasoned">Seasoned</option>
                                                    <option value="dog food">Dog Food</option>
                                                    <option value="sausages">Sausages</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- l_loin loin_lb-->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                                <input id="l_loin" name="l_loin" type="checkbox">
                                                <label for="l_loin">Loin</label>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="loin_lb" name="loin_lb" >
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="chops">Chops</option>
                                                    <option value="french racks">French Racks</option>
                                                    <option value="roast in half jointed">Roast in Half Jointed</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- l_leg leg_lb -->
                                    <div class="row off-stripe">
                                        <div class="small-6 columns">
                                                <input id="l_leg" name="l_leg" type="checkbox">
                                                <label for="l_leg">Leg</label>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" id="leg_lb" name="leg_lb" >
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="chops">Chops</option>
                                                    <option value="roll">Roll</option>
                                                    <option value="mutton ham">Mutton Ham</option>
                                                    <option value="steak">Steak</option>
                                                    <option value="roast whole">Roast Whole</option>
                                                    <option value="roast half">Roast Half</option>
                                                    <option value="roast third">Roast Third</option>
                                            </select>
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