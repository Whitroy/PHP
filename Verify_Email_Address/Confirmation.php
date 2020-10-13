<?php
include('config.php');

$tb1='temp_mem_data';
$passkey=$_GET['passkey'];
$query="SELECT * from $tb1 where Confirm_code=$passkey";
$result=mysql_query($query)or die("Invalid query: " . mysql_error());;

if($result)
{
    $count=mysql_num_rows($result);
    if($count==1)
    {
        $rows=mysqli_fetch_array($result1);
        $First_name=$rows['First_name'];
        $Last_name=$rows['Last_name'];
        $UserName=$rows['UserName'];
        $Email=$rows['Email'];
        $passwd=$rows['pass'];

        $tb2='registered_mem_data';
        $query2="INSERT INTO tbl_name(Username,First_name,Last_name,Email_Add,Password) 
        Values('$UserName','$First_name','$UserName','$Email','$passwd')";
        $result2=mysql_query($query2)or die("Invalid query: " . mysql_error());;
    }
    
    // if not found passkey, display message "Wrong Confirmation code"
    else 
    {
        echo "Wrong Confirmation code";
    }
    
    // if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
    if($result2)
    {
    
        echo "Your account has been activated";
    
        // Delete information of this user from table "temp_members_db" that has this passkey
        $sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
        $result3=mysql_query($sql3)or die("Invalid query: " . mysql_error());;
    
    }
}
?>