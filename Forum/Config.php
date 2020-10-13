<?php
$host="localhost";
$username="root";
$db="forum";

$con=mysqli_connect($host,$username) or die("Cannot Connect to MySQL");
mysqli_select_db($con,$db);
?>