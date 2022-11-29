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
    <h1 class="center-align">S'inscrire</h1>
</div>

<div class="submit ">
    <form method="post" action="actions/signup.php">
    <div class="screen-body">
            <div class="screen-body-item">
                <div class="app-form">
                    <div class="app-form-group">
                        <input class="app-form-control" type='email' name='email' placeholder="email" />
                    </div>
                    <div class="app-form-group">
                        <input class="app-form-control" type='text' name='username' placeholder="pseudo" />
                    </div>
                    <div class="app-form-group">
                        <input class="app-form-control" type='password' name='password' placeholder="mot de passe" />
                    </div>
                    <div class="app-form-group buttons">
                        <button class="app-form-button"> <input type='submit' value="M'inscrire" /> </button>
                    </div>
                </div>
            </div> 
    </div>          
    </form>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="source/img/second.jpeg" alt="background-header-projet"></div>
</div>

</body>
</html>