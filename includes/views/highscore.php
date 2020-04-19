<?php
    echo $this->header;
?>

<body class="hintergrund">

     <div class="text-center">
         <h1> Gratuliere <strong class="username"><?php echo $this->username; ?></strong>, du hast gewonnen!</h1>
     </div>

     <div class="container jumbotron container-fluid jumbotron" >


     <div class="row">
         <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/highscore/" class="col-xs-12"> <!-- aus adress -->

            <div class="highscore_table">
                    <table class="table table-striped">

                         <thead>
                            <tr>
                                <th scope="col"><?php echo "Userid" ?></th>
                                <th scope="col"><?php echo "Nickname" ?></th>
                                <th scope="col"><?php echo "Zeit" ?></th>
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
                                     <td><?php echo $user->name; ?></td> <!-- Name aus Tabelle user sollte angezeigt werden -->
                                     <td><?php echo $highscore->maxAmountOfTime; ?></td>
                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                    </table>
            </div>
         </form>
     </div>

    <!-- ist schon in der header.php
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    -->
    <!-- jQuery für Highscore laut Tutorial
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    -->

</body>

<?php
    echo $this->footer;
?>
