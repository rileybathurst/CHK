<?php
// Session start for password

if(($_POST['pww']=='mince')||($_SESSION['gogo'] == 'boggy'))
{	
    if($_POST['pww']=='mince')
    {
        $_SESSION['gogo'] = 'boggy';
    }
    
    include("db.php");
    
 $sql="SELECT * FROM meatorders WHERE confirm='1' ORDER by unid desc";
$result=mysqli_query($conn,$sql);

    // Before order loop
    $bobby = 
        '<div class="row">'.
            '<div class="small-12 columns">'.
                '<div class="flagbanner drop-20 bottom-20">'.
                    '<h3 class="flagbuttonbanner">Orders</h3>'.
                '</div>'.
            '</div>'.
        '</div>'.
        
        // search form
        '<form method="post" action="search-orders.php" data-abide>
            
            <div class="row">
                <div class="small-12 large-2 columns drop-20">
                    <h3>Search</h3>
                </div>
    
                <div class="small-12 large-4 columns drop-20">
                    <input type="text" name="search" id="search" placeholder="Search Name" required pattern="[a-zA-Z]+" /><small class="error">A name is required.</small>
                </div>
    
                <div class="small-12 large-3 columns end drop-20">
                    <div class="banner">
                        <button type="submit" class="button-banner" id="submit" name="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>'.
        
        '<div class="drop-20">'. 
            'Click on order to view and print or <a href="logout.php">logout</a>' . '<br />'.
        '</div>';
    // What shows if password is correct
   // Associative array
        while($row=mysqli_fetch_assoc($result)){
	
        $bobby .=  
            '<a href="view-order.php?n='.$row['unid'].'" target="_blank"> Order '.$row['unid'].'</a>' . 
            
            '&nbsp; - '.
            $row['animal'].
            
            '&nbsp; - '.
            $row['name'].
            '&nbsp; - '.
            $row['amp'].
            '&nbsp; - '.
            $row['timenow'].
            '<br />' ; 
        }
    }       
// Session loop    
// What shows without password
else {
    $bobby = 
        '<div class="row">'.
            '<div class="small-12 columns">'.
                '<div class="flagbanner drop-20 bottom-20">'.
                    '<h3 class="flagbuttonbanner">Login</h3>'.
                '</div>'.
            '</div>'.
        '</div>'.
        
        '<div class="row">'.
            '<div class="small-12 large-6 columns below-20">'.
                '<form class="drop-20" id="form1" name="form1" method="post" action="">'.
                    '<label>'.
                        '<input type="password" name="pww" id="pww" />'.
                    '</label>'.
                    '<div class="banner drop-20">'.
                        '<button class="button-banner" type="submit" name="button" id="button" value="Submit"  />Login</button>'.
                    '</div>'.            
                '</form>'.
            '</div>'.
        '</div>';
}
?>

<?php echo file_get_contents("header.php"); ?>

<div class="row over-background border drop-20" data-equalizer>
    <div class="small-12 large-12 columns" data-equalizer-watch><!-- First Two -->
        
<!-- variation used because of two options -->
        <?php echo $bobby; ?>
        
    </div>
</div>  
    
<?php echo file_get_contents("footer.php"); ?>