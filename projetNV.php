<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html lang="fr" dir="ltr">

<head>
  <title>Blue Lock</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="source/css/materialize.css" />
  <link type="text/css" rel="stylesheet" href="source/css/style_c.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<?php require "components/menu.php"; ?>

  <div class="header">
    <div class="parallax-container">
      <div class="parallax"><img src="source/img/header.jpeg" alt="background-header-projet"></div>
    </div>

    <form method="post">
      <h1 class="center-align">Présentation de l'anime <input type="text" placeholder="Nom de l'anime" class="c"/></h1>
    </form>            
  </div>
  <div class=" container carousel carousel-slider center">
    <div class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 m12 l5 offset-l1">
        <form method="post">
          <input type="text" placeholder="titre" />
          <textarea placeholder="ecrire"></textarea>
        </form>
        </div>
        <div class="offset-l1 col s12 m12 l5">
          <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type='file' name='image'>
          </form>
        </div>
      </div>
    </div>
    <div class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 l5 offset-l1">
          <form method="post">
            <input type="text" placeholder="titre" />
            <textarea placeholder="ecrire"></textarea>
          </form>
        </div>
        <div class="offset-l1 col s12 m12 l5">
          <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type='file' name='image'>
          </form>
        </div>
      </div>
    </div>
    <div class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 m12 l5 offset-l1">
          <form method="post">
            <input type="text" placeholder="titre" />
            <textarea placeholder="ecrire"></textarea>
          </form>
        </div>
        <div class="offset-l1 col s12 m12 l5">
          <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type='file' name='image'>
          </form>
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
            <form method="post" action="upload_file.php" enctype="multipart/form-data">
              <input type='file' name='image'>
            </form>
          </div>
          <div class="card-content black">
            <form method="post">
              <span class="card-title"><input type="text" placeholder="Nom du personnage" /></span>
              <textarea placeholder="ecrire"></textarea>
            </form>
          </div>
        </div>
      </div>
      <div class="offset-m2 col s12 m8 l4 offset-m2">
        <div class="card">
          <div class="card-image">
            <form method="post" action="upload_file.php" enctype="multipart/form-data">
              <input type='file' name='image'>
            </form>
          </div>
          <div class="card-content black">
            <form method="post">
              <span class="card-title"><input type="text" placeholder="Nom du personnage" /></span>
              <textarea placeholder="ecrire"></textarea>
            </form>
          </div>
        </div>
      </div>
      <div class="offset-m2 col s12 m8 l4 offset-m2">
        <div class="card">
          <div class="card-image">
            <form method="post" action="upload_file.php" enctype="multipart/form-data">
              <input type='file' name='image'>
            </form>
          </div>
          <div class="card-content black">
            <form method="post">
              <span class="card-title"><input type="text" placeholder="Nom du personnage" /></span>
              <textarea placeholder="ecrire"></textarea>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <input type="submit" value="creer" />

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="source/js/jquery.min.js"></script>
  <script type="text/javascript" src="source/js/materialize.min.js"></script>
  <script type="text/javascript" src="source/js/script.js"></script>
</body>

</html>