<?php get_header(); ?>

<div class="row over-background border drop">
    <div class="small-12 large-6 columns"><!-- First Two -->
        
        <h2 class="small-text-center large-text-left drop"><?php echo (get_page_by_title('Welcome to Canterbury Homekill Services Ltd')->post_title); ?></h2>
        
        <hr>
        
        <p class="drop"><?php echo (get_page_by_title('Intro')->post_content); ?></p>
    
        <div class="row">   
            <div class="small-12 columns">
                <h4 class="drop"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('about')->ID); ?>" class="button">Read More <?php echo (get_page_by_title('about')->post_title); ?> Us</a></h4>
            </div>
        </div>
        
        <hr>
        
        <div><!-- How -->
            <p><?php echo (get_page_by_title('HOW CHK WORKS')->post_content); ?></p>
        
            <div class="row">   
                <div class="small-12 columns">
                    <h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Prices')->ID); ?>" class="button drop"><?php echo (get_page_by_title('Prices')->post_title); ?></a></h3>
                </div>
            </div>
            
            <!--<div class="row">
                <div class="small-12 columns">
                    <p>The first step to having us work on your animal would be our online booking form.</p>
                </div>
            </div>
            
             <div class="row">   
                <div class="small-12 columns">
                    <h3><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Booking Form')->ID); ?>" class="button drop"><?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h3>
                </div>
            </div> -->
        
        </div><!-- How -->
    </div><!-- First Two -->
             
    <div class="small-12 large-6 columns light-back"><!-- Order Animals -->
        
        <div class="row">
            <div class="small-12 columns">
 
                <div class="flagbanner drop">
                    <h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('Order')->ID); ?>"><?php echo (get_page_by_title('Order')->post_title); ?></a></h3>
                </div>               

                <p class="drop"><?php echo (get_page_by_title('order')->post_content); ?></p>

                <div class="small-12 medium-6 columns drop">
                    <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/beef-flat.png" alt="homekill beef" width="140" height="140" class="round any-center hover-back" /></a>
                    <h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('beef')->ID); ?>" class="button center-button">Beef</a></h3>
                </div>

                <div class="small-12 medium-6 columns drop">
                    <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/deer-flat.png" alt="homekill venison" width="140" height="140" class="round any-center hover-back" /></a>
                    <h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('deer')->ID); ?>" class="button center-button">Deer</a></h3>
                </div>

                <div class="small-12 medium-6 columns drop">
                    <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/pig-flat.png" alt="homekill bacon" width="140" height="140" class="round any-center hover-back" /></a>
                    <h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('pig')->ID); ?>" class="button center-button">Pig</a></h3>
                </div>

                <div class="small-12 medium-6 columns drop">
                    <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2016/02/sheep-flat.png" alt="lamb homekill" width="140" height="140" class="round any-center hover-back" /></a>
                    <h3 class="text-center"><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('sheep')->ID); ?>" class="button center-button">Sheep</a></h3>
                </div>

                <div class="small-12 medium-6 columns end drop">
                    <a href="<?php echo home_url(); ?>/alpaca-llama"><img src="<?php echo content_url(); ?>/uploads/2016/03/Alpaca-flat.png" class="round any-center hover-back" alt="alpaca" /></a>
                    <h3 class="text-center">
                        <a href="<?php echo home_url(); ?>/alpaca-llama" class="button center-button">Alpaca /</a>
                        <a href="<?php echo home_url(); ?>/alpaca-llama" class="button center-button"> llama</a>
                    </h3>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
            <div class="small-12 columns">
                
                <?php
                    if ( is_user_logged_in() ) { ?>
        
                        <div class="flagbanner drop fall">
                            <h3 class="flagbuttonbanner a2">Welcome</h3>
                        </div>
                
                        <?php 
                            $current_user = wp_get_current_user();
                            $current_login = $current_user->user_login;
                            $current_email = $current_user->user_email; ?>
                    
                            <p>                        
                                Welcome back <?php echo $current_login; ?><br />
                                Your most recent order was:<br />
                        
                                <?php // then search for orders -->
                                $orders = $wpdb->get_results( 
                                        "
                                        SELECT * 
                                        FROM meatorders
                                        WHERE email = '$current_email'
                                        ORDER by unid desc
                                        LIMIT 1;
                                        "
                                    );
                                    foreach ( $orders as $order ) 
                                    { ?>
                                        <ul class="no-bullet stripes">  
                                            <li>
                                                <div class="row">
                                                    <div class="small-2 columns">
                                                        <a href="<?php echo home_url(); ?>/view-order?n=<?php echo $order->unid; ?>"><?php echo $order->unid; ?></a>
                                                    </div>
                                                        
                                                    <div class="small-1 columns stripe-breaker">|</div>

                                                    <div class="small-2 columns">
                                                        <?php echo $order->amp; ?>
                                                    </div>
                                                        
                                                    <div class="small-1 columns stripe-breaker">|</div>

                                                    <div class="small-6 columns">
                                                        <?php echo $order->timenow; ?>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul> 
                
                                    <?php } ?>
                
                
                
                            <p>Would you like to view <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('view profile')->ID); ?>">your previous orders?</a></p>

                            <p><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('update')->ID); ?>">Check or modify your current info</a></p>

                            <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('logout')->ID); ?>" class="button drop">logout</a>
                                                
                <?php } else { ?>
                        <div class="flagbanner drop fall">
                            <h3 class="flagbuttonbanner a2">Login</h3>
                        </div>  

                        <p><em>Usernames have no spaces or special charachters.</em></p>
                
                        <?php wp_login_form(); ?>
                
                         <div class="row">
                            
                            <div class="small-12 columns">
                                <p><em><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Lost Your Password?</a></em></p>
                            </div>
                            
                            <div class="small-12 columns">
                                <hr>
                            </div>
                            
                            <div class="small-12 columns">
                                <div class="flagbanner drop fall">
                                    <h3 class="flagbuttonbanner a2">New Users</h3>
                                </div>
                            </div>
                            
                            <div class="small-12 columns">
                                <p>Become a member to be able to search previous and have your sigin in information auto fill.</p>
                                <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('register')->ID); ?>" class="button drop left">Sign Up</a>
                            
                            </div>
                        </div>
                
                <?php } ?>
            </div>
        </div>
        
    </div><!-- Order Animals -->
    
    <div class="small-12 large-6 columns"><!-- seconday set of grid to allow for margins on 1 or 2 columns // outside of row on purpose -->
        
        <div class="small-12 columns">
            
            <hr>
            
            <div class="flagbanner drop fall">
                <h3 class="flagbuttonbanner a2"><a href="<?php echo home_url(); ?>/contact">Contact Us</a></h3>
            </div>
            
            <p class="drop"><?php echo (get_page_by_title('Contact Us')->post_content); ?></p>
            
        </div><!-- columns -->

    </div>

    <img src="<?php echo content_url(); ?>/uploads/2016/02/iStock_000021247297_recipe.jpg" alt="cooking" class="large-6 show-for-large right">
        
</div>
    
<?php get_footer(); ?> 