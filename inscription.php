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

<form method="post" action="actions/signup.php">
    <input type='email' name='email' />
    <input type='username' name='username' />
    <input type='password' name='password' />
    <input type='submit' value="M'inscrire" />
</form>

</body>
</html>