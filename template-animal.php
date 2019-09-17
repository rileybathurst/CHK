<?php
/*  
 *  Template Name: animal
 */ 
?>

<?php get_header(); ?>

<div class="row over-background border drop" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

        <!-- Start the main container -->
        <div class="container" role="document">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 

                    $format = get_post_format();
                    get_template_part( 'format', $format );
                    ?>

                    <div class="row">
                        <div class="small-12 columns">
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner drop fall">
                                            <h2 class="flagbuttonbanner featured-title">Featured:</h2>
                                            <h2 class="flagbuttonbanner category-title"><?php the_title(); ?></h2>
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="small-12 columns drop">
                                        <hr>
                                        <p>All price are plus GST.</p>
                                    </div>
                                </div>

                                <?php the_content(); ?>
                                
                                <!-- small goods -->
                                   
                                <div class="row">
                                    <div class="small-12 columns">
                                        <hr>
                                        <h3 class="drop">Small Goods</h3>
                                    </div>
                                </div>

                                <ul class="no-bullet stripes">
                                    <li>
                                        <div class="row">
                                            <div class="small-3 columns">
                                                <a href="<?php echo home_url('/'); ?>small-goods">Check here</a>
                                            </div>
                                            <div class="small-1 columns stripe-breaker">|</div>
                                            <div class="small-8 columns">for small goods prices</div>
                                        </div>
                                    </li>
                                </ul>

                            <!-- offal -->
                                <div class="row">
                                    <div class="small-12 columns drop">
                                        <hr>
                                        <h3>Offal</h3>
                                    </div>
                                </div>

                                <ul class="no-bullet stripes">
                                    <li>
                                        <div class="row">
                                            <div class="small-3 columns">
                                                $5
                                            </div>
                                            <div class="small-1 columns stripe-breaker">|</div>
                                            <div class="small-8 columns">processed &amp; packaged per animal</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="small-3 columns">
                                                No charge
                                            </div>
                                            <div class="small-1 columns stripe-breaker">|</div>
                                            <div class="small-8 columns">collected and left on property in customer container</div>
                                        </div>
                                    </li>
                                </ul>    

                            <!-- bookings 
                                <div class="row">
                                    <div class="small-12 columns">
                                        <h3>Bookings</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="small-11 columns small-push-1">
                                        <p>For Canterbury Homekill to take an order we first need to have the animal booked in, this can be done through our <a href="<?php echo home_url(); ?>/booking">booking form</a> or phone <a href="tel:03-313-4771">(03) 313 4771</a></p>

                                        <h4><a href="<?php echo home_url(); ?>/booking" class="button">BOOKING FORM</a></h4>

                                        <p>Once your animal is booked in you must get your order in the day your animal is killed.</p>
                                    </div>
                                </div> -->

                                <!-- order -->

                                <!-- remove spaces from the page title needed for the next url -->
                                <?php 
                                    $str = get_the_title(); 
                                    $str=preg_replace('/\s+/', '', $str); // this is a sketchy way of overwritting a variable with the same name?
                                ?>

                                <h4 class="small-push-1"><a href="<?php echo home_url(); ?>/order-declaration/?a=<?php echo $str; ?>" class="button">Order</a></h4>


                            </div><!-- post -->
                        </div>
                    </div><!-- row -->

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