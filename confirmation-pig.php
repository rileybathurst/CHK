<?php 

include("db.php");

$sql = "SELECT * FROM `meatorders` WHERE `unid`=$unid";

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
}

//create variables
    $name = $_POST['name'];
    $add1 = $_POST['add1'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone2 = $_POST['phone2'];
    $amp = $_POST['amp'];
    $people = $_POST['people'];
    
//Sheep variables
//Shoulder
    $ps_rolledshoulder = $_POST['ps_rolledshoulder']; if($ps_rolledshoulder == 'on'){$ps_rolledshoulder=1;}else{$ps_rolledshoulder=0;}
    $rolledshoulder_ps = $_POST['rolledshoulder_ps'];
    $ps_bacon = $_POST['ps_bacon']; if($ps_bacon == 'on'){$ps_bacon=1;}else{$ps_bacon=0;}
    $ps_pickledpork = $_POST['ps_pickledpork']; if($ps_pickledpork == 'on'){$ps_pickledpork=1;}else{$ps_pickledpork=0;}
    $ps_chops = $_POST['ps_chops']; if($ps_chops == 'on'){$ps_chops=1;}else{$ps_chops=0;}
    $ps_pressedham = $_POST['ps_pressedham']; if($ps_pressedham == 'on'){$ps_pressedham=1;}else{$ps_pressedham=0;}
    $pressedham_ps = $_POST['pressedham_ps'];
    $ps_mince = $_POST['ps_mince']; if($ps_mince == 'on'){$ps_mince=1;}else{$ps_mince=0;}
    $ps_dicedpork = $_POST['ps_dicedpork']; if($ps_dicedpork == 'on'){$ps_dicedpork=1;}else{$ps_dicedpork=0;}
    $ps_roastjointed = $_POST['ps_roastjointed']; if($ps_roastjointed == 'on'){$ps_roastjointed=1;}else{$ps_roastjointed=0;}
    $roastjointed_ps = $_POST['roastjointed_ps'];

//Loin
    $pl_chops = $_POST['pl_chops']; if($pl_chops == 'on'){$pl_chops=1;}else{$pl_chops=0;}
    $pl_loinsteaks = $_POST['pl_loinsteaks']; if($pl_loinsteaks == 'on'){$pl_loinsteaks=1;}else{$pl_loinsteaks=0;}
    $pl_roastjointed = $_POST['pl_roastjointed']; if($pl_roastjointed == 'on'){$pl_roastjointed=1;}else{$pl_roastjointed=0;}
    $roastjointed_pl = $_POST['roastjointed_pl'];
    $pl_bacon = $_POST['pl_bacon']; if($pl_bacon == 'on'){$pl_bacon=1;}else{$pl_bacon=0;}
    $pl_baconchops = $_POST['pl_baconchops']; if($pl_baconchops == 'on'){$pl_baconchops=1;}else{$pl_baconchops=0;}

//Belly
    $pb_bacon = $_POST['pb_bacon']; if($pb_bacon == 'on'){$pb_bacon=1;}else{$pb_bacon=0;}
    $pb_baconstrips = $_POST['pb_baconstrips']; if($pb_baconstrips == 'on'){$pb_baconstrips=1;}else{$pb_baconstrips=0;}
    $pb_rolled = $_POST['pb_rolled']; if($pb_rolled == 'on'){$pb_rolled=1;}else{$pb_rolled=0;}
    $pb_whole = $_POST['pb_whole']; if($pb_whole == 'on'){$pb_whole=1;}else{$pb_whole=0;}
    $whole_pb = $_POST['whole_pb'];
    $pb_strips = $_POST['pb_strips']; if($pb_strips == 'on'){$pb_strips=1;}else{$pb_strips=0;}

//Leg
    $pg_hamonthebone = $_POST['pg_hamonthebone']; if($pg_hamonthebone == 'on'){$pg_hamonthebone=1;}else{$pg_hamonthebone=0;}
    $hamonthebone_cook = $_POST['hamonthebone_cook'];
    $hamonthebone_size = $_POST['hamonthebone_size'];
    $pg_pressedham = $_POST['pg_pressedham']; if($pg_pressedham == 'on'){$pg_pressedham=1;}else{$pg_pressedham=0;}
    $pressedham_cook = $_POST['pressedham_cook'];
    $pressedham_size = $_POST['pressedham_size'];
    $pg_roast = $_POST['pg_roast']; if($pg_roast == 'on'){$pg_roast=1;}else{$pg_roast=0;}
    $roast_pg = $_POST['roast_pg'];
    $pg_mince = $_POST['pg_mince']; if($pg_mince == 'on'){$pg_mince=1;}else{$pg_mince=0;}
    $pg_diced = $_POST['pg_diced']; if($pg_diced == 'on'){$pg_diced=1;}else{$pg_diced=0;}
    $pg_legsteaks = $_POST['pg_legsteaks']; if($pg_legsteaks == 'on'){$pg_legsteaks=1;}else{$pg_legsteaks=0;}
    $pg_bacon = $_POST['pg_bacon']; if($pg_bacon == 'on'){$pg_bacon=1;}else{$pg_bacon=0;}

    $spins = $_POST['spins'];

//form to update to unid
while($row = $result->fetch_assoc()){ 
    $to = $row['email']; // this is your Email address
    
    $subject = 'Canterbury Homekill Order '. $row['unid'];
    
    $top = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#ebebeb">
    
    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
        <tbody>
            <tr> 
                <table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">
                    
                    
                    
                    <tr>
                        <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                            <img src="http://canterburyhomekill.co.nz/img/CHK-logo-600.png" alt="canterburyhomekill logo" />
                        </td>
                    </tr>
                        
                    
                    
                    
                    <tr>
                        <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                            <p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz Order '.
                            $row['unid']. 
                            '</p>
                        </td>
                    </tr>
            

                    <tr>
                        <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Order details
                                <strong>'.
                                    $row['unid'].
                                '</strong>
                            </p>
                            
                            <p>
                                Name 
                                <strong>'.
                                    $row['name'].
                                '</strong>
                            </p>
                            
                            <p>
                                Date 
                                <strong>'.
                                    $row['timenow'].
                                '</strong>
                            </p>
                            
                            <p>
                                Phone  
                                <strong>'.
                                    $row['phone'].
                                '</strong>
                            </p>
                            
                            <p>
                                Mobile  
                                <strong>'.
                                    $row['phone2'].
                                '</strong>
                            </p>
                            
                            <p>
                                Order details 
                                <strong>'.
                                    $row['unid'].
                                '</strong>
                            </p>
                            
                            <p>
                                email  
                                <strong>'.
                                    $row['email'].
                                '</strong>
                            </p>
                            
                            <p>
                                Animal  
                                <strong>'.
                                    $row['amp'].
                                '</strong>
                            </p>
                            
                            <p>
                                Number of People  
                                <strong>'.
                                    $row['people'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Pig Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            ';
    
     $change = '
                            
                            <strong>Shoulder</strong>
                            
                            <p>
                                Rolled Shoulder  
                                <strong>'.
                                    $row['ps_rolledshoulder'].
                                '</strong>
                                <em> '.
                                    $row['rolledshoulder_ps'].
                                '</em>
                            </p>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $row['ps_bacon'].
                                '</strong>
                            </p>
                            
                            <p>
                                Pickled Pork  
                                <strong>'.
                                    $row['ps_pickledpork'].
                                '</strong>
                            </p>
                            
                            <p>
                                Chops  
                                <strong>'.
                                    $row['ps_chops'].
                                '</strong>
                            </p>
                            
                            <p>
                                Pressed Ham   
                                <strong>'.
                                    $row['ps_pressedham'].
                                '</strong>
                                <em> '.
                                    $row['pressedham_ps'].
                                '</em>
                            </p>
                            
                            <p>
                                Mince   
                                <strong>'.
                                    $row['ps_mince'].
                                '</strong>
                            </p>
                            
                            <p>
                                Diced Pork   
                                <strong>'.
                                    $row['ps_dicedpork'].
                                '</strong>
                            </p>
                            
                            <p>
                                Roast Jointed   
                                <strong>'.
                                    $row['ps_roastjointed'].
                                '</strong>
                                <em> '.
                                    $row['roastjointed_ps'].
                                '</em>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Loin</strong>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Chops   
                                <strong>'.
                                    $row['pl_chops'].
                                '</strong>
                            </p>
                            
                            <p>
                                Loin Steaks  
                                <strong>'.
                                    $row['pl_loinsteaks'].
                                '</strong>
                            </p>
                            
                            <p>
                                Roast Jointed   
                                <strong>'.
                                    $row['pl_roastjointed'].
                                '</strong>
                                <em> '.
                                    $row['roastjointed_pl'].
                                '</em>
                            </p>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $row['pl_bacon'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bacon Chops   
                                <strong>'.
                                    $row['pl_baconchops'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Belly</strong>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $row['pb_bacon'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bacon Strips    
                                <strong>'.
                                    $row['pb_baconstrips'].
                                '</strong>
                            </p>
                            
                            <p>
                                Rolled   
                                <strong>'.
                                    $row['pb_rolled'].
                                '</strong>
                            </p>
                            
                            <p>
                                Roast   
                                <strong>'.
                                    $row['pb_whole'].
                                '</strong>
                                <em> '.
                                    $row['whole_pb'].
                                '</em>
                            </p>
                            
                            <p>
                                Strips   
                                <strong>'.
                                    $row['pb_strips'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <strong>Leg</strong>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Ham On The Bone   
                                <strong>'.
                                    $row['pg_hamonthebone'].
                                '</strong>
                                <em> '.
                                    $row['hamonthebone_cook'].
                                '</em> '.
                                $row['hamonthebone_size'].
                            '</p>
                            
                            <p>
                                Pressed Ham   
                                <strong>'.
                                    $row['pg_pressedham'].
                                '</strong>
                                <em> '.
                                    $row['pressedham_cook'].
                                '</em> '.
                                $row['pressedham_size'].
                            '</p>
                            
                            <p>
                                Roast   
                                <strong>'.
                                    $row['pg_roast'].
                                '</strong>
                                <em> '.
                                    $row['roast_pg'].
                                '</em>
                            </p>
                            
                            <p>
                                Mince   
                                <strong>'.
                                    $row['pg_mince'].
                                '</strong>
                            </p>
                            
                            <p>
                                Diced   
                                <strong>'.
                                    $row['pg_diced'].
                                '</strong>
                            </p>
                            
                            <p>
                                Leg Steaks   
                                <strong>'.
                                    $row['pg_legsteaks'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bacon   
                                <strong>'.
                                    $row['pg_bacon'].
                                '</strong>
                            </p>
                            
                            ';
    
    $tail = '
                            <p>
                                Special Instructions     
                                <strong>'.
                                    $row['spins'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <h3>Small Goods Options</h3>
                            
                            <p>All weights in KG</p3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                    
                            <p>
                                Pork &amp; Herb Sausages    
                                <strong>'.
                                    $row['t_porkherb'].
                                '</strong>
                            </p>
                            
                            <p>
                                Lamb &amp; Mint Sausages    
                                <strong>'.
                                    $row['t_lambmint'].
                                '</strong>
                            </p>
                            
                            <p>
                                Bratwurst Sausages    
                                <strong>'.
                                    $row['t_bratwurst'].
                                '</strong>
                            </p>
                    
                            <p>
                                Spicy Italian Sausages    
                                <strong>'.
                                    $row['t_spicyitalian'].
                                '</strong>
                            </p>
                    
                            <p>
                                Chorizo Sausages    
                                <strong>'.
                                    $row['t_chorizo'].
                                '</strong>
                            </p>
                            
                            <p>
                                Tomato &amp; Basil Sausages    
                                <strong>'.
                                    $row['t_tomatobasil'].
                                '</strong>
                            </p>
                            
                            <p>
                                Herb &amp; Garlic Sausages    
                                <strong>'.
                                    $row['t_herbgarlic'].
                                '</strong>
                            </p>
                            
                            <p>
                                Green Capsicum &amp; Onion Sausages    
                                <strong>'.
                                    $row['t_peppersonion'].
                                '</strong>
                            </p>
                            
                            <p>
                                Green Capsicum &amp; Onion <em>- GF</em> Sausages    
                                <strong>'.
                                    $row['t_gf_capsicum'].
                                '</strong>
                            </p>
                            
                            <p>
                                Plain Sausages    
                                <strong>'.
                                    $row['t_plain'].
                                '</strong>
                            </p>
                            
                            <p>
                                Plain <em>- GF</em> Sausages    
                                <strong>'.
                                    $row['t_gf_plain'].
                                '</strong>
                            </p>
                            
                            <p>
                                Saveloys    
                                <strong>'.
                                    $row['t_saveloys'].
                                '</strong>
                            </p>
                            
                            <p>
                                Saveloys <em>- GF</em>    
                                <strong>'.
                                    $row['t_gf_saveloys'].
                                '</strong>
                            </p>
                            
                            <p>
                                Build Your Own Sausages    
                                <strong>'.
                                    $row['t_create'].
                                '</strong>
                            </p>
                            
                            <p>
                                Patties    
                                <strong>'.
                                    $row['t_patties'].
                                '</strong>
                            </p>
                            
                            <p>
                                Patties <em>- GF</em>    
                                <strong>'.
                                    $row['t_gf_patties'].
                                '</strong>
                            </p>
                            
                            <p>
                                Salami    
                                <strong>'.
                                    $row['t_salami'].
                                '</strong>
                                <em> '.
                                    $row['salami_t'].
                                '</em>
                                <strong> '.
                                    $row['salami_s'].
                                '</strong>
                            </p>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>   
                    </tr>
                    
                    <tr>
                        <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: center;" align="center">
                            <span style="font-size: 11px; color: #575757; line-height: 200%; font-family: arial; text-decoration: none;">
                                Canterbury Homekill. 26 Merton Road. RD 1. Rangiora 7471<br />
                                <a href="mailto:info@canterburyhomekill.co.nz">info@canterburyhomekill.co.nz</a><br />
                                Phone (03) 313 4771
                            </span>
                        </td>
                    </tr>
 
            </table>
        </tr>
    </tbody>
</table>
</body>
</html>
                        

  ';
    
// fixes orders 0 and 1's to Y's and N's
        $number = array("0", "1");
        $letter = array("N", "Y");
    
        $middle = str_replace($number, $letter, $change);

    
// places both parts of the message together    
        $message = 
                    $top . 
                    $middle . 
                    $tail;
        
    // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: info@canterburyhomekill.co.nz';
    
    mail($to,$subject,$message,$headers); 
    
    // Secondary email to canterburyhomekill
    
$to2        =     'info@canterburyhomekill.co.nz';     
$subject2   =     'New Order '.
                    $row['unid'].
                    ' From CHK';
$message2   =       '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width"/>
                    </head>
                    <body>'.
                    $row['name'].
                    ' has placed an order online '.
                    'Order '.
                    $row['unid'].
                    '<br />'.
                    '<a href="http://canterburyhomekill.co.nz/view-order.php?n='.
                    $row['unid'].
                    '">'.
                    'Order '.
                    $row['unid'].
                    '</a>'.
                    '</body>'
                    ;

// To send HTML mail, the Content-type header must be set
$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= 'From: info@canterburyhomekill.co.nz';
    
    mail($to2,$subject2,$message2,$headers2); 

//close connection
    $conn->close();

// close while
}

// get out
header("Location: thanks.php");
exit();

?>