<?php

echo $this->header;

?>



<body class="hintergrund">



    <div class="container jumbotron container-fluid jumbotron" >
        <div id="countdown">01:00</div>

        <div>
            <!-- video tag hidden und dann visible-->
            <img src="pics/b_voll.png" id = "blume">
            <video src="pics/logo.gif" id = "animation" type="video/mp4" autoplay></video>
        </div>

        <button type="button" class="btn btn-primary btn-lg" id="startbutton">Game starten</button>
        <button type="button" class="btn btn-primary btn-lg" id="highscore">zum Highscore</button>
        <br>
        <br>



        <button type="button" class="btn btn-info" id = "alphabet-q" onclick="play('q')">Q</button>
        <button type="button" class="btn btn-info" id = "alphabet-w" onclick="play('w')">W</button>
        <button type="button" class="btn btn-info" id = "alphabet-e" onclick="play('e')">E</button>
        <button type="button" class="btn btn-info" id = "alphabet-r" onclick="play('r')">R</button>
        <button type="button" class="btn btn-info" id = "alphabet-t" onclick="play('t')">T</button>
        <button type="button" class="btn btn-info" id = "alphabet-z" onclick="play('z')">Z</button>
        <button type="button" class="btn btn-info" id = "alphabet-u" onclick="play('u')">U</button>
        <button type="button" class="btn btn-info" id = "alphabet-i" onclick="play('i')">I</button>
        <button type="button" class="btn btn-info" id = "alphabet-o" onclick="play('o')">O</button>
        <button type="button" class="btn btn-info" id = "alphabet-p" onclick="play('p')">P</button>
        <button type="button" class="btn btn-info" id = "alphabet-ü" onclick="play('ü')">Ü</button>
        <br>
        <br>
        <button type="button" class="btn btn-info" id = "alphabet-a" onclick="play('a')">A</button>
        <button type="button" class="btn btn-info" id = "alphabet-s" onclick="play('s')">S</button>
        <button type="button" class="btn btn-info" id = "alphabet-d" onclick="play('d')">D</button>
        <button type="button" class="btn btn-info" id = "alphabet-f" onclick="play('f')">F</button>
        <button type="button" class="btn btn-info" id = "alphabet-g" onclick="play('g')">G</button>
        <button type="button" class="btn btn-info" id = "alphabet-h" onclick="play('h')">H</button>
        <button type="button" class="btn btn-info" id = "alphabet-j" onclick="play('j')">J</button>
        <button type="button" class="btn btn-info" id = "alphabet-k" onclick="play('k')">K</button>
        <button type="button" class="btn btn-info" id = "alphabet-l" onclick="play('l')">L</button>
        <button type="button" class="btn btn-info" id = "alphabet-ö" onclick="play('ö')">Ö</button>
        <button type="button" class="btn btn-info" id = "alphabet-ä" onclick="play('ä')">Ä</button>
        <br>
        <br>
        <button type="button" class="btn btn-info" id = "alphabet-y" onclick="play('y')">Y</button>
        <button type="button" class="btn btn-info" id = "alphabet-x" onclick="play('x')">X</button>
        <button type="button" class="btn btn-info" id = "alphabet-c" onclick="play('c')">C</button>
        <button type="button" class="btn btn-info" id = "alphabet-v" onclick="play('v')">V</button>
        <button type="button" class="btn btn-info" id = "alphabet-b" onclick="play('b')">B</button>
        <button type="button" class="btn btn-info" id = "alphabet-n" onclick="play('n')">N</button>
        <button type="button" class="btn btn-info" id = "alphabet-m" onclick="play('m')">M</button>
        <br>
        <br>

        <audio src="sound/fail.mp3" id="failsound"></audio>
        <audio src="sound/rightsound.mp3" id="rightsound"></audio>



        <div id="wort">
            <p id="ausgabe"></p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/game.js"></script>

  für Highscore Tabelle -> ist villeicht richtig -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->



<?php

echo $this->footer;

?>

</body>

