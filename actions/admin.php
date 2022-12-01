<?php
require_once "../cfg/config.php"; 

$sql = "UPDATE user SET admin = :admin WHERE id = id";
$dataBinded=array(
    'admin' => $_POST['admin'],
    'id' => $_POST['id'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

?>