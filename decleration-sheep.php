<?php

include("db.php");

//insert into sql table
$sql = "INSERT INTO meatorders (unid , animal , timenow)
VALUES ('$unid' , 'sheep' , NOW())";
 
 if ($conn->query($sql) === TRUE) {
    $id = $conn->insert_id;

header("Location: order-details-sheep.php?n=$id");

 };
     
$conn->close();
?>