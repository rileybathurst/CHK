<?php

//define variable for url bar .php?n=
$unid = $_GET['n'];

//connect to db
$servername = "mysql.rileybathurst.com";
$username = "rilbat2";
$password = "cookie";
$dbname = "canterburyhomekill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>