<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 07 | QR Code Generator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section>
    <h1>Tutorial 07 - QR Code Generator</h1>
    <form action="" method="post">
        <div class="">
        <input type="text" name="qr-text" placeholder="Something...">
        </div>
        <div class="">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</section>
<section>
    <div>
        <?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['qr-text'])) {
        $text = $_POST['qr-text'];
        require_once 'phpqrcode/qrlib.php';
        $path = 'images/';
        $qrcode = $path . time() . ".png";
        echo "<h3>QR Code for <span> " . $text . "</span></h3>";
        QRcode::png($text, $qrcode, 15, 15);
        echo "<img src='" . $qrcode . "'>";
    } else {
        echo "<p class='error'> Input field is require! </p>";
    }
}
?>
    </div>
</section>

</body>
</html>