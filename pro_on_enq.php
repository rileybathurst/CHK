<?
//get form elements and email

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$enq = $_POST['details'];
  

//email to info@canterburyhomekill.co.nz

$to      = 'info@canterburyhomekill.co.nz';

$subject = 'Homekill Website enquiry: '.$name;

//write email
$message .= '
An enquiry direct from your website.
	
name: ';
$message .= ($name);
$message .= '
phone: ';
$message .= ($phone);
$message .= '
email: ';
$message .= ($email);
$message .= '
enquiry: ';
$message .= ($enq);

$headers = 'From: info@canterburyhomekill.co.nz' . "\n" .
   			'Reply-To: '.$email. "\n" .
  			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// html email to sender

    $to2      =  $email ;

    $subject2 = 'Homekill Website enquiry: ' . $name ;

	$message2 .= '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                            <img src="http://canterburyhomekill.co.nz/img/CHK-logo-600.png" alt=""canterburyhomekill logo" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
                            <p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">CanterburyHomekill.co.nz</p>
                        </td>
                    </tr>
            

                    <tr>
                        <td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">
                            
                            <hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>
                            
                            <p>
                                Thanks for your contact, '.
                                    $name .
                                ' we will be in touch ASAP.
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

    

$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= 'From: info@canterburyhomekill.co.nz';

mail($to2, $subject2, $message2, $headers2);

header("Location: thanks.php");
exit();

?>