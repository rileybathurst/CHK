<?php
/*  
 *  Template Name: contact us
 */ 
?>

<?php get_header(); ?>

<div class="row over-background border drop" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

        <!-- Start the main container -->
        <div class="container" role="document">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 

                    /*
                     * Pull in a different sub-template, depending on the Post Format.
                     * 
                     * Make sure that there is a default '<tt>format.php</tt>' file to fall back to
                     * as a default. Name templates '<tt>format-link.php</tt>', '<tt>format-aside.php</tt>', etc.
                     *
                     * You should use this in the loop.
                     */

                    $format = get_post_format();
                    get_template_part( 'format', $format );
                    ?>

                    <div class="row"><!-- row open --> 
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- post open -->

                            <div class="small-12 columns"><!-- title -->

                                <?php include("page-title.php"); ?>
                                
                                <?php the_content(); ?>
                                
                                <?php the_post_thumbnail(); ?>
                        
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner drop">
                                            <h3 class="flagbuttonbanner a2">Contact Form</h3>
                                        </div>
                                    </div>
                                </div>
                                
                              
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate class="small-12 columns">
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                                    </div>

                                    <input type="hidden" name="action" value="contact">
                                    <input type="hidden" name="data" value="contact"><!-- slightly different value to differentiate, not used -->

                                    <!-- name -->
                                    <div class="small-12 columns">
                                        <input type="text" required pattern="[a-zA-Z]+" name="name" id="name"
                                            <?php if ( is_user_logged_in() ) { ?>
                                                value="<?php echo $current_user->display_name; ?>"
                                            <?php } else { ?>
                                                placeholder="Name"
                                            <?php } ?> 
                                        >
                                        <span class="form-error">Your name is required.</span>
                                    </div>

                                    <!-- email -->
                                    <div class="small-12 columns">
                                        <input type="text" required pattern="email" name="email" id="email"
                                            <?php if ( is_user_logged_in() ) { ?>
                                                value="<?php echo $current_user->user_email; ?>"
                                            <?php } else { ?>
                                                placeholder="email"
                                            <?php } ?>        
                                        >
                                        <span class="form-error">An email is required.</span>
                                    </div>

                                    <!-- phone -->
                                    <div class="small-12 columns">
                                        <input type="text" name="phone" id="phone" required pattern="number" 
                                            <?php if ( is_user_logged_in() ) { ?>
                                                value="<?php echo bp_get_profile_field_data('field=phone&user_id='.bp_loggedin_user_id()); ?>"
                                            <?php } else { ?>
                                                placeholder="phone"
                                            <?php } ?>      
                                        >
                                        <span class="form-error">A phone number is required.</span>
                                    </div>

                                    <!-- details -->
                                    <div class="small-12 columns">
                                        <textarea placeholder="Enter text here..." name="details" id="details"></textarea> 
                                    </div>
                                    
                                    <!-- recaptcha -->                                
                                    <div class="small-12 columns">
                                        <div class="g-recaptcha" data-sitekey="6LdEgUcUAAAAAAXTbz8HDCt4MunPvI6l4tmtrMzL"></div>
                                    </div>


                                    <!-- submit -->
                                    <fieldset class="small-12 columns drop">
                                        <button type="submit" value="Submit">Send</button>
                                    </fieldset>

                                </form>
                                
                                <!-- hack to fix height issue going on here - needs to be disconstructed to figure it out -->
                                <div class="row">
                                    <div class="small-12 columns">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>

                            </div><!-- small-12 -->

                        </div><!-- post -->
                    </div><!-- row -->

                <?php endwhile; ?><!-- while have posts -->

                <?php else : ?>
                    <div class="row">
                        <div class="small-12 columns">
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
                                <p>How about head back to the <a href="/" title="home">home page</a> and start again</p>

                            </div><!-- post -->
                        </div>
                    </div><!-- row -->

                <?php endif; ?><!-- if have posts -->

                <!-- single comments -->
                <?php if (is_single()) { ?>

                    <div class="row">
                        <div class="small-12 large-9 columns right">



                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                            ?>
                        </div><!-- columns -->
                    </div><!-- row -->

                    <!-- single pagination -->
                    <div class="row">
                        <ul class="full nobottom no-bullet">

                            <p class="small-6 columns">Check out some other posts</p>
                            <li class="small-3 columns"><p class=""><?php previous_post_link( '%link', '%title', TRUE ); ?></p></li>
                            <li class="small-3 columns"><p class="text-right"> <?php next_post_link( '%link', '%title', TRUE ); ?> </p></li>

                        </ul>	
                    </div><!-- row -->
                <?php } ?><!-- if is single -->

                <!-- pagination -->
                <?php if ( $wp_query->max_num_pages > 1 ) : ?>	
                    <div class="full drop">
                        <div class="row">
                            <h4 class="small-12 large-4 columns drop fall">Look deeper into the site</h4>
                            <h4 class="small-12 large-4 columns drop fall"><?php next_posts_link ( '<span class="meta-nav">&larr;</span> Older posts' ) ; ?></h4>
                            <h4 class="small-12 large-4 columns drop fall"><?php previous_posts_link ( '<span class="meta-nav">&rarr;</span> Newer posts' ) ; ?></h4>
                        </div>
                    </div>
                <?php endif; ?><!-- if pagination -->
            
        </div><!-- container -->
        
    </div><!-- equilizer watch -->
    
    <?php get_sidebar(); ?>
        
</div><!-- row -->
			
<?php get_footer(); ?>