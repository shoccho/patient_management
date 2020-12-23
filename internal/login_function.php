<?php
require 'connect_database.php';

$uname = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * from  `doctors`  where `username` =  '$uname'  ";
$result = mysqli_query($conn, $sql);

// Associative array
$row = mysqli_fetch_assoc($result);

if ($password == $row['password']) {
    session_start();
    
    $_SESSION['username'] = $uname;
    header("Location: ../index.php?login=success");
    exit();
}
