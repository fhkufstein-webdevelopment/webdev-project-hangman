<!DOCTYPE html>
<html lang="de">
<header>
<head>

    <!-- Seitentitel wird automatisch angezeigt -->
    <title><?php echo $this->title; ?></title>

    <!-- Allgemeine Stylesheets -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/login-microsite.css" rel="stylesheet">


    <!-- Stylesheets nur für die aktuellen Seiten -->
    <?php if($this->current == "login"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">



    <?php elseif($this->current == "game"): ?>
        <link href="css/game.css" rel="stylesheet">

    <?php elseif($this->current == "index"): ?>
        <link href="css/header.css" rel="stylesheet">



    <?php endif; ?>

    <!--  Allgemeine .js Reihenfolge beachten-->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


    <!-- .js für bestimmte Seiten -->

    <?php if($this->current == "index"): ?>
        <script type="text/javascript" src="js/core.js"></script>
        <script type="text/javascript" src="js/headerFade.js"></script>

    <?php elseif($this->current == "register"): ?>
        <script type="text/javascript" src="js/register.js"></script>

    <?php elseif($this->current == "login"): ?>
        <script type="text/javascript" src="js/toastr.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>

    <?php elseif($this->current == "game"): ?>
        <script type="text/javascript" src="js/game.js"></script>




    <?php endif; ?>

</header>






<!-- Navi wird so angezeigt wenn User eingelogged-->
<?php if(LOGGED_IN == true): ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <img src="pics/logo.png">


        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->


            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index" class="navbar-brand active">HangFlower</a>
            </div>



            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav">

                    <!-- aktuelle Seite wird autom. als aktiv markiert -->
                    <li  <?php if ($this->current == "game") { echo ' class="nav-item active"';}  else  {echo ' class="nav-item"';}  ?>>
                        <a class="nav-link" href="game">Game <?php if ($this->current == "game"){  echo ' <span class="sr-only">(current)</span>';}  ?></a>

                    </li>

                    <li  <?php if ($this->current == "highscore") { echo ' class="nav-item active"';}  else  {echo ' class="nav-item"';}  ?>>
                        <a class="nav-link" href="highscore1">Highscore <?php if ($this->current == "highscore"){  echo ' <span class="sr-only">(current)</span>';}  ?></a>

                    </li>




                </ul>
            </div>



            <p class="navbar-text navbar-right">Angemeldet als <strong class="username"><?php echo $this->username; ?></strong></p>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout">(Abmelden)</a></li>
            </ul>
        </div>

    </nav>

    <!-- Navi , wenn User nicht eingelogged-->
<?php else: ?>



    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <img src="pics/logo.png"/>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->


            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index" class="navbar-brand active" >HangFlower</a>
            </div>



            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav">

                    <li  <?php if ($this->current == "game") { echo ' class="nav-item active"';}  else  {echo ' class="nav-item"';}  ?>>
                        <a class="nav-link" href="game">Game <?php if ($this->current == "game"){  echo ' <span class="sr-only">(current)</span>';}  ?></a>

                    </li>


                    <li  <?php if ($this->current == "login") { echo ' class="nav-item active"';}  else  {echo ' class="nav-item"';}  ?>>
                        <a class="nav-link" href="login">Registrierung/ Login <?php if ($this->current == "login"){  echo ' <span class="sr-only">(current)</span>';}  ?></a>

                    </li>





                </ul>
            </div>


            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link " href="login">Login</a></li>

            </ul>

        </div>

    </nav>










<?php endif; ?>




</header>

</html>