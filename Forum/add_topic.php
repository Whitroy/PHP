<?php
    include("Config.php");

    $tb_name="Forum_question";

    if(isset($_POST))
    {
        $Topic=$_POST['Topic'];
        $Detail=$_POST['detail'];
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $DateandTime=date("d/m/y h:i:s");

        $query="INSERT INTO $tb_name(Topic,Detail,Name,Email,Date_and_Time) Values('$Topic','$Detail','$Name','$Email','$DateandTime')";

        $result=mysqli_query($con,$query);

        if($result)
        {
            echo "Successfully Added <br>";
            echo"<a href=Main_Forum.php> View Your Topic </a>";
        }
        else
        {
            echo "Error <br>";
            echo"<a href=create_topic.php> Try Again </a>";
        }
    }
?>