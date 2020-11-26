<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["UserName"] = "Computer Science Department";
$_SESSION["Subject"] = "Web Development";
echo "Session variables are set.";
?>
</body>
</html>