<?php

$servername = "sql300.epizy.com";
$dBUsername = "epiz_29190646";
$dbPassword = "wtAdVFd88P5t";
$dBName = "epiz_29190646_ems";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>