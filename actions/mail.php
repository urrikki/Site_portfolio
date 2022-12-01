<?php 
require_once "../cfg/config.php";
$email="gnandndong@gaming.tech" && "gtttgttt063@gmail.com";
$objet=$_POST['object'];
$content=$_POST['message']."<br><br>Email from : ".$_POST['email'];

if(mail($email, $objet, $content, $header)){
    echo "Votre message a été envoyé"
} else {
    echo " Une erreur est survenue"
}
?>