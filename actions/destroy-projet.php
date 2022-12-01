<?php 
require_once "../cfg/config.php"; 

$sql = "DELETE FROM acceuil WHERE idAcceuil= :idAcceuil";
$dataBinded=array(
    ':idAcceuil'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../index.php');
?>