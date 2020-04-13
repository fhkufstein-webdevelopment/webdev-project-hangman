<?php

// TODO: Variablennamen müssen noch überprüft und ausgebessert werden
// TODO: eventuell muss noch eine Datenbank bei phpMyAdmin angelegt werden
// hängt mit dem GameController zusammen

class GameModel {

    public static function saveScoreAndAttempts ($benutzer, $time)
    {
        $db = new Database();

        //prevent SQL Injection:
        $benutzer = $db->escapeString($benutzer);
        $time = $db->escapeString($time);

        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`benutzer`, `time`) VALUES('".$benutzer."','".$time."')"; //,'".$attempts."'

        $db->query($sql);
    }

    //... and other awesome stuff in the GameModel that we are currently not interessted in...
}