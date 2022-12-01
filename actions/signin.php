
<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM user WHERE username= :username AND password=SHA1(:password)";
$dataBinded=array(
     ':username'   => $_POST['username'],
     ':password'=> "564#(''#5645616519651654965464'')".$_POST['password'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){
     $_SESSION('error');
}else{
     $_SESSION['user'] = $user; 
     
     header('Location:../index.php');
}
?>


