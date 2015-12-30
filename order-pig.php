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
                    <h3 class="flagbuttonbanner">Order - Pig</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="small-12 columns drop-20">
                <p>If an option is selected with a choice avaliable it must be made</p>
            </div>
        </div>
    
    <!-- start form -->
    <form method="post" action="order-pig-update.php?n=<?php echo $row['unid'] ?>">

<!-- shoulder -->
        <div class="row">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">Shoulder</h4>
                </div>
            </div>
        </div>
         
        <div class="row">
            <p class="small-12 columns">There are two shoulders, if you want two options please check two boxes.</p>
        </div>
       
<!-- ps_rolledshoulder rolledshouder_ps  -->
        <div class="row second-background">
            <div class="small-6 columns">
                    <input id="ps_rolledshoulder" type="checkbox" name="ps_rolledshoulder">
                    <label for="ps_rolledshoulder">Rolled Shoulder</label>
            </div>
            <div class="small-6 columns">
                <select class="small-12 columns" name="rolledshoulder_ps" id="rolledshoulder_ps"> 
                        <option value="" disabled selected>Select</option>
                        <option value="whole">Whole</option>
                        <option value="half">Half</option>
                        <option value="third">Third</option>
                </select>
            </div>
        </div>

<!-- ps_bacon --> 
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="ps_bacon" name="ps_bacon" type="checkbox"><label for="ps_bacon">Bacon</label>
            </div>
        </div>
        
<!-- ps_pickledpork -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="ps_pickledpork" name="ps_pickledpork" type="checkbox"><label for="ps_pickledpork">Pickled Pork</label>
            </div>
        </div>
        
<!-- ps_chops -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="ps_chops" name="ps_chops" type="checkbox"><label for="ps_chops">Chops</label>
            </div>
        </div>
        
<!-- ps_pressedham  pressedham_ps -->
        <div class="row second-background">
            <div class="small-6 columns">
                <input id="ps_pressedham" name="ps_pressedham" type="checkbox">
                <label for="ps_pressedham">Pressed Ham</label>
            </div>
              
            <div class="small-6 columns">
                <select class="small-12 columns" id="pressedham_ps" name="pressedham_ps">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                    <option value="sliced">Sliced</option>
                </select>
            </div>
        </div>
        
<!-- ps_mince -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="ps_mince" name="ps_mince" type="checkbox"><label for="ps_mince">Mince</label>
            </div>
        </div>
        
<!-- ps_dicedpork  -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="ps_dicedpork" name="ps_dicedpork" type="checkbox"><label for="ps_dicedpork">Diced Pork</label>
            </div>
        </div>
                
<!-- ps_roastjointed    roastjointed_ps -->
        <div class="row off-stripe">
            <div class="small-6 columns">
                <input id="ps_roastjointed" name="ps_roastjointed" type="checkbox">
                <label for="ps_roastjointed">Roast Jointed</label>
            </div>

            <div class="small-6 columns">
                <select class="small-12 columns" id="roastjointed_ps" name="roastjointed_ps">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                </select>
            </div>
        </div>
          
<!-- LOIN -->
	   <div class="row off-stripe">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">LOIN</h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <p class="small-12 columns">there are two loins, if you want two options please check two boxes.</p>
        </div>
        
<!-- pl_chops -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="pl_chops" name="pl_chops" type="checkbox"><label for="pl_chops">Chops</label>
            </div>
        </div>
        
<!-- pl_loinsteaks -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="pl_loinsteaks" name="pl_loinsteaks" type="checkbox"><label for="pl_loinsteaks">Loin Steaks</label>
            </div>
        </div>
        
<!--pl_roastjointed roastjointed_pl -->
        <div class="row second-background">
            <div class="small-6 columns">
                <input id="pl_roastjointed" name="pl_roastjointed" type="checkbox">
                <label for="pl_roastjointed">Roast Jointed</label>
            </div>
            <div class="small-6 columns">
            <select class="small-12 columns" id="roastjointed_pl" name="roastjointed_pl">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                    <option value="sliced">Sliced</option>
                     </select>
            </div>
        </div>
        
<!-- pl_bacon -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="pl_bacon" name="pl_bacon" type="checkbox"><label for="pl_bacon">Bacon</label>
            </div>
        </div>
        
<!-- pl_baconchops -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="pl_baconchops" name="pl_baconchops" type="checkbox"><label for="pl_baconchops">Bacon Chops</label>
            </div>
        </div>

<!-- BELLY -->
        <div class="row off-stripe">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">BELLY</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <p class="small-12 columns">there are two bellies, if you want two options please check two boxes.</p>
        </div>

<!-- pb_bacon -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="pb_bacon" name="pb_bacon" type="checkbox"><label for="pb_bacon">Streaky Bacon</label>
            </div>
        </div>
        
<!-- pb_baconstrips -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="pb_baconstrips" name="pb_baconstrips" type="checkbox"><label for="pb_baconstrips">Bacon Strips</label>
            </div>
        </div>
        
<!-- pb_rolled -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="pb_rolled" name="pb_rolled" type="checkbox"><label for="pb_rolled">Belly Bacon Rolled With Loin Bacon</label>
            </div>
        </div>
            
<!-- pb_whole   whole_pb  - now labeled as roast -->
        <div class="row off-stripe">    
            <div class="small-6 columns">
                <input id="pb_whole" name="pb_whole" type="checkbox">
                <label for="pb_whole">Roast</label>
            </div>
            
            <div class="small-6 columns">
                <select class="small-12 columns" id="whole_pb" name="whole_pb">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                </select>
            </div>
        </div>
        
<!-- pb_strips -->
        <div class="row second-background">
            <div class="small-12 columns">
                <input id="pb_strips" name="pb_strips" type="checkbox"><label for="pb_strips">Strips</label>
            </div>
        </div>
            
<!-- LEG -->            
        <div class="row">   
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <h4 class="button-banner">LEG</h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <p class="small-12 columns">there are two legs, if you want two options please check two boxes.</p>
        </div>
        
<!-- pg_hameonthebone hamonthebone_cook hamonthebone_size -->
        <div class="row second-background">
            <div class="small-6 columns">
                <input id="pg_hamonthebone" name="pg_hamonthebone" type="checkbox">
                <label for="pg_hamonthebone">Ham On The Bone</label>
            </div>
    
            <div class="small-6 columns">
                <select class="small-6 columns" id="hamonthebone_cook" name="hamonthebone_cook">
                    <option value="" disabled selected>Select</option>
                    <option value="cooked">Cooked</option>
                    <option value="raw">Raw</option>
                </select>
                <select class="small-6 columns" id="hamonthebone_size" name="hamonthebone_size">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                </select>
            </div>
        </div>
        
<!-- pg_pressedham pressedham_cook pressedham_size -->
        <div class="row off-stripe">
            <div class="small-6 columns">
                <input id="pg_pressedham" name="pg_pressedham" type="checkbox">
                <label for="pg_pressedham">Pressed Ham</label>
            </div>
            
            <div class="small-6 columns">
                <select class="small-6 columns" id="pressedham_cook" name="pressedham_cook">
                    <option value="" disabled selected>Select</option>
                    <option value="cooked">Cooked</option>
                    <option value="raw">Raw</option>
                </select>
                <select class="small-6 columns" id="pressedham_size" name="pressedham_size">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                    <option value="sliced">Sliced</option>
                    <option value="ham-steaks">Ham Steaks</option>
                </select>
            </div>
        </div>
        
<!-- pg_roast   roast_pg -->
        <div class="row second-background">    
            <div class="small-6 columns">
                <input id="pg_roast" name="pg_roast" type="checkbox">
                <label for="pg_roast">Roast</label>
            </div>
            
            <div class="small-6 columns">
                <select class="small-12 columns" id="roast_pg" name="roast_pg">
                    <option value="" disabled selected>Select</option>
                    <option value="whole">Whole</option>
                    <option value="half">Half</option>
                    <option value="third">Third</option>
                </select>
            </div>
        </div>
        
<!-- pg_mince -->
        <div class="row off-stripe">
            <div class="small-12 columns">
                <input id="pg_mince" name="pg_mince" type="checkbox"><label for="pg_mince">Mince</label>
            </div>
        </div>
        
<!-- pg_diced -->
        <div class="row second-background">       
            <div class="small-12 columns">
                <input id="pg_diced" name="pg_diced" type="checkbox"><label for="pg_diced">Diced</label>
            </div>
        </div>
        
<!-- pg_legsteaks -->
        <div class="row off-stripe">    
            <div class="small-12 columns">
                <input id="pg_legsteaks" name="pg_legsteaks" type="checkbox"><label for="pg_legsteaks">Leg Steaks</label>
            </div>
        </div>
        
<!-- pg_bacon -->
        <div class="row second-background">   
            <div class="small-12 columns">
                <input id="pg_bacon" name="pg_bacon" type="checkbox"><label for="pg_bacon">Bacon</label>
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
                <div class="banner drop-20">
                    <button type="submit" id="add" name="add" class="button-banner">Next Step</button>
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
            $( "#cow-order" ).validate({
              rules: {
// ps_rolledshoulder rolledshoulder_ps                
                  rolledshoulder_ps: { required: "#ps_rolledshoulder:checked" },
// ps_pressedham pressedham_ps                
                  pressedham_ps: { required: "#ps_pressedham:checked" },
// ps_roastjointed roastjointed_ps                
                  roastjointed_ps: { required: "#ps_roastjointed:checked" },
// pl_roastjointed roastjointed_pl                
                  roastjointed_pl: { required: "#pl_roastjointed:checked" },
// pb_whole whole_pb                
                  whole_pb: { required: "#pb_whole:checked" },
// pg_hamonthebone hamonthebone_cook hamonthebone_size                
                  hamonthebone_cook: { required: "#pg_hamonthebone:checked" },
                  hamonthebone_size: { required: "#pg_hamonthebone:checked" },
// pg_pressedham pressedham_cook pressedham_size                
                  pressedham_cook: { required: "#ps_pressedham:checked" },
                  pressedham_size: { required: "#ps_pressedham:checked" },
// pg_roast roast_pg                
                  roast_pg: { required: "#pg_roast:checked" }
              }
            });
        </script>
    
    </div>
        <?php echo file_get_contents("recipe-pork.php"); ?> 
</div>
        
<?php echo file_get_contents("footer.php"); 
        
    };
?> 