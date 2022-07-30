<?php 
require_once "conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 10 | Create User Account</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $errorMessage = 0;
    if(isset($_POST['createBtn'])){
        if(empty($_POST['name'] || $_POST['email'] || $_POST['password'])){
            $errorMessage = 1;
            $_SESSION['error']['message']= "Input field is required!";
        }else{
            $name = $_POST['name'];       
            $email = $_POST['email'];       
            $password = $_POST['password']; 
            $cpassword = $_POST['c-password']; 
            if($password == $cpassword){
                $spass = password_hash($password,PASSWORD_DEFAULT);                 
                $sql = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$spass')";
                if(mysqli_query($conn,$sql)){
                    $errorMessage = 1;
                    $_SESSION['success']['message'] =  "Insert Successfully!";
                    header("location:login.php");
                }else{
                    echo "Query Fail : ".mysqli_error();
                }
            }else{
                echo "Password don't match";
            }
        }      
    } 
    ?> 
    <h1>Create User</h1>
    <p class="error"><?php if($errorMessage == 1){echo $_SESSION['error']['message'];} ?></p>
    <div class="register-info">
        <form action="" method="post">
            <div class="name-div-register">
                <label for="name">Name :</label><br>
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div class="email-div">
                <label for="email">Email :</label><br>
                <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="password-div">
                <label for="password">Password : </label><br>
                <input type="password" name="password" class="password" placeholder="Enter your password">
            </div> 
            <div class="confirm-div">
                <label for="password">Confirm Password : </label><br>
                <input type="password" name="c-password" class="password" placeholder="Enter your confirm password">
            </div>              
            <div class="add-div">
                <button name="createBtn">Create Account</button>
                <button class="login-link"><a href="login.php">Login</a></button>
            </div>
        </div>
        </form>
    </div>
    <?php $_SESSION['error']['Message']=[]; ?>
</body>
</html>