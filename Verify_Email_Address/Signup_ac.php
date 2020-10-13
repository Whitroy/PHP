<?php
    include('config.php');
    //table name
    $tbl_name=temp_mem_data;

    //Random Confirmation code
    $confirm_code=md5(uniqid(rand()));

    //values sent from form
    $First_name=$_POST['First_name'];
    $Last_name=$_POST['Last_name'];
    $UserName=$_POST['UserName'];
    $Email=$_POST['Email'];
    $passwd=$_POST['pass'];
    $Conf_passwd=$_POST['CPass'];

    $query="INSERT INTO tbl_name(Confirm_code,UserName,First_name,Last_name,Email_Add,Password) 
    Values('$confirm_code','$First_name','$UserName','$Email','$passwd','$Conf_passwd')";

    $result=mysql_query($query)or die("Invalid query: " . mysql_error());

    // if suceesfully inserted data into database, send confirmation link to email
    if($result)
    {
    // ---------------- SEND MAIL FORM ----------------
    // send e-mail to ...
    $to=$Email;
    // Your subject
    $subject="Your confirmation link here";
    // From
    $header="from: WhitRoy <pratham.kumar_cs.da19@gla.ac.in>";
    // Your message
    $message="Your Comfirmation link \r\n";
    $message.="Click on this link to activate your account \r\n";
    $message.="http://www.yourweb.com/confirmation.php?passkey=$confirm_code";
    
    // send email
    $sentmail = mail($to,$subject,$message,$header);
    }
    
    // if not found
    else
    {
    echo "Not found your email in our database";
    }
    // if your email succesfully sent
    if($sentmail){
    echo "Your Confirmation link Has Been Sent To Your Email Address.";
    }
    else {
    echo "Cannot send Confirmation link to your e-mail address";
    }
?>
