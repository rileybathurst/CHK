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
                <div class="flagbanner drop-20 below-20">
                    <h3 class="flagbuttonbanner">Order - Deer</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="small-12 columns drop-20">
                <p>If an option is selected with a choice avaliable it must be made</p>
            </div>
        </div>

<!-- form -->
    <form id="deer-order" method="post" action="order-deer-update.php?n=<?php echo $row['unid'] ?>">
        
<!-- comes from original naming of venison -->
<!-- deer shoulder v_shoulder -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input  name="v_shoulder" id="v_shoulder" type="checkbox">
                <label for="v_shoulder" class="right inline">Shoulder</label>
            </div>
        </div>
        
<!-- deer loin v_loin -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="v_loin" name="v_loin" type="checkbox">
                <label for="v_loin" class="right inline">Loin</label>
            </div>
        </div>
        
<!-- deer leg v_leg -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="v_leg" name="v_leg" type="checkbox">
                <label for="v_leg" class="right inline">Leg</label>
            </div>
        </div>
            
<!-- small goods -->
        <div class="row">
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">Small Goods</h4>
                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="small-12 columns drop-20">
                <p>Sausages, salamis, patties, saveloys</p>
            </div>
        </div>
        
        <div class="row">
            <div class="small-12 columns">
                <input type="radio" name="small" value="yes" id="yes"/><label for="yes">Yes</label><br>
                <input type="radio" name="small" value="no" id="no"/><label for="no">No</label><br>
            </div>
        </div>
        
<!-- Spins -->
        <div class="row">
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">SPECIAL INSTRUCTIONS</h4>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="small-12 columns">
                <label>Special Instructions
                    <textarea name="spins" placeholder="Special Instructions..." id="spins"></textarea>
                </label>
            </div>
        </div>
       
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
        
        <!-- extra jquery needed for validation -->        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    
    </div> 
<!-- close the while -->
<?php }
    echo file_get_contents("recipe-deer.php");
echo '</div>';

echo file_get_contents("footer.php")
       ; ?> 