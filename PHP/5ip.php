<html>
<head>
    <title>IP Address</title>
</head>
<body>
<h2>A PHP script to get IP address of a client</h2>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo "Your IP Address = $ip";
?>
</body>
</html>