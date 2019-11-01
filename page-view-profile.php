<?php
/*  
 *  Template Name: view profile
 */ 
?>

<?php get_header(); ?>

<?php 
    //define variable for url bar .php?n=
    $unid = $_GET['n'];
    $off = $_GET['offset'];
?>

<div class="row over-background border drop" data-equalizer data-equalize-on="large">
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

        <!-- Start the main container -->
        <div class="container" role="document">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 

                    $format = get_post_format();
                    get_template_part( 'format', $format );
                    ?>

                    
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post -->

                            <?php include("page-title.php"); ?>

                                <ul class="no-bullet stripes">
                                
                                <!-- multiple options due to not being logged in would see all guest orders -->
                                <?php
                                    if ( is_user_logged_in() ) {

                                    // first extract the current user email as the variable 
                                    $current_user = wp_get_current_user();
                                    $current_email = $current_user->user_email;    
                                        
                                    // set the number of items to display per page
                                    $items_per_page = 100;

                                    // set the offset the page number with a zero after
                                    $offset = $off . 00;

                                // then search for orders -->
                                $orders = $wpdb->get_results( 
                                        "
                                        SELECT * 
                                        FROM meatorders
                                        WHERE ( email = '$current_email' AND confirm = 1 )
                                        ORDER by unid desc
                                        LIMIT $offset , $items_per_page
                                        ;"
                                    );
                                    foreach ( $orders as $order ) 
                                    {
                                        echo 
                                        '<li>
                                            <div class="row">
                                                <div class="small-12 columns">
                                                    <a href="' .
                                            
                                                    home_url() .

                                                    '/view-order?n=' .

                                                    $order->unid .

                                                '">'.

                                                $order->unid . 

                                                '</a>' .    

                                                '<span class="stripe-breaker"> | </span>' . 

                                                $order->amp .

                                                '<span class="stripe-breaker"> | </span>' .

                                                $order->timenow .

                                            '</div>
                                            </div>
                                        </li>' ;
                                    } ?>
                                        
                                    <!-- create variable -->
                                    <?php $over = $off + 1; ?>
                                    <?php $under = $off - 1; ?>

                                    <hr >
                                    
                                    
                                    <div class="small-12 columns">
                                        <p><span class="fake-button">You're on page <?php if ($off>0) { echo $over; } else { echo '1'; } ?></span>

                                        <!-- If more than 0 previous is OK -->
                                        <?php if ($off>0)  {
                                                echo '<a href=" ' . home_url() . '/view-profile/?offset=' . $under . '" aria-label="Previous" class="button">Previous <span class="show-for-sr">page</span></a>' ;
                                             } ?>

                                        <a href="<?php echo home_url(); ?>/view-profile/?offset=<?php echo $over; ?>" aria-label="Previous" class="button">Next <span class="show-for-sr">page</span></a>
                                        </p>

                                    </div>
                                    
                                    
                                <?php } else {
                                echo '<li>Welcome, visitor!</li>';
                                }
                                ?>
                                    
                                </ul>
                    
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

    <div class="small-12 large-6 columns light-back" data-equalizer-watch>
        
        <div class="row">
            <div class="small-12 columns">
                <div class="flagbanner drop fall">
                    <h2 class="flagbuttonbanner category-title">Profile Info</h2>
                </div> 
            </div>
        </div>
        
        <hr>
        
        <?php $current_user = wp_get_current_user(); ?>

            <ul class="no-bullet stripes"> 
                <li><div class="row"><div class="small-12 columns">Name: <?php echo $current_user->display_name; ?></div></div></li>

                <li><div class="row"><div class="small-12 columns">email: <?php echo $current_user->user_email; ?></div></div></li>

                <li><div class="row"><div class="small-12 columns">Address: <?php echo bp_get_profile_field_data('field=address&user_id='.bp_loggedin_user_id()); ?></div></div></li>

                <li><div class="row"><div class="small-12 columns">Phone: <?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?></div></div></li>

                <li><div class="row"><div class="small-12 columns">Mobile: <?php echo bp_get_profile_field_data('field=mobile&user_id='.bp_loggedin_user_id()); ?></div></div></li>

                <li><div class="row"><div class="small-12 columns">Anything need to be changed?</div></div></li>

                <div class="row"><div class="small-12 columns"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>" class="button drop">Update Info</a></div></div>
                
                <hr>
                
            </ul>
        
    </div>    
        
</div><!-- row -->
			
<?php get_footer(); ?>        