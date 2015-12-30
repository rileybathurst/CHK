<?php echo file_get_contents("header.php"); ?> 

<div class="row over-background border drop-20" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->
        
        <h2 class="small-text-center large-text-left drop-20">Welcome to Canterbury</h2>
        <h2 class="small-text-center large-text-left">Homekill Services Ltd</h2>

        <p class="drop-20">With over 30 years combined experience in the butchering industry, Canterbury Homekill Services prides itself in offering a professional, honest service throughout Canterbury. We personally guarantee the return of all your meat, processed, packaged and labeled to 
supermarket standards.</p> 
    
        <div class="row">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner a2"><a href="about.php">Read More About Us</a></h4>
                </div>
            </div>
        </div>
        
        <div><!-- How -->
            <h2>HOW CHK WORKS</h2>
            <p>Canterbury Homekill Starts either with the slaughter of your animal or we can take it deceased.</p>

            <p>For CHK to be able to take your animal you must either have been activeley involved in the day to day maintenance of the animal, including providing for the physical, health and behavaioral needs of the animal for at least 28 days;</p>
            
            <p>Or a farmer of animals of this kind.</p>
            
            <p>Or wild game - which you do not need to be actively involved with.</p>
            
            <!--<h4 class="highlight">You must get your cuts in the day your animal is killed either by website or phone.</h4>-->
            <div class="flagbanner">
                <p class="flagbuttonbanner a2">You must get your cuts in the day your<br />
                    animal is killed either by website or phone.
                </p>
            </div>
            
            <p>We work with our four specialized animals, cow, deer, pig, sheep, you can fill in the online cut form, with any special instructions your require. However we do work with other animals, please feel free to enquire with how we can help with any animals you have.</p>

            <p>Small goods come in a minimum of 5kg per sausage flavour or 4 salami.</p>
        
            <div class="row">   
                <div class="small-12 columns">
                    <div class="banner drop-20">
                        <h3 class="button-banner a2"><a href="prices.php">Prices</a></h3>
                    </div>
                </div>
            </div>
        
        </div><!-- How -->
    </div><!-- First Two -->
             
    <div class="small-12 large-6 columns light-back" data-equalizer-watch><!-- Order Animals -->
 
        <div class="flagbanner drop-20">
            <h3 class="flagbuttonbanner a2"><a href="order.php">ORDER FORMS</a></h3>
        </div>               
                          
        <p class="drop-20 a4">We specialize in four animals. However we do work with other animals, please feel free to <a href="contact">enquire</a> with how we can help with any animals you have.</p>
                
        <div class="small-6 medium-3 large-6 columns">
            <a href="beef.php" class="fade"><img src="img/beef-flat.png" class="round any-center" alt="beef" /></a>
            <h3 class="center-button a2"><a href="beef.php">Beef</a></h3>
        </div>
                
        <div class="small-6 medium-3 large-6 columns a2">
            <a href="deer.php" class="fade"><img src="img/deer-flat.png" class="round any-center" alt="deer" /></a>
            <h3 class="center-button a2"><a href="deer.php">Deer</a></h3>
        </div>
    
        <div class="small-6 medium-3 large-6 columns a2">
            <a href="pig.php" class="fade"><img src="img/pig-flat.png" class="round any-center" alt="pig" /></a>
            <h3 class="center-button a2"><a href="pig.php">Pig</a></h3>
        </div>
    
        <div class="small-6 medium-3 large-6 columns a2 below-20">
            <a href="sheep.php" class="fade"><img src="img/sheep-flat.png" class="round any-center" alt="sheep" /></a>
            <h3 class="center-button a2"><a href="sheep.php">Sheep</a></h3>
        </div>
    
    </div><!-- Order Animals -->
        
    <div class="row collapse">   
        <div class="small-12 medium-6 columns">
            
            <div class="row un-collapse">
                <div class="small-12 columns">
                <form data-abide action="pro_on_enq.php" method="post">
                
                    <div class="flagbanner drop-20 bottom-20">
                        <h3 class="flagbuttonbanner a2"><a href="contact.php">Contact Us</a></h3>
                    </div>
                    
                    <p class="drop-20">Get in touch for general enquiries.</p>
                    
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
            
            <div class="flagbanner drop-20">
                <h3 class="flagbuttonbanner a2"><a href="order.php">Follow Us</a></h3>
            </div>
        
            <div class="small-12 columns drop-20 below-20">
                <div class="fb-like" data-href="https://www.facebook.com/pages/Canterbury-Home-Kill-Services-Noel-Womersley/140448676025235" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" data-colorscheme="dark"></div>
            </div>
                    
        </div><!-- columns -->
        </div><!-- row un-collapse --> 
        </div><!-- collumns -->

    
        <img src="img/iStock_000021247297_recipe.jpg" alt="cooking" class="medium-6 columns any-collapse show-for-medium-up">
    </div><!-- row collapse -->
</div>
    
<?php echo file_get_contents("footer.php"); ?> 