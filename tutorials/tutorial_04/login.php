<?php
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

if ($_SESSION['email'] && $_SESSION['password']) {
    print_r($_SESSION);
    echo "<br>";
    echo "<a href='logout.php'>logout</a>";
} else {
    header("location:index.php");
}
