<!-- works with -->
<?php 

include("db.php");

$sql = "SELECT * FROM `meatorders` WHERE `unid`=$unid";

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
}

//form to update to unid
while($row = $result->fetch_assoc()){ 
    
   echo file_get_contents("header.php");
            
    echo
    '<div class="row over-background border drop-20" data-equalizer>'.
    '<div class="small-12 large-6 columns" data-equalizer-watch>'.
    
        '<div class="row">'.
            '<div class="small-12 columns">'.
                '<div class="flagbanner drop-20 below-20">'.
                    '<h3 class="flagbuttonbanner">Confirm - Sheep</h3>'.
                '</div>'.
            '</div>'.
        '</div>' .
        
        '<div class="row">'.
            '<div class="small-12 columns">'.
                '<p class="drop-20">Please check all details thoroughly<br />' .
                'A selected item will show with a &nbsp;<img src="img/tick.png" alt="tick" class="spacer" /><br />' .
                'An un-selected item will show with a &nbsp;<img src="img/cross-black.png" alt="corss" class="spacer" /></p>' .
            '</div>'.
        '</div>' ;

//detail options
        include("confirm-details.php");
    
    echo
    '<div class="row">   
        <div class="small-12 columns">
            <div class="banner drop-20">
                <h4 class="button-banner">Sheep Options</h4>
            </div>
        </div>
    </div>'.  
        
//sheep options 
// l_shoulder    shoulder_lb        
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['l_shoulder'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Shoulder '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['l_shoulder'] == 1) { 
                    echo $row['shoulder_lb'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
        
// l_flaps flaps_lb    
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['l_flaps'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Flaps '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['l_flaps'] == 1) { 
                    echo $row['flaps_lb'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// l_loin loin_lb    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['l_loin'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Loin '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['l_loin'] == 1) { 
                    echo $row['loin_lb'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// l_leg leg_lb    
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['l_leg'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Leg '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['l_leg'] == 1) { 
                    echo $row['leg_lb'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
        
// spins
        '<div class="row second-background">'.
            '<div class="small-12 columns">'.
                'Special instructions '.
                '<strong>'.
                    $row['spins'] .
                '</strong>'.
            '</div>'.
        '</div>';
    
// small goods
    include ("small-confirm.php"); ?>
         
    <form method="post" action="con1-sheep.php?n=<?php echo $row['unid'] ?>">
        
        <div class="row">
            <div class="small-12 columns">
                <div class="banner drop-20">
                    <button class="button-banner" type="submit" id="confirm" name="confirm" value="confirm">Confirm</button></div>
                <a href="cow.php" class="button radius">Reset</a>
            </div>
        </div>
            
    </form>

<?php
    //close while
} ; ?>
    
    </div>
    <?php echo file_get_contents("recipe.php");
echo '</div>';

echo file_get_contents("footer.php")
       ; ?> 