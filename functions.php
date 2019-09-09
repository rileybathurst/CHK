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

		/* Add featured image support */
		add_theme_support( 'post-thumbnails' );
	}
endif;
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
/*function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/CHK-logo-280.png);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
*/
// I think these have all been removed with front page logins and were not asahmed of using wp
/* Logo Links to my site */
/* function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Canterbury Homekill';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
*/

// remove p from posts - was making some wierd stuff with flagbanner and extremely custom styling
// I think with gutenberg I can now remove this
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

// can this be done with wp variables
// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'info@canterburyhomekill.co.nz';
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Canterbury Homekill';
});

// Bring in all the additional files
require get_parent_theme_file_path( '/inc/contact.php' );
require get_parent_theme_file_path( '/inc/welcome-email.php' );

// X Profile
require get_parent_theme_file_path( '/inc/xprofileupdate.php' );
require get_parent_theme_file_path( '/inc/xprofileaddress.php' );
require get_parent_theme_file_path( '/inc/xprofilephone.php' );
require get_parent_theme_file_path( '/inc/xprofilemobile.php' );

// Orders
require get_parent_theme_file_path( '/inc/decleration-beef.php' );
require get_parent_theme_file_path( '/inc/decleration-pig.php' );
require get_parent_theme_file_path( '/inc/decleration-deer.php' );
require get_parent_theme_file_path( '/inc/decleration-sheep.php' );
require get_parent_theme_file_path( '/inc/decleration-alpaca-llama.php' );

require get_parent_theme_file_path( '/inc/order-details-update.php' );
require get_parent_theme_file_path( '/inc/order-beef-update.php' );
require get_parent_theme_file_path( '/inc/order-pig-update.php' );
require get_parent_theme_file_path( '/inc/order-deer-update.php' );
require get_parent_theme_file_path( '/inc/order-sheep-update.php' );
require get_parent_theme_file_path( '/inc/order-alpaca-llama-update.php' );
require get_parent_theme_file_path( '/inc/order-small-goods-update.php' );

require get_parent_theme_file_path( '/inc/con1.php' );
require get_parent_theme_file_path( '/inc/booking.php' );

// view results search query _POST
function prefix_admin_viewresults() {
	wp_redirect( home_url() . '/view-results/?r=' . $_POST['name']  );  
	exit;
}
add_action( 'admin_post_viewresults', 'prefix_admin_viewresults' );
add_action( 'admin_post_nopriv_viewresults', 'prefix_admin_viewresults' );

// redirect login to home for customers to not have to deal with wordpress when it provides them very little functionality
add_filter( 'login_redirect', function( $url, $query, $user ) {
	return home_url();
}, 10, 3 );

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
