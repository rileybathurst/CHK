<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> 
      
    <script>
        var url = document.location.href;
        jQuery(document).ready(function() {
        //copy profile name to account name during registration
        if (url.indexOf("register/") >= 0) {
            jQuery('label[for=signup_username],#signup_username').css('display','none');
            jQuery('#field_1').blur(function(){
                jQuery("#signup_username").val(jQuery("#field_1").val());
            });
        }
        });
    </script>

    <!-- analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-12917302-6', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
      
  </head>
  <body>
      
      <!-- facebook -->
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=163256807043192";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
  
    <div class="top-background-image hide-for-print"> 
        <img data-interchange="[<?php echo get_template_directory_uri(); ?>/img/iStock_000051038948_small.jpg, small], [<?php echo get_template_directory_uri(); ?>/img/iStock_000051038948_medium.jpg, medium], [<?php echo get_template_directory_uri(); ?>/img/iStock_000051038948_large.jpg, large]">
    </div>
            
    <!-- canvas wrappers -->
        <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
                
                <!-- this is the off canvas aka small menu -->
                <div class="off-canvas position-right hide-for-print" id="my-info" data-off-canvas data-position="right">
                    <ul class="vertical menu" data-accordion-menu>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/CHK-logo.png" alt="canterbury homekill logo" class="small-8 small-push-2"/></li>
                        <li><label><h2>Canterbury Homekill</h2></label></li>
                        <?php
                            if ( is_user_logged_in() ) { 
                                
                                    $current_user = wp_get_current_user();
                                    $current_login = $current_user->user_login; ?>

                                    <li>
                                        <h2 class="seconds">                        
                                            Welcome back <?php echo $current_login; ?>
                                        </h2>
                                    </li>
                            <?php } ?>
                        <li><h2><a href="<?php echo home_url(); ?>">Home</a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/about"><?php echo (get_page_by_title('About')->post_title); ?> Us</a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/order"><?php echo (get_page_by_title('Order')->post_title); ?></a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/contact"><?php echo (get_page_by_title('Contact Us')->post_title); ?></a></h2></li>
                        <!-- <li><h2><a href="<?php echo home_url(); ?>/booking"><?php echo (get_page_by_title('Booking Form')->post_title); ?></a></h2></li> -->
                        <li><h2><a href="<?php echo home_url(); ?>/beef"><?php echo (get_page_by_title('Beef')->post_title); ?></a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/pig"><?php echo (get_page_by_title('Pig')->post_title); ?></a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/deer"><?php echo (get_page_by_title('Deer')->post_title); ?></a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/sheep"><?php echo (get_page_by_title('Sheep')->post_title); ?></a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/alpaca-llama">Alpaca / Llama</a></h2></li>
                        <li><h2><a href="<?php echo home_url(); ?>/small-goods"><?php echo (get_page_by_title('Small Goods')->post_title); ?></a></h2></li>
                        <li><?php
                            if ( is_user_logged_in() ) { ?>
    
                                <a href="<?php echo home_url(); ?>/logout" class="button drop">logout</a>

                        <?php } else { ?>
                                <h2>Login</h2>  

                                <?php wp_login_form(); ?>
                            
                                <a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('register')->ID); ?>" class="button drop">Sign Up</a>

                        <?php } ?>
                        </li>
                    </ul>
                </div>
                
                <!--  this is the in canvas -->
                <div class="off-canvas-content" data-off-canvas-content>
                    
                    <!-- top bar -->
                    <div class="top-bar show-for-medium hide-for-print">
                      <div class="top-bar-left">
                            <ul class="menu" data-dropdown-menu>
                                <?php if ( is_user_logged_in() ) { ?>
                                    <li>Welcome back, <?php echo $current_user->display_name; ?></li>
                                    <li><a href="<?php echo home_url(); ?>/view-profile">View Previous Orders</a></li>
                                <?php } else { ?>
                                    <li class="hide-for-large-only-edited">Hey, Your currently not logged in.</li>             
                                <?php } ?>
                            </ul>
                         </div>
                      <div class="top-bar-right">
                        <ul class="menu border-spacing-top-bar">
                            <?php if ( is_user_logged_in() ) { ?>
                                <li class=""><a href="<?php echo home_url(); ?>/contact" class="button san-serif"><?php echo (get_page_by_title('Contact Us')->post_title); ?></a></li>
                                <li><a href="<?php echo home_url(); ?>/logout" class="button san-serif">logout</a></li>
                            <?php } else { ?>
                                <li class="show-for-medium-only"><a href="<?php echo home_url(); ?>/login" class="button extra-right">LOG IN</a></li>
                                
                                <li class="show-for-large">
                                    <?php $side_log = array (
                                        'form_id'        => 'side_log',
                                        'label_username' => 'email',
                                    ); ?>

                                    <?php wp_login_form( $side_log ); ?>
                                </li>
                                <li><a href="<?php echo home_url(); ?>/?page_id=<?php echo (get_page_by_title('register')->ID); ?>" class="button san-serif">Sign Up</a></li>
                            <?php } ?>
                        </ul>
                      </div>
                    </div>
                
                    <div class="row hide-for-print">
                        
                        <!-- logo -->
                        <div class="small-6 medium-4 medium-centered drop fall columns fade-to-red" 
                             style="
                                    background-image:url('<?php echo get_template_directory_uri(); ?>/img/CHK-logo.png'); max-width: 100%;
                                    background-repeat:no-repeat;
                                    background-size:contain;
                                    background-position:center;
                                    "
                        >
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/CHK-logo-red.png" alt="canterbury homekill logo" class="fade"/></a>
                        </div>

                        <!-- small nav --> 
                        <div class="small-3 columns drop fall show-for-small-only">
                            <button class="menu-icon float-right button-backed" type="button" data-open="my-info">Menu</button><!-- toggle off canvas -->
                        </div> 

                    </div>

                    <!-- medium up nav -->        
                    <div class="row show-for-medium hide-for-print">
                        <div class="medium-10 medium-centered columns drop fall"><!-- medium up nav -->

                            <div class="flagbanner">
                                <div class="flagbuttonbanner medium-12 columns">
                                    <ul class="menu expanded medium-up-menu a2">
                                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                        <li><a href="<?php echo home_url(); ?>/about"><?php echo (get_page_by_title('About')->post_title); ?> Us</a></li>
                                        <li><a href="<?php echo home_url(); ?>/order"><?php echo (get_page_by_title('Order')->post_title); ?></a></li>
                                        <li><a href="<?php echo home_url(); ?>/contact"><?php echo (get_page_by_title('Contact Us')->post_title); ?></a></li>
                                        <!-- <li><a href="<?php echo home_url(); ?>/booking"><?php echo (get_page_by_title('Booking Form')->post_title); ?></a></li> -->
                                    </ul>
                        
                                    <ul class="menu expanded medium-up-menu a2">
                                        <li><a href="<?php echo home_url(); ?>/beef"><?php echo (get_page_by_title('Beef')->post_title); ?></a></li>
                                        <li><a href="<?php echo home_url(); ?>/pig"><?php echo (get_page_by_title('Pig')->post_title); ?></a></li>
                                        <li><a href="<?php echo home_url(); ?>/deer"><?php echo (get_page_by_title('Deer')->post_title); ?></a></li>
                                        <li><a href="<?php echo home_url(); ?>/sheep"><?php echo (get_page_by_title('Sheep')->post_title); ?></a></li>
                                        <li><a href="<?php echo home_url(); ?>/alpaca-llama"><span class="keep-all">Alpaca&nbsp;/</span> Llama</a></li>
                                        <li><a href="<?php echo home_url(); ?>/small-goods"><?php echo (get_page_by_title('Small Goods')->post_title); ?></a></li>
                                    </ul>
                                </div>
                            </div> 
                        </div><!-- medium up nav -->
                    </div><!-- row -->