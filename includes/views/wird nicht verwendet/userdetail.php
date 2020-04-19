<?php

echo $this->header;

?>


<div id="main" class="userDetail"> <!-- Klassenänderung -->

    <?php if($this->user): ?> <!-- Änderung address in user -->

        <h1><?php echo $this->user->firstname; ?>

            <?php echo $this->user->lastname; ?></h1> <!-- Änderung address in user -->
        <br>

        <!-- brauchen wir ja nicht?!?
        <span class="street"> <//?php echo $this->user->street; ?> </span>  Änderung address in user -->
        <br>

        <!-- bruachen wir ja auch nicht?!?
        <span class="zip"> <//?php echo $this->user->zip; ?> </span>  Änderung address in user
        <span class="city"> <//?php echo $this->user->city; ?> </span>  Änderung address in user -->
        <br>


        <?php if($this->user->email != ''): ?> <!-- Änderung address in user -->
            <a href="mailto:<?php echo $this->user->email; ?>" class="email"> <!-- Änderung address in user -- mailto ist flasch -->
                <?php echo $this->user->email; ?> <!-- Änderung address in user -->
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
