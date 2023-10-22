<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
$dbConnection = mysqli_connect('localhost', 'root', '', 'animal_adoption');
if (!$dbConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>