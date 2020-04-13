<?php

echo $this->header;

?>

<div id="main" class="userDetail"> <!-- Klassenänderung -->

    <?php if($this->user): ?> <!-- Änderung address in user -->

        <h1><?php echo $this->user->firstname; ?>

            <?php echo $this->user->lastname; ?></h1> <!-- Änderung address in user -->
        <br>

    <?php if($this->user->highscore != ''): ?>

            <?php echo $this->user->highscore; ?>
        </a>
        <br>


        <?php endif; ?>


    <?php else: ?>
        <h1>Ungültige Adresse!</h1>
    <?php endif; ?>

</div>


<?php

echo $this->footer;

?>