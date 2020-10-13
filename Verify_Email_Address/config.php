<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="temp_members_db"; // Database name


//Connect to server and select database.
$con=mysqli_connect("$host", "$username")or die("cannot connect to server");
mysqli_select_db($con,$db_name)or die("cannot select DB");
?>