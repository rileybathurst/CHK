<?php
/*  
 *  Template Name: order deer
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
                                    
                                    <input type="hidden" name="action" value="orderdeerupdate">
                                    <input type="hidden" name="data" value="orderdeerupdateid"><!-- slightly different value to differentiate, not used -->
                                    
                                    <!-- use the url unid variable in the form to keep it on the same one -->
                                    <input type="hidden" name="unid" value="<?php echo $unid; ?>">
                                   
                                    <!-- comes from original naming of venison -->
                            <!-- deer shoulder v_shoulder shoulder_v -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input  name="v_shoulder" id="v_shoulder" type="checkbox">
                                            <label for="v_shoulder">Shoulder</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select name="shoulder_v" id="shoulder_v" required><!-- select shouldnt have columns as it doesnt effect paddings -->
                                                <option value="" disabled selected>Select</option>
                                                <option name="shoulder_v" value="rolled">Rolled</option>
                                                <option name="shoulder_v" value="rolled seasoned">Rolled and Seasoned</option>
                                                <option name="shoulder_v" value="diced">Diced</option>
                                                <option name="shoulder_v" value="small goods">Small Goods</option>
                                                <option name="shoulder_v" value="mince">Mince</option>
                                            </select>
                                        </div><!-- columns -->
                                    </div><!-- row -->
                                    
                                <!-- deer Backstrap and fillets v_loin loin_v -->
                                    <div class="row off-stripe">
                                        <div class="small-6 columns">
                                            <input  name="v_loin" id="v_loin" type="checkbox">
                                            <label for="v_loin">Backstrap and Fillets</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select name="loin_v" id="loin_v" required>
                                                <option value="" disabled selected>Select</option>
                                                <option name="loin_v" value="saddle chops">Saddle Chops</option>
                                                <option name="loin_v" value="mince">Mince</option>
                                                <option name="loin_v" value="small goods">Small Goods</option>
                                            </select>
                                        </div><!-- columns -->
                                    </div><!-- row -->
            
                            <!-- deer leg v_leg leg_v -->
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><!-- this is needed except I should already have jquery so I'm not sure -->
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input id="v_leg" name="v_leg" type="checkbox">
                                            <label for="v_leg">Leg</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <div class="row">
                                                <div class="small-6 columns">
                                                    <select name="leg_v" id="leg_v">
                                                        <option value="" disabled selected>Select</option>
                                                        <option name="leg_v" value="leg roast">Leg Roast</option>
                                                        <option name="leg_v" value="leg primals">Leg Primal's</option>
                                                        <option name="leg_v" value="leg steaks">Leg Steaks</option>
                                                        <option name="leg_v" value="schnitzel">Schnitzel</option>
                                                        <option name="leg_v" value="mince">Mince</option>
                                                        <option name="leg_v" value="small goods">Small Goods</option>
                                                        <option name="leg_v" value="diced">Diced</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="small-6 columns">
                                                    <select name="v_leg_whole_half" id="v_leg_whole_half">
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <script>
                                        $(document).ready(function () {
                                            $("#leg_v").change(function () {
                                                var val = $(this).val();
                                                if (val == "leg roast") {
                                                    $("#v_leg_whole_half").html("<option value='whole'>Whole</option><option value='half'>Half</option>");
                                                } else if (val == "leg primals") {
                                                    $("#v_leg_whole_half").html("<option value='whole'>Whole</option><option value='half'>Half</option>");
                                                } else {
                                                    $("#v_leg_whole_half").html("<option value='v_leg_whole_half' disabled>NA</option>");
                                                }
                                            });
                                        });
                                    </script>
                                    
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