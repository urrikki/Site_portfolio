<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html lang="fr" dir="ltr">

<head>
  <title>Projet</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="source/css/materialize.css" />
  <link type="text/css" rel="stylesheet" href="source/css/style_c.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<?php 
require "components/menu.php"; 
require_once "actions/database.php";
$sql = "SELECT * FROM test WHERE idTest =:id ";
$dataBinded = array(
  ':id' => $_GET['id']
);
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute($dataBinded); //on l'execute
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $test) {
?>
      <div class="header">
      <div class="parallax-container">
        <div class="parallax"><img src="source/img/header.jpeg" alt="background-header-projet"></div>
      </div>
      <h1 class="center-align">Présentation de l'anime <?php echo $test['animeName']; ?></h1>
    </div>
    <div class=" container carousel carousel-slider center">
      <div class="carousel-item" href="#one!">
        <div class="row">
          <div class="col s12 m12 l5 offset-l1">
            <h2><?php echo $test['title1']; ?></h2>
            <p><?php echo $test['text1']; ?></p>
          </div>
          <div class="offset-l1 col s12 m12 l5">
            <img src="<?php echo $test['image1']; ?>">
          </div>
        </div>
      </div>
      <div class="carousel-item" href="#one!">
        <div class="row">
          <div class="col s12 l5 offset-l1">
            <h2><?php echo $test['title1']; ?></h2>
            <p><?php echo $test['text1']; ?></p>
          </div>
          <div class="offset-l1 col s12 m12 l5">
            <img src="<?php echo $test['image1']; ?>">
          </div>
        </div>
      </div>
      <div class="carousel-item" href="#one!">
        <div class="row">
          <div class="col s12 m12 l5 offset-l1">
            <h2><?php echo $test['title1']; ?></h2>
            <p><?php echo $test['text1']; ?></p>
          </div>
          <div class="offset-l1 col s12 m12 l5">
            <img src="<?php echo $test['image1']; ?>">
          </div>
        </div>
      </div>
    </div>

    <div class="parallax-container">
      <div class="parallax"><img src="source/img/second.jpeg" alt="background-header-projet"></div>
    </div>

    <!--cards-->
    <div class="characters">
      <h2 class="center-align">Presentation des personnages</h2>
      <div class="row">
        <div class="offset-m2 col s12 m8 l4 offset-m2">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo $test['cardImage1']; ?>">
            </div>
            <div class="card-content black">
              <span class="card-title"><?php echo $test['cardTitle1']; ?></span>
              <p><?php echo $test['cardText1']; ?></p>
            </div>
          </div>
        </div>
        <div class="offset-m2 col s12 m8 l4 offset-m2">
          <div class="card">
            <div class="card-image">
              
            </div>
            <div class="card-content black">

            </div>
          </div>
        </div>
        <div class="offset-m2 col s12 m8 l4 offset-m2">
          <div class="card">
            <div class="card-image">
            </div>
            <div class="card-content black">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  }
?>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="source/js/jquery.min.js"></script>
  <script type="text/javascript" src="source/js/materialize.min.js"></script>
  <script type="text/javascript" src="source/js/script.js"></script>
</body>

</html>