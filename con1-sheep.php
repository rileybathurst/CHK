<?php

include("db.php");

//update where id comes from url
$sql = "UPDATE meatorders SET

    confirm='1'
    
    WHERE unid=$unid";

//what to do next
if ($conn->query($sql) === TRUE) {
    header("Location: confirmation-sheep.php?n=$unid");
} else {
    echo "Error updating record: " . $conn->error;
}

//close connection
$conn->close();
?>