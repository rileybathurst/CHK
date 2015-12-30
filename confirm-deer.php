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
                    '<h3 class="flagbuttonbanner">Confirm - Deer</h3>'.
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
                <h4 class="button-banner">Deer Options</h4>
            </div>
        </div>
    </div>'.  
             
// deer options
// v_shoulder    
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['v_shoulder'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Deer Shoulder '.
            '</div>'.
        '</div>'.
        
// v_loin
        '<div class="row off-stripe">'.
            '<div class="small-12 columns">';
                if ($row['v_loin'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Deer Loin '.
            '</div>'.
        '</div>'.
        
// v_leg
        '<div class="row second-background">'.
            '<div class="small-12 columns">';
                if ($row['v_leg'] == 1) { 
                        echo '<img src="img/tick.png" alt="tick" class="spacer" />';
                        } else { echo '<img src="img/cross-black.png" alt="cross" class="spacer" />'; }
                echo 'Deer Leg '.
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
         
    <form method="post" action="con1-deer.php?n=<?php echo $row['unid'] ?>">
        
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
    <?php echo file_get_contents("recipe-deer.php");
echo '</div>';

echo file_get_contents("footer.php")
       ; ?> 