<?php require_once "cfg/config.php";?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="source/css/materialize.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="source/css/style_c.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php require "components/menu.php";
    if(isset($_SESSION['user']) && ($_SESSION['user']['admin'] == 1 )){
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
          <?php echo $user['email']." ".$user['username'] .($user['admin'] == 1?" - Admin":"");} ?>
  <div class="btn-user-display">

          <form method="post" action="actions/updateUsername.php">
              <input class = "textarea-admin" type='textarea' name="username" value = "<?php echo $user['username'] ?>" />
              <input type='hidden' name="id" value = "<?php echo $user['id'] ?>" />
              <button class="btn-adminpanel black-text-css" type="submit">Modifier</button>
          </form>

          <form method="post" action="actions/admin.php">
              <input type='hidden' name="id" value = "<?php echo $user['id'] ?>" />
              <input type='hidden' name="admin" value = "<?php echo $user['admin']==1?0:1 ?>" />
              <button class="btn-adminpanel black-text-css" type="submit">Admin</button>
          </form>

          <form method="post" action="actions/destroy-user.php">
              <input type='hidden' name="id" value = "<?php echo $user['id'] ?>" />
              <button class="btn-adminpanel black-text-css" type="submit"><span class="material-icons admin-icon">delete</span></button>
          </form>

        </div>
      <div class="bloc_user">
          <h2><?php echo $user['email']." ".$user['username'] .($user['admin'] == 1?" - Admin":"");?></h2>
      </div>
  <?php } ?>

  <?php
    if (isset($_POST['animeName'],$_POST['title1'],$_POST['text1'],,$_POST['cardTitle1'],$_POST['cardText1'],)){
      if (!empty($_POST['animeName']) AND !empty($_POST['title1'])  AND !empty($_POST['text1'])  AND !empty($_POST['cardTitle1']) AND !empty($_POST['cardText1']) ){
        
      }else{
        $error = 'Veuillez tous remplir';
      }
    }
  ?>
  
  <h2 class="color white"> Cree projet </h2>

  <p>Nom anime</p>
  <p> -----------------------------------------------------------------------------------------------------------------------------</p>
    <input type="text" name="title1" placeholder="titre" />
  <form method="post" <form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="text" name="title1" placeholder="titre" />
  <p> Carousel 1</p>
  <p> -----------------------------------------------------------------------------------------------------------------------------</p>
    <input type="text" name="title1" placeholder="titre" />
    <textarea name="text1" placeholder="ecrire"></textarea>
  
    <input type='file' name='image'>

  <p> Personnage 1</p>
  <p> -----------------------------------------------------------------------------------------------------------------------------</p>
  
    <input type="text" name="cardTitle1" placeholder="titre" />
    <textarea name="cardText1" placeholder="ecrire"></textarea>

    <input type='file' name='cardImage1'>

  <input type="submit" value="creer" />
  </form>
  <?php if(isset($error)) {echo $error;} ?>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="source/js/jquery.min.js"></script>
    <script type="text/javascript" src="source/js/materialize.min.js"></script>
    <script type="text/javascript" src="source/js/script.js"></script>

</body>

</html>