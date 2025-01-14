<?php
# Database Connection Variable

$serverName = "localhost";
$DBusername = "root";
$password = "";
$database = "acuret";

// $serverName = "localhost";
// $DBusername = "jaytecco_onwardcars";
// $password = "Omoyemi@9173";
// $database = "jaytecco_onwardcars";

# Database Variable connection handle
$conn = mysqli_connect($serverName, $DBusername, $password, $database) or die(mysql_error());

?>
