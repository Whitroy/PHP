<html>
<head>
    <style>

    </style>
</head>
<body>
    <table cellpadding=10px align="center" style="width:20% ; border : 3px solid #000000; padding:20px;transform:translate(0,30px); background:#FFEFD5;">
        <div>
            <tr>
                <th>Join With Us</th>
            </tr>
            <form action="signup.php" method="post" >
                <tr>
                    <td ><input type="text" name="First_name" placeholder="First Name"></td>
                </tr>
                <tr>
                    <td ><input type="text" name="Last_name" placeholder="Last Name"></td>
               </tr>
               <tr>
                    <td ><input type="text" name="UserName" placeholder="User Name"></td>
               </tr>
               <tr>
                    <td ><input type="Email" name="Email" placeholder="Email Address"></td>
               </tr>
               <tr>
                    <td ><input type="password" name="pass" placeholder="Password"></td>
               </tr>
               <tr>
                    <td ><input type="password" name="CPass" placeholder="Confirm Password"><br><br>
                    <input type="checkbox" name="Terms">I agree to the <a href="#" style="color:dodgerblue">Term of Use</a></td>
               </tr>
               <tr style="transform:translate(20px,0px);">
                    <td><input type="Submit" Value="Sign Up">
                    <input type="Reset" Value="Cancel"></td>
               </tr>               
            </form>
        </div>
    </table>
</body>
</html>