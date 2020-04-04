<?php

// TODO: Variablennamen müssen noch überprüft und ausgebessert werden
// TODO: eventuell muss noch eine Datenbank bei phpMyAdmin angelegt werden


class GameModel
{
    public static function saveScoreAndAttempts($userid, $time /*, $attempts*/)
    {
        $db = new Database();

        //prevent SQL Injection:
        $userid = $db->escapeString($userid);
        $time = $db->escapeString($time);
        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO game(`userid`,/*`attempts`,*/`score`) VALUES('".$userid."','".$time."')"; //,'".$attempts."'
        $db->query($sql);
    }

    //... and other awesome stuff in the GameModel that we are currently not interessted in...
}