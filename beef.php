<?php echo file_get_contents("header.php"); ?> 
            
<div class="row over-background border drop-20" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch>
    
        <div class="row">
            <div class="small-12 columns">
                <div class="flagbanner drop-20">
                    <h3 class="flagbuttonbanner">Beef</h3>
                </div> 
            </div>
        </div>
        
        <div class="row">
            <p class="small-12 columns drop-20">All price are plus GST.</p>
            <h3 class="small-12 columns">Slaughter Charges</h3>
            
            <p class="small-11 right columns">$100.00 per cow</p><div class="small-1 column"></div>
  
            <h3 class="small-12 columns">Processing Charges</h3>
           
            <p class="small-11 right columns">$1.10 per kg to process/package<br />
                $8.00 per side (2 Silversides in a whole body)</p><div class="small-1 column"></div>
        </div>
        
        <!-- will need a slaughter & process or process only option -->
        <div class="row">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner a2"><a href="order-decleration-beef.php">Order</a></h4>
                </div>
            </div>
        </div>
        
    </div>
    <?php echo file_get_contents("recipe.php"); ?>
</div>
        
<?php echo file_get_contents("footer.php"); ?> 