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
                    <h3 class="flagbuttonbanner">Order - Beef</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="small-12 columns drop-20">
                <p>All options, except T-Bone are required and if an option is selected with a choice avaliable it must be made.</p>
                <p>If you don't understand an option feel free to <a href="contact.php">contact us</a><br />
                    on <a href="tel:03-313-4771">(03) 313 4771</a></p>
            </div>
        </div>
        
<!-- start form -->
        
        <form id="beef-order" method="post" action="order-beef-update.php?n=<?php echo $row['unid'] ?>" data-abide>
        
<!-- b_fillet fillet_bf-->
        <div class="row second-background">
            <div class="small-6 columns">
                    <input id="b_fillet" type="checkbox" name="b_fillet" required>
                    <label for="b_fillet" class="right inline">Fillet</label><small class="error">An option is required.</small>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" name="fillet_bf" id="fillet_bf">
                        <option value="" disabled selected>Select</option>
                        <option name="fillet_bf" value="steak">Steak</option>
                        <option name="fillet_bf" value="whole">Whole</option>
                        <option name="fillet_bf" value="half">Half</option>
                        <option name="fillet_bf" value="third">Third</option>
                </select>
            </div>
        </div>
        
<!-- b_porterhouse porterhouse_bf-->
        <div class="row off-stripe">
            <div class="small-6 columns"><input id="b_porterhouse" name="b_porterhouse" type="checkbox" required>
                <label for="b_porterhouse">Porterhouse</label><small class="error">An option is required.</small>
            </div>
            <div class="small-6 columns">
            <select class="small-12 columns" name="porterhouse_bf" id="porterhouse_bf">
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
            <div class="small-12 columns"><input id="b_tbone" name="b_tbone" type="checkbox">
                <label for="b_tbone">T-Bone</label>
            </div>
        </div>
        
<!-- b_ribeye ribeye_bf -->            
        <div class="row off-stripe">
            <div class="small-6 columns"><input id="b_ribeye" name="b_ribeye" type="checkbox" required>
                <label for="b_ribeye">Ribeye</label><small class="error">An option is required.</small>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" name="ribeye_bf" id="ribeye_bf">
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
            <div class="small-6 columns"><input id="b_rump" type="checkbox" name="b_rump" required>
                <label for="b_rump" class="right inline">Rump</label><small class="error">An option is required.</small>
            </div>
        <div class="small-6 columns">
            <select class="small-12 columns" name="rump_bf" id="rump_bf">
                        <option name="rump_bf" value="" disabled selected>Select</option>
                        <option name="rump_bf" value="steak">Steak</option>
                        <option name="rump_bf" value="roast">Roast</option>
            </select>
            </div>
            </div>
        
<!-- b_topside topside_bf -->        
        <div class="row off-stripe">        
            <div class="small-6 columns"><input id="b_topside" name="b_topside" type="checkbox" required>
                <label for="b_topside">Topside</label><small class="error">An option is required.</small>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" name="topside_bf" id="topside_bf">
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
            <div class="small-6 columns"><input id="b_rolledroast" name="b_rolledroast" type="checkbox" required>
                <label for="b_rolledroast">Rolled Roast</label><small class="error">An option is required.</small>
            </div>
           <div class="small-6 columns">
            <select class="small-12 columns" name="rolledroast_bf" id="rolledroast_bf">
                        <option name="rolledroast_bf" value="" disabled selected>Select</option>
                        <option name="rolledroast_bf" value="mince">Mince</option>
                        <option name="rolledroast_bf" value="rolled roast">Rolled Roast</option>
            </select>
            </div>
            </div>
        
<!-- b_weinerschnitzel weinerschnitzel_bf -->
        <div class="row off-stripe">
                <div class="small-6 columns">
                    <input id="b_weinerschnitzel" type="checkbox" name="b_weinerschnitzel" required>
                    <label for="b_weinerschnitzel">Weiner Schnitzel</label><small class="error">An option is required.</small>
                </div>
                    <div class="small-6 columns">
            <select class="small-12 columns" name="weinerschnitzel_bf" id="weinerschnitzel_bf">
                        <option name="weinerschnitzel_bf" value="" disabled selected>Select</option>
                        <option name="weinerschnitzel_bf" value="schnitzel">Schnitzel</option>
                        <option name="weinerschnitzel_bf" value="steak">Steak</option>
                    </select>
            </div>
            </div>
        
<!-- b_silverside silverside_bf -->
        <div class="row second-background">
            <div class="small-6 columns">
                <input id="b_silverside" name="b_silverside" type="checkbox" required>
                <label for="b_silverside">Silverside</label><small class="error">An option is required.</small>
            </div>
                <div class="small-6 columns">
            <select class="small-12 columns" name="silverside_bf" id="silverside_bf">
                    <option name="silverside_bf" value="" disabled selected>Select</option>
                    <option name="silverside_bf" value="roast">Roast</option>
                    <option name="silverside_bf" value="corned">Corned</option>
                    <option name="silverside_bf" value="steak">Steak</option>
                </select>
            </div>
            </div>
        
<!-- b_blade blade_bf -->
        <div class="row off-stripe">
            <div class="small-6 columns"><input id="b_blade" name="b_blade" type="checkbox" required>
                <label for="b_blade">Blade</label><small class="error">An option is required.</small>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" name="blade_bf" id="blade_bf">
                    <option name="blade_bf" value="" disabled selected>Select</option>
                    <option name="blade_bf" value="steak">Steak</option>
                    <option name="blade_bf" value="roast">Roast</option>
                    <option name="blade_bf" value="tenderized">Tenderized</option>
                </select>
            </div>
        </div>
        
<!-- b_shinfillet shinfillet_bf -->
        <div class="row second-background">
            <div class="small-6 columns"><input id="b_shinfillet" name="b_shinfillet" type="checkbox" required>
                <label for="b_shinfillet">Shin Fillet</label><small class="error">An option is required.</small>
            </div>
        <div class="small-6 columns">
            <select class="small-12 columns" name="shinfillet_bf" id="shinfillet_bf">
                    <option name="shinfillet_bf" value="" disabled selected>Select</option>
                    <option name="shinfillet_bf" value="stew">Stew</option>
                    <option name="shinfillet_bf" value="mince">Mince</option>
                    <option name="shinfillet_bf" value="onthebone">On The Bone</option>
                </select>
            </div>
            </div>
        
<!-- b_chucksteak chucksteak_bf -->
        <div class="row off-stripe">
            <div class="small-6 columns"><input id="b_chucksteak" name="b_chucksteak" type="checkbox" required>
                <label for="b_chucksteak">Chuck Steak</label><small class="error">An option is required.</small>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" name="chucksteak_bf" id="chucksteak_bf">
                    <option name="chucksteak_bf" value="" disabled selected>Select</option>
                    <option name="chucksteak_bf" value="stew">Stew</option>
                    <option name="chucksteak_bf" value="mince">Mince</option>
                </select>
            </div>
        </div>
        
<!-- b_skirtsteak skirtsteak_bf -->
        <div class="row second-background">
        <div class="small-6 columns"><input id="b_skirtsteak" name="b_skirtsteak" type="checkbox" required>
            <label for="b_skirtsteak">Skirt Steak</label><small class="error">An option is required.</small>
        </div>
        <div class="small-6 columns">
            <select class="small-12 columns" name="skirtsteak_bf" id="skirtsteak_bf">
                    <option name="skirtsteak_bf" value="" disabled selected>Select</option>
                    <option name="skirtsteak_bf" value="stew">Stew</option>
                    <option name="skirtsteak_bf" value="mince">Mince</option>
                </select>
            </div>
        </div>
        
<!-- b_mince -->
        <div class="row off-stripe">
            <div class="small-12 columns"><input id="b_mince" name="b_mince" type="checkbox" required>
                <label for="b_mince">Mince</label><small class="error">An option is required.</small>
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
                    <textarea name="spins" id="spins"></textarea>
                </label>
            </div>
        </div>
    
<!-- next -->
        <div class="row">
            <div class="small-12 columns">
                <div class="banner drop-20"><button type="submit" id="add" name="add" class="button-banner">Next Step</button></div>
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
            $( "#cow-order" ).validate({
              rules: {
// b_fillet fillet_bf                
                  fillet_bf: { required: "#b_fillet:checked" },
// b_porterhouse porterhouse_bf                
                  porterhouse_bf: { required: "#b_porterhouse:checked" },
// b_ribeye ribeye_bf                
                  ribeye_bf: { required: "#b_ribeye:checked" },
// b_rump rump_bf                
                  rump_bf: { required: "#b_rump:checked" },
// b_topside topside_bf                
                  topside_bf: { required: "#b_topside:checked" },
// b_rolledroast rolledroast_bf                
                  rolledroast_bf: { required: "#b_rolledroast:checked" },
// b_weinerschnitzel weinerschnitzel                
                  weinerschnitzel_bf: { required: "#b_weinerschnitzel:checked" },
// b_silverside silverside_bf                
                  silverside_bf: { required: "#b_silverside:checked" },
// b_blade blade_bf                
                  blade_bf: { required: "#b_blade:checked" },
// b_shinfillet shinfillet_bf                
                  shinfillet_bf: { required: "#b_shinfillet:checked" },
// b_chucksteak chucksteak_bf                
                  chucksteak_bf: { required: "#b_chucksteak:checked" },
// b_skirtsteak skirtsteak_bf                
                  skirtsteak_bf: { required: "#b_skirtsteak:checked" }
              }
            });
        </script>
    
    </div>
        <?php echo file_get_contents("recipe.php"); ?> 
</div>
        
<?php echo file_get_contents("footer.php"); ?> 

<?php 
;
}
?>