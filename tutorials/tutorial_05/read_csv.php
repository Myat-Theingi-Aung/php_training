<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 05 | .CSV File Reading</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tutorial 05</h1>

<?php
$file = fopen('student.csv','r');
$data = fgetcsv($file,1000,',');
$records = [];
while(($data = fgetcsv($file,1000,',')) !== FALSE){
    $records[] = $data;  
}

fclose($file);
?>

<h2>Student Data Table</h2>
<table>
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($records as $record){ ?>
        <tr>
            <td><?= $record[0] ?></td>
            <td><?= $record[1] ?></td>
            <td><?= $record[2] ?></td>
            <td><?= $record[3] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    
</body>
</html>