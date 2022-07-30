<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_06 | Image Upload</title>
    <link rel="stylesheet" href="css/new.css">
</head>
<body>
<section>
    <h1>Tutorial_06 - Image Upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="fileUpload">
            <label for="file">Choose Image :</label>
            <input type="file" name="image">
        </div>
        <div class="createFolder">
            <input type="text" name ="folder_name" placeholder="Folder Name">
        </div>
        <div class="btn-up">
            <input type="submit" name="submit" value="Upload">
        </div>
    </form>
</section>
<?php
if (isset($_POST['submit'])) {

    if ($_FILES['image']['name'] && $_POST['folder_name'] != "") {
        $fileType = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        $folder_name = $_POST['folder_name'];
        if (in_array($_FILES['image']['type'], $fileType)) {
            mkdir($folder_name);
            $image = $folder_name . "/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
            echo "<p>Upload Successfully!</p>";
        } else {
            echo "<p class='error'>Select .png, .jpeg, .gif file</p>";
        }
    } else {
        echo "<p class='error'> Input field is require! </p>";
    }

}
?>

</body>
</html>