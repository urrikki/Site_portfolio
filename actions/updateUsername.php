<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE user SET username = :username WHERE id= :id";
$dataBinded=array(
    ':username'   => $_POST['username'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../panelAdmin.php');
?>