<!DOCTYPE html>
<html lang="de">

<head>
    <title><?php echo $this->title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">


    <?php if($this->current == "login"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "game"): ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/main.css">
        <title>Hangman</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../pics/favicon.ico">
    <link rel="stylesheet" href="../css/game.css">
        <script src="../js/game.js"></script>


    <?php elseif ($this->current == "index"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "anmelden"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "logout"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "adresse"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "highscore"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "user"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <?php elseif ($this->current == "start"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">

    <?php endif; ?>







    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>




    <?php if($this->current == "game"): ?>
        <script type="text/javascript" src="js/game.js"></script>


    <?php elseif($this->current == "start"): ?>
        <script type="text/javascript" src="js/headerFade.js"></script>


    <?php endif; ?>
</head>


<header>


        <!--
        <div class="logo">
            <div class="name">Meine hinterlegten Adressen</div> < !-- Addressverwaltung -- >
            <div class="version">1.0</div>
        </div>
        -->



        <!-- Navi wird so angezeigt wenn User eingelogged-->
        <?php if(LOGGED_IN == true): ?>

            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
                <img src=/pics/logo.png>


                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->


                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="start.php" class="navbar-brand active">HangFlower</a>
                    </div>



                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="game">Zum Game <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="highscore">Highscore</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user">Userdaten</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="adresse">Userdaten ändern</a>
                                </li>

                                
                                <li <?php if ($thisSeite == "Index") { echo ' class="nav-item active"'; } else { echo ' class="nav-item active"'; } ?> >
                                    <a class="nav-link" href="../includes/views/index.php">INDEX TEST</a>


                                </li>


                            </ul>
                        </div>




                        <p class="navbar-text navbar-right">Angemeldet als <strong class="username"><?php echo $this->username; ?></strong></p>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout">(Abmelden)</a></li>
                    </ul>
                    </div>

            </nav>


        <?php else: ?>



            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
                <img src="../pics/logo.png"/>
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->


                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="start.php" class="navbar-brand active">HangFlower</a>
                    </div>



                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="start">Zum Game/ Startseite <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login#registrierung">Registrierung</a>
                            </li>



                            <li <?php if ($thisSeite == "Index") { echo ' class="nav-item active"'; } else { echo ' class="nav-item active"'; } ?> >
                                <a class="nav-link" href="../includes/views/index.php">INDEX TEST</a>


                            </li>


                        </ul>
                    </div>




                    <ul class="nav nav-pills">
                        <li<?php if($this->current == "login"): ?>class="active"<?php endif; ?>><a href="login">Login</a></li>
                    </ul>



                </div>

            </nav>










        <?php endif; ?>




</header>

</html>