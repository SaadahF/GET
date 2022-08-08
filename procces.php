<?php
error_reporting(0); 

$number = $_GET["number"];
$int = (int)$number;

$host = "localhost";
$dbname = "Numbers_DB";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
    die("connection eror: " . mysqli_connect_error());
}

$sql = "Insert the integer (Number) VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "i", $int);

mysqli_stmt_execute($stmt);

echo "your integer has been saved.";
?>
