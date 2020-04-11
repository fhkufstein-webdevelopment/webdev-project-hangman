<?php

echo $this->header;

?>
    <div id="main" class="highscoreDetail">
        <?php if($this->highscore): ?>
            <h1><?php echo $this->highscore->benutzer; ?> <?php echo $this->highscore->time; ?></h1><br>

            <?php if($this->address->email != ''): ?>
        <a href="mailto:<?php echo $this->address->email; ?>" class="email"><?php echo $this->address->email; ?></a><br>
        <?php endif; ?>
        <?php else: ?>
        <h1>Ungültige Adresse!</h1>
        <?php endif; ?>

    </div>
<?php

echo $this->footer;

?>