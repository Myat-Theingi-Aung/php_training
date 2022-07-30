<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 04</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tutorial 04</h1>
    <form action="login.php" method="post">
        <div class="email-div">
            <label for="email">Email : </label>
            <input type="email" name="email" placeholder="example@gmail.com" required>
        </div>       
        <div class="pass-div">
            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="123456" required>
        </div>
        <div class="btn-div">
            <input type="submit" value="Login" name="submit">
        </div>
    </form>
</body>
</html>
