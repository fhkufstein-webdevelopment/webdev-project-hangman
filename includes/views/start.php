<?php
    echo $this->header;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/header.css">

        <title>
            HangFlower
        </title>

        <link rel="icon" type="image/vnd.microsoft.icon" href="../pics/favicon.ico">
    </head>

    <body>

            <!--  <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light">HANGMAN</h1>
                        <p class="lead"> Damit es netter wirkt, könnte man hier die Spielregeln hineinschreiben? Viel Spaß beim Spieln</p>-->


                        <!--
                        <button type="button2" href="../html/game.html">
                            Game öffnen
                        </button>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
                            Zum Game
                        </button>
                        -->

        </div>

        <div>
            <br>
            <br>
            <br>
            <br>

            <h2>Hangflower</h2>
            <br>

            <!-- Button funktioniert-->
            <a href="../webdev-project-hangman/html/game.html"><button>Zum Game!</button></a>
            <br>
            <br>

            <p> Hier wird eine kurze Spielbeschreibung eingefügt. </p>
            <br>
        </div>

        <!--  wer braucht das für was?
        <div class="headerstart">
        <div id="bg">
            <h1> Test Headerstart</h1>
        </div>
         </div> -->

                 <!--Modal-->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                -->

                   <!-- <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Anmeldung zum Game</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form class="form-signin">
                                    <h2 class="form-signin-heading">Bitte melde dich an</h2>
                                    <br>
                                    <label for="nickname" >Benutzername</label>
                                    <input type="text" class="form-control" id="nickname" placeholder="Benutzername eingeben">

                                    <br>

                                    <label for="password" >Passwort</label>
                                    <input type="password" id="password" class="form-control" placeholder="Passwort eingeben" required>

                                    <br>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Anmeldung speichern
                                        </label>
                                    </div>
                                    <br>
                                     Großer Button Primary, der sich dem übergeordneten Element anpasst und reagiert
                                </form>


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Registrierung</button>
                                <button type="button" class="btn btn-primary">Anmelden</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div> -->


    <!-- weg, sonst is doppelt da
    <footer class="footer">
        <p class="text-center">&copy; HANGMAN <br>Alica - Chanelle - Julia - Katharina</p>
    </footer> -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    echo $this->footer;
?>