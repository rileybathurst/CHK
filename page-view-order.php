<?php
/*  
 *  Template Name: view order
 */ 
?>

<?php get_header(); ?>

<?php 
    //define variable for url bar .php?n=
    $unid = $_GET['n'];
?>

<div class="row over-background border drop line-higher">
    
    <!-- dont use page title to stop double hr -->
    <div class="row hide-for-print">
        <div class="small-12 columns">
            <div class="flagbanner drop fall">
                <h2 class="flagbuttonbanner category-title"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>

    <!-- multiple options due to not being logged in would see all guest orders -->
    <?php
        if ( is_user_logged_in() ) {

        // first extract the current user email as the variable 
        $current_user = wp_get_current_user();
        $current_email = $current_user->user_email;    

    // then search for orders -->
    $orders = $wpdb->get_results( 
            "
            SELECT * 
            FROM meatorders
            WHERE unid = '$unid';
            "
        );
        foreach ( $orders as $order ) 
        { ?>

<!-- unid -->
        
            <div class="small-12 columns border-slim"><span class="uppercase">Order Number | </span>
                <strong class="print-highlights">
                    <?php echo $order->unid; ?>
                </strong>
            </div>
        
<!-- confirm -->
            <div class="small-12 medium-6 columns border-slim">
                <p class="no-bottom">
                    <?php if ($order->confirm == 1) { ?>
                        <span class="unicode check spacer">✓</span>
                    <?php } else { echo ' '; } ?>
                    <strong>Confirmation</strong>
                </p>
            </div>
            
<!-- timenow -->
            <div class="small-12 medium-6 columns border-slim"><span class="uppercase">Date | </span>
                <strong>
                    <?php echo $order->timenow; ?>
                </strong>
            </div>

<!-- name -->
        
            <div class="small-12 columns border-slim"><span class="uppercase">Name | </span>
                <strong>
                    <?php echo $order->name; ?>
                </strong>
            </div>
        
<!-- add1 -->
            <div class="small-12 columns border-slim"><span class="uppercase">Address | </span>
                <strong>
                    <?php echo $order->add1; ?>
                </strong>
            </div>
        
<!-- phone -->
            <div class="small-12 medium-6 columns border-slim"><span class="uppercase">Phone | </span>
                <strong>
                    <?php echo $order->phone; ?>
                </strong>
</div>
        
<!-- phone2 -->
            <div class="small-12 medium-6 columns border-slim"><span class="uppercase">Mobile | </span>
                <strong>
                    <?php echo $order->phone2; ?>
                </strong>
            </div>
        

<!-- email -->
            <div class="small-12 columns border-slim"><span class="uppercase">Email | </span>
                <strong>
                    <?php echo $order->email; ?>
                </strong>
            </div>
        
<!-- amp -->
   
            <div class="small-12 columns border-slim"><span class="uppercase">Animal To Be Processed | </span>
                <strong>
                    <?php echo $order->amp; ?>
                </strong>
            </div>
   
<!-- people -->
            <div class="small-12 columns border-slim"><span class="uppercase">No. Of People | </span>
                <strong>
                    <?php echo $order->people; ?>
                </strong>
            </div>
    
<!-- people -->
            <div class="small-12 columns border-slim"><span class="uppercase">Decleration | </span>
                <strong>
                    <?php echo $order->declaration; ?>
                </strong>
            </div>
                   
<!-- 10 columns -->
                                
        <div class="small-12 medium-6 columns">
    
<!-- Breaks down the forms into each option -->
                <?php
                    if ($order->animal == beef) {
                        include("view-beef.php"); 
                    }

                    elseif ($order->animal == pig) {
                        include("view-pig.php"); 
                    }

                    elseif ($order->animal == deer) {
                        include("view-deer.php"); 
                    }

                    elseif ($order->animal == sheep) {
                        include("view-sheep.php"); 
                    }      
        
                    elseif ($order->animal == alpacallama) {
                        include("view-alpaca-llama.php"); 
                    }  
                ?>
        
<!-- then goes back to all the things -->
<!-- small-5 columns -->
        </div>
         
<!-- Column 2 -->        
        <div class="small-12 medium-6 columns">
            <?php include("view-small-goods.php"); ?>
        </div>
    
        <div class="small-12 columns border-slim">
            <span class="uppercase">SPECIAL INSTRUCTIONS | </span>
            <strong>
                <?php echo $order->spins; ?>
            </strong>
        </div>
    
        <hr class="hide-for-print">
    
        <div class="small-12 columns hide-for-print">
            <h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>" class="button san-serif">Back to your orders</a></h3>
        </div>
    
        <?php 
            $current_user = wp_get_current_user();
            $current_id = $current_user->ID;    
            $user_info = get_userdata( $current_id );
            $user_role = implode(', ', $user_info->roles);
    
            if ($user_role == 'administrator') { ?>
    
                <hr class="hide-for-print">
    
                <div class="small-12 columns hide-for-print">
                    <a href="<?php echo home_url(); ?>/view-all" class="button san-serif">Back to all orders</a>
                    
                    <!-- back and forward --> 
                        
                        <?php $above = $unid + 1; ?>
                        <?php $below = $unid - 1; ?>
                        
                        <a href="<?php esc_url( home_url( '/' ) ); ?>view-order/?n=<?php echo $above; ?>" aria-label="Next" class="button san-serif">Next Order</a>
                        <?php if ($unid>0)  { ?><a href="<?php esc_url( home_url( '/' ) ); ?>view-order/?n=<?php echo $below; ?>" aria-label="Previous" class="button san-serif">Previous Order</a><?php } ;?>
                     </div>       
                        
    <?php } 
        // For each
            }
        // logged in
        } else { ?>
            
            <div class="small-12 columns">
                <h4>Welcome, visitor!</h4>
            </div>
                
        <?php } ?>
    
</div><!-- row --> 
			
<?php get_footer(); ?>        