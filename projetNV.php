<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <title>Anime</title>
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
    <form method="post"
      <h1 class="center-align">Présentation de l'anime <input type="text" name="preTitre" placeholder="Nom de l'anime"></h1>
    </form>
  </div>
  <div class=" container carousel carousel-slider center">
    <div class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 m12 l5 offset-l1">
          <h2>Centre d'entrainement</h2>
          <p>Blue lock est un centre d'entrainement au japon visant à former le meilleur attaquant au monde</p>
        </div>
        <div class="offset-l1 col s12 m12 l5">
          <img src="source/img/blc1.jpg" alt="Isagi Yoichi">
        </div>
      </div>
    </div>
    <div class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 l5 offset-l1">
          <h2>Synopsis</h2>
          <p class="justify-content">On ne peut pas être l’attaquant numéro un du monde si on n’est pas l’égoïste numéro
            un du monde. Afin de former un attaquant capable de mener le Japon à la victoire en Coupe du monde, l’Union
            japonaise de football élabore un plan.</p>
        </div>
        <div class="offset-l1 col s12 m12 l5">
          <img src="source/img/blc2.jpg" alt="Date de sortie de Blue Lock">
        </div>
      </div>
    </div>
    <div class="carousel-item" href="#one!">
      <div class="row">
        <div class="col s12 m12 l5 offset-l1">
          <h2>La méta-vision</h2>
          <p class="justify-content">Terme utilisé pour décrire la vision évoluée d’un joueur qui lui donne une
            perspective omnipotente du terrain. Utilisant ses yeux pour capter constamment les informations de sa vision
            centrale et périphérique, Isagi recueille constamment des données sur chaque joueur, chaque jeu qu’ils font,
            et leurs positions sur le terrain.</p>
        </div>
        <div class="offset-l1 col s12 m12 l5">
          <img src="source/img/isagi-eveil.jpg" alt="L'eveil d'Isagi Yoichi">
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
            <img src="source/img/rin.jpg" alt="Itoshi Rin">
          </div>
          <div class="card-content black">
            <span class="card-title">Itoshi Rin</span>
            <p>Rin est le frère cadet de Sae Itoshi et a commencé à jouer au football avec lui à un jeune âge.
              Dans Blue Lock, Rin est considéré comme le meilleur joueur jusqu'à ce qu'il soit officiellement confirmé
              comme étant le joueur n°1 par Jinpachi Ego.</p>
          </div>
        </div>
      </div>
      <div class="offset-m2 col s12 m8 l4 offset-m2">
        <div class="card">
          <div class="card-image">
            <img src="source/img/isagi.jpg" alt="Isagi Yoichi">
          </div>
          <div class="card-content black">
            <span class="card-title">Isagi Yoichi</span>
            <p>Yoishi Isagi est un étudiant en première au lycée et jouait en tant qu'avant-centre pour l'équipe de
              football du lycée Ichinan après une defaite son envie de devenir le meilleur ce décuple.
              Il est actuellement positionné 15ème sur les 300 choisis pour participer au projet Blue Lock.</p>
          </div>
        </div>
      </div>
      <div class="offset-m2 col s12 m8 l4 offset-m2">
        <div class="card">
          <div class="card-image">
            <img src="source/img/sae.jpg" alt="Itoshi Sae">
          </div>
          <div class="card-content black">
            <span class="card-title">Itoshi Sae</span>
            <p>Itoshi Sae est un antagoniste de Blue Lock. Sae est un génie et est considéré comme le meilleur joueur de
              foot au Japon et est le frère aîné de Rin Itoshi. 
              Il joue actuellement milieu de terrain même si son rêve premier etais aussi d'être le meilleur attaquant au monde.</p>
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