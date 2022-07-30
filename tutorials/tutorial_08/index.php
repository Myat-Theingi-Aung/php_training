<?php 
session_start();
require_once"conn.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_08 | Create Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $errorMessage = 0;

    if(isset($_POST['insertData'])){
        if(empty($_POST['name'] || $_POST['address'] || $_POST['age'])){
            $errorMessage = 1;
            $_SESSION['error']['message']= "Input field is required!";
        }else{
            $name = $_POST['name'];       
            $address = $_POST['address'];       
            $age = $_POST['age'];       
            $gender = $_POST['gender'];    
            $sql = "INSERT INTO student (name,address,age,gender) VALUES ('$name','$address',$age,'$gender')";
            if(mysqli_query($conn,$sql)){
                $_SESSION['success']['message'] =  "Insert Successfully!";
                //header("location:index.php");
            }else{
                echo "Query Fail : ".mysqli_error();
            }
        }      
    }  
    ?>
    <h1>Tutorial 08</h1>
    <div class="clearfix">
        <div class="left">
            <h2>Add Student Info</h2>
            <p class="error"><?php if(isset($_SESSION['error']['message'])){ echo $_SESSION['error']['message']; } ?></p>
            <p class="success"><?php if(isset($_SESSION['success']['message'])){ echo $_SESSION['success']['message']; } ?></p>
            <form action="" method="post">
                <div class="name-div">
                    <label for="name">Name :</label>
                    <input type="text" name="name" class="name">
                </div>
                <div class="address-div">
                    <label for="address">Address : </label>
                    <textarea name="address" id="" cols="37" rows="3" ></textarea>
                </div>
                <div class="age-div">
                    <label for="age">Age : </label>
                    <input type="text" name="age" class="age">
                </div>
                <div class="gender">
                    <label for="gender">Gender : </label>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label>
                </div>
                <div class="btn-div">
                    <button class="btn" name="insertData">Add</button>
                </div>
            </form>
        </div>
    <?php
    $sql1 = "SELECT * FROM student";
    $qurey = mysqli_query($conn,$sql1);
    $totalRows = mysqli_num_rows($qurey);
    ?>

        <div class="right">
            <h2 class="table-up">Student Data Table</h2>
            <p class="success"><?php if(isset($_SESSION['success']['mes'])){ echo $_SESSION['success']['mes']; } ?></p>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($rows = mysqli_fetch_assoc($qurey)){
                        echo "<tr>";
                        echo "<td>{$rows['id']}</td>";
                        echo "<td>{$rows['name']}</td>";
                        echo "<td>{$rows['address']}</td>";
                        echo "<td>{$rows['age']}</td>";
                        echo "<td>{$rows['gender']}</td>";
                        echo "<td><a href='delete.php?id={$rows['id']}'>Del</a><a class='tbl-upd-btn' href='update.php?id={$rows['id']}'>Edit</a></td>";
                    ?>
                    <?php } 
                    echo "</tr>";
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <?php 
    $_SESSION['error']=[];
    $_SESSION['success'] = [];
    ?>
</body>
</html>