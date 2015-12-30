<?php
// create variables 
// mysqli_real_escape_string to deal with apostrophes etc that would close and kill
$name = mysqli_real_escape_string($conn, $_POST['name']);
$add1 = mysqli_real_escape_string($conn, $_POST['add1']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$phone2 = mysqli_real_escape_string($conn, $_POST['phone2']);
$amp = mysqli_real_escape_string($conn, $_POST['amp']);
$people = mysqli_real_escape_string($conn, $_POST['people']);

//update where id comes from url
$sql = "UPDATE meatorders SET

    name='$name',
    add1='$add1',
    email='$email',
    phone='$phone',
    phone2='$phone2',
    amp='$amp',
    people='$people' 
    
    WHERE unid=$unid";
?>