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
    
//Beef variables
    $b_fillet = $_POST['b_fillet']; if($b_fillet == 'on'){$b_fillet=1;}else{$b_fillet=0;}
    $fillet_bf = $_POST['fillet_bf'];
    $b_porterhouse = $_POST['b_porterhouse']; if($b_porterhouse == 'on'){$b_porterhouse=1;}else{$b_porterhouse=0;}
    $porterhouse_bf = $_POST['porterhouse_bf'];
    $b_tbone = $_POST['b_tbone']; if($b_tbone == 'on'){$b_tbone=1;}else{$b_tbone=0;}
    $b_ribeye = $_POST['b_ribeye']; if($b_ribeye == 'on'){$b_ribeye=1;}else{$b_ribeye=0;}
    $ribeye_bf = $_POST['ribeye_bf'];
    $b_rump = $_POST['b_rump']; if($b_rump == 'on'){$b_rump=1;}else{$b_rump=0;}
    $rump_bf = $_POST['rump_bf'];
    $b_topside = $_POST['b_topside']; if($b_topside == 'on'){$b_topside=1;}else{$b_topside=0;}
    $topside_bf = $_POST['topside_bf'];
    $b_rolledroast = $_POST['b_rolledroast']; if($b_rolledroast == 'on'){$b_rolledroast=1;}else{$b_rolledroast=0;}
    $rolledroast_bf = $_POST['rolledroast_bf'];
    $b_weinerschnitzel = $_POST['b_weinerschnitzel']; if($b_weinerschnitzel == 'on'){$b_weinerschnitzel=1;}else{$b_weinerschnitzel=0;}
    $weinerschnitzel_bf = $_POST['weinerschnitzel_bf'];
    $b_silverside = $_POST['b_silverside']; if($b_silverside == 'on'){$b_silverside=1;}else{$b_silverside=0;}
    $silverside_bf = $_POST['silverside_bf'];
    $b_blade = $_POST['b_blade']; if($b_blade == 'on'){$b_blade=1;}else{$b_blade=0;}
    $blade_bf = $_POST['blade_bf'];
    $b_shinfillet = $_POST['b_shinfillet']; if($b_shinfillet == 'on'){$b_shinfillet=1;}else{$b_shinfillet=0;}
    $shinfillet_bf = $_POST['shinfillet_bf'];
    $b_chucksteak = $_POST['b_chucksteak']; if($b_chucksteak == 'on'){$b_chucksteak=1;}else{$b_chucksteak=0;}
    $chucksteak_bf = $_POST['chucksteak_bf'];
    $b_skirtsteak = $_POST['b_skirtsteak']; if($b_skirtsteak == 'on'){$b_skirtsteak=1;}else{$b_skirtsteak=0;}
    $skirtsteak_bf = $_POST['skirtsteak_bf'];
    $b_mince = $_POST['b_mince']; if($b_mince == 'on'){$b_mince=1;}else{$b_mince=0;}
    $spins = $_POST['spins'];
    
//create variables
    $sg_porkherb = $_POST['sg_porkherb']; if($sg_porkherb == 'on'){$sg_porkherb=1;}else{$sg_porkherb=0;}
    $t_porkherb = $_POST['t_porkherb'];
    $sg_lambmint = $_POST['sg_lambmint']; if($sg_lambmint == 'on'){$sg_lambmint=1;}else{$sg_lambmint=0;}
    $t_lambmint = $_POST['t_lambmint'];
    $sg_bratwurst = $_POST['sg_bratwurst']; if($sg_bratwurst == 'on'){$sg_bratwurst=1;}else{$sg_bratwurst=0;}
    $t_bratwurst = $_POST['t_bratwurst'];
    $sg_spicyitalian = $_POST['sg_spicyitalian']; if($sg_spicyitalian == 'on'){$sg_spicyitalian=1;}else{$sg_spicyitalian=0;}
    $t_spicyitalian = $_POST['t_spicyitalian'];
    $sg_chorizo = $_POST['sg_chorizo']; if($sg_chorizo == 'on'){$sg_chorizo=1;}else{$sg_chorizo=0;}
    $t_chorizo = $_POST['t_chorizo'];
    $sg_tomatobasil = $_POST['sg_tomatobasil']; if($sg_tomatobasil == 'on'){$sg_tomatobasil=1;}else{$sg_tomatobasil=0;}
    $t_tomatobasil = $_POST['t_tomatobasil'];
    $sg_herbgarlic = $_POST['sg_herbgarlic']; if($sg_herbgarlic == 'on'){$sg_herbgarlic=1;}else{$sg_herbgarlic=0;}
    $t_herbgarlic = $_POST['t_herbgarlic'];
    $sg_peppersonion = $_POST['sg_peppersonion']; if($sg_peppersonion == 'on'){$sg_peppersonion=1;}else{$sg_peppersonion=0;}
    $t_peppersonion = $_POST['t_peppersonion'];
    $sg_gf_capsicum = $_POST['sg_gf_capsicum']; if($sg_gf_capsicum == 'on'){$sg_gf_capsicum=1;}else{$sg_gf_capsicum=0;}
    $t_gf_capsicum = $_POST['t_gf_capsicum'];
    $sg_plain = $_POST['sg_plain']; if($sg_plain == 'on'){$sg_plain=1;}else{$sg_plain=0;}
    $t_plain = $_POST['t_plain'];
    $sg_gf_plain = $_POST['sg_gf_plain']; if($sg_gf_plain == 'on'){$sg_gf_plain=1;}else{$sg_gf_plain=0;}
    $t_gf_plain = $_POST['t_gf_plain'];
    $sg_saveloys = $_POST['sg_saveloys']; if($sg_saveloys == 'on'){$sg_saveloys=1;}else{$sg_saveloys=0;}
    $t_saveloys = $_POST['t_saveloys'];
    $sg_create = $_POST['sg_create']; if($sg_create == 'on'){$sg_create=1;}else{$sg_create=0;}
    $t_create = $_POST['t_create'];
    $sg_patties = $_POST['sg_patties']; if($sg_patties == 'on'){$sg_patties=1;}else{$sg_patties=0;}
    $t_patties = $_POST['t_patties'];
    $sg_gf_patties = $_POST['sg_gf_patties']; if($sg_gf_patties == 'on'){$sg_gf_patties=1;}else{$sg_gf_patties=0;}
    $t_gf_patties = $_POST['t_gf_patties'];
    $sg_salami = $_POST['sg_salami']; if($sg_salami == 'on'){$sg_salami=1;}else{$sg_salami=0;}
    $t_salami = $_POST['t_salami'];
    $salami_t = $_POST['salami_t'];
    $salami_s = $_POST['salami_s'];
    

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
                                Address 
                                <strong>'.
                                    $row['add1'].
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
                            
                            <h3>Beef Options</h3>
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            ';
    
     $change = '
                            
                            <p>
                                Fillet  
                                <strong>'.
                                    $row['b_fillet'].
                                '</strong>
                                <em> '.
                                    $row['fillet_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Portherhouse   
                                <strong>'.
                                    $row['b_porterhouse'].
                                '</strong>
                                <em> '.
                                    $row['porterhouse_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                T-Bone  
                                <strong>'.
                                    $row['b_tbone'].
                                '</strong>
                                <em> '.
                                    $row['tbone_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Ribeye  
                                <strong>'.
                                    $row['b_ribeye'].
                                '</strong>
                                <em> '.
                                    $row['ribeye_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Rump Steak  
                                <strong>'.
                                    $row['b_rump'].
                                '</strong>
                                <em> '.
                                    $row['rump_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Topside   
                                <strong>'.
                                    $row['b_topside'].
                                '</strong>
                                <em> '.
                                    $row['topside_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Rolled Roast   
                                <strong>'.
                                    $row['b_rolledroast'].
                                '</strong>
                                <em> '.
                                    $row['rolledroast_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Wiener Schnitzel   
                                <strong>'.
                                    $row['b_weinerschnitzel'].
                                '</strong>
                                <em> '.
                                    $row['wienerschnitzel_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Silverside   
                                <strong>'.
                                    $row['b_silverside'].
                                '</strong>
                                <em> '.
                                    $row['silverside_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Blade  
                                <strong>'.
                                    $row['b_blade'].
                                '</strong>
                                <em> '.
                                    $row['blade_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Shin Fillet   
                                <strong>'.
                                    $row['b_shinfillet'].
                                '</strong>
                                <em> '.
                                    $row['shinfillet_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Chuck Steak   
                                <strong>'.
                                    $row['b_chucksteak'].
                                '</strong>
                                <em> '.
                                    $row['chucksteak_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Skirt Steak   
                                <strong>'.
                                    $row['b_skirtsteak'].
                                '</strong>
                                <em> '.
                                    $row['skirtsteak_bf'].
                                '</em>
                            </p>
                            
                            <p>
                                Mince   
                                <strong>'.
                                    $row['b_mince'].
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