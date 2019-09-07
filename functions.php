<?php 

if ( ! function_exists( 'chk_setup' ) ) :
/* Sets up theme defaults and registers support for various WordPress features. */
function chk_setup() {
    
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    /* Let WordPress manage the document title. */
	add_theme_support( 'title-tag' );
    
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'text_domain' ),
		'secondary' => __( 'Seconday Menu', 'text_domain' ),
		'social'  => __( 'Social Links Menu', 'text_domain' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
    
    /* Enable support for Post Formats. */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
    
}
endif; // sassaby_setup
add_action( 'after_setup_theme', 'chk_setup' );

/* Set the content width in pixels, based on the theme's design and stylesheet. */

function chk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'chk_content_width', 1024 );
}
add_action( 'after_setup_theme', 'chk_content_width', 0 );

/* Enqueue scripts and styles. */

function chk_scripts() {
    
    // Foundation style.
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/app.css' );
    
    // Print styles
   // wp_enqueue_style( 'print', get_template_directory_uri() . '/css/print.css' , $deps = array(), $ver = false, $media = 'all'  );
    
    // Comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'chk_scripts' );

/* Custom Login */
/* Custom Logo */
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/CHK-logo-280.png);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Logo Links to my site */
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Canterbury Homekill';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// remove p from posts - was making some wierd stuff with flagbanner and extremely custom styling
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// Disable Admin Bar for everyone
if (!function_exists('df_disable_admin_bar')) {

	function df_disable_admin_bar() {
		
		// for the admin page
		remove_action('admin_footer', 'wp_admin_bar_render', 1000);
		// for the front-end
		remove_action('wp_footer', 'wp_admin_bar_render', 1000);
	  	
		// css override for the admin page
		function remove_admin_bar_style_backend() { 
			echo '<style>body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top: 0px !important; }</style>';
		}	  
		add_filter('admin_head','remove_admin_bar_style_backend');
		
		// css override for the frontend
		function remove_admin_bar_style_frontend() {
			echo '<style type="text/css" media="screen">
			html { margin-top: 0px !important; }
			* html body { margin-top: 0px !important; }
			</style>';
		}
		add_filter('wp_head','remove_admin_bar_style_frontend', 99);
  	}
}

// Remove the WP top bar as CHK users are often logged in but don't need that interface
add_action('init','df_disable_admin_bar');

// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'info@canterburyhomekill.co.nz';
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Canterbury Homekill';
});

//send a welcome email when a user account is activated
add_action( 'bp_core_activated_user', 'bpdev_welcome_user_notification', 10, 3 );

function bpdev_welcome_user_notification( $user_id, $key = false, $user = false ) {

	if ( is_multisite() ) {
		return ;// we don't need it for multisite
	}
	//send the welcome mail to user
	//welcome message

	$welcome_email = __( 'Dear USER_DISPLAY_NAME,
 
    Your new account is set up.

    You can log in with the following information:
    Username: USERNAME
    LOGINLINK

    Thanks!

    --The Team @ SITE_NAME' );

	//get user details
	$user = get_userdata( $user_id );
	//get site name
	$site_name = get_bloginfo( 'name' );
	//update the details in the welcome email
	$welcome_email = str_replace( 'USER_DISPLAY_NAME', $user->first_name, $welcome_email );
	$welcome_email = str_replace( 'SITE_NAME', $site_name, $welcome_email );
	$welcome_email = str_replace( 'USERNAME', $user->user_login, $welcome_email );
	$welcome_email = str_replace( 'LOGINLINK', wp_login_url(), $welcome_email );

	//from email
	$admin_email = get_site_option( 'admin_email' );

	if ( empty( $admin_email ) ) {
		$admin_email = 'support@' . $_SERVER['SERVER_NAME'];
	}

	$from_name = $site_name . "<$admin_email>" ;//from
	$message_headers =  array(
		'from'          => $from_name,
		'content-type'  => 'text/plain; charset='. get_option('blog_charset')
	);

	//EMAIL SUBJECT
	$subject = sprintf( __( 'Welcome to   %1$s ' ), $site_name ) ;
	//SEND THE EMAIL
	wp_mail( $user->user_email, $subject, $welcome_email, $message_headers );

	return true;
}


// deals with variable set through form _POST
function prefix_admin_xprofileupdate() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->update( chk_users , 
                          
                array(
                    'display_name' => $_POST['name'] ,
                ) , 

                // where          
                array(          
                    'id' => $_POST['user_id']
                )
            );
    
            // Whats inserted
            $wpdb->update( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['address'] ,
                ) , 
                // where          
                array(          
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['address_field']
                )
            );
    
            // Whats inserted
            $wpdb->update( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['phone'] ,
                ) , 
                // where          
                array(          
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['phone_field']
                )
            );
    
            // Whats inserted
            $wpdb->update( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['mobile'] ,
                ) , 
                // where          
                array(          
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['mobile_field']
                )
            );
    
            // Redirect
            wp_redirect( home_url() . '/view-profile' );
            exit();

}
add_action( 'admin_post_xprofileupdate', 'prefix_admin_xprofileupdate' );
add_action( 'admin_post_nopriv_xprofileupdate', 'prefix_admin_xprofileupdate' );

// Add xprofile data into blank forms as update wont work on those
// deals with variable set through form _POST
function prefix_admin_xprofileaddress() {

    // Extremley Important to set
            global $wpdb;
    
            // Whats inserted
            $wpdb->insert( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['address'] ,
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['address_field'] ,
                ) , 
                // where          
                array(          
                    '%s' ,
                    '%s' ,
                    '%s'
                )
            );
    
            // Redirect
            wp_redirect( home_url() . '/update' );
            exit();

}
add_action( 'admin_post_xprofileaddress', 'prefix_admin_xprofileaddress' );
add_action( 'admin_post_nopriv_xprofileaddress', 'prefix_admin_xprofileaddress' );

// deals with variable set through form _POST
function prefix_admin_xprofileaddphone() {

    // Extremley Important to set
            global $wpdb;
    
            // Whats inserted
            $wpdb->insert( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['phone'] ,
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['phone_field'] ,
                ) , 
                // where          
                array(          
                    '%s' ,
                    '%s' ,
                    '%s'
                )
            );
    
            // Redirect
            wp_redirect( home_url() . '/update' );
            exit();

}
add_action( 'admin_post_xprofileaddphone', 'prefix_admin_xprofileaddphone' );
add_action( 'admin_post_nopriv_xprofileaddphone', 'prefix_admin_xprofileaddphone' );

// deals with variable set through form _POST
function prefix_admin_xprofileaddmobile() {

    // Extremley Important to set
            global $wpdb;
    
            // Whats inserted
            $wpdb->insert( chk_bp_xprofile_data , 
                          
                array(
                    'value' => $_POST['mobile'] ,
                    'user_id' => $_POST['user_id'] ,
                    'field_id' => $_POST['mobile_field'] ,
                ) , 
                // where          
                array(          
                    '%s' ,
                    '%s' ,
                    '%s'
                )
            );
    
            // Redirect
            wp_redirect( home_url() . '/update' );
            exit();

}
add_action( 'admin_post_xprofileaddmobile', 'prefix_admin_xprofileaddmobile' );
add_action( 'admin_post_nopriv_xprofileaddmobile', 'prefix_admin_xprofileaddmobile' );

/* Add featured image support */
	add_theme_support( 'post-thumbnails' ); 

// template-animal deals with first step of each animal
// deals with variable set through form _POST
// BEEF
function prefix_admin_declarationBeef() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->insert( meatorders ,      
                array(
                    'unid'          => '$unid' ,
                    'animal'        => 'beef' ,
                    'declaration'   => $_POST['declaration'] ,
                ) , 
                array(
                    '%s' ,
                    '%s' ,
                    '%s'
                ) 
            );
    
            // this give the unid in the next url
             $id = $wpdb->insert_id;
            
            // Redirect
            wp_redirect( home_url() . '/order-details?n=' . $id );
            exit();

}
add_action( 'admin_post_declarationBeef', 'prefix_admin_declarationBeef' );
add_action( 'admin_post_nopriv_declarationBeef', 'prefix_admin_declarationBeef' );

// PIG
function prefix_admin_declarationPig() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->insert( meatorders ,      
                array(
                    'unid'          => '$unid' ,
                    'animal'        => 'pig' ,
                    'declaration'   => $_POST['declaration'] ,
                ) , 
                array(
                    '%s' ,
                    '%s' ,
                    '%s'
                ) 
            );
    
            // this give the unid in the next url
             $id = $wpdb->insert_id;
            
            // Redirect
            wp_redirect( home_url() . '/order-details?n=' . $id );
            exit();

}
add_action( 'admin_post_declarationPig', 'prefix_admin_declarationPig' );
add_action( 'admin_post_nopriv_declarationPig', 'prefix_admin_declarationPig' );

// DEER
function prefix_admin_declarationDeer() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->insert( meatorders ,      
                array(
                    'unid'          => '$unid' ,
                    'animal'        => 'deer' ,
                    'declaration'   => $_POST['declaration'] ,
                ) , 
                array(
                    '%s' ,
                    '%s' ,
                    '%s'
                ) 
            );
    
            // this give the unid in the next url
             $id = $wpdb->insert_id;
            
            // Redirect
            wp_redirect( home_url() . '/order-details?n=' . $id );
            exit();

}
add_action( 'admin_post_declarationDeer', 'prefix_admin_declarationDeer' );
add_action( 'admin_post_nopriv_declarationDeer', 'prefix_admin_declarationDeer' );

// SHEEP
function prefix_admin_declarationSheep() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->insert( meatorders ,      
                array(
                    'unid'          => '$unid' ,
                    'animal'        => 'sheep' ,
                    'declaration'   => $_POST['declaration'] ,
                ) , 
                array(
                    '%s' ,
                    '%s' ,
                    '%s'
                ) 
            );
    
            // this give the unid in the next url
             $id = $wpdb->insert_id;
            
            // Redirect
            wp_redirect( home_url() . '/order-details?n=' . $id );
            exit();

}
add_action( 'admin_post_declarationSheep', 'prefix_admin_declarationSheep' );
add_action( 'admin_post_nopriv_declarationSheep', 'prefix_admin_declarationSheep' );

// ALPACA LLAMA
function prefix_admin_declarationAlpacaLlama() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->insert( meatorders ,      
                array(
                    'unid'          => '$unid' ,
                    'animal'        => 'alpacallama' ,
                    'declaration'   => $_POST['declaration'] ,
                ) , 
                array(
                    '%s' ,
                    '%s' ,
                    '%s'
                ) 
            );
    
            // this give the unid in the next url
             $id = $wpdb->insert_id;
            
            // Redirect
            wp_redirect( home_url() . '/order-details?n=' . $id );
            exit();

}
add_action( 'admin_post_declarationAlpacaLlama', 'prefix_admin_declarationAlpacaLlama' );
add_action( 'admin_post_nopriv_declarationAlpacaLlama', 'prefix_admin_declarationAlpacaLlama' );

// Update details and send off to order of specific animal page 
// deals with variable set through form _POST
function prefix_admin_orderdetailsupdate() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    'name' => $_POST['name'] ,
                    'add1' => $_POST['add1'] ,
                    'email' => $_POST['email'] ,
                    'phone' => $_POST['phone'] ,
                    'phone2' => $_POST['phone2'] ,
                    'amp' => $_POST['amp'] ,
                    'people' => $_POST['people'] 
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )

            );
    
            // Redirect
            wp_redirect( home_url() . '/order-' . $_POST['animal'] . '?n=' . $_POST['unid'] );
            exit();

}
add_action( 'admin_post_orderdetailsupdate', 'prefix_admin_orderdetailsupdate' );
add_action( 'admin_post_nopriv_orderdetailsupdate', 'prefix_admin_orderdetailsupdate' );

// deals with variable set through form _POST
// BEEF
function prefix_admin_orderbeefupdate() {

    // Extremley Important to set
            global $wpdb;
    
            //create variables
            $b_fillet           = $_POST['b_fillet']; if($b_fillet == 'on'){$b_fillet=1;}else{$b_fillet=0;}
            $b_porterhouse      = $_POST['b_porterhouse']; if($b_porterhouse == 'on'){$b_porterhouse=1;}else{$b_porterhouse=0;}
            $b_tbone            = $_POST['b_tbone']; if($b_tbone == 'on'){$b_tbone=1;}else{$b_tbone=0;}
            $b_ribeye           = $_POST['b_ribeye']; if($b_ribeye == 'on'){$b_ribeye=1;}else{$b_ribeye=0;}
            $b_rump             = $_POST['b_rump']; if($b_rump == 'on'){$b_rump=1;}else{$b_rump=0;}
            $b_topside          = $_POST['b_topside']; if($b_topside == 'on'){$b_topside=1;}else{$b_topside=0;}
            $b_rolledroast      = $_POST['b_rolledroast']; if($b_rolledroast == 'on'){$b_rolledroast=1;}else{$b_rolledroast=0;}
            $b_weinerschnitzel  = $_POST['b_weinerschnitzel']; if($b_weinerschnitzel == 'on'){$b_weinerschnitzel=1;}else{$b_weinerschnitzel=0;}
            $b_silverside       = $_POST['b_silverside']; if($b_silverside == 'on'){$b_silverside=1;}else{$b_silverside=0;}
            $b_blade            = $_POST['b_blade']; if($b_blade == 'on'){$b_blade=1;}else{$b_blade=0;}
            $b_shinfillet       = $_POST['b_shinfillet']; if($b_shinfillet == 'on'){$b_shinfillet=1;}else{$b_shinfillet=0;}
            $b_chucksteak       = $_POST['b_chucksteak']; if($b_chucksteak == 'on'){$b_chucksteak=1;}else{$b_chucksteak=0;}
            $b_skirtsteak       = $_POST['b_skirtsteak']; if($b_skirtsteak == 'on'){$b_skirtsteak=1;}else{$b_skirtsteak=0;}
            $b_mince            = $_POST['b_mince']; if($b_mince == 'on'){$b_mince=1;}else{$b_mince=0;}

            //create small goods variable
            $url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}
    
            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    'b_fillet'          => $b_fillet ,
                    'fillet_bf'         => $_POST['fillet_bf'] ,
                    'b_porterhouse'     => $b_porterhouse ,
                    'porterhouse_bf'    => $_POST['porterhouse_bf'] ,
                    'b_tbone'           => $b_tbone ,
                    'b_ribeye'          => $b_ribeye ,
                    'ribeye_bf'         => $_POST['ribeye_bf'] ,
                    'b_rump'            => $b_rump ,
                    'rump_bf'           => $_POST['rump_bf'] ,
                    'b_topside'         => $b_topside ,
                    'topside_bf'        => $_POST['topside_bf'] ,
                    'b_rolledroast'     => $b_rolledroast ,
                    'rolledroast_bf'    => $_POST['rolledroast_bf'] ,
                    'b_weinerschnitzel' => $b_weinerschnitzel ,
                    'weinerschnitzel_bf'=> $_POST['weinerschnitzel_bf'] ,
                    'b_silverside'      => $b_silverside ,
                    'silverside_bf'     => $_POST['silverside_bf'] ,
                    'b_blade'           => $b_blade ,
                    'blade_bf'          => $_POST['blade_bf'] ,
                    'b_shinfillet'      => $b_shinfillet ,
                    'shinfillet_bf'     => $_POST['shinfillet_bf'] ,
                    'b_chucksteak'      => $b_chucksteak ,
                    'chucksteak_bf'     => $_POST['chucksteak_bf'] ,
                    'b_skirtsteak'      => $b_skirtsteak ,
                    'skirtsteak_bf'     => $_POST['skirtsteak_bf'] ,
                    'b_mince'           => $b_mince ,
                    'spins'             => $_POST['spins'],
                    'small'             => $url
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
                // small goods send
                if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
                }    else   {
                    wp_redirect( home_url() . '/confirm-beef?n=' . $_POST['unid'] );
                }
}

add_action( 'admin_post_orderbeefupdate', 'prefix_admin_orderbeefupdate' );
add_action( 'admin_post_nopriv_orderbeefupdate', 'prefix_admin_orderbeefupdate' );

// PIG
function prefix_admin_orderpigupdate() {

    // Extremley Important to set
            global $wpdb;
    
            //create variables
            //Shoulder
            $ps_rolledshoulder = $_POST['ps_rolledshoulder']; if($ps_rolledshoulder == 'on'){$ps_rolledshoulder=1;}else{$ps_rolledshoulder=0;}
            $ps_bacon = $_POST['ps_bacon']; if($ps_bacon == 'on'){$ps_bacon=1;}else{$ps_bacon=0;}
            $ps_pickledpork = $_POST['ps_pickledpork']; if($ps_pickledpork == 'on'){$ps_pickledpork=1;}else{$ps_pickledpork=0;}
            $ps_chops = $_POST['ps_chops']; if($ps_chops == 'on'){$ps_chops=1;}else{$ps_chops=0;}
            $ps_pressedham = $_POST['ps_pressedham']; if($ps_pressedham == 'on'){$ps_pressedham=1;}else{$ps_pressedham=0;}
            $pressedham_ps = $_POST['pressedham_ps'];
            $ps_mince = $_POST['ps_mince']; if($ps_mince == 'on'){$ps_mince=1;}else{$ps_mince=0;}
            $ps_dicedpork = $_POST['ps_dicedpork']; if($ps_dicedpork == 'on'){$ps_dicedpork=1;}else{$ps_dicedpork=0;}
            $ps_roastjointed = $_POST['ps_roastjointed']; if($ps_roastjointed == 'on'){$ps_roastjointed=1;}else{$ps_roastjointed=0;}
            $roastjointed_ps = $_POST['roastjointed_ps'];

            //Loin
            $pl_chops = $_POST['pl_chops']; if($pl_chops == 'on'){$pl_chops=1;}else{$pl_chops=0;}
            $pl_loinsteaks = $_POST['pl_loinsteaks']; if($pl_loinsteaks == 'on'){$pl_loinsteaks=1;}else{$pl_loinsteaks=0;}
            $pl_roastjointed = $_POST['pl_roastjointed']; if($pl_roastjointed == 'on'){$pl_roastjointed=1;}else{$pl_roastjointed=0;}
            $roastjointed_pl = $_POST['roastjointed_pl'];
            $pl_bacon = $_POST['pl_bacon']; if($pl_bacon == 'on'){$pl_bacon=1;}else{$pl_bacon=0;}
            $pl_baconchops = $_POST['pl_baconchops']; if($pl_baconchops == 'on'){$pl_baconchops=1;}else{$pl_baconchops=0;}

            //Belly
            $pb_bacon = $_POST['pb_bacon']; if($pb_bacon == 'on'){$pb_bacon=1;}else{$pb_bacon=0;}
            $pb_baconstrips = $_POST['pb_baconstrips']; if($pb_baconstrips == 'on'){$pb_baconstrips=1;}else{$pb_baconstrips=0;}
            $pb_rolled = $_POST['pb_rolled']; if($pb_rolled == 'on'){$pb_rolled=1;}else{$pb_rolled=0;}
            $pb_whole = $_POST['pb_whole']; if($pb_whole == 'on'){$pb_whole=1;}else{$pb_whole=0;}
            $whole_pb = $_POST['whole_pb'];
            $pb_strips = $_POST['pb_strips']; if($pb_strips == 'on'){$pb_strips=1;}else{$pb_strips=0;}

            //Leg
            $pg_hamonthebone = $_POST['pg_hamonthebone']; if($pg_hamonthebone == 'on'){$pg_hamonthebone=1;}else{$pg_hamonthebone=0;}
            $hamonthebone_cook = $_POST['hamonthebone_cook'];
            $hamonthebone_size = $_POST['hamonthebone_size'];
            $pg_pressedham = $_POST['pg_pressedham']; if($pg_pressedham == 'on'){$pg_pressedham=1;}else{$pg_pressedham=0;}
            $pressedham_cook = $_POST['pressedham_cook'];
            $pressedham_size = $_POST['pressedham_size'];
            $pg_roast = $_POST['pg_roast']; if($pg_roast == 'on'){$pg_roast=1;}else{$pg_roast=0;}
            $roast_pg = $_POST['roast_pg'];
            $pg_mince = $_POST['pg_mince']; if($pg_mince == 'on'){$pg_mince=1;}else{$pg_mince=0;}
            $pg_diced = $_POST['pg_diced']; if($pg_diced == 'on'){$pg_diced=1;}else{$pg_diced=0;}
            $pg_legsteaks = $_POST['pg_legsteaks']; if($pg_legsteaks == 'on'){$pg_legsteaks=1;}else{$pg_legsteaks=0;}
            $pg_bacon = $_POST['pg_bacon']; if($pg_bacon == 'on'){$pg_bacon=1;}else{$pg_bacon=0;}
    
            
            //create small goods variable
            $url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}
    
            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    
                    'ps_rolledshoulder' =>      $ps_rolledshoulder ,
                    'rolledshoulder_ps' =>      $_POST['rolledshoulder_ps'] ,
                    'ps_bacon'          =>      $ps_bacon ,
                    'ps_pickledpork'    =>      $ps_pickledpork ,
                    'ps_chops'          =>      $ps_chops ,
                    'ps_pressedham'     =>      $ps_pressedham ,
                    'pressedham_ps'     =>      $pressedham_ps ,
                    'ps_mince'          =>      $ps_mince ,
                    'ps_dicedpork'      =>      $ps_dicedpork ,
                    'ps_roastjointed'   =>      $ps_roastjointed ,
                    'roastjointed_ps'   =>      $roastjointed_ps ,

                    'pl_chops'          =>      $pl_chops ,
                    'pl_loinsteaks'     =>      $pl_loinsteaks ,
                    'pl_roastjointed'   =>      $pl_roastjointed ,
                    'roastjointed_pl'   =>      $roastjointed_pl ,
                    'pl_bacon'          =>      $pl_bacon ,
                    'pl_baconchops'     =>      $pl_baconchops ,

                    'pb_bacon'          =>      $pb_bacon ,
                    'pb_baconstrips'    =>      $pb_baconstrips ,
                    'pb_rolled'         =>      $pb_rolled ,
                    'pb_whole'          =>      $pb_whole ,
                    'whole_pb'          =>      $whole_pb ,
                    'pb_strips'         =>      $pb_strips ,
                    
                    'pg_hamonthebone'   =>      $pg_hamonthebone ,
                    'hamonthebone_cook' =>      $hamonthebone_cook ,
                    'hamonthebone_size' =>      $hamonthebone_size ,
                    'pg_pressedham'    =>      $pg_pressedham ,
                    'pressedham_cook'  =>      $pressedham_cook ,
                    'pressedham_size'  =>      $pressedham_size ,
                    'pg_roast'         =>      $pg_roast ,
                    'roast_pg'         =>      $roast_pg ,
                    'pg_mince'         =>      $pg_mince ,
                    'pg_diced'         =>      $pg_diced ,
                    'pg_legsteaks'     =>      $pg_legsteaks ,
                    'pg_bacon'         =>      $pg_bacon ,

                    'spins'             =>      $_POST['spins'],
                    'small'             =>      $url
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
                // small goods send
                if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
                }    else   {
                    wp_redirect( home_url() . '/confirm-pig?n=' . $_POST['unid'] );
                }
}

add_action( 'admin_post_orderpigupdate', 'prefix_admin_orderpigupdate' );
add_action( 'admin_post_nopriv_orderpigupdate', 'prefix_admin_orderpigupdate' );

// DEER
function prefix_admin_orderdeerupdate() {

    // Extremley Important to set
            global $wpdb;
    
            //create variables
            $v_shoulder = $_POST['v_shoulder']; if($v_shoulder == 'on'){$v_shoulder=1;}else{$v_shoulder=0;}
            $v_loin = $_POST['v_loin']; if($v_loin == 'on'){$v_loin=1;}else{$v_loin=0;}
            $v_leg = $_POST['v_leg']; if($v_leg == 'on'){$v_leg=1;}else{$v_leg=0;}
            $spins = $_POST['spins'];
    
            //create small goods variable
            $url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}

            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    'v_shoulder'        =>      $v_shoulder ,
                    'shoulder_v'        =>      $_POST['shoulder_v'] ,
                    'v_loin'            =>      $v_loin ,
                    'loin_v'            =>      $_POST['loin_v'] ,
                    'v_leg'             =>      $v_leg ,
                    'leg_v'             =>      $_POST['leg_v'] ,
                    'v_leg_whole_half'  =>      $_POST['v_leg_whole_half'] ,
                    'spins'             =>      $spins ,
                    'small'             =>      $url    
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
                // small goods send   
                if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
                }    else   {
                    wp_redirect( home_url() . '/confirm-deer?n=' . $_POST['unid'] );
                }
}

add_action( 'admin_post_orderdeerupdate', 'prefix_admin_orderdeerupdate' );
add_action( 'admin_post_nopriv_orderdeerupdate', 'prefix_admin_orderdeerupdate' );

// SHEEP
function prefix_admin_ordersheepupdate() {

    // Extremley Important to set
            global $wpdb;
    
            //create variables
            $l_shoulder = $_POST['l_shoulder']; if($l_shoulder == 'on'){$l_shoulder=1;}else{$l_shoulder=0;}
            $shoulder_lb = $_POST['shoulder_lb'];
            $l_flaps = $_POST['l_flaps']; if($l_flaps == 'on'){$l_flaps=1;}else{$l_flaps=0;}
            $flaps_lb = $_POST['flaps_lb'];
            $l_loin = $_POST['l_loin']; if($l_loin == 'on'){$l_loin=1;}else{$l_loin=0;}
            $loin_lb = $_POST['loin_lb'];
            $l_leg = $_POST['l_leg']; if($l_leg == 'on'){$l_leg=1;}else{$l_leg=0;}
            $leg_lb = $_POST['leg_lb'];
            $spins = $_POST['spins'];
    
            //create small goods variable
            $url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}
    
            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    'l_shoulder'       =>      $l_shoulder ,
                    'shoulder_lb'      =>      $shoulder_lb ,
                    'l_flaps'          =>      $l_flaps ,
                    'flaps_lb'         =>      $flaps_lb ,
                    'l_loin'          =>      $l_loin ,
                    'loin_lb'          =>      $loin_lb ,
                    'l_leg'            =>      $l_leg ,
                    'leg_lb'           =>      $leg_lb ,
                    'spins'           =>      $spins ,
                    'small'             => $url
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
                 // small goods send
                if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
                }    else   {
                    wp_redirect( home_url() . '/confirm-sheep?n=' . $_POST['unid'] );
                }
}

add_action( 'admin_post_ordersheepupdate', 'prefix_admin_ordersheepupdate' );
add_action( 'admin_post_nopriv_ordersheepupdate', 'prefix_admin_ordersheepupdate' );

// ALPACA LLAMA
function prefix_admin_orderalpacallamaupdate() {

    // Extremley Important to set
            global $wpdb;
    
            //create variables
            $l_shoulder = $_POST['l_shoulder']; if($l_shoulder == 'on'){$l_shoulder=1;}else{$l_shoulder=0;}
            $shoulder_lb = $_POST['shoulder_lb'];
            $l_flaps = $_POST['l_flaps']; if($l_flaps == 'on'){$l_flaps=1;}else{$l_flaps=0;}
            $flaps_lb = $_POST['flaps_lb'];
            $l_loin = $_POST['l_loin']; if($l_loin == 'on'){$l_loin=1;}else{$l_loin=0;}
            $loin_lb = $_POST['loin_lb'];
            $l_leg = $_POST['l_leg']; if($l_leg == 'on'){$l_leg=1;}else{$l_leg=0;}
            $leg_lb = $_POST['leg_lb'];  
    
            //create small goods variable
            $url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}
    
            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    'l_shoulder'       =>      $l_shoulder ,
                    'shoulder_lb'      =>      $shoulder_lb ,
                    'l_flaps'          =>      $l_flaps ,
                    'flaps_lb'         =>      $flaps_lb ,
                    'l_loin'           =>      $l_loin ,
                    'loin_lb'          =>      $loin_lb ,
                    'l_leg'            =>      $l_leg ,
                    'leg_lb'           =>      $leg_lb ,
                    'spins'            =>      $_POST['spins'],
                    'small'            =>      $url
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
                // small goods send
                if ($url == 1) { wp_redirect( home_url() . '/order-small-goods?n=' . $_POST['unid'] );  
                }    else   {
                    wp_redirect( home_url() . '/confirm-alpacallama?n=' . $_POST['unid'] );
                }
}

add_action( 'admin_post_orderalpacallamaupdate', 'prefix_admin_orderalpacallamaupdate' );
add_action( 'admin_post_nopriv_orderalpacallamaupdate', 'prefix_admin_orderalpacallamaupdate' );

// SMALL GOODS
function prefix_admin_ordersmallgoodsupdate() {

    // Extremley Important to set
            global $wpdb;
    
            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    't_porkherb'          => $_POST['t_porkherb'] ,
                    't_lambmint'          => $_POST['t_lambmint'] ,
                    't_bratwurst'         => $_POST['t_bratwurst'] ,
                    't_bratwurst_fennel'  => $_POST['t_bratwurst_fennel'] ,
                    't_texan_chile'       => $_POST['t_texan_chile'] ,
                    't_chorizo'           => $_POST['t_chorizo'] ,
                    't_tomatobasil'       => $_POST['t_tomatobasil'] ,
                    't_herbgarlic'        => $_POST['t_herbgarlic'] ,
                    't_peppersonion'      => $_POST['t_peppersonion'] ,
                    't_gf_capsicum'       => $_POST['t_gf_capsicum'] ,
                    't_plain'             => $_POST['t_plain'] ,
                    't_gf_plain'          => $_POST['t_gf_plain'] ,
                    't_saveloys'          => $_POST['t_saveloys'] ,
                    't_gf_saveloys'       => $_POST['t_gf_saveloys'] ,
                    't_create'            => $_POST['t_create'] ,
                    't_patties'           => $_POST['t_patties'] ,
                    't_gf_patties'        => $_POST['t_gf_patties'] ,
                    't_salami'            => $_POST['t_salami'] ,
                    'salami_t'            => $_POST['salami_t'] ,
                    'salami_s'            => $_POST['salami_s'] 
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
               wp_redirect( home_url() . '/confirm-' . $_POST['animal'] . '?n=' . $_POST['unid'] );  
               exit;
}

add_action( 'admin_post_ordersmallgoodsupdate', 'prefix_admin_ordersmallgoodsupdate' );
add_action( 'admin_post_nopriv_ordersmallgoodsupdate', 'prefix_admin_ordersmallgoodsupdate' );

// deals with variable set through form _POST
function prefix_admin_con1() {

    // Extremley Important to set
            global $wpdb;

            // Whats inserted
            $wpdb->update( meatorders , 
                          
                array(
                    'confirm'         => '1' 
                ) , 

                // where          
                array(          
                    'unid' => $_POST['unid'] )
                );
    
                //email confirmations
                // $to = 'riley@rileybathurst.com';
                $tochk = 'info@canterburyhomekill.co.nz';
                $tosender = $_POST['email'];

                $subject = 'Canterbury Homekill Order: ' . $_POST['unid'];
    
                $top = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#ebebeb">
    
    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
        <tbody>
            <tr> 
                <table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">
                    
                    <tr>
                        <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                            <img src="http://canterburyhomekill.co.nz/wp-content/themes/CHK-0-3/img/CHK-logo-600.png" alt="canterburyhomekill logo" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                            <p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz Order '.
                                $_POST['unid'] .
                            '</p>
                        </td>
                    </tr>
            
                    <tr>
                        <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Name 
                                <strong>'.
                                    $_POST['name'].
                                '</strong>
                            </p>
                            
                            <p>
                                Date 
                                <strong>'.
                                    $_POST['timenow'].
                                '</strong>
                            </p>
                            
                            <p>
                                Phone  
                                <strong>'.
                                    $_POST['phone'].
                                '</strong>
                            </p>
                            
                            <p>
                                Mobile  
                                <strong>'.
                                    $_POST['phone2'].
                                '</strong>
                            </p>
                            
                            <p>
                                Order details 
                                <strong>'.
                                    $_POST['unid'].
                                '</strong>
                            </p>
                            
                            <p>
                                email  
                                <strong>'.
                                    $_POST['email'].
                                '</strong>
                            </p>
                            
                            <p>
                                Animal  
                                <strong>'.
                                    $_POST['amp'].
                                '</strong>
                            </p>
                            
                            <p>
                                Number of People  
                                <strong>'.
                                    $_POST['people'].
                                '</strong>
                            </p>
                            
                ';
    
                    $beef = ' 
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Beef Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Fillet  
                                <strong>'.
                                    $_POST['b_fillet'].
                                '</strong>
                                <em> '.
                                    $_POST['fillet_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Portherhouse   
                                <strong>'.
                                    $_POST['b_porterhouse'].
                                '</strong>
                                <em> '.
                                    $_POST['porterhouse_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                T-Bone  
                                <strong>'.
                                    $_POST['b_tbone'].
                                '</strong>
                                <em> '.
                                    $_POST['tbone_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Ribeye  
                                <strong>'.
                                    $_POST['b_ribeye'].
                                '</strong>
                                <em> '.
                                    $_POST['ribeye_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Rump Steak  
                                <strong>'.
                                    $_POST['b_rump'].
                                '</strong>
                                <em> '.
                                    $_POST['rump_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Topside   
                                <strong>'.
                                    $_POST['b_topside'].
                                '</strong>
                                <em> '.
                                    $_POST['topside_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Rolled Roast   
                                <strong>'.
                                    $_POST['b_rolledroast'].
                                '</strong>
                                <em> '.
                                    $_POST['rolledroast_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Wiener Schnitzel   
                                <strong>'.
                                    $_POST['b_weinerschnitzel'].
                                '</strong>
                                <em> '.
                                    $_POST['wienerschnitzel_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Silverside   
                                <strong>'.
                                    $_POST['b_silverside'].
                                '</strong>
                                <em> '.
                                    $_POST['silverside_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Blade  
                                <strong>'.
                                    $_POST['b_blade'].
                                '</strong>
                                <em> '.
                                    $_POST['blade_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Shin Fillet   
                                <strong>'.
                                    $_POST['b_shinfillet'].
                                '</strong>
                                <em> '.
                                    $_POST['shinfillet_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Chuck Steak   
                                <strong>'.
                                    $_POST['b_chucksteak'].
                                '</strong>
                                <em> '.
                                    $_POST['chucksteak_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Skirt Steak   
                                <strong>'.
                                    $_POST['b_skirtsteak'].
                                '</strong>
                                <em> '.
                                    $_POST['skirtsteak_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Mince   
                                <strong>'.
                                    $_POST['b_mince'].
                                '</strong>
                            </p>
                ';
    
                    $pig = ' 
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Pig Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Shoulder</strong>
                            
                            <p>
                                Rolled Shoulder  
                                <strong>'.
                                    $_POST['ps_rolledshoulder'].
                                '</strong>
                                <em> '.
                                    $_POST['rolledshoulder_ps'].
                                '</em>
                            </p>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $_POST['ps_bacon'].
                                '</strong>
                            </p>
                            
                            <p>
                                Pickled Pork  
                                <strong>'.
                                    $_POST['ps_pickledpork'].
                                '</strong>
                            </p>
                            
                            <p>
                                Chops  
                                <strong>'.
                                    $_POST['ps_chops'].
                                '</strong>
                            </p>
                            
                            <p>
                                Pressed Ham   
                                <strong>'.
                                    $_POST['ps_pressedham'].
                                '</strong>
                                <em> '.
                                    $_POST['pressedham_ps'].
                                '</em>
                            </p>
                            
                            <p>
                                Mince   
                                <strong>'.
                                    $_POST['ps_mince'].
                                '</strong>
                            </p>
                            
                            <p>
                                Diced Pork   
                                <strong>'.
                                    $_POST['ps_dicedpork'].
                                '</strong>
                            </p>
                            
                            <p>
                                Roast Jointed   
                                <strong>'.
                                    $_POST['ps_roastjointed'].
                                '</strong>
                                <em> '.
                                    $_POST['roastjointed_ps'].
                                '</em>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Loin</strong>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Chops   
                                <strong>'.
                                    $_POST['pl_chops'].
                                '</strong>
                            </p>
                            
                            <p>
                                Loin Steaks  
                                <strong>'.
                                    $_POST['pl_loinsteaks'].
                                '</strong>
                            </p>
                            
                            <p>
                                Roast Jointed   
                                <strong>'.
                                    $_POST['pl_roastjointed'].
                                '</strong>
                                <em> '.
                                    $_POST['roastjointed_pl'].
                                '</em>
                            </p>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $_POST['pl_bacon'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bacon Chops   
                                <strong>'.
                                    $_POST['pl_baconchops'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Belly</strong>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $_POST['pb_bacon'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bacon Strips    
                                <strong>'.
                                    $_POST['pb_baconstrips'].
                                '</strong>
                            </p>
                            
                            <p>
                                Rolled   
                                <strong>'.
                                    $_POST['pb_rolled'].
                                '</strong>
                            </p>
                            
                            <p>
                                Roast   
                                <strong>'.
                                    $_POST['pb_whole'].
                                '</strong>
                                <em> '.
                                    $_POST['whole_pb'].
                                '</em>
                            </p>
                            
                            <p>
                                Strips   
                                <strong>'.
                                    $_POST['pb_strips'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Leg</strong>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Ham On The Bone   
                                <strong>'.
                                    $_POST['pg_hamonthebone'].
                                '</strong>
                                <em> '.
                                    $_POST['hamonthebone_cook'].
                                '</em> '.
                                $_POST['hamonthebone_size'].
                            '</p>
                            
                            <p>
                                Pressed Ham   
                                <strong>'.
                                    $_POST['pg_pressedham'].
                                '</strong>
                                <em> '.
                                    $_POST['pressedham_cook'].
                                '</em> '.
                                $_POST['pressedham_size'].
                            '</p>
                            
                            <p>
                                Roast   
                                <strong>'.
                                    $_POST['pg_roast'].
                                '</strong>
                                <em> '.
                                    $_POST['roast_pg'].
                                '</em>
                            </p>
                            
                            <p>
                                Mince   
                                <strong>'.
                                    $_POST['pg_mince'].
                                '</strong>
                            </p>
                            
                            <p>
                                Diced   
                                <strong>'.
                                    $_POST['pg_diced'].
                                '</strong>
                            </p>
                            
                            <p>
                                Leg Steaks   
                                <strong>'.
                                    $_POST['pg_legsteaks'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $_POST['pg_bacon'].
                                '</strong>
                            </p>
                ';
                    
                    $deer = ' 
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Deer Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Shoulder   
                                <strong>'.
                                    $_POST['v_shoulder'].
                                '</strong>
                                <em> '.
                                    $_POST['shoulder_v'].
                                '</em>
                            </p>
                            
                            <p>
                                Loin    
                                <strong>'.
                                    $_POST['v_loin'].
                                '</strong>
                                <em> '.
                                    $_POST['loin_v'].
                                '</em>
                            </p>
                            
                            <p>
                                Leg    
                                <strong>'.
                                    $_POST['v_leg'].
                                '</strong>
                                <em> '.
                                    $_POST['leg_v'].
                                '</em> '.
                                $_POST['v_leg_whole_half'].
                            '</p>
                ';                
    
                    $sheep = ' 
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Sheep Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Shoulder  
                                <strong>'.
                                    $_POST['l_shoulder'].
                                '</strong>
                                <em> '.
                                    $_POST['shoulder_lb'].
                                '</em>
                            </p>
                            
                            <p>
                                Loin   
                                <strong>'.
                                    $_POST['l_loin'].
                                '</strong>
                                <em> '.
                                    $_POST['loin_lb'].
                                '</em>
                            </p>
                            
                            <p>
                                Flaps  
                                <strong>'.
                                    $_POST['l_flaps'].
                                '</strong>
                                <em> '.
                                    $_POST['flaps_lb'].
                                '</em>
                            </p>
                            
                            <p>
                                Leg  
                                <strong>'.
                                    $_POST['l_leg'].
                                '</strong>
                                <em> '.
                                    $_POST['leg_lb'].
                                '</em>
                            </p>
                ';
    
                    $alpacalama = ' 
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Alpaca / Llama Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Shoulder  
                                <strong>'.
                                    $_POST['l_shoulder'].
                                '</strong>
                                <em> '.
                                    $_POST['shoulder_lb'].
                                '</em>
                            </p>
                            
                            <p>
                                Loin   
                                <strong>'.
                                    $_POST['l_loin'].
                                '</strong>
                                <em> '.
                                    $_POST['loin_lb'].
                                '</em>
                            </p>
                            
                            <p>
                                Flaps  
                                <strong>'.
                                    $_POST['l_flaps'].
                                '</strong>
                                <em> '.
                                    $_POST['flaps_lb'].
                                '</em>
                            </p>
                            
                            <p>
                                Leg  
                                <strong>'.
                                    $_POST['l_leg'].
                                '</strong>
                                <em> '.
                                    $_POST['leg_lb'].
                                '</em>
                            </p>
                ';
    
                $tail = '<p>
                                Special Instructions     
                                <strong>'.
                                    $_POST['spins'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Small Goods Options</h3>
                            
                            <p>All weights in KG</p3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                    
                            <p>
                                Pork &amp; Herb Sausages    
                                <strong>'.
                                    $_POST['t_porkherb'].
                                '</strong>
                            </p>
                            
                            <p>
                                Lamb &amp; Mint Sausages    
                                <strong>'.
                                    $_POST['t_lambmint'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bratwurst Sausages    
                                <strong>'.
                                    $_POST['t_bratwurst'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bratwurst with Fennel Sausages    
                                <strong>'.
                                    $_POST['t_bratwurst_fennel'].
                                '</strong>
                            </p>
                    
                            <p>
                                Texan Chile Sausages    
                                <strong>'.
                                    $_POST['t_texan_chile'].
                                '</strong>
                            </p>
                    
                            <p>
                                Chorizo Sausages    
                                <strong>'.
                                    $_POST['t_chorizo'].
                                '</strong>
                            </p>
                            
                            <p>
                                Tomato &amp; Basil Sausages    
                                <strong>'.
                                    $_POST['t_tomatobasil'].
                                '</strong>
                            </p>
                            
                            <p>
                                Herb &amp; Garlic Sausages    
                                <strong>'.
                                    $_POST['t_herbgarlic'].
                                '</strong>
                            </p>
                            
                            <p>
                                Green Capsicum &amp; Onion Sausages    
                                <strong>'.
                                    $_POST['t_peppersonion'].
                                '</strong>
                            </p>
                            
                            <p>
                                Green Capsicum &amp; Onion <em>- GF</em> Sausages    
                                <strong>'.
                                    $_POST['t_gf_capsicum'].
                                '</strong>
                            </p>
                            
                            <p>
                                Plain Sausages    
                                <strong>'.
                                    $_POST['t_plain'].
                                '</strong>
                            </p>
                            
                            <p>
                                Plain <em>- GF</em> Sausages    
                                <strong>'.
                                    $_POST['t_gf_plain'].
                                '</strong>
                            </p>
                            
                            <p>
                                Saveloys    
                                <strong>'.
                                    $_POST['t_saveloys'].
                                '</strong>
                            </p>
                            
                            <p>
                                Saveloys <em>- GF</em>    
                                <strong>'.
                                    $_POST['t_gf_saveloys'].
                                '</strong>
                            </p>
                            
                            <p>
                                Build Your Own Sausages    
                                <strong>'.
                                    $_POST['t_create'].
                                '</strong>
                            </p>
                            
                            <p>
                                Patties    
                                <strong>'.
                                    $_POST['t_patties'].
                                '</strong>
                            </p>
                            
                            <p>
                                Patties <em>- GF</em>    
                                <strong>'.
                                    $_POST['t_gf_patties'].
                                '</strong>
                            </p>
                            
                            <p>
                                Salami    
                                <strong>'.
                                    $_POST['t_salami'].
                                '</strong>
                                <em> '.
                                    $_POST['salami_t'].
                                '</em>
                                <strong> '.
                                    $_POST['salami_s'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   
                    </tr>
                    
                    <tr>
                        <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: center;" align="center">
                            <span style="font-size: 11px; color: #575757; line-height: 200%; font-family: arial; text-decoration: none;">
                                Canterbury Homekill. 26 Merton Road. RD 1. Rangiora 7471<br />
                                <a href="mailto:info@canterburyhomekill.co.nz">info@canterburyhomekill.co.nz</a><br />
                                Phone (03) 313 4771
                            </span>
                        </td>
                    </tr>
 
            </table>
        </tr>
    </tbody>
</table>
</body>
</html>
                ';
    
                // fixes orders 0 and 1's to Y's and N's
                $number = array("0", "1");
                $letter = array("N", "Y");
    
                // pick the right animal
                if ($_POST['animal'] == 'beef') {
                    $middle = str_replace($number, $letter, $beef);
                } elseif ($_POST['animal'] == 'pig') {
                    $middle = str_replace($number, $letter, $pig);
                } elseif ($_POST['animal'] == 'deer') {
                    $middle = str_replace($number, $letter, $deer);
                } elseif ($_POST['animal'] == 'sheep') {
                    $middle = str_replace($number, $letter, $sheep);  
                } elseif ($_POST['animal'] == 'alpacallama') {
                    $middle = str_replace($number, $letter, $alpacallama);
                } 

        // places both parts of the message together    
                $message = 
                            $top . 
                            $middle . 
                            $tail;

                add_filter( 'wp_mail_from_name', function( $name ) {
                   return 'Canterbury Homekill';
                });

                add_filter( 'wp_mail_content_type', 'set_content_type' );
                    function set_content_type( $content_type ) {
                        return 'text/html';
                }

               // wp_mail($to , $subject , $message );
                wp_mail($tosender , $subject , $message );
                wp_mail($to , $subject , $message );
                wp_mail($tochk , $subject , $message );
    
               wp_redirect( home_url() . '/thanks' );  
               exit;
}

add_action( 'admin_post_con1', 'prefix_admin_con1' );
add_action( 'admin_post_nopriv_con1', 'prefix_admin_con1' );

// deals with variable set through form _POST
function prefix_admin_contact() {
    
    // Check if captcha has been checked     
    $captcha = $_POST['g-recaptcha-response'];

    // If no captcha 
    if(!$captcha){
        // Redirect
        wp_redirect( home_url() . '/sorry' );
        exit;
    }
	
    // When the captcha is checked make sure its not spam
    $secretKey = "6LdEgUcUAAAAAPXndUG0MjwmvFxU72E9xx3PVVas";
	$ip = $_SERVER['REMOTE_ADDR'];
    
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
            
        // Spam    
          wp_redirect( home_url() . '/sorry' );
            
        } else {
            
            // Not Spam and checked captcha

            //email to info@canterburyhomekill.co.nz
            // $to = 'riley@rileybathurst.com';
            $tochk = 'info@canterburyhomekill.co.nz';
            $to2 = $_POST['email'];

            $subject = 'Homekill Website enquiry: ' . $_POST['name'];

            $txt = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <title>Untitled Document</title>
                    </head>

                    <body bgcolor="#ebebeb">

                        <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
                            <tbody>
                                <tr> 
                                    <table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">

                                        <tr>
                                            <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                                                <img src="http://canterburyhomekill.co.nz/wp-content/themes/CHK-0-3/img/CHK-logo-600.png" alt="canterburyhomekill logo" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                                                <p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">

                                                <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

                                                <p>
                                                    Thanks for your contact, '.
                                                        $_POST['name'] .
                                                    ' we will be in touch ASAP.
                                                </p>

                                                <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   

                                                <p>
                                                    For your records the message was, 
                                                </p>

                                                <p> ' .
                                                    $_POST['details'] .
                                                '</p>

                                                <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   

                                                <p>
                                                    We will contact you back on, ' .
                                                        $_POST['email'] .
                                                    ' or '.
                                                        $_POST['phone'] .
                                                '</p>

                                                <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/> 

                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: center;" align="center">
                                                <span style="font-size: 11px; color: #575757; line-height: 200%; font-family: arial; text-decoration: none;">
                                                    Canterbury Homekill. 26 Merton Road. RD 1. Rangiora 7471<br />
                                                    <a href="mailto:info@canterburyhomekill.co.nz">info@canterburyhomekill.co.nz</a><br />
                                                    Phone (03) 313 4771
                                                </span>
                                            </td>
                                        </tr>

                                    </table>
                                </tr>
                            </tbody>
                        </table>
                    </body>
                </html>
            ';
    
            add_filter( 'wp_mail_from_name', function( $name ) {
               return 'Canterbury Homekill';
            });

            add_filter( 'wp_mail_content_type', 'set_content_type' );
                function set_content_type( $content_type ) {
                    return 'text/html';
            }

            wp_mail($to , $subject , $txt );
            wp_mail($tochk , $subject , $txt );
            wp_mail($to2 , $subject , $txt );

            wp_redirect( home_url() . '/thanks' );  
            
        }
    
    exit;

}

add_action( 'admin_post_contact', 'prefix_admin_contact' );
add_action( 'admin_post_nopriv_contact', 'prefix_admin_contact' );



























// deals with variable set through form _POST
function prefix_admin_booking() {

    //email to info@canterburyhomekill.co.nz
    // $to = 'riley@rileybathurst.com';
    $tochk = 'info@canterburyhomekill.co.nz';
    $to2 = $_POST['email'];
    
    $subject = 'Homekill Booking enquiry: ' . $_POST['name'];
    
    $txt = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Untitled Document</title>
        </head>

        <body bgcolor="#ebebeb">

            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
                <tbody>
                    <tr> 
                        <table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">

                            <tr>
                                <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                                    <img src="http://canterburyhomekill.co.nz/wp-content/themes/CHK-0-4/img/CHK-logo-600.png" alt="canterburyhomekill logo" />
                                </td>
                            </tr>

                            <tr>
                                <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                                    <p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">

                                    <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

                                    <p>
                                        Thanks for your booking enquiry, '.
                                            $_POST['name'] .
                                        ' we will be in touch ASAP.
                                    </p>

                                    <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   

                                    <p>
                                        For your records the message was, 
                                    </p>

                                    <p> ' .
                                        $_POST['details'] .
                                    '</p>

                                    <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   

                                    <p>
                                        We will contact you back on, ' .
                                            $_POST['email'] .
                                        ' or '.
                                            $_POST['phone'] .
                                    '</p>
                                    
                                    <p>
                                        We recorded your address as, ' .
                                            $_POST['address'] .
                                    '</p>

                                    <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/> 

                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: center;" align="center">
                                    <span style="font-size: 11px; color: #575757; line-height: 200%; font-family: arial; text-decoration: none;">
                                        Canterbury Homekill. 26 Merton Road. RD 1. Rangiora 7471<br />
                                        <a href="mailto:info@canterburyhomekill.co.nz">info@canterburyhomekill.co.nz</a><br />
                                        Phone (03) 313 4771
                                    </span>
                                </td>
                            </tr>

                        </table>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
    ';
    
    add_filter( 'wp_mail_from_name', function( $name ) {
	   return 'Canterbury Homekill';
    });
    
    add_filter( 'wp_mail_content_type', 'set_content_type' );
        function set_content_type( $content_type ) {
            return 'text/html';
    }
    
    wp_mail($to , $subject , $txt );
    wp_mail($tochk , $subject , $txt );
    wp_mail($to2 , $subject , $txt );
    
    wp_redirect( home_url() . '/thanks' );  
    exit;

}

add_action( 'admin_post_booking', 'prefix_admin_booking' );
add_action( 'admin_post_nopriv_booking', 'prefix_admin_booking' );










































// simply redirects to the search query _POST
function prefix_admin_viewresults() {
    
    wp_redirect( home_url() . '/view-results/?r=' . $_POST['name']  );  
    exit;

}

add_action( 'admin_post_viewresults', 'prefix_admin_viewresults' );
add_action( 'admin_post_nopriv_viewresults', 'prefix_admin_viewresults' );

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function my_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( 'subscriber', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

add_filter( 'login_redirect', create_function( '$url,$query,$user', 'return home_url();' ), 10, 3 );

// create new row on database then redirects to a new page
function logout_redirect()
    {
    
        // updater is a placeholder page so functions are here
        if(is_page ('logout')){
        
            wp_logout(); 

             // Redirect
                wp_redirect( home_url());
                exit();

        }
    }
// Starts the action
add_action( 'template_redirect', 'logout_redirect' );

?>