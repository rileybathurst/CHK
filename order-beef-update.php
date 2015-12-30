<?php

include("db.php");
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create variables
$b_fillet = $_POST['b_fillet']; if($b_fillet == 'on'){$b_fillet=1;}else{$b_fillet=0;}
$fillet_bf = mysqli_real_escape_string($conn, $_POST['fillet_bf']);
$b_porterhouse = $_POST['b_porterhouse']; if($b_porterhouse == 'on'){$b_porterhouse=1;}else{$b_porterhouse=0;}
$porterhouse_bf = mysqli_real_escape_string($conn, $_POST['porterhouse_bf']);
$b_tbone = $_POST['b_tbone']; if($b_tbone == 'on'){$b_tbone=1;}else{$b_tbone=0;}
$b_ribeye = $_POST['b_ribeye']; if($b_ribeye == 'on'){$b_ribeye=1;}else{$b_ribeye=0;}
$ribeye_bf = mysqli_real_escape_string($conn, $_POST['ribeye_bf']);
$b_rump = $_POST['b_rump']; if($b_rump == 'on'){$b_rump=1;}else{$b_rump=0;}
$rump_bf = mysqli_real_escape_string($conn, $_POST['rump_bf']);
$b_topside = $_POST['b_topside']; if($b_topside == 'on'){$b_topside=1;}else{$b_topside=0;}
$topside_bf = mysqli_real_escape_string($conn, $_POST['topside_bf']);
$b_rolledroast = $_POST['b_rolledroast']; if($b_rolledroast == 'on'){$b_rolledroast=1;}else{$b_rolledroast=0;}
$rolledroast_bf = mysqli_real_escape_string($conn, $_POST['rolledroast_bf']);
$b_weinerschnitzel = $_POST['b_weinerschnitzel']; if($b_weinerschnitzel == 'on'){$b_weinerschnitzel=1;}else{$b_weinerschnitzel=0;}
$weinerschnitzel_bf = mysqli_real_escape_string($conn, $_POST['weinerschnitzel_bf']);
$b_silverside = $_POST['b_silverside']; if($b_silverside == 'on'){$b_silverside=1;}else{$b_silverside=0;}
$silverside_bf = mysqli_real_escape_string($conn, $_POST['silverside_bf']);
$b_blade = $_POST['b_blade']; if($b_blade == 'on'){$b_blade=1;}else{$b_blade=0;}
$blade_bf = mysqli_real_escape_string($conn, $_POST['blade_bf']);
$b_shinfillet = $_POST['b_shinfillet']; if($b_shinfillet == 'on'){$b_shinfillet=1;}else{$b_shinfillet=0;}
$shinfillet_bf = mysqli_real_escape_string($conn, $_POST['shinfillet_bf']);
$b_chucksteak = $_POST['b_chucksteak']; if($b_chucksteak == 'on'){$b_chucksteak=1;}else{$b_chucksteak=0;}
$chucksteak_bf = mysqli_real_escape_string($conn, $_POST['chucksteak_bf']);
$b_skirtsteak = $_POST['b_skirtsteak']; if($b_skirtsteak == 'on'){$b_skirtsteak=1;}else{$b_skirtsteak=0;}
$skirtsteak_bf = mysqli_real_escape_string($conn, $_POST['skirtsteak_bf']);
$b_mince = $_POST['b_mince']; if($b_mince == 'on'){$b_mince=1;}else{$b_mince=0;}
$spins = mysqli_real_escape_string($conn, $_POST['spins']);

//update where id comes from url
$sql = "UPDATE meatorders SET

    b_fillet='$b_fillet',
    fillet_bf='$fillet_bf',
    b_porterhouse='$b_porterhouse',
    porterhouse_bf='$porterhouse_bf',
    b_tbone='$b_tbone',
    b_ribeye='$b_ribeye',
    ribeye_bf='$ribeye_bf',
    b_rump='$b_rump',
    rump_bf='$rump_bf',
    b_topside='$b_topside',
    topside_bf='$topside_bf',
    b_rolledroast='$b_rolledroast',
    rolledroast_bf='$rolledroast_bf',
    b_weinerschnitzel='$b_weinerschnitzel',
    weinerschnitzel_bf='$weinerschnitzel_bf',
    b_silverside='$b_silverside',
    silverside_bf='$silverside_bf',
    b_blade='$b_blade',
    blade_bf='$blade_bf',
    b_shinfillet='$b_shinfillet',
    shinfillet_bf='$shinfillet_bf',
    b_chucksteak='$b_chucksteak',
    chucksteak_bf='$chucksteak_bf',
    b_skirtsteak='$b_skirtsteak',
    skirtsteak_bf='$skirtsteak_bf',
    b_mince='$b_mince',
    spins='$spins'
    
    WHERE unid=$unid";

//create small goods variable
$url = $_POST['small']; if($url == 'yes'){$url=1;}else{$url=0;}

//what to do next
if ($conn->query($sql) === TRUE) {
    
    if ($url == 1) { header("Location: order-small-goods-beef.php?n=$unid"); } 
    else
    header("Location: confirm-beef.php?n=$unid");
} else {
    echo "Error updating record: " . $conn->error;
}

//close connection
$conn->close();
?>








/* Create a prepared statement */
   if($stmt = $mysqli -> prepare("SELECT priv FROM testUsers WHERE username=?
   AND password=?")) {

      /* Bind parameters
         s - string, b - blob, i - int, etc */
      $stmt -> bind_param("ss", $user, $pass);

      /* Execute it */
      $stmt -> execute();

      /* Bind results */
      $stmt -> bind_result($result);

      /* Fetch the value */
      $stmt -> fetch();

      echo $user . "'s level of priviledges is " . $result;

      /* Close statement */
      $stmt -> close();
   }