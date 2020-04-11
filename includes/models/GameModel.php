<?php

// TODO: Variablennamen müssen noch überprüft und ausgebessert werden
// TODO: eventuell muss noch eine Datenbank bei phpMyAdmin angelegt werden
// hängt mit GameController zusammen

class GameModel {

    public static function saveScore ($userid, $time)
    {
        $db = new Database();

        //prevent SQL Injection:
        $userid = $db->escapeString($userid);
        $time = $db->escapeString($time);

        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`userid`, `time`) VALUES('".$userid."','".$time."')"; //,'".$attempts."'
        $db->query($sql);
    }

    //... and other awesome stuff in the GameModel that we are currently not interessted in...
}