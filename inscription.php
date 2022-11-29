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

    <h1> Se Connecter</h1>
    <form method="post" action="actions/signin.php">
        <input type='text' name='username' />
        <input type='password' name='password' />
        <input type='submit' value='Me connecter' />
    </form>
    <h2>S'inscrire</h2>
    
    <form method="post" action="actions/signup.php">
        <input type='email' name='email' />
        <input type='text' name='username' />
        <input type='password' name='password' />
        <input type='submit' value="M'inscrire" />
    </form>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="source/js/jquery.min.js"></script>
    <script type="text/javascript" src="source/js/materialize.min.js"></script>
    <script type="text/javascript" src="source/js/script.js"></script>
</body>
</html>