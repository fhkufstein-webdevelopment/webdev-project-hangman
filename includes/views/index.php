<?php
    echo $this->header;
?>

<div class="headerstart">


<section id="hero">
    <div id="hero-mask"></div>
    <header id="title-fade">
        <h1 class="text-center textheader">Hangflower</h1>
        <div class="text-center" >
            <a href="../webdev-project-hangman/html/game.html"><button type="button" class="btn btn-info">Zum Game!</button></a>

        </div>

    </header>
</section>

<div class="full-height" >
    <div class="container">
        <br>

        <h2 class="text-left textw">Was ist Hangflower?</h2>
        <p class="text-justify textw" >
            Hangflower funktionert wie das Spiel Hangman. Du kannst auf die Buchstaben klicken und so einen Buchstaben erraten.
            Du hast 4 Versuche um das richtige Wort zu finden.
        </p>
        <br>
        <h2 class="text-left textw">Wie funktionert das Spiel?</h2>
        <p class="text-left textw">
            1. Starte das Geme
            <br>
            2. Klicke auf die richtigen Buchstaben
            <br>
            3. Mehr als 4 Versuche -> Leider verloren
            <br>
            4. Weniger als 4 Versuche -> Du gewinnst!
        </p>
        <br>

        <div class="jquery-script-ads" align="center">

        </div>

    </div>
</div>


    <script type="text/javascript">
        //initialize
        $(document).ready(function() {
            $('#hero').heroFade();
        });
    </script>




<?php
    echo $this->footer;
?>
