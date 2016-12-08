<?php
$mysql_hostname = "us-cdbr-azure-southcentral-f.cloudapp.net";
$mysql_user = "baed1a3b756ed8";
$mysql_password = "e0c7a04d";
$mysql_database = "bat";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd ,$mysql_database) or die("Could not select database");
?>
