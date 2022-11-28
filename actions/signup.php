<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(email ,username ,password) VALUES(:email,:username, :password)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'   => $_POST['username'],
    ':password'=> $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

// header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>