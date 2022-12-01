<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
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

<?php require "components/menu.php"; ?>
  
  <div class="header">
    <div class="parallax-container">
      <div class="parallax"><img src="source/img/header.jpeg" alt="background-header-projet"></div>
    </div>
    <h1 class="center-align" id="scroll1">Portfolio d'animé</h1>
  </div>

  <!--service-tabs-->
  <section class="section container" id="services" id="scroll-description">
    <div class="row">
      <div class="col s12 l4">
        <h2>Qui somme nous ..?</h2>
        <p>Voici une petite presentation de nous même.</p>
      </div>
      <div class="col s12 l6 offset-l2">
        <!-- tabs -->
        <ul class="tabs">
          <li class="tab col s6 black">
            <a href="#matteo" class="active accent 2 cyan-text">Mattéo</a>
          </li>
          <li class="tab col s6 black">
            <a href="#gabriel" class="accent 2 cyan-text ">Gabriel</a>
          </li>
        </ul>
        <div id="matteo" class="col s12">
          <p>Stampanoni mattéo</p>
          <p>Bonjour,je suis étudiant à gaming campus et ce site est le projet numéro 2.</p>
          <p>Merci de visiter notre site.</p>
        </div>
        <div id="gabriel" class="col s12">
          <p>NANG NDONG Gabriel</p>
          <p>Bonjour,je suis étudiant à gaming campus et ce site est le projet numéro 2.</p>
          <p>Merci de visiter notre site.</p>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="parallax-container">
    <div class="parallax"><img src="source/img/second.jpeg" alt="background-header-projet"></div>
  </div>

  <!--formulaire d'animé-->
  <div class="formulaire-d'animé container">
    <h2 class="center-align" id="scroll2"> Formulaire d'animé</h2>
    <div class="row">
      <div class="col s12 m7 l3">
        <h3>Blue lock</h3>
        <p class="justify-content">Le manga commence avec l'élimination de la Coupe du monde 2018 du Japon, ce qui
          incite l'Union japonaise de football à lancer un programme de surveillance dans les écoles secondaires afin
          de
          sélectionner les joueurs qui vont s'entraîner et se préparer pour la Coupe du monde 2022. Le protagoniste
          Yoichi Isagi, un membre avancé de son équipe de lycée perd le match qui aurait pu qualifier son équipe pour
          la
          finale de Saitama, faute de pouvoir jouer dans les championnats nationaux. Alors qu'il croyait que tout
          était
          perdu, Yoichi reçoit une invitation à rejoindre le programme Blue Lock.</p>
        <img class="cover" src="source/img/blue-lock.jpg" alt="">
        <a class="waves-effect waves-light btn" href="blue-lock.php">En savoir plus</a>
      </div>
      <div class="col s12 m7 l3">
        <h3>Black clover</h3>
        <p class="justify-content">Asta est un jeune garçon déterminé qui vit avec son ami d’enfance, Yuno, dans un
          orphelinat du royaume de Clover. Depuis tout petit, Asta a pour ambition de devenir le magicien le plus
          puissant du royaume, "l’Empereur-Mage", ce qui a aussi inspiré Yuno à vouloir la même chose. Mais
          malheureusement, Asta est né sans aucun talent magique, alors que Yuno possède des prédispositions
          spectaculaires.</p>
        <img class="cover" src="source/img/black-clover.jpg" alt="">
        <a class="waves-effect waves-light btn" href="black-clover.php">En savoir plus</a>
      </div>
      <div class="col s12 m7 l3">
        <h3>Jojo's Bizarre adventures</h3>
        <p>JoJo's Bizarre Adventure suit les aventures de la famille Joestar sur plusieurs générations, chaque
          génération ayant son « JoJo »</p>
        <img class="cover" src="source/img/jojo.jpg" alt="">
        <a class="waves-effect waves-light btn" href="jjba.php">En savoir plus</a>
      </div>
      <div class="col s12 m7 l3">
        <h3>Naruto</h3>
        <p>L'histoire commence pendant l'adolescence de Naruto, vers ses douze ans. Orphelin cancre et grand farceur,
          il
          fait toutes les bêtises possibles pour se faire remarquer. Son rêve : devenir le meilleur Hokage afin d'être
          reconnu par les habitants de son village. En effet, le démon renard à neuf queues scellé en lui a attisé la
          crainte et le mépris des autres villageois, qui, avec le temps, ne font plus de différence entre Kyûbi et
          Naruto</p>
        <img class="cover" src="source/img/naruto.jpg" alt="anime-blue-lock-cover">
        <a class="waves-effect waves-light btn" href="projetNV.php">En savoir plus</a>
      </div>
    </div>
    
    <div class="cont center-align" style="margin-top : 250px;" id="scroll3" >
      <!-- Modal Trigger -->
      <?php
        if(isset($_SESSION['user']) && ($_SESSION['user']['admin'] == 1 )){
      ?>
          <a class="waves-effect waves-light btn modal-trigger" href="paneldmin.php">Panel</a>
        <?php } else {?>
          <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contactez-nous</a>
        <?php }?>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <!--contact-->
            <!--https://codepen.io/krisantuswanandi/pen/KxrgeZ-->
            <div class="screen-body">
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="NOM">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="NUMERO">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" placeholder="MESSAGE">
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button">ANNULER</button>
                    <button class="app-form-button">ENVOYER</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="source/js/jquery.min.js"></script>
    <script type="text/javascript" src="source/js/materialize.min.js"></script>
    <script type="text/javascript" src="source/js/script.js"></script>

</body>

</html>

<form method="POST">
  <input type="text" name="preTitre" placeholder="Nom de l'anime">
</form>

<form method="post">
  <input type="text" name="titre1" placeholder="Nom de l'anime">
  <textarea name="text1" placeholder="Ecrire ici"></textaraea>
</form>