<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 05 | .txt File Reading</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tutorial 05</h1>
    <?php
    $contents=file_get_contents("text.txt");
    $lines=explode("\n",$contents);
    foreach($lines as $line){
     echo $line.'<br>';
    }
    ?>  
</body>
</html>