<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 01 | Chess Board</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
h1>Tutorial 01</h1>
  <table>
    <?php
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {

        $num = $row + $col;
        if ($num % 2 == 0) {
            echo "<td style='background-color:#fff'></td>";
        } else {
            echo "<td style='background-color:#000'></td>";
        }

    }
    echo "</tr>";
}
?>

  </table>

</body>
</html>