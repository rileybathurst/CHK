<?php 
echo file_get_contents("header.php");

echo '<div class="row over-background border drop-20" data-equalizer>' .
    '<div class="small-12 large-6 columns" data-equalizer-watch>';
    
    session_start() .
    if(isset($_SESSION['odcon'])){
	include("db.php");
	date_default_timezone_set("Pacific/Auckland");


    


echo '<form method="post" action="submitorder_ed.php" id="orderform" class="orderform">' .
	'<h2>Venison Order Form</h2>' .
	   '<input type="hidden" name="meat_type" id="meat_type" value="venison" />' .
	       '<h3>* Please do not fill cut sheet out before we have killed your animal</h3>' .
               
	
		'<h2>Venison</h2>' .
        '<input type="checkbox" name="v_shoulder" id="v_shoulder" ';if($deet['v_shoulder']==1){$htmlcontent.='checked ';} $htmlcontent.='/>' .
        'Shoulder' .
        '<input type="checkbox" name="v_loin" id="v_loin" ';if($deet['v_loin']==1){$htmlcontent.='checked ';} $htmlcontent.='/>' .
        'Loin' .
        '<input type="checkbox" name="v_leg" id="v_leg" ';if($deet['v_leg']==1){$htmlcontent.='checked ';} $htmlcontent.='/>' .
        'Leg' .
        
		'<input type="hidden" name="whatjs" id="whatjs" value="nojs" />
        <br /><input type="submit" value="Next: Confirm Order" />
	<h5>If the form doesn\'t process your submission, please review all required fields above.</h5>
	
    '.
		 

'</form>' .
    ;}

    '</div>' .
'</div>'
;
echo file_get_contents("footer.php"); ?>