<?php
    echo $this->header;
?>

<?php $thisSeite="Index"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
    </head>

    <body>
        <div>
            <a href="start"><button>Zur Spielestartseite!</button></a>
            <br>
            <br>
        </div>

        <div id="main">
            <div class="row">
                <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-plus"></i> Neue Adresse anlegen</button>


                <?php if($this->addresses): ?> <!-- Sind hinterlegte Adressen vorhanden? -->

                    <!-- von parts/header hierher platziert -->
                    <div class="logo">
                        <div class="name">Meine hinterlegten Adressen/weiteren Profilinformationen</div> <!-- Addressverwaltung -->
                        <div class="version">1.0</div>
                    </div>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Vorname</th>
                                <th>Ort</th>
                                <th>E-Mail</th>
                                <th>Download</th>
                                <th>Bearbeiten</th>
                                <th>Löschen</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach($this->addresses as $address): ?>
                                <tr>
                                    <td> <a href="adresse?id=<?php echo $address->id; ?>"><?php echo $address->id; ?></a></td>
                                    <td><?php echo $address->lastname; ?></td>
                                    <td><?php echo $address->firstname; ?></td>
                                    <td><?php echo $address->city; ?></td>

                                    <td><?php echo $address->email; ?></td> <!-- neues Feld E-Mail -->

                                    <!-- Button Download -->
                                    <td><a href="download?id=<?php echo $address->id; ?>" class="btn btn-primary">Download</a></td>

                                    <!-- Button Bearbeiten -->
                                    <td><button class="btn btn-default" data-toggle="modal" data-target="#editModal" data-id="<?php echo $address->id; ?>"><i class="glyphicon glyphicon-pencil"></i> Bearbeiten</button></td>

                                    <!-- Button Löschen -->
                                    <td><a class="btn btn-danger triggerDelete" href="api/address/" data-id="<?php echo $address->id; ?>"><i class="glyphicon glyphicon-trash"></i> Löschen</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                <?php else: ?> <!-- Wenn keine hinterlegten Adressen vorhanden sind -->
                    <p>&nbsp;</p>
                        <div class="alert alert-info">Noch keine Adressen vorhanden - Sie können über den Button <strong>Neue Adresse anlegen</strong> eine neue Adresse Ihrer Adressverwaltung hinzufügen.
                        </div>
                <?php endif; ?>
            </div>
        </div>


        <!-- Klick auf Button "+ neue Adresse anlegen" -> dieses Fenster öffnet sich -->
        <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                        <button type="button" class="btn btn-primary"></button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </body>
</html>

<?php
    echo $this->footer;
?>
