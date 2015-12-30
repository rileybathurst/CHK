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
                    '<h3 class="flagbuttonbanner">Confirm - Pig</h3>'.
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
                <h4 class="button-banner">Pig Options</h4>
            </div>
        </div>
    </div>'.  
         
// SHOULDER
    '<div class="row">'.
            '<div class="small-12 columns">'.
                    '<h3>Shoulder</h3>'.
            '</div>'.
        '</div>'.

// ps_rolledshoulder    rolledshoulder_ps    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['ps_rolledshoulder'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Rolled Shoulder '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['ps_rolledshoulder'] == 1) { 
                    echo $row['rolledshoulder_ps'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.

// ps_bacon
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['ps_bacon'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bacon '.
            '</div>'.
        '</div>'.
                    
// ps_pickledpork
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['ps_pickledpork'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Pickledpork '.
            '</div>'.
        '</div>'.
                    
// ps_chops
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['ps_chops'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Chops '.
            '</div>'.
        '</div>'.
                    
// ps_pressedham    pressedham_ps    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['ps_pressedham'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Pressed Ham '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['ps_pressedham'] == 1) { 
                    echo $row['pressedham_ps'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
        
// ps_mince
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['ps_mince'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Mince '.
            '</div>'.
        '</div>'.
                    
// ps_dicedpork
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['ps_dicedpork'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Diced Pork '.
            '</div>'.
        '</div>'.
                    
// ps_roastjointed    roastjointed_ps    
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['ps_roastjointed'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Roast Jointed '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['ps_roastjointed'] == 1) { 
                    echo $row['roastjointed_ps'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
     
// LOIN
    '<div class="row">'.
            '<div class="small-12 columns drop-20">'.
                    '<h3>Loin</h3>'.
            '</div>'.
        '</div>'.
                
// pl_chops
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pl_chops'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Chops '.
            '</div>'.
        '</div>'.
                    
// pl_loinsteaks
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['pl_loinsteaks'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Loin Steaks '.
            '</div>'.
        '</div>'.
                    
// pl_roastjointed    roastjointed_pl    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['pl_roastjointed'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Roast Jointed '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['pl_roastjointed'] == 1) { 
                    echo $row['roastjointed_pl'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                    
// pl_bacon
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['pl_bacon'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bacon '.
            '</div>'.
        '</div>'.
                    
// pl_baconchops
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pl_baconchops'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bacon Chops '.
            '</div>'.
        '</div>'.
                    
// BELLY
    '<div class="row">'.
            '<div class="small-12 columns drop-20">'.
                    '<h3>Belly</h3>'.
            '</div>'.
        '</div>'.
                    
// pb_bacon
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pb_bacon'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bacon '.
            '</div>'.
        '</div>'.
                    
// pb_baconstrips
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['pb_baconstrips'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bacon Strips '.
            '</div>'.
        '</div>'.
                    
// pb_rolled
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pb_rolled'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Belly Bacon Rolled With Loin Bacon '.
            '</div>'.
        '</div>'.
    
// pb_whole    whole_pb    
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['pb_whole'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Roast '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['pb_whole'] == 1) { 
                    echo $row['whole_pb'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// pb_strips
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pb_strips'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Strips '.
            '</div>'.
        '</div>'.
                    
// Leg
        '<div class="row">'.
            '<div class="small-12 columns drop-20">'.
                    '<h3>Leg</h3>'.
            '</div>'.
        '</div>'.
                    
// pg_hamonthebone  hamonthebone_cook hamonthebone_size    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['pg_hamonthebone'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Ham On The Bone '.
            '</div>'.
            '<div class="small-3 columns capitalize">';
                if ($row['pg_hamonthebone'] == 1) { 
                    echo $row['hamonthebone_cook'];
                    } else { echo ' '; }
            echo '</div>'.
            '<div class="small-3 columns capitalize">';
                if ($row['pg_hamonthebone'] == 1) { 
                    echo $row['hamonthebone_size'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// pg_pressedham  pressedham_cook pressedham_size    
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['pg_pressedham'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Pressed Ham '.
            '</div>'.
            '<div class="small-3 columns capitalize">';
                if ($row['pg_pressedham'] == 1) { 
                    echo $row['pressedham_cook'];
                    } else { echo ' '; }
            echo '</div>'.
            '<div class="small-3 columns capitalize">';
                if ($row['pg_pressedham'] == 1) { 
                    echo $row['pressedham_size'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// pg_roast    roast_pg    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['pg_roast'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Roast '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['pg_roast'] == 1) { 
                    echo $row['roast_pg'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// pg_mince
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['pg_mince'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Mince '.
            '</div>'.
        '</div>'.
                    
// pg_diced
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pg_diced'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Diced '.
            '</div>'.
        '</div>'.
                    
// pg_legsteaks
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['pg_legsteaks'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Leg Steaks '.
            '</div>'.
        '</div>'.
                    
// pg_bacon
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['pg_bacon'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Bacon '.
            '</div>'.
        '</div>'.
        
// spins
        '<div class="row off-stripe">'.
            '<div class="small-12 columns drop-20">'.
                '<em>'.
                    'Special instructions '.
                '</em>'.
                '<strong>'.
                    $row['spins'] .
                '</strong>'.
            '</div>'.
        '</div>';
    
// small goods
    include ("small-confirm.php"); ?>
         
    <form method="post" action="con1-pig.php?n=<?php echo $row['unid'] ?>">
        
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
    <?php echo file_get_contents("recipe-pork.php");
echo '</div>';

echo file_get_contents("footer.php")
       ; ?> 