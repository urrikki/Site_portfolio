<?php
require_once "../cfg/config.php"; 
$sql = "UPDATE user SET id=id, admin=";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'   => $_POST['username'],
    ':password'=> "564#(''#5645616519651654965464'')".$_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
?>