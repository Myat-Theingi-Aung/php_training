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
    <title>Tutorial 10 | Reset Password Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $errorMessage = 0;
    if(isset($_POST['update'])){
        echo 'button click';
        $email = $_POST['email'];
        $sql = "SELECT * FROM user where email='$email'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
        if(!$row){
            $errorMessage = 1;
            $_SESSION['error']['Message']= "user ma hote buu register ayin lote yan";
            header("location:register.php");         
        }else{
            print_r($row);
            $id = $row['id'];       
            $newPassword = $_POST['new-password']; 
            $confirmPassword = $_POST['con-password']; 
            if($newPassword == $confirmPassword){
                $spass = password_hash($newPassword,PASSWORD_DEFAULT);                 
                $sql = "UPDATE user SET password='$spass' WHERE  id=$id";
                if(mysqli_query($conn,$sql)){
                    $_SESSION['success']['message'] =  "Password Update Successfully!";
                    header("location:index.php");
                }else{
                    echo "Query Fail : ".mysqli_error();
                }
            }else{
                echo "Password don't match";
            }

        } 
    }
    ?>
    <h1>Reset Password Form</h1>
    <form class="login-form" action="" method="post">
        <div class="email-div">
            <label for="email">Email</label><br>
            <input type="email" name="email">
        </div>
        <div class="pass-div">
            <label for="password">New Password</label><br>
            <input type="password" name="new-password">
        </div>
        <div class="pass-div">
            <label for="password">Confirm Password</label><br>
            <input type="password" name="con-password">
        </div>
        <div class="">
            <button name="update">Update</button>
        </div>
    </form>
</body>
</html>