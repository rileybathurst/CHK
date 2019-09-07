<?php
/*  
 *  Template Name: order details
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
                            
                            <?php if ( is_user_logged_in() ) { ?>
                                <div class=""></div>
                            <?php } else { ?>
                            
                                <div class="row">
                                    <div class="small-12 columns">
                                        <p>Your currently not logged in, if you are these fields will automatically get filled in <a href="<?php echo home_url(); ?>/login">log in here</a></p>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            <!-- post -->
                            <div class="small-12 medium-8 large-12 columns end text-justify">
                                
                                <?php the_content(); ?>
    
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>
                                    
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                                    </div>
                                  
                                   <?php 
                                    // search for orders to bring back animal name -->
                                    $orders = $wpdb->get_results( 
                                            "SELECT * FROM meatorders WHERE unid = '$unid';"
                                        );
                                    foreach ( $orders as $order ) { ?>
                                    
                                    <input type="hidden" name="action" value="orderdetailsupdate">
                                    <input type="hidden" name="data" value="orderdetailsupdateid"><!-- slightly different value to differentiate, not used -->
                                    
                                    <!-- take the animal through so it can confirm to the right one -->
                                    <input type="hidden" name="animal" value="<?php echo $order->animal; ?>">
                                    
                                    <!-- close animal name -->
                                    <?php } ?>
                                    
                                    <!-- use the url unid variable in the form to keep it on the same one -->
                                    <input type="hidden" name="unid" value="<?php echo $unid; ?>">
                                
                                    <div class="row">
    
                                        <div class="small-12 columns show-for-small-only">
                                            <label for="name" class="inline">Full Name:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="name" class="text-right">Full Name:</label>
                                        </div>

                                        <div class="small-12 medium-9 columns">
                                            <input name="name" type="text" required id="name"
                                               <?php if ( is_user_logged_in() ) { ?>
                                                    value="<?php echo $current_user->display_name; ?>"
                                                <?php } else { ?>
                                                    placeholder="Joe Smith"
                                                <?php } ?>
                                            />
                                            
                                            <!-- error -->
                                            <small class="form-error">A full name is required.</small>
            
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="small-12 columns show-for-small-only">
                                            <label for="add1" class="inline">Address:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="right-label" class="text-right">Address:</label>
                                        </div>

                                        <div class="small-12 medium-9 columns">
                                            <input name="add1" type="text" required id="add1" 
                                                <?php if ( is_user_logged_in() ) { ?>
                                                    value="<?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?>"
                                                <?php } else { ?>
                                                    placeholder="26 Merton Road, RD 1, Rangiora 7471"
                                                <?php } ?>       
                                            /><small class="form-error">An address is required.</small>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="small-12 columns show-for-small-only">
                                            <label for="email" class="inline">email:</label>
                                        </div>

                                        <div class="small-3 columns show-for-medium">
                                            <label for="email" class="text-right">email:</label>
                                        </div>
                                        
                                        <div class="small-12 medium-9 columns">
                                            <input name="email" type="email" required  id="email"  
                                                <?php if ( is_user_logged_in() ) { ?>
                                                    value="<?php echo $current_user->user_email; ?>"
                                                <?php } else { ?>
                                                    placeholder="info@canterburyhomekill.co.nz"
                                                <?php } ?>       
                                            /><small class="form-error">An email address is required.</small>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="small-12 columns show-for-small-only">
                                            <label for="phone" class="inline">Phone:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="phone" class="text-right">Phone:</label>
                                        </div>

                                        <div class="small-12 medium-9 columns">
                                            <input name="phone" type="tel" required id="phone"
                                                <?php if ( is_user_logged_in() ) { ?>
                                                    value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
                                                <?php } else { ?>
                                                    placeholder="03 313 4771"
                                                <?php } ?>       
                                            ><small class="form-error">A phone number is required.</small>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="small-12 columns show-for-small-only">
                                            <label for="phone2" class="inline">Mobile:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="phone2" class="text-right">Mobile:</label>
                                        </div>

                                        <div class="small-12 medium-9 columns">
                                            <input name="phone2" type="tel" required id="phone2"
                                                <?php if ( is_user_logged_in() ) { ?>
                                                    value="<?php echo bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()); ?>"
                                                <?php } else { ?>
                                                    placeholder="0274 312 804"
                                                <?php } ?>       
                                            ><small class="form-error">A mobile phone number is required.</small>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="small-12 columns show-for-small-only">
                                            <label for="animal" class="inline">Animal:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="animal" class="text-right">Animal:</label>
                                        </div>

                                        <div class="small-12 medium-9 columns">
                                            <p><?php echo $order->animal; ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">

                                        <div class="small-12 columns show-for-small-only">
                                            <label for="amp" class="inline">Animal to be processed:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="amp" class="text-right">Animal to be processed:</label>
                                        </div>
                                        <div class="small-12 medium-9 columns">
                                            <textarea name="amp" type="text" required placeholder="Old heifer" id="amp"></textarea><small class="form-error">An animal has to be specified.</small>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="small-12 columns show-for-small-only">
                                            <label for="people" class="inline">Number of people to be packed for:</label>
                                        </div>

                                        <div class="medium-3 columns show-for-medium">
                                            <label for="people" class="text-right">Number of people to be packed for:</label>
                                        </div>

                                        <div class="small-12 medium-9 columns">
                                            <input type="number" placeholder="2 or more" required pattern="\d*" min="2" name="people" id="people"><small class="form-error">A number is required.</small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="small-12 columns">
                                            <button type="submit">Next Step</button>
                                        </div>
                                    </div>    
                                </form>
                    
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