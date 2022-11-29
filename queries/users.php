<?php require_once "../cfg/config.php"; ?>
 <html>
  <head>
  </head>
  <body>
   <?php require "../components/menu.php"; ?>
   <h1>Liste des utilisateurs</h1>
   <?php
   $sql = "SELECT * FROM user"; 
   $pre = $pdo->prepare($sql); 
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
   foreach($data as $user){ ?>
   <div class="bloc_user">
     <h2><?php echo $user['first_name']." ".$user['last_name'] ?></h2>
     <span class="email"><?php echo $user['email'] ?></span>
   </div>
   <?php } ?>
  </body>