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
            <input type="file" name="image" accept="image/png,image/gif,image/jpg,image/jpeg">
        </div>
        <div class="createFolder">
            <input type="text" name = "folder_name" placeholder="Folder Name" required>
        </div>
        <div class="btn-up">
            <input type="submit" name="submit" value="Upload">
        </div>
    </form>
</section>
<?php
if(isset($_POST['submit'])){

    $folder_name = $_POST['folder_name'];
    mkdir($folder_name);

    $image =$folder_name."/". $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

    echo "<p>Upload Successfully!</p>";

}
?>
    
</body>
</html>