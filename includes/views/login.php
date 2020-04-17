
<?php

echo $this->header;

?>

<body class="hintergrund">

<main>
    <div class="modal-dialog text-center" >
    <div class="col-sm-9 main-section" >
    <div class="modal-content" >

        <div class="col-12 user-img">
            <img src="pics/face.png">
        </div>



                <h1 class="col-xs-12 text-info">Login</h1>
                <p class="col-xs-12 formularLink">
                   Hier kannst du dich für Hangflower anmelden

                <form method="post" action="login" class="form-horizontal col-xs-12">
                    <?php if($this->errorPasswd == true): ?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4>Benutzername und/oder Passwort falsch!</h4>
                            <p>Versuch es nochmal</p>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">

                        <div class="col-xs-12 col-md-10">
                            <input type="text" name="username" id="username" class="text form-control" value="" placeholder="Benutzername">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-12 col-md-10">
                            <input type="password" name="password" id="password" class="text form-control" value="" placeholder="Passwort">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Anmelden</button>
                    <input type="hidden" name="action" value="login">

                    <p class="col-xs-12 formularLink">
                        Noch keinen Accout?

                    <a href="login#registrierung" class="registerOverlay">Hier registrieren</a>.
                    </p>
                </form>
            </div>




    <div class="modal fade<?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <br>
                    <h3 class="modal-title text-info" id="registerModalLabel">Registrierung</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p class="col-xs-12 formularLink">
                            Wir benötigen folgende Angaben zur Registrierung
                        </p>

                        <form method="post" action="login" class="col-xs-12 formularLink">

                            <div class="form-group">
                                <label for="name">Benutzername/Nickname:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen">
                            </div>

                            <!-- E-Mail hinzugefügt -->
                            <div class="form-group">
                                <label for="name">E-Mail:</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Passwort (mindestens 8 Zeichen):</label>
                                <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Passwort (mind. 8 Zeichen)">
                            </div>
                            <div class="form-group">
                                <label for="pwd2">Passwort (wiederholen):</label>
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
    </div>
</div>
</main>

</body>
<?php

echo $this->footer;

?>

