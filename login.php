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
        //read from database
        $query="select * from user where username = '$username' limit 1";
        $result=mysqli_query($con,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);
                
                if($user_data['password']===$password)
                {
                    // $_SESSION['user_id']=$user_data['user_id'];
                    header("location:adoption.php");
                    die;
                }
            }
        }
        echo"!!!wrong username or password!!!";
    }else
    {
        echo"!!!wrong username or password!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginSignup.css">
    <title>login</title>
</head>
<body>
    <div id="bg">
    <div id="box">
        <form  autocomplete="off" action="" method="post">
            <div style="font-size:30px; margin:10px; color:white; text-align:center;">LOGIN</div><br><br>

            <label for="name">Name</label>
            <input id="text" placeholder=" Enter Name" type="text" name="username"><br><br>

            <label for="password">Password</label>
            <input id="text"placeholder=" Enter Password" type="password" name="password"><br><br>

            <label for="email">Email</label>
            <input id="text"placeholder="Enter Email" type="email" name="email"><br><br><br>

            <input id="button"type="submit" name="login">`

            <label for=""style="padding-left:20px;" >DO you want to be a member?</label>
            <a href="signup.php" id="link">Signup</a>
        </form>
    </div>
    </div>
</body>
</html>