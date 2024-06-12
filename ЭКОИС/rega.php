<?php

require_once('db.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `users` (username, email, password) VALUES('$username', '$email', '$password')";

$conn -> query($sql);

if ($conn) {
    header('Location: Main.php');
    exit;
} 
?>