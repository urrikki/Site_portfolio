<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE acceuil SET texte = :texte WHERE idAcceuil= :idAcceuil";
$dataBinded=array(
    ':texte' => $_POST['texte'],
    ':idAcceuil'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../index.php');
?>