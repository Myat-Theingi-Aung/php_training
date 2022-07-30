<?php 
session_start();
require_once "conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id=$id";

if(!mysqli_query($conn,$sql)){
    echo "Query Fail : ".mysqli_error();
}else{
    $_SESSION['success']['mes'] = "Delete Successfully!";
    header("location:index.php");
}
?>