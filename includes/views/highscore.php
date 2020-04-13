<?php
echo $this->header;
//bitte php hier nicht mit einem "? >" beenden, da fast die ganze Datei in php geschrieben ist

// TODO: Auf Fehler kontrollieren z. B. Logo wird nicht angezeigt und Fußzeile wird nicht angezeigt

//Datenbankverbindung
/*
$host = "localhost";
$datenbank = "webdev-project-hangman";
$benutzer = "hangmangame";
$pw = "12345Abc";

$connection = mysqli_connect($host, $benutzer, $pw, $datenbank);

if (!$connection) {
    print "Keine Datenbankverbindung möglich. Ausgabe durch: highscore.php";
    die(); //Programm stoppen
}

if ($_POST) {
    $userid = $_POST["userid"]; //benutzer mit userid ersetzt
    $time = $_POST["time"]; //zeit mit time ersetzt
    //$datum = $_POST["datum"];

    //Daten einfügen in Datenbank (SQL Statement)
    $sql = "INSERT INTO highscore (`userid`, `time`) VALUES ('".$userid."', '".$time."')"; // ,'".$datum."'

    //Befehl der Datenbank übermitteln
    mysqli_query($connection, $sql);
}
*/
?>
<!-- hier müsste das Feld kommen, wo der highscore hineingespeichert wird
 man bräuchte eine verbindng zu api
<div class="row">
    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/highscore/" class="col-xs-12"> -->

<div class="highscore_table">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Zeit</th>
            <!-- <th scope="col">Datum</th> -->
        </tr>
        </thead>

        <tbody>

        <?php

        //Datenbankverbindung
        $host = "localhost";
        $datenbank = "webdev-project-hangman";
        $benutzer = "hangmangame";
        $pw = "12345Abc";
        $connection = mysqli_connect($host, $benutzer, $pw, $datenbank); //liegt hier der Fehler?


        $sql = "SELECT * FROM highscore ORDER BY highscore DESC";

        $ergebnis = mysqli_connect($connection, $sql);  //hier dürfte kein String stehen


        $platz = 1;

        while ($zeile = mysqli_fetch_assoc($ergebnis)) {  // hier sollte not null stehen generell muss hier ein mysqli_result übergeben werden
            $userid= $zeile["userid"];#array
            $time = $zeile["time"];#array
            //$punkte = $zeile["time"];#array


            echo "<tr>";
            echo    "<td>$platz</td>";

                "<td>$userid</td>";
               "<td>$time</td>";
            echo "</tr>";

            $platz++; //damit rang immer erhöht wird
        }
        ?>
        </tbody>
    </table>
</div>



<!-- neues jQuery hinzugefügt -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- jQuery für Highscore laut Tutorial -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<?php
echo $this->footer;
?>
