<?php
require_once "../cfg/config.php"; 

if(isset($_FILES['img']) && !empty($_FILES['image1']['name']) && isset($_files['image2']) && !empty($_FILES['image2']['name'])){
    $destination1 = "../source/img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination1);

    $destination2 = "../source/img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination2);

    $sql ="INSERT INTO projetpage(titre1,image1,image2) VALUES(:titre1,:image1,:image2)";
    $dataBinded=array(
        ':titre1' => $_POST['titre1'],
        ':image1' => $destination1,
        ':image2' => $destination2,
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}else{
    echo "no file";exit();
}

header('Location:../index.php');

?>