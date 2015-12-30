<!-- top level page -->
<!-- use pro_on_enq.php -->
<?php echo file_get_contents("header.php"); ?> 
            
<div class="row over-background border drop-20" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->
    
        
        <div class="flagbanner drop-20">
            <h3 class="flagbuttonbanner">Contact Us</h3>
        </div>  
        
        <p class="drop-20">Phone: <a href="tel:03-313-4771">(03) 313 4771</a></p>
        <p class="drop-20">Emergency call out numbers - for animal in distress:</p>
        <p class="drop-20">Noel - <a href="tel:0274-312-804">0274 312 804</a></p>
        <p class="drop-20">Halena - <a href="tel:0276-313-550">0276 313 550</a></p>
        
        <p>Email: <a href="mailto:info@canterburyhomekill.co.nz">info@canterburyhomekill.co.nz</a></p>
        <p>Address:<br />
            <a href="https://www.google.com/maps/search/26+Merton+Road+RD+1+Rangiora+7471/@-43.2976205,172.5476656,14z/data=!3m1!4b1">26 Merton Road<br />
            RD 1<br />
            Rangiora 7471</a></p>
        
        <div id="map-canvas" class="below-20"></div>
        
        <p>Or fill in this form</p>
        
            <form data-abide action="pro_on_enq.php" method="post">
                
                    <div class="flagbanner drop-20 bottom-20">
                        <h3 class="flagbuttonbanner a2"><a href="contact.php">Contact Us</a></h3>
                    </div>
                    
                    <p class="drop-20">Get in touch for general enquiries</p>
                    
                    <div class="row">
                        <div class="small-12 columns drop-20">
                            <label>
                                <input type="text" name="name" id="name" placeholder="Name" required pattern="[a-zA-Z]+" /><small class="error">A name is required.</small>
                            </label>
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <label>
                                <input type="email" name="email" id="email" placeholder="email" required pattern="email"  /><small class="error">An email address is required.</small>
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <label>
                                <input type="text" name="phone" id="phone" placeholder="phone">
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <label></label> 
                                <textarea placeholder="Enter text here..." name="details" id="details"></textarea> 
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">   
                        <div class="small-12 columns">
                            <div class="banner drop-20">
                                <button type="submit" class="button-banner">Send</button>
                            </div>
                        </div>
                    </div>
                            
                </form>
    </div>

    <?php echo file_get_contents("recipe.php"); ?>

</div>
        
<?php echo file_get_contents("footer.php"); ?> 