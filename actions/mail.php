<?php 
require_once "../cfg/config.php";
$email="gnandndong@gaming.tech" && "gtttgttt063@gmail.com";
$name=$_POST['name'];
$objet=$_POST['objet'];
$content=$_POST['content']."<br><br>Email from : ".$_POST['email'];

if(mail($email, $objet, $content)){
    echo "Votre message a été envoyé";
} else {
    echo " Une erreur est survenue";
}
?>