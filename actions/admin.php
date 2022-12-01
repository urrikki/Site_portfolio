<?php
require_once "../cfg/config.php"; 

$sql = "UPDATE user SET admin = :admin WHERE id = :id";
$dataBinded=array(
    ':id' => $_POST['id'],
    ':admin' => $_POST['admin'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../panelAdmin.php');
?>