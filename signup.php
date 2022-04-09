<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    //sth was posted
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $email = $_POST['email'];
    if(!empty($username)&& ! empty($password) && ! is_numeric($username)){
        //save to database
        $query="insert into user (email,password,username) values('$email','$password','$username')";

        mysqli_query($con,$query);
        header("location: login.php");
        die;
    }else
    {
        echo"!!!please enter some valid information!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginSignup.css">
    <title>signup</title>
</head>
<body>
    <div id="box">
        <form action="" method="post" autocomplete="off">
            <div style="font-size:30px; margin:10px; color:white; text-align:center;">SIGN UP</div><br><br>
            
            <label for="name">Name</label>
            <input id="text" placeholder="Name" type="text" name="username" ><br><br>

            <label for="password">Password</label>
            <input id="text" placeholder="Password" type="password" name="password"><br><br>

            <label for="email">Email</label>
            <input id="text" placeholder="Email" type="email" name="email"><br><br><br>
            
            <input id="button" type="submit" name="signup">

            <label for=""style="padding-left:50px;" >Already have an account?</label>
            <a id="link" href="login.php">Login</a>
            
        </form>
    </div>
</body>
</html>