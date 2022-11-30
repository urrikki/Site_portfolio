<?php
require_once "../cfg/config.php"; 
$sql = "UPDATE user SET `admin` = '1' WHERE user.`id` = id";
$dataBinded=array(

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
?>