<?php
/*  
 *  Template Name: order declaration
 */ 
?>

<?php get_header(); ?>

<?php 
    //define variable for url bar .php?n=
    $animal = $_GET['a'];
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
                            <div class="small-12 columns medium-centered text-justify">
                                
                                <form data-abide action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                                    </div>
                                    
                                    <input type="hidden" name="action" value="declaration<?php echo $animal; ?>">
                                    <input type="hidden" name="data" value="declaration<?php echo $animal; ?>id"><!-- slightly different value to differentiate, not used -->
                                
                                    <div class="row">
                                        <div class="small-12 columns">

                                            <p>For Canterbury Homekill to be able to process your animal you must declare one the following</p>

                                            <hr>
                                            
                                            <h3>Ownership</h3>

                                            <ul class="no-bullet stripes">
                                                <li>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <input value="owner" name="declaration" id="DecOwner" type="radio" checked>
                                                            <label for="DecOwner">I declare that I am the owner of the animal material <em>And</em> I have been activeley involved in the day to day maintenance of the animal, including providing for the physical, health and behavaioral needs of the animal for at least 28 days.</label>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row second-background">
                                                        <div class="small-12 columns">
                                                            <input value="farmer" name="declaration" id="DecFarmer" type="radio">
                                                            <label for="DecFarmer">I am a farmer of animals of this kind.</label>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>    
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <input value="wild" name="declaration" id="DecWild" type="radio">
                                                            <label for="DecWild">This animal is wild game. <em>Which you do not need to be actively involved with.</em></label>
                                                         </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- small-12 columns --> 
                                    </div><!-- row -->

                                    <hr>
                                    
                                    <h3>Booking</h3>

                                    <ul class="no-bullet stripes">
                                        <li>
                                            <div class="row">
                                                <div class="small-12 columns">
                                                    <input id="confirm" name="confirm" type="checkbox" required>
                                                    <label for="confirm">I understand this is not a booking form. <em>I have already booked my animal in either by <a href="contact.php">email enquiry</a> or phone <a href="tel:03-313-4771">(03) 313 4771</a></em></label>
                                                    <span class="form-error">This field is required.</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="small-12 columns drop">
                                            <button type="submit" id="submit" name="submit">Next Step</button>
                                        </div>
                                    </div>    
                                </form>
                                
                                <?php the_content(); ?>
                    
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