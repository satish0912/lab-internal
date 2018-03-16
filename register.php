<?php 
include "connect.php";
session_start();
if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `register` ( `user_name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>News point</title>
            <link rel="stylesheet" href="register.css">
    </head>   
    <body>
        
        <div class="content">
            <div class="disp">
            <center>
            <h2>Register</h2>
                <form class="form" method="post" action="">
                <td>Name<input type="text" name="name"></td><br><br>
                <td>Email<input type="varchar" name="email"></td><br><br>
                <tr><td>Password<input type="password" name="pass"></tr></td><br><br>
                <tr><td>Retype Password <input type="text" name="repass"></tr></td><br><br>
                <td><input type="submit" name="sub" value="Click to Submit"></td></br>
                <td><a href="login.php"   >Login</a></td>
                </center>
            </form>
            </div> 
         
        </div>
    </body>  
</html>
