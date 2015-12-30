<?php

include("db.php");

//insert into sql table
$sql = "INSERT INTO meatorders (unid , animal , timenow)
VALUES ('$unid' , 'deer' , NOW())";
 
 if ($conn->query($sql) === TRUE) {
    $id = $conn->insert_id;

header("Location: order-details-deer.php?n=$id");

 };
     
$conn->close();
?>