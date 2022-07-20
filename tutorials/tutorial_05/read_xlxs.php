<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 05 | .XLXS File Reading</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tutorial 05</h1>

    <h2>Student Data Table</h2>
    <table>
    <?php

    //load phpspreadsheet
    require "vendor/autoload.php";
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    //open spreadsheet
    $sheet = $reader->load("student.xlsx");
    $worksheet = $sheet->getActiveSheet();
    foreach($worksheet->getRowIterator() as $row){
        //read the cell
        $cellIterate = $row->getCellIterator();
        $cellIterate->setIterateOnlyExistingCells(false);

        //output
        echo "<tr>";
        foreach($cellIterate as $cell){
            echo "<td>". $cell->getValue()."</td>";
        }
        echo "</tr>";

    }
    ?>
    </table>

    
</body>
</html>