<?php

//always needed
include("db.php");

$search = $_POST["search"];

header("Location: vieworders-result.php?s=$search");

$conn->close();
?>

