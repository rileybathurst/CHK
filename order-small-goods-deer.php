<?php

include("db.php");

$sql = "SELECT * FROM `meatorders` WHERE `unid`=$unid";

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

//form to update to unid
while($row = $result->fetch_assoc()){ 
    
echo file_get_contents("header.php"); ?> 
            
<div class="row over-background border drop-20" data-equalizer>
    <div class="small-12 large-6 columns" data-equalizer-watch><!-- First Two -->
        
        <div class="row">
            <div class="small-12 columns">
                <div class="flagbanner drop-20">
                    <h3 class="flagbuttonbanner">Order - Small Goods</h3>
                </div>
            </div>
        </div> 
    
        <div class="row">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">Sausages</h4>
                </div>
            </div>
        </div>  
           
        <div class="row">   
            <p class="small-12 columns">Please give a minimum weight of 5kg to all sausages ordered.</p >
            <p class="small-12 columns">GF indicates Gluten Free</p>
        </div>
            
<!-- form -->
        <form id="small-order" method="post" action="order-small-goods-deer-update.php?n=<?php echo $row['unid'] ?>">
       
<!-- same for elemnts -->
            <?php echo file_get_contents("small.php"); ?>
        
<!-- Next -->
            <div class="row">
                <div class="small-12 columns">
                    <div class="banner drop-20">
                        <button type="submit" id="add" name="add" class="button-banner">Next Step</button>
                    </div>
                </div>
            </div>
    
<!-- form -->
        </form>
        
<!-- small order -->
        <?php include("small-order.php"); ?>
    
<!-- finish the page -->         
    </div> 
        
    <?php echo file_get_contents("recipe-deer.php"); ?>
        
</div>
<?php echo file_get_contents("footer.php"); 

// close the while
    }
;
?> 