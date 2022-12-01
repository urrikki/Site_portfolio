<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper black">
        <a href="#!" class="brand-logo"><img src="source/img/logo.png" alt=""></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php" class="darken 5 blue-text">Accueil</a></li>
          <li><a href="index.php.#scroll3" class="darken 5 blue-text">Contact</a></li>
          <?php if(isset($_SESSION['user'])){?>
            <li><a href="actions/logout.php" class="darken 5 blue-text">Se Deconnecter</a></li>
          <?php }else{ ?>
            <li><a href="inscription.php" class="darken 5 blue-text">Se Connecter</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php" class="darken 5 blue-text">Accueil</a></li>
        <li><a href="index.php.#scroll3" class="darken 5 blue-text">Contact</a></li>
        <li><a href="inscription.php" class="darken 5 blue-text">Se Connecter</a></li>
        <li><a href="panelAdmin.php" class="darken 5 blue-text">Panel d'administration</a></li>
  </ul>