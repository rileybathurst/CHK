<!-- part of order-details-update-....php -->
<?php

//create variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amp = $_POST['amp'];
$amd = $_POST['amd'];

//update where id comes from url
$sql = "UPDATE meatorders SET

    name='$name',
    email='$email',
    phone='$phone',
    amp='$amp',
    amd='$amd' 
    
    WHERE unid=$unid";

?>