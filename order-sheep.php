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
                    <h3 class="flagbuttonbanner">Order - Sheep</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="small-12 columns drop-20">
                <p>If an option is selected with a choice avaliable it must be made</p>
            </div>
        </div>
        
<!-- start form -->
        
        <form id="sheep-order" method="post" action="order-sheep-update.php?n=<?php echo $row['unid'] ?>">
         
<!-- l_shoulder shoulder_lb -->
        <div class="row second-background">
            <div class="small-6 columns">
                    <input id="l_shoulder" name="l_shoulder" type="checkbox">
                    <label for="l_shoulder" class="right inline">Shoulder</label>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" id="shoulder_lb" name="shoulder_lb" ><small class="error">If selected a choice is required.</small>
                        <option value="" disabled selected>Select</option>
                        <option value="chops">Chops</option>
                        <option value="roll">Roll</option>
                        <option value="seasoned">Seasoned</option>
                        <option value="jointed-whole">Jointed whole</option>
                        <option value="jointed-half">Jointed half</option>
                </select>
            </div>
        </div>
        
<!-- l_flaps flaps_lb -->
        <div class="row off-stripe">
            <div class="small-6 columns">
                    <input id="l_flaps" name="l_flaps" type="checkbox">
                    <label for="l_flaps" class="right inline">Flaps</label>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns"  id="flaps_lb" name="flaps_lb" >
                        <option value="" disabled selected>Select</option>
                        <option value="strips">Strips</option>
                        <option value="roll">Roll</option>
                        <option value="seasoned">Seasoned</option>
                        <option value="dog food">Dog Food</option>
                </select>
            </div>
        </div>
        
<!-- l_loin loin_lb-->
        <div class="row second-background">
            <div class="small-6 columns">
                    <input id="l_loin" name="l_loin" type="checkbox">
                    <label for="l_loin" class="right inline">Loin</label>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" id="loin_lb" name="loin_lb" >
                        <option value="" disabled selected>Select</option>
                        <option value="chops">Chops</option>
                        <option value="french racks">French Racks</option>
                        <option value="roast in half jointed">Roast in Half Jointed</option>
                </select>
            </div>
        </div>
        
<!-- l_leg leg_lb -->
        <div class="row off-stripe">
            <div class="small-6 columns">
                    <input id="l_leg" name="l_leg" type="checkbox">
                    <label for="l_leg" class="right inline">Leg</label>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" id="leg_lb" name="leg_lb" >
                        <option value="" disabled selected>Select</option>
                        <option value="chops">Chops</option>
                        <option value="roll">Roll</option>
                        <option value="mutton ham">Mutton Ham</option>
                        <option value="steak">Steak</option>
                        <option value="roast half">Roast Half</option>
                        <option value="roast third">Roast Third</option>
                </select>
            </div>
        </div>
        
<!-- SMALL GOODS -->
        <div class="row">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">SMALL GOODS</h4>
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
            
        <div class="row">
            <div class="small-12 columns">
                <p class="small-12 columns">Options on following page</p>
            </div>
        </div>
      
<!-- spins -->         
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
        
<!-- next -->
        <div class="row">
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <button type="submit" id="add" name="add" class="banner-button">Next Step</button>
                </div>
            </div>
        </div>
            
        </form>
        
<!-- extra jquery needed for validation -->        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
<!-- validation of checked -->
        <script>
            // validates only if selected when checked
            jQuery.validator.setDefaults();
            $( "#sheep-order" ).validate({
              rules: {
// l_shoulder shoulder_lb                
                  shoulder_lb: { required: "#l_shoulder:checked" },
// l_flaps flaps_lb                
                  flaps_lb: { required: "#l_flaps:checked" },
// l_flaps flaps_lb                
                  loin_lb: { required: "#l_loin:checked" },
// l_flaps flaps_lb                
                  leg_lb: { required: "#l_leg:checked" }
              }
            });
        </script>
    
    </div>
        <?php echo file_get_contents("recipe.php"); ?> 
</div>
        
<?php echo file_get_contents("footer.php"); 

;}
?> 