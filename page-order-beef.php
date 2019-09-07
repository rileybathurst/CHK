<?php
/*  
 *  Template Name: order beef
 */ 
?>

<?php get_header(); ?>

<?php 
    //define variable for url bar .php?n=
    $unid = $_GET['n'];
?>

<div class="row over-background border drop" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->

        <!-- Start the main container -->
        <div class="container" role="document">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 

                    $format = get_post_format();
                    get_template_part( 'format', $format );
                    ?>

                    
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php include("page-title.php"); ?>

                            <!-- post -->
                            <div class="row">
                                <div class="small-12 medium-8 large-12 columns end text-justify">
                                
                                <p>All options, except T-Bone are required and if an option is selected with a choice avaliable it must be made.</p>
                                    
                                <h3>We do not process beef in quarters.</h3>    
                                    
                                <p>If you don't understand an option feel free to <a href="contact.php">contact us</a><br />
                                on <a href="tel:03-313-4771">(03) 313 4771</a></p>
                                
                                </div>
                            </div>
                                
                        <!-- start form -->
    
                                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" data-abide novalidate>
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                                    </div>
                                    
                                    <input type="hidden" name="action" value="orderbeefupdate">
                                    <input type="hidden" name="data" value="orderbeefupdateid"><!-- slightly different value to differentiate, not used -->
                                    
                                    <!-- use the url unid variable in the form to keep it on the same one -->
                                    <input type="hidden" name="unid" value="<?php echo $unid; ?>">
                                
                                    <!-- b_fillet fillet_bf-->
                                    
                                    <div class="row second-background">
                                        
                                            <div class="small-6 columns">
                                                    <input id="b_fillet" type="checkbox" name="b_fillet" required checked>
                                                    <label for="b_fillet" class="text-right">Fillet</label>
                                                    <small class="form-error">An option is required.</small>  
                                            </div>
                                            <div class="small-6 columns">
                                                <select class="small-12 columns" name="fillet_bf" id="fillet_bf" required>
                                                        <option value="" disabled selected>Select</option>
                                                        <option name="fillet_bf" value="steak">Steak</option>
                                                        <option name="fillet_bf" value="whole">Whole</option>
                                                        <option name="fillet_bf" value="half">Half</option>
                                                        <option name="fillet_bf" value="third">Third</option>
                                                </select>
                                            </div>
                                        
                                    </div>
                                    
                            <!-- b_porterhouse porterhouse_bf-->
                                    
                                    <div class="row drop">
                                        <div class="small-6 columns">
                                            <input id="b_porterhouse" name="b_porterhouse" type="checkbox" required checked>
                                            <label for="b_porterhouse" class="text-right">Porterhouse</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="porterhouse_bf" id="porterhouse_bf" required>
                                                <option name="porterhouse_bf" value="" disabled selected>Select</option>
                                                <option name="porterhouse_bf" value="steak">Steak</option>
                                                <option name="porterhouse_bf" value="whole">Whole</option>
                                                <option name="porterhouse_bf" value="half">Half</option>
                                                <option name="porterhouse_bf" value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- b_tbone -->        
                                    <div class="row second-background">
                                        <div class="small-12 columns"><!-- secondary columns for uncollpase -->
                                            <input id="b_tbone" name="b_tbone" type="checkbox">
                                            <label for="b_tbone">T-Bone</label>
                                        </div>
                                    </div>

                            <!-- b_ribeye ribeye_bf -->            
                                    <div class="row drop">
                                        <div class="small-6 columns">
                                            <input id="b_ribeye" name="b_ribeye" type="checkbox" required checked>
                                            <label for="b_ribeye">Ribeye</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="ribeye_bf" id="ribeye_bf" required>
                                                <option name="ribeye_bf" value="" disabled selected>Select</option>
                                                <option name="ribeye_bf" value="steak">Steak</option>
                                                <option name="ribeye_bf" value="whole">Whole</option>
                                                <option name="ribeye_bf" value="half">Half</option>
                                                <option name="ribeye_bf" value="third">Third</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- b_rump rump_bf -->
                                    
                                        <div class="row second-background">
                                            
                                                <div class="small-6 columns">
                                                    <input id="b_rump" type="checkbox" name="b_rump" required checked>
                                                    <label for="b_rump">Rump</label>
                                                    <small class="form-error">An option is required.</small>
                                                </div>
                                                <div class="small-6 columns">
                                                    <select class="small-12 columns" name="rump_bf" id="rump_bf" required>
                                                                <option name="rump_bf" value="" disabled selected>Select</option>
                                                                <option name="rump_bf" value="steak">Steak</option>
                                                                <option name="rump_bf" value="roast">Roast</option>
                                                    </select>
                                                </div>
                                           
                                    </div>

                            <!-- b_topside topside_bf -->        
                                    <div class="row drop">        
                                        <div class="small-6 columns"><input id="b_topside" name="b_topside" type="checkbox" required checked>
                                            <label for="b_topside">Topside</label><small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="topside_bf" id="topside_bf" required>
                                                <option name="topside_bf" value="" disabled selected>Select</option>
                                                <option name="topside_bf" value="steak">Steak</option>
                                                <option name="topside_bf" value="roast">Roast</option>
                                                <option name="topside_bf" value="schnitzel">Schnitzel</option>
                                                <option name="topside_bf" value="tenderized">Tenderized</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- b_rolledroast rollesroast_bf -->
                                    
                                    <div class="row second-background">
                                            
                                        <div class="small-6 columns"><input id="b_rolledroast" name="b_rolledroast" type="checkbox" required checked>
                                            <label for="b_rolledroast">Rolled Roast</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                       <div class="small-6 columns">
                                            <select class="small-12 columns" name="rolledroast_bf" id="rolledroast_bf" required>
                                                    <option name="rolledroast_bf" value="" disabled selected>Select</option>
                                                    <option name="rolledroast_bf" value="mince">Mince</option>
                                                    <option name="rolledroast_bf" value="rolled roast">Rolled Roast</option>
                                            </select>
                                        </div>
                                           
                                    </div>
                                    

                            <!-- b_weinerschnitzel weinerschnitzel_bf -->
                                    <div class="row drop">
                                        <div class="small-6 columns">
                                            <input id="b_weinerschnitzel" type="checkbox" name="b_weinerschnitzel" required checked>
                                            <label for="b_weinerschnitzel">Weiner Schnitzel</label><small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="weinerschnitzel_bf" id="weinerschnitzel_bf" required>
                                                <option name="weinerschnitzel_bf" value="" disabled selected>Select</option>
                                                <option name="weinerschnitzel_bf" value="schnitzel">Schnitzel</option>
                                                <option name="weinerschnitzel_bf" value="steak">Steak</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- b_silverside silverside_bf -->
                                    
                                    <div class="row second-background">
                                        <div class="small-6 columns">
                                            <input id="b_silverside" name="b_silverside" type="checkbox" required checked>
                                            <label for="b_silverside">Silverside</label>
                                            <small class="form-error">An option is required.</small>
                                        </div>
                                            <div class="small-6 columns">
                                        <select class="small-12 columns" name="silverside_bf" id="silverside_bf" required>
                                                <option name="silverside_bf" value="" disabled selected>Select</option>
                                                <option name="silverside_bf" value="roast">Roast</option>
                                                <option name="silverside_bf" value="corned">Corned</option>
                                                <option name="silverside_bf" value="steak">Steak</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- b_blade blade_bf -->
                                    <div class="row drop">
                                        <div class="small-6 columns"><input id="b_blade" name="b_blade" type="checkbox" required checked>
                                            <label for="b_blade">Blade</label><small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="blade_bf" id="blade_bf" required>
                                                <option name="blade_bf" value="" disabled selected>Select</option>
                                                <option name="blade_bf" value="steak">Steak</option>
                                                <option name="blade_bf" value="roast">Roast</option>
                                                <option name="blade_bf" value="tenderized">Tenderized</option>
                                            </select>
                                        </div>
                                        
                                        <div class="small-12 columns drop">
                                            <p>When Blade is left as roast it becomes a bolar roast and when cut as a steak it’s just blade steak. <em>There are x2 Bolars on a body of beef.</em></p>
                                        </div>
                                    </div>

                            <!-- b_shinfillet shinfillet_bf -->
                                    
                                        <div class="row second-background">
                                            
                                                <div class="small-6 columns"><input id="b_shinfillet" name="b_shinfillet" type="checkbox" required checked>
                                                    <label for="b_shinfillet">Shin Fillet</label>
                                                    <small class="form-error">An option is required.</small>
                                                </div>
                                            <div class="small-6 columns">
                                                <select class="small-12 columns" name="shinfillet_bf" id="shinfillet_bf" required>
                                                        <option name="shinfillet_bf" value="" disabled selected>Select</option>
                                                        <option name="shinfillet_bf" value="stew">Stew</option>
                                                        <option name="shinfillet_bf" value="mince">Mince</option>
                                                        <option name="shinfillet_bf" value="onthebone">On The Bone</option>
                                                    </select>
                                                </div>
                                           
                                    </div>

                            <!-- b_chucksteak chucksteak_bf -->
                                    <div class="row drop">
                                        <div class="small-6 columns"><input id="b_chucksteak" name="b_chucksteak" type="checkbox" required checked>
                                            <label for="b_chucksteak">Chuck Steak</label><small class="form-error">An option is required.</small>
                                        </div>
                                        <div class="small-6 columns">
                                            <select class="small-12 columns" name="chucksteak_bf" id="chucksteak_bf" required>
                                                <option name="chucksteak_bf" value="" disabled selected>Select</option>
                                                <option name="chucksteak_bf" value="stew">Stew</option>
                                                <option name="chucksteak_bf" value="mince">Mince</option>
                                            </select>
                                        </div>
                                    </div>

                            <!-- b_skirtsteak skirtsteak_bf -->
                                    
                                        <div class="row second-background">
                                            
                                            <div class="small-6 columns"><input id="b_skirtsteak" name="b_skirtsteak" type="checkbox" required checked>
                                                <label for="b_skirtsteak">Skirt Steak</label>
                                                <small class="form-error">An option is required.</small>
                                            </div>
                                            <div class="small-6 columns">
                                                <select class="small-12 columns" name="skirtsteak_bf" id="skirtsteak_bf" required>
                                                    <option name="skirtsteak_bf" value="" disabled selected>Select</option>
                                                    <option name="skirtsteak_bf" value="stew">Stew</option>
                                                    <option name="skirtsteak_bf" value="mince">Mince</option>
                                                </select>
                                            </div>

                                    </div>

                            <!-- b_mince -->
                                    <div class="row drop">
                                        <div class="small-12 columns"><input id="b_mince" name="b_mince" type="checkbox" required>
                                            <label for="b_mince">Mince</label><small class="form-error">An option is required.</small>
                                        </div>
                                    </div>

                            <!-- order small goods and special instructions -->        
                                    <?php include("order-extra.php"); ?>
                            
                            <!-- next -->
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <button type="submit" id="add" name="add">Next Step</button>
                                        </div>
                                    </div>

                                </form>
                                
                        </div><!-- small-12 columns -->

                    <?php endwhile; ?><!-- while have posts -->

                <?php else : ?>
                    <div class="row">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
                            <p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
                         </div><!--.entry-->
                    </div><!-- else row -->

                <?php endif; ?><!-- if have posts -->
            
            </div><!-- container -->
        
        </div><!-- equilizer watch -->

    <?php get_sidebar(); ?>
        
</div><!-- row -->
			
<?php get_footer(); ?>        