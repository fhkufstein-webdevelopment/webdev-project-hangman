<?php

echo $this->header;

?>

// TODO: Auf Fehler kontrollieren z. B. Logo wird nicht angezeigt und Fußzeile wird nicht angezeigt

    //Datenbankverbindung
    $host = "localhost";
    $datenbank = "webdev-project-hangman";
    $benutzer = "hangmangame";
    $pw = "12345Abc";

    $connection = mysqli_connect($host, $benutzer, $pw, $datenbank);

    if (!$connection) {
        print "Keine Datenbankverbindung möglich. highscore.php";
        die(); //Programm stoppen
    }

    if ($_POST) {
        $benutzer = $_POST["benutzer"];
        $zeit = $_POST["zeit"];
       // $datum = $_POST["datum"];

        //Daten einfügen in Datenbank (SQL Statement)
        $sql = "INSERT INTO tabellenname (`benutzer`, zeit ) VALUES ('".$benutzer."', '".$zeit."' )"; //"'.$datum.'"

        //Befehl der Datenbank übermitteln
        mysqli_query($connection, $sql);
    }
?>


    <div class="highscore_table">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Zeit</th>
                <th scope="col">Datum</th>
                <th scope="col">brauchen wir noch?</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>13:00</td>
                <td>???</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>25:00</td>
                <td>???</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>02:00</td>
                <td>???</td>
            </tr>
            </tbody>
        </table>
    </div>



    <!-- <div class="container jumbotron container-fluid jumbotron" >

        <div class="list-group">
            <button type="button" class="list-group-item"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> User A</button>
            <button type="button" class="list-group-item">User B</button>
            <button type="button" class="list-group-item">User C</button>
            <button type="button" class="list-group-item">User D</button>
            <button type="button" class="list-group-item">User E</button>
        </div>



        </div> -->

<br>
<br>



<!-- <footer class="footer">

    <p class="text-center">&copy; HANGMAN <br>Alica - Chanelle - Julia - Katharina</p>
</footer>
-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- neues jQuery hinzugefügt -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div>
</body>
</html>

<?php

echo $this->footer;

?>
