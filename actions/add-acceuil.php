<?php
require_once "../cfg/config.php"; 


if(isset($_FILES['img1']) && !empty($_FILES['img1']['name'])){
    
    $destination1 = "source/img/".$_FILES['img1']['name'];
    move_uploaded_file($_FILES['img1']['tmp_name'],$destination1);
    
    
    $sql ="INSERT INTO acceuil(h2,texte,img1) VALUES(:h2,:texte,:img1)";
    $dataBinded=array(
    ':h2' => $_POST['h2'],
    ':texte' => $_POST['texte'],
    ':img1' => $destination1,
    
    );
        
    
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

}else{
    echo "no file";exit();
}

header('Location:../index.php');

?>