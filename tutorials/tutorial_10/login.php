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
    <title>Tutorial 10 | Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    $errorMessage = 0;
    if(isset($_POST['login'])){
        if(empty($_POST['email'] || $_POST['password'])){
            $errorMessage = 1;
            $_SESSION['error']['message']= "Input field is required!";
        }else{      
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM user where email='$email'";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($query);
            if($row){
                if(password_verify($password,$row['password'])){
                    header("location:index.php");
                }else{
                    $errorMessage = 1;
                    $_SESSION['error']['message']= "Email or Password don't match";
                }
            }else{
                $errorMessage = 1;
                $_SESSION['error']['message']= "Email or Password don't match";
            }
        }      
    }  
    ?>
    <h1>Login Form</h1>
    <p class="error login-error"><?php if($errorMessage == 1){echo $_SESSION['error']['message'];} ?></p>
    <form class="login-form" action="" method="post">
        <div class="email-div">
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="pass-div">
            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="Enter your password">
            <a class="changeColor" href="forgot.php">Forgot Password?</a>
        </div>
        <div class="btn-up">
            <button  name="login">Login</button>
            <button><a class="changeColor" href="register.php">Register</a></button>
        </div>
    </form>


<?php 
$_SESSION['error']=[];
$_SESSION['error']['message']=[];
 ?>
</body>
</html>