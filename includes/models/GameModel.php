<?php

// TODO: richtigen Namen der Variable time einfügen (Zeile

class GameModel {

    public static function saveScore ($id, $time)
    {
        $db = new Database();

        //prevent SQL Injection:
        $id = $db->escapeString($id);
        $time = $db->escapeString($time);

        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`userid`, `time`) VALUES('".$id."','".$time."')"; //,'".$attempts."'

        $db->query($sql);
    }


    //... and other awesome stuff in the GameModel that we are currently not interessted in...

}