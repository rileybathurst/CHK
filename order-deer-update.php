<?php

include("db.php");

//create variables
$v_shoulder = $_POST['v_shoulder']; if($v_shoulder == 'on'){$v_shoulder=1;}else{$v_shoulder=0;}
$v_loin = $_POST['v_loin']; if($v_loin == 'on'){$v_loin=1;}else{$v_loin=0;}
$v_leg = $_POST['v_leg']; if($v_leg == 'on'){$v_leg=1;}else{$v_leg=0;}
$spins = mysqli_real_escape_string($conn, $_POST['spins']);

//update where id comes from url
$sql = "UPDATE meatorders SET

    v_shoulder='$v_shoulder',
    v_loin='$v_loin',
    v_leg='$v_leg',
    spins='$spins'
    
    WHERE unid=$unid";

//create small goods variable
$url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}

//what to do next
if ($conn->query($sql) === TRUE) {
    
    if ($url == 1) { header("Location: order-small-goods-deer.php?n=$unid"); } 
    else
    header("Location: confirm-deer.php?n=$unid");
} else {
    echo "Error updating record: " . $conn->error;
}

//close connection
$conn->close();
?>