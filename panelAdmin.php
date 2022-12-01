<?php require_once "cfg/config.php";?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="source/css/materialize.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="source/css/style.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php require "components/menu.php";
    if(isset($_SESSION['user']['admin']) ){
    echo "Bonjour ".$_SESSION['user']['username'];
    }else{
    header('Location:index.php');
    exit();
    }
    ?>

  <div class="header">
      <div class="parallax-container">
          <div class="parallax"><img src="source/img/header.jpeg" alt="background-header-projet"></div>
      </div>
      <h1>Liste des utilisateurs</h1>
  </div>
  
  <?php
      $sql = "SELECT * FROM user"; 
      $pre = $pdo->prepare($sql); 
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);
      
      foreach($data as $user){ ?>
      <div class="bloc_user">
          <h2><?php echo $user['email']." ".$user['username'] .($user['admin'] == 1?" - Admin":"");?></h2>
      </div>
  <?php } ?>

  <?php
    if(isset($_POST['title1'],$_POST['title2'],$_POST['title3'],$_POST['text1'],$_POST['text2'],$_POST['text3'],$_POST['cardTitle1'],$_POST['cardTitle2'],$_POST['cardTitle3'],$_POST['cardText1'],$_POST['cardText2'],$_POST['cardText3'])){
      
    }
  ?>

  <h2 class=" center-align color white" > Creer un projet </h2>

  <p> Nom de l'animé</p>

  <form method="post">
    <input type="text" name="animeName" placeholder="titre" />
  </form>
  
  <p>carousel</p>

  <form method="post">
      <input type="text" name="title1" placeholder="titre" />
      <textarea name="text1" placeholder="ecrire"></textarea>
  </form>
  <form method="post" action="upload.php" enctype="multipart/form-data">
    <input type='file' name='image1'>
  </form>

  <form method="post">
    <input type="text" name="title2" placeholder="titre" />
    <textarea name="text2" placeholder="ecrire"></textarea>
  </form>
  <form method="post" action="upload.php" enctype="multipart/form-data">
    <input type='file' name='image2'>
  </form>

  <form method="post">
    <input type="text" name="title3" placeholder="titre" />
    <textarea name="text3" placeholder="ecrire"></textarea>
  </form>
  <form method="post" action="upload.php" enctype="multipart/form-data">
    <input type='file' name='image3'>
  </form>

  <p>Personnage</p>
  
  <form method="post" action="upload.php" enctype="multipart/form-data">
    <input type='file' name='cardImage1'>
  </form>
  <form method="post">
    <input type="text" name="cardTitle1" placeholder="titre" />
    <textarea name="cardText1" placeholder="ecrire"></textarea>
  </form>

  <form method="post" action="upload.php" enctype="multipart/form-data">
  <input type='file' name='cardImage2'>
  </form>
  <form method="post">
    <input type="text" name="cardTitle2" placeholder="titre" />
    <textarea name="cardText2" placeholder="ecrire"></textarea>
  </form>

  <form method="post" action="upload.php" enctype="multipart/form-data">
  <input type='file' name='cardImage3'>
  </form>
  <form method="post">
    <input type="text" name="cardTitle3" placeholder="titre" />
    <textarea name="cardText3" placeholder="ecrire"></textarea>
  </form>

  <input type="submit" value="creer" />






    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="source/js/jquery.min.js"></script>
    <script type="text/javascript" src="source/js/materialize.min.js"></script>
    <script type="text/javascript" src="source/js/script.js"></script>

</body>

</html>