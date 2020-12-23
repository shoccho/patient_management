<?php
$dburl = "localhost";
$dbname = "doctor_portal";
$dbuser = "root";
$dbpassword = "";

$conn = mysqli_connect($dburl, $dbuser, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}