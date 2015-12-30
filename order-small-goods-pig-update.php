<?php

include("db.php");

include("small-variables.php");

//what to do next
if ($conn->query($sql) === TRUE) {
    
    header("Location: confirm-pig.php?n=$unid");
} else {
    echo "Error updating record: " . $conn->error;
}

//close connection
$conn->close();
?>