<?php
    include("Config.php");

    $tbl_name="forum_answer";

    if(isset($_POST))
    {
        $q_id=$_POST['id'];
        $name=$_POST['Name'];
        $answer=$_POST['Answer'];
        $email=$_POST['Email'];
        $DateandTime=date("d/m/y h:i:s");

        $query="INSERT INTO $tbl_name(question_id,a_name,a_email,a_answer,a_datetime) Values('$q_id','$name','$email','$answer','$DateandTime')";

        $result=mysqli_query($con,$query);

        if($result)
        {
            echo "Successfully Added <br>";
            echo"<a href=Main_Forum.php> Go to Forum</a><br>";
            echo"<a href=view_topic.php?id=$q_id> View Topic Again</a><br>";

            $tb_name1="Forum_question";
            $result=mysqli_query($con,"SELECT Reply from $tb_name1 Where Id=$q_id");
            $result=mysqli_fetch_array($result);
            $Reply=$result['Reply']+1;
            mysqli_query($con,"UPDATE $tb_name1 Set Reply=$Reply WHERE Id=$q_id");
            
        }
        else
        {
            echo "Error <br>";
            echo"<a href=view_topic.php?id=$q_id> Try Again </a>";
        }

    }
?>