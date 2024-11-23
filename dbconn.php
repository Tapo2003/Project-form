<?php
# Database Connection Variable

$serverName = "localhost";
$DBusername = "root";
$password = "";
$database = "mulipleform";


# Database Variable connection handle
$conn = mysqli_connect($serverName, $DBusername, $password, $database) or die(mysql_error());

?>
