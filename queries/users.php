<?php require_once "../cfg/config.php"; ?>
<html>
 <head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../source/css/materialize.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="../source/css/style_ins.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body>
        <?php require "../components/menu.php"; ?>

        <div class="header">
            <div class="parallax-container">
                <div class="parallax"><img src="../source/img/header.jpeg" alt="background-header-projet"></div>
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
                <h2><?php echo $user['email']." ".$user['username']." ".$user['admin']?></h2>
            </div>
        <?php } ?>
    </body>
</html>