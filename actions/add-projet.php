<?php
require_once "../cfg/config.php"; 


if(isset($_FILES['image1']) && !empty($_FILES['image1']['name']) && isset($_FILES['cardImage1']) && !empty($_FILES['cardImage1']['name'])){
    
    $destination1 = "../source/img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],$destination1);
    $destination2 = "../source/img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],$destination2);
    
    $sql ="INSERT INTO test(animeName,title1,text1,image1,cardTitle1,cardText1,cardImage1) VALUES(:animeName,:title1,:text1,:image1,:cardTitle1,:cardText1,:cardImage1)";
    $dataBinded=array(
    ':animeName' => $_POST['animeName'],
    ':title1' => $_POST['title1'],
    ':text1' => $_POST['text1'],
    ':image1' => $destination1,
    ':cardTitle1' => $_POST['cardTitle1'],
    ':cardText1' => $_POST['title1'],
    ':cardImage1' => $destination2,
    
        );
        
    
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

}else{
    echo "no file";exit();
}

header('Location:../index.php');

?>

