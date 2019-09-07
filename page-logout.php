<?php
/*  
 *  Template Name: Logout
 */ 

get_header();

    if ( is_user_logged_in() ) { 
        
        wp_logout(); 

get_footer(); ?>