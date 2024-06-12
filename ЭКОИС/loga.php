<?php

require_once('db.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM  `users` WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    header('Location: Main.php');
    exit;
} else{
    echo "Такого позователя не существует";
}

?>