<html>
<?php

include("Config.php");
if (isset($_GET)) {
    $id = $_GET['id'];

    $tbl_name1 = "Forum_question";
    
    $query_res = mysqli_query($con, "SELECT * from $tbl_name1 WHERE Id=$id");
    $result1 = mysqli_fetch_assoc($query_res);

    $view=$result1['view']+1;
    mysqli_query($con,"UPDATE $tbl_name1 SET view=$view WHERE Id=$id");

    $tb_name = "forum_answer";

    $result=1;
    $result = mysqli_query($con, "SELECT Count(a_id) as Total from $tb_name WHERE question_id=$id");
    $result = mysqli_fetch_array($result)['Total'];

    $result2 = mysqli_query($con, "Select * from $tb_name WHERE question_id=$id ORDER BY a_id DESC");
}
?>

<body>
    <table width=100% height=100% style="border : 3px solid #000000; background:mintcream;">
        <tr>
            <td width=50%>
                <table cellpadding=10px align="left" style="width:95% ; border : 3px solid #000000; 
                        padding:10px;transform:translate(30px,10px); background:#E6E6E6; font-size:20">
                    <tr>
                        <td colspan="3" align="center" style="font-size:30; background:#CCCCCC;"><strong>Topic Detail </strong></td>
                    </tr>
                    <tr>
                        <td width=6%><strong>Topic</strong></td>
                        <td width=2%><strong>:</strong></td>
                        <td><?php echo $result1['Topic']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Detail</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $result1['Detail']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>By</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $result1['Name']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $result1['Email']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Date</strong></td>
                        <td><strong>:</strong></td>
                        <td><?php echo $result1['Date_and_Time']; ?></td>
                    </tr>
                </table>
            </td>
            <div id="Add_Answer">
            <td width=50%>
                <table cellpadding=10px align="right" style="width:95% ; border : 3px solid #000000; 
                        padding:6px;transform:translate(-30px,10px); background:#E6E6E6; font-size:20">
                    <form name="Add_Answer" method="post" action="Add_Answer.php">
                        <tr>
                            <td colspan="3" align="Center" style="font-size:30; background:#CCCCCC;"><strong>Reply</strong></td>
                        </tr>
                        <tr>
                            <td width=6%><strong>Name</strong></td>
                            <td width=2%><strong>:</strong></td>
                            <td><Input type="text" name="Name" required size=50 placeholder="Enter Name" /></td>
                        </tr>
                        <tr>
                            <td width=6%><strong>Email</strong></td>
                            <td width=2%><strong>:</strong></td>
                            <td> <Input type="Email" name="Email" size=50 required placeholder="Enter Email Address" /></td>
                        </tr>
                        <tr>
                            <td width=6%><strong>Answer</strong></td>
                            <td width=2%><strong>:</strong></td>
                            <td><textarea name="Answer" cols=48 rows=4 required placeholder="Enter Answer"></textarea> </td>
                        </tr>
                        <tr style="transform:translate(120px,0px);">
                            <td><input type="Submit" Value="Submit"></td>
                            <td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
                            <td><input type="Reset" Value="Reset"></td>
                        </tr>
                    </form>
                </table>
            </td>
            </div>
        </tr>
        <tr>
            <td colspan="2">
                <table cellpadding=10px align="center" style="width:95% ; border : 3px solid #000000; 
                        padding:10px;transform:translate(0,15px); background:#E6E6E6; font-size:20">
                    <tr>
                        <td colspan="3" align="center" style="font-size:30; background:#CCCCCC;"><strong>Answers </strong></td>
                    </tr>
                    <?php
                    if ($result == 0) {
                    ?>
        </tr>
        <td colspan="5" style="font-size:80; text-align:center;" height="300px"><strong><em>
                    Add Your Answer<br><a href="#Add_Answer"><img src="Img\right.png" width="50" height="50"></em></strong></a>
        </td>
        </tr>
    <?php
                    } else {
                        while($rows = mysqli_fetch_array($result2))
                        {
    ?>
        <tr>
            <td width=6%><strong>A_ID</strong></td>
            <td width=2%><strong>:</strong></td>
            <td><?php echo $rows['a_id']; ?></td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>:</strong></td>
            <td><?php echo $rows['a_name']; ?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><strong>:</strong></td>
            <td><?php echo $rows['a_email']; ?></td>
        </tr>
        <tr>
            <td><strong>Answer</strong></td>
            <td><strong>:</strong></td>
            <td><?php echo $rows['a_answer']; ?></td>
        </tr>
        <tr>
            <td><strong>Date</strong></td>
            <td><strong>:</strong></td>
            <td><?php echo $rows['a_datetime']?></td>
        </tr>
        <tr>
            <td colspan=3><hr></td>
        </tr>
    <?php
                   } } ?>
    </table>
    </td>
    </tr>
    </table>
</body>

</html>