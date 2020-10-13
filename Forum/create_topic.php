<html>

<body>
    <table cellpadding=10px align="center" style="width:30% ; border : 3px solid #000000; 
            padding:20px;transform:translate(0,50px); background:#CCCCCC; font-size:20">
        <form name="Create_New_Topic" method="post" action="add_topic.php">
                <tr>
                    <td colspan="2" align="Center" style="font-size:30;"><strong>Create New Topic</strong></td>
                </tr>
                <tr>
                    <td><strong>Topic : </strong></td>
                    <td><Input type="text" name="Topic" required size=30 placeholder="Enter Topic"/></td>
                </tr>
                <tr>
                    <td><strong>Detail : </strong></td>
                    <td><textarea name="detail" cols=29 rows=4 required placeholder="Give Brief Detail"></textarea> </td>
                </tr>
                <tr>
                    <td><strong>Name : </strong></td>
                    <td> <Input type="text" name="Name" size=30 required placeholder="Enter Name"/></td>
                </tr>
                <tr>
                    <td><strong>Email : </strong></td>
                    <td> <Input type="Email" name="Email" size=30 required placeholder="Enter Email Address"/></td>
                </tr>
                <tr style="transform:translate(120px,0px);">
                    <td><input type="Submit" Value="Submit">
                    </td>
                    <td><input type="Reset" Value="Reset"></td>
                </tr>
        </form>
    </table>
</body>

</html>