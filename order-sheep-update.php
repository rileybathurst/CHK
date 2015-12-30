<?php

include("db.php");

//create variables
$l_shoulder = $_POST['l_shoulder']; if($l_shoulder == 'on'){$l_shoulder=1;}else{$l_shoulder=0;}
$shoulder_lb = $_POST['shoulder_lb'];
$l_flaps = $_POST['l_flaps']; if($l_flaps == 'on'){$l_flaps=1;}else{$l_flaps=0;}
$flaps_lb = $_POST['flaps_lb'];
$l_loin = $_POST['l_loin']; if($l_loin == 'on'){$l_loin=1;}else{$l_loin=0;}
$loin_lb = $_POST['loin_lb'];
$l_leg = $_POST['l_leg']; if($l_leg == 'on'){$l_leg=1;}else{$l_leg=0;}
$leg_lb = $_POST['leg_lb'];
$spins = mysqli_real_escape_string($conn, $_POST['spins']);

//update where id comes from url
$sql = "UPDATE meatorders SET

    l_shoulder='$l_shoulder',
    shoulder_lb='$shoulder_lb',
    l_flaps='$l_flaps',
    flaps_lb='$flaps_lb',
    l_loin='$l_loin',
    loin_lb='$loin_lb',
    l_leg='$l_leg',
    leg_lb='$leg_lb',
    spins='$spins'
    
    WHERE unid=$unid";

//create small goods variable
$url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}

//if works go to next step
if ($conn->query($sql) === TRUE) {
    
//if small goods go there
    if ($url == 1) { header("Location: order-small-goods-sheep.php?n=$unid"); } 
    
//if not go to confirm
    else
    header("Location: confirm-sheep.php?n=$unid");

//or fail
} else {
    echo "Error updating record: " . $conn->error;
}

//close connection
$conn->close();
?>

header('Location:'.$_POST['url'])