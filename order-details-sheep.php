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
        <div class="small-12 large-6 columns" data-equalizer-watch>
        
        <div class="row">
            <div class="small-12 columns">
                <div class="flagbanner drop-20">
                    <h3 class="flagbuttonbanner">Order Form - Details</h3>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="small-12 columns drop-20">
                <p>All fields are required</p>
            </div>
        </div>

<!-- this method of updating to id is what puts the id into url to be continued on -->
        <form action="order-details-update-sheep.php?n=<?php echo $row['unid'] ?>" method="post" class="small-12 columns drop-20" data-abide>
                    
<!-- details are the same across all four animals -->
            <?php echo file_get_contents("details.php"); ?>
                            
        </form>

<!-- else doesnt work yet but should be around here incase of no ?n= in the url -->
<?php } 
            ?>
            <p>If you have any questions please don't hesitate to contact us on  (03) 313 4771</p>
        
    </div>

    <?php echo file_get_contents("recipe.php"); ?>
</div>


<?php echo file_get_contents("footer.php"); ?> 