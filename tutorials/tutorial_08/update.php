<link rel="stylesheet" href="css/style.css">
<?php
session_start();
require_once "conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE id=$id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
$gender = $row['gender'];

if(isset($_POST['updateData'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gen = $_POST['gender'];
    $sql = "UPDATE student SET name='$name',age=$age,address='$address',gender='$gen' WHERE  id=$id";
    if(mysqli_query($conn,$sql)){
        $_SESSION['success']['mes'] = "Update Successfully!";
        header("location:index.php");
    }else{
        echo "Query Fail : ".mysqli_error();
    }
}
?>
    <div class="update-div">
        <h2 class="update-h2">Update Student Data</h2>
        <form class="update-form" action="" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        
            <div class="name-div">
                <label for="name">Name :</label>
                <input type="text" name="name" value="<?php echo $row['name'] ?>" class="name" required>
            </div>
            <div class="address-div">
                <label for="address">Address : </label>
                <textarea name="address" id="" cols="37" rows="3"><?php echo $row['address'] ?></textarea>
            </div>
            <div class="age-div">
                <label for="age">Age : </label>
                <input type="text" name="age" value="<?php echo $row['age'] ?>" class="age" required>
            </div>
            <div class="gender">
                <label for="gender">Gender : </label>
                <input type="radio" id="male" name="gender" value="Male" <?php echo ($gender== 'Male') ?  "checked" : "" ;  ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" <?php echo ($gender== 'Female') ?  "checked" : "" ;  ?>>
                <label for="female">Female</label>
            </div>

            <div class="btn-div">
                <button class="btn" name="updateData">Update</button>
            </div>

        </form>
    </div>