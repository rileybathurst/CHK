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
		'primary'		=> 'Primary Menu',
		'secondary'		=> 'Secondary Menu',
		'footer'		=> 'Footer Menu',
		'social'		=> 'Social Links Menu',
	) );		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		/* Add featured image support */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
			//	'height'      => 190,
			//	'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#editor-styles
		add_theme_support( 'editor-styles' );
		add_editor_style( '/css/editor-styles.css' );
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
	// CHK style.
	wp_enqueue_style( 'chk-css', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_script( 'chk-js', get_template_directory_uri() . '/js/app.js', array(), false, true);

	// Print styles
	wp_enqueue_style( 'print', get_template_directory_uri() . '/css/print.css' , $deps = array(), $ver = false, $media = 'all' );

	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// hack way of updating a gutenberg block that needs a php variable but is a js file
	// enqueue the script we would like to pass our PHP variables to
	wp_enqueue_script( 'uncoverwp', get_template_directory_uri() . '/js/update.js', array(), false, true);
	// pass our PHP variables to the script we enqueued above using wp_localize_script()
	wp_localize_script(
		'uncoverwp', // the handle of the script we enqueued above
		'uncoverwp_script_vars', // object name to access our PHP variables from in our script
		// register an array of variables we would like to use in our script
		array(
			'template_directory' => get_template_directory_uri() // template_directory now contains the path to our template directory
		)
	);
}
add_action( 'wp_enqueue_scripts', 'chk_scripts' );

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
/* add_filter( 'wp_mail_from', function( $email ) {
	return 'info@canterburyhomekill.co.nz';
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Canterbury Homekill';
}); */

// Bring in all the additional files
require get_parent_theme_file_path( '/inc/contact.php' );

// * testing piece that will get removed
require get_parent_theme_file_path( '/inc/cap3.php' );
require get_parent_theme_file_path( '/inc/send-test.php' );

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
// this was having problems locally it needs to be live on the server
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

// Make a block to deal with the banners
function gutenberg_banner_block() {
	wp_register_script(
		'banner-block',
		get_template_directory_uri() . '/js/banner-block.js',
		array( 'wp-blocks', 'wp-element', 'wp-editor' )
		// filemtime( get_template_directory_uri() . '/js/banner-block.js' ) // I dont understand this one or know if its neccesary
	);
	wp_register_style(
		'banner-block-editor',
		get_template_directory_uri() . '/css/banner-block-editor.css',
		array( 'wp-edit-blocks' )
		// filemtime( get_template_directory_uri() . '/css/banner-block-editor.css' )
	);
	wp_register_script(
		'banner-block',
		get_template_directory_uri() . '/css/banner-block.js',
		array( )
		// filemtime( get_template_directory_uri() . '/css/banner-block.css' )
	);
	register_block_type( 'chk/banner-block', array(
		'style' => 'banner-block',
		'editor_style' => 'banner-block-editor',
		'editor_script' => 'banner-block',
		) 
	);
}
add_action( 'init', 'gutenberg_banner_block' );

// add some additional styles
function be_gutenberg_scripts() {

	wp_enqueue_script(
		'be-editor', 
		get_stylesheet_directory_uri() . '/js/block-styles.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/js/block-styles.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );
