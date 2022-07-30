<?php

$conn = mysqli_connect("127.0.0.1","root","1234","tutorial");
if(!$conn){
  die("connection fail : ".mysqli_connect_error());
}else{
  // sql to create table
$sql = "CREATE TABLE IF NOT EXISTS student (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  address VARCHAR(225) NOT NULL,
  age INT NOT NULL,
  gender VARCHAR(45) NOT NULL,
  PRIMARY KEY (id));";
$table =mysqli_query($conn, $sql) or die("bad create :$sql");
  if (!$table) {
    echo "Error creating table: " . mysqli_error($conn);
  } 
}
?>