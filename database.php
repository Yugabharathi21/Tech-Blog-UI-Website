<?php

$hostName = "localhost";
$dbUser = "csed28";
$dbPassword = "csed28";
$dbName = "csed28";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
else{
   echo(" Suscessful created");
}

?>