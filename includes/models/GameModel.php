<?php

// TODO: Variablennamen müssen noch überprüft und ausgebessert werden
// TODO: eventuell muss noch eine Datenbank bei phpMyAdmin angelegt werden
//hängt mit GameController zusammen

class GameModel

{
    public static function saveScoreAndAttempts($benutzer, $zeit /*, $attempts*/)
    {
        $db = new Database();

        //prevent SQL Injection:
        $benutzer = $db->escapeString($benutzer);
        $zeit = $db->escapeString($zeit);
        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`benutzer`,/*`attempts`,*/`zeit`) VALUES('".$benutzer."','".$zeit."')"; //,'".$attempts."'
        $db->query($sql);
    }

    //... and other awesome stuff in the GameModel that we are currently not interessted in...
}