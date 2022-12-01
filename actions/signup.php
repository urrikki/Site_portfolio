<?php 
require_once "../cfg/config.php"; 
print_r('bmm');
$sql = "INSERT INTO user(email ,username ,password) VALUES(:email,:username, SHA1(:password))";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'   => $_POST['username'],
    ':password'=> "564#(''#5645616519651654965464'')".$_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>