<?php
// Set BP to use wp_mail
add_filter( 'bp_email_use_wp_mail', '__return_true' );
// Set messages to HTML for BP sent emails.
add_filter( 'wp_mail_content_type', function( $default ) {
        if ( did_action( 'bp_send_email' ) ) {
                return 'text/html';
        }
        return $default;
} );
// Use HTML template
add_filter(
        'bp_email_get_content_plaintext',
        function( $content, $property, $transform, $bp_email ) {
                if ( ! did_action( 'bp_send_email' ) ) {
                        return $content;
                }
                return $bp_email->get_template( 'add-content' );
        },
        10,
        4
);
