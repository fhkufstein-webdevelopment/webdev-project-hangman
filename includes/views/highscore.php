 <?php
echo $this->header;
//bitte php hier nicht mit einem "? >" beenden, da fast die ganze Datei in php geschrieben ist

// TODO: Auf Fehler kontrollieren z. B. Logo wird nicht angezeigt und Fußzeile wird nicht angezeigt

//Datenbankverbindung
//$host = "localhost";
//$name = "webdev-project-hangman"; //datenbank
//$user = "hangmangame"; //benutzer
//$pass = "12345Abc"; //pw

//Verbindung erstellen
//$connection = mysqli_connect($host, $user, $pass, $name);

/*
if (!$connection) {
    print "Keine Datenbankverbindung möglich. Ausgabe durch: highscore.php";
    die(); //Programm stoppen
}

if ($_POST) {
    $userid = $_POST["userid"]; //benutzer mit userid ersetzt
    $maxAmountOfTime = $_POST["maxAmountOfTime"]; //zeit mit time ersetzt
    //$datum = $_POST["datum"];
*/
    //Daten einfügen in Datenbank (SQL Statement)
   // $sql = "INSERT INTO highscore (`userid`, `maxAmountOfTime`) VALUES ('".$userid."', '".$maxAmountOfTime."')"; // ,'".$datum."'

    //Befehl der Datenbank übermitteln
   // mysqli_query($connection, $sql);
//}




?>

 <body class="hintergrund">

 <div class="container jumbotron container-fluid jumbotron" >
<!-- hier müsste das Feld kommen, wo der highscore hineingespeichert wird
 man bräuchte eine verbindng zu api

 <div class="form-group">
            <label for="userid">Benutzername:</label>
        </div>

        <div class="form-group">
            <label for="maxAmountOfTime">Zeit:</label>
            <label  name="firstname" class="form-control" id="maxAmountOfTime" value="<?php echo $this->maxAmountOfTime; ?>"> </label>
        </div>
-->
<div class="row">
    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/highscore/" class="col-xs-12"> <!-- aus adress -->



        <div class="highscore_table">



                <table class="table table-striped">

                     <thead>
                        <tr>
                           <!-- <th scope="col">#</th> -->
                            <th scope="col"><?php echo "Name / userid" ?></th>
                            <th scope="col">Zeit / maxAmountOfTime</th>


                            <!-- <th scope="col">Datum</th> -->
                        </tr>
                     </thead>


                     <tbody>

                     <?php if($this->id): ?>
                         <input type="hidden" name="id" value="<?php echo $this->id; ?>">
                     <?php endif; ?>


                     <?php foreach($this->highscore as $highscore): ?>
                     <tr>

                         <td><?php echo $highscore->userid; ?></td>
                         <td><?php echo $highscore->maxAmountOfTime; ?></td>
                     </tr>
                     <?php endforeach; ?>



                </tbody>
            </table>
        </div>




<!--
<td><a href="highscore?id=< ?php echo $highscore->id; ?>">
                                 < ?php echo $highscore->id; ?></a></td>



 < ?php
 $ma = mysqli_query($connection, $sql);
 $platz=1;



                        < ?php foreach($this->id as $highscore): ?>
                            <tr>
                                <td><a href="highscore?id=< ?php echo $highscore->id; ?>">< ?php echo $highscore->id; ?></a></td>
                                <td>< ?php echo $highscore->userid; ?></td>
                                <td>< ?php echo $highscore->maxAmountOfTime; ?></td>
                            </tr>
                        < ?php endforeach; ?>
  < ?php else: ?>
     <p>&nbsp;</p>
    <div class="alert alert-info">Noch keine Adressen vorhanden  - Sie können über den Button <strong>Neue Adresse anlegen</strong> eine neue Adresse Ihrer Adressverwaltung hinzufügen.</div>













 while ($zeile = mysqli_fetch_assoc($ergebnis)) {  // hier sollte not null stehen generell muss hier ein mysqli_result übergeben werden
            $userid= $zeile["userid"];#array
            $time = $zeile["maxAmountOfTime"];#array
            //$punkte = $zeile["time"];#array


            echo "<tr>";
            echo    "<td>$platz</td>";

                "<td>$userid</td>";
               "<td>$maxAmountOfTime</td>";
            echo "</tr>";

            $platz++; //damit rang immer erhöht wird
        }

?>


        </tbody>
    </table>
 -->
</div>


<!-- ist schon in der header.php
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
-->
<!-- jQuery für Highscore laut Tutorial
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
-->
 </div>
 </body>

<?php
echo $this->footer;
?>
