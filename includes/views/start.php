<?php
    echo $this->header;
?>

    <link rel="stylesheet" href="../../css/header.css">
    <section id="hero">
        <div id="hero-mask"></div>
        <header id="title-fade">
            <h1>Hangflower</h1>

            <a href="../../../webdev-project-hangman/html/game.html"><button type="button" class="btn btn-info">Zum Game!</button></a>

        </header>
    </section>

    <div class="full-height" >
        <h2>The rest of the content</h2>
        <div class="jquery-script-ads" align="center">

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="../../js/headerFade.js"></script>

        <script type="text/javascript">
            //initialize
            $(document).ready(function() {
                $('#hero').heroFade();
            });
        </script>


<?php
    echo $this->footer;
?>