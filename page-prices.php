<?php
/*  
 *  Template Name: prices
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
                                
                                <?php the_post_thumbnail(); ?>
                        
                                <h3>We specialize in several animals</h3>
                                
                                <p>Feel free to contact us about anything else.</p>
        
                                <p>All price are plus GST.</p>
 
                                <!-- sheep -->

                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Sheep')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>

                                <?php echo (get_page_by_title('Sheep')->post_content); ?>

                                <!-- pig -->
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Pig')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>

                                <?php echo (get_page_by_title('Pig')->post_content); ?>  

                                <!-- deer -->
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Deer')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>

                                <?php echo (get_page_by_title('Deer')->post_content); ?>

                                <!-- beef -->
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Beef')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>

                                <?php echo (get_page_by_title('Beef')->post_content); ?>

                                 <!-- Alpaca Llama -->
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Alpaca Llama')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>

                                <?php echo (get_page_by_title('Alpaca Llama')->post_content); ?>


                                <!-- small goods -->
                                     <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Small Goods')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>

                                <?php echo (get_page_by_title('Small Goods')->post_content); ?>
                                
                                <!-- delivery -->
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="flagbanner">
                                            <h3 class="flagbuttonbanner"><?php echo (get_page_by_title('Delivery')->post_title); ?></h3>
                                        </div> 
                                    </div>
                                </div>
                                <?php echo (get_page_by_title('Delivery')->post_content); ?>
                                
                                <h4><a href="<?php echo home_url(); ?>/order" class="button"><?php echo (get_page_by_title('Order')->post_title); ?></a></h4>
                                

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