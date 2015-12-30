<?php

include("db.php");

include("details-update.php");

//what to do next
if ($conn->query($sql) === TRUE) {
    header("Location: order-beef.php?n=$unid");
} else {
    echo "Error updating record: " . $conn->error;
}

//close connection
$conn->close();
?>