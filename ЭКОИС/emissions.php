<?php

require_once('db.php');
$ПДВ = $_POST['ПДВ'];
$ВРВ = $_POST['ВРВ'];
$ТНВ = $_POST['ТНВ'];
$ЭКВ = $_POST['ЭКВ'];

$sql = "INSERT INTO `emissions` (ПДВ, ВРВ, ТНВ, ЭКВ) VALUES('$ПДВ', '$ВРВ', '$ТНВ', '$ЭКВ')";

$conn -> query($sql);

if ($conn) {
    header('Location: tretie.php');
    exit;
} 
?>