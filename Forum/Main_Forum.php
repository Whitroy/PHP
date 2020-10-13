<html>

<body>
    <?php
    include("Config.php");
    $tb_name = "Forum_question";

    $result = mysqli_query($con, "Select Count(id) as Total from $tb_name");
    $result = mysqli_fetch_assoc($result)['Total'];

    $result2 = mysqli_query($con, "Select * from $tb_name ORDER BY Id DESC");
    ?>
    <table  width=90% align="Center" bgcolor="#E6E6E6" cellpadding=15px style="border : 3px solid #000000;">
        <header align="Center">
            <strong style="font-size:25;">Welcome to Discussion Forum</strong>
        </header>
        <br>
        <tr style="font-size:20; text-align:center;" bgcolor="#CCCCCC">
            <td width="6%"><strong>#</strong></td>
            <td width="53%"><strong>Topic</strong></td>
            <td width="15%"><strong>Views</strong></td>
            <td width="13%"><strong>Replies</strong></td>
            <td width="13%"><strong>Date/Time</strong></td>
        </tr>
            <?php
            if ($result == 0) 
            {
            ?>
                </tr>
                    <td colspan="5" style="font-size:80; text-align:center;" height="450px"><strong><em>
                            Add New Topic<br><a href="create_topic.php"><img src="Img\right.png" width="50" height="50"></em></strong></a> 
                    </td>
                </tr>
            <?php
            }
            else 
            {
                while ($rows = mysqli_fetch_array($result2))
                {
                ?>
                <tr bgcolor="#E6E6E6" align="Center">
                    <td ><?php echo $rows['Id']; ?></td>
                    <td ><a href="View_topic.php?id=<?php echo $rows['Id']; ?>"><?php echo $rows['Topic']; ?></a><BR></td>
                    <td ><?php echo $rows['view']; ?></td>
                    <td ><?php echo $rows['Reply']; ?></td>
                    <td ><?php echo $rows['Date_and_Time']; ?></td>
                </tr>
                <?php
                }
            }
        ?>
        <tr><td colspan="5" style="font-size:20; text-align:right;"><strong><em>
                        Create New Topic <a href="create_topic.php"><img src="Img\right.png" width="22" height="23"></em></strong></a></td>
        </tr>
    </table>
</body>

</html>