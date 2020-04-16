<?php

echo $this->header;

?>
<!--

<div id="main" class="highscoreDetail"> <!-- Klassenänderung -->

/* <?php if($this->user): ?> <!-- Änderung address in user -->

    <!--  <h1><?php echo $this->highscore->benutzername; ?>

          <?php echo $this->highscore->maxAmountOfTime; ?></h1> <!-- Änderung address in user --> */


    <?php if($this->highscore->benutzer != ''): ?>

        <?php echo $this->highscore->highscore; ?>
        </a>



    <?php endif; ?>


<?php else: ?>
    <h1>Ungültige Adresse asdfghjk!</h1>
<?php endif; ?>

</div>


<?php

echo $this->footer;

?>
