<?php
require_once "../cfg/config.php"; 

if(isset($_FILES['img']) && !empty($_FILES['image1']['name']) && isset($_files['image2']) && !empty($_FILES['img2']['name']))
    $destination1 = "../source/img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination1);

    $destination2 = "../source/img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination2);

    $sql ="INSERT INTO projetpage(h1,img,img2) VALUES(:titre1,:image1

?>