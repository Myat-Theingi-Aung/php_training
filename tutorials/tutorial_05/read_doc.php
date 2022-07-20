<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 05 | .DOC File Reading</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tutorial 05 - Convert docx to html file</h1>

<?php
require "vendor/autoload.php";
$phpWord =PhpOffice\PhpWord\IOFactory::load("test.docx");
$section = $phpWord->addSection();
$source = "doc_file.html";
$objWriter = PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'HTML');
$objWriter->save($source);

?>

</body>
</html>