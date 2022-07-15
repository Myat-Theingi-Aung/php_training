<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Turorial 02 | Star</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Tutorial 02</h1>
  <div>
    <?php
$numOfRows = 6;
for ($row = 1; $row <= $numOfRows; $row++) {
    for ($col = 1; $col <= (2 * $numOfRows) - 1; $col++) {
        if ($col >= $numOfRows - ($row - 1) && $col <= $numOfRows + ($row - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
for ($row = $numOfRows - 1; $row >= 1; $row--) {
    for ($col = 1; $col <= (2 * $numOfRows) - 1; $col++) {
        if ($col >= $numOfRows - ($row - 1) && $col <= $numOfRows + ($row - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>
  </div>
</body>
</html>