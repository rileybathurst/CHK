<!-- used in vieworders-all.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

<a href="vieworders-all.php">Login</a>
    
</body>
</html>