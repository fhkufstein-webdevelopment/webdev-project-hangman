<?php

echo $this->header;

?>



    <body class="bodyhangman">


    <div class="modal-dialog text-center" >
        <div class="col-sm-9 main-section" >
            <div class="modal-content" >

                <div class="col-12 user-img">
                    <img src="pics/face.png">
                </div>


                <form class="col-12 form-input">

                    <h1 class="col-xs-12 text-info">Login</h1>
                    <p class="col-xs-12 formularLink">
                        Hier kannst du dich anmelden.
                    </p>

                    <form method="post" action="login" class="form-horizontal col-xs-12">
                        <?php if($this->errorPasswd == true): ?>
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times</span>
                                </button>
                                <h4>Benutzername und/oder Passwort sind falsch</h4>
                                <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                            </div>
                        <?php endif; ?>


                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" value="" placeholder="Benutzername">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" value="" placeholder="Passwort">
                        </div>




                        <button type="submit" class="btn btn-info">Anmelden</button>
                        <input type="hidden" name="action" value="login">

                        <p class="col-xs-12 formularLink">
                            Noch keinen Account?
                            <a data-toggle="modal" data-target="#registerModal">Hier registrieren</a>

                        </p>
                        <p class="col-xs-12 formularLink">
                            <a href="index" class="registerOverlay">Zurück zur Startseite</a>
                        </p>

                    </form>

            </div>
        </div>

    </div>

    <div class="modal fade<?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
                    <br>
                    <h4 class="modal-title text-info" id="registerModalLabel">Neuer User</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p class="col-xs-12 formularLink">
                            Hier kannst du dich registrieren
                        </p>

                        <form method="post" action="login" class="col-xs-12">

                            <div class="form-group">

                                <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen">
                            </div>

                            <!-- E-Mail hinzugefügt -->
                            <div class="form-group">

                                <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail">
                            </div>

                            <div class="form-group">

                                <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Passwort (mind. 8 Zeichen)">
                            </div>
                            <div class="form-group">

                                <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Passwort wiederholen">
                            </div>

                            <input type="hidden" name="action" value="register">

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                    <button type="button" class="btn btn-primary">Registrieren</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    </body>

<?php

echo $this->footer;

?>