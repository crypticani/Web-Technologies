<html>
<head>
    <title>Username</title>
</head>
<body>
<form name="action="4username.php" method="post">
    Username:
    <input type = "textbox" name="username" placeholder="enter your username"><br>
    <input type="submit" value= "submit"/>
</form>
</body>
</html>
<?php
$username =$_POST['username'];
echo "Your name is :".$username;
echo "<br/>";
?>