<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; 
     
     header('Location:../index.php');
}
?>