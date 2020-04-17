<?php

echo $this->header;

?>

<body class="hintergrund">
<!--

<div id="main" class="highscoreDetail"> <!-- Klassenänderung -->

/* <?php if($this->user): ?> <!-- Änderung address in user -->

    <!--  <h1><?php echo $this->highscore->userid; ?>

          <?php echo $this->highscore->maxAmountOfTime; ?></h1> <!-- Änderung address in user --> */


    <?php if($this->highscore->userid != ''): ?>

        <?php echo $this->highscore->highscore; ?>




    <?php endif; ?>


<?php else: ?>
    <h1>Ungültige Adresse asdfghjk!</h1>
<?php endif; ?>



</body>
<?php

echo $this->footer;

?>

