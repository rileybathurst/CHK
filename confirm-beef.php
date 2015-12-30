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
                    '<h3 class="flagbuttonbanner">Confirm - Beef</h3>'.
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
                <h4 class="button-banner">Beef Options</h4>
            </div>
        </div>
    </div>'.  
         
// beef options        
// b_fillet    fillet_bf    
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['b_fillet'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Fillet '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_fillet'] == 1) { 
                    echo $row['fillet_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.

// b_porterhouse    porterhouse_bf
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['b_porterhouse'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Porterhouse '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_porterhouse'] == 1) { 
                    echo $row['porterhouse_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
        
// b_tbone
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['b_tbone'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'T-Bone '.
            '</div>'.
        '</div>'.
                
// b_ribeye    ribeye_bf
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['b_ribeye'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Ribeye '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_ribeye'] == 1) { 
                    echo $row['ribeye_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// b_rump    rump_bf
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['b_rump'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Rump '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_rump'] == 1) { 
                    echo $row['rump_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// b_topside    topside_bf
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['b_topside'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Topside '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_topside'] == 1) { 
                    echo $row['topside_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.

// b_rolledroast    rolledroast_bf
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['b_rolledroast'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Rolled Roast '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_rolledroast'] == 1) { 
                    echo $row['rolledroast_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
  
// b_weinerschnitzel    weienerschnitzel_bf
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['b_weinerschnitzel'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Weiner Schnitzel '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_weinerschnitzel'] == 1) { 
                    echo $row['weinerschnitzel_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// b_silverside    silverside_bf
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['b_silverside'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Silverside '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_silverside'] == 1) { 
                    echo $row['silverside_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// b_blade    blade_bf
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['b_blade'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Blade '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_blade'] == 1) { 
                    echo $row['blade_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// b_shinfillet    shinfillet_bf
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['b_shinfillet'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Shinfillet '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_shinfillet'] == 1) { 
                    echo $row['shinfillet_bf'];
                    } else { echo ' '; }
            echo '</div>'.
        '</div>'.
                
// b_chucksteak    chucksteak_bf
        '<div class="row off-stripe">'.
            '<div class="small-6 columns">';
                if ($row['b_chucksteak'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Chucksteak '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_chucksteak'] == 1) { 
                    echo $row['chucksteak_bf'];
                    } else { echo ' '; }
    
            echo '</div>'.
        '</div>'.
                
// b_skirtsteak    skirtsteak_bf
        '<div class="row second-background">'.
            '<div class="small-6 columns">';
                if ($row['b_skirtsteak'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Skirtsteak '.
            '</div>'.
            '<div class="small-6 columns capitalize">';
                if ($row['b_skirtsteak'] == 1) { 
                    echo $row['skirtsteak_bf'];
                    } else { echo ' '; }
    
            echo '</div>'.
        '</div>'.
                
// b_mince
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['b_mince'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Mince '.
            '</div>'.
        '</div>'.
        
// spins
        '<div class="row">'.
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
         
    <form method="post" action="con1-beef.php?n=<?php echo $row['unid'] ?>">
        
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