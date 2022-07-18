<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 03 | Age Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tutorial 03</h1>
    <p>
    <?php
if (isset($_POST['submit'])) {
    $dob = $_POST['dob'];
    echo "Date of Birth : ". $dob . '<br>';
    $today = date('Y-m-d');
    if ($dob < $today) {
        $age = date_diff(date_create($dob), date_create($today));
        echo "Your age is " . $age->format('%y') . " years old";
    } else {
        echo "You are not born yet";
    }
}
?>
    </p>
    <form action="" method="post">
        <label for="dob">Date of Birth :</label>
        <input type="date" name="dob" class="dob" value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];} ?>">
        <br>
        <input type="submit" class="btn" name="submit" value="Calculate Age">
    </form>
</body>
</html>