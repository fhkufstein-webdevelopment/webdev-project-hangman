<?php


class HighscoreModel
{
    public static function saveScore($userid, $time) {
        $db = new Database();

        //prevent SQL Injection
        $userid = $db->escape_string($userid);
        $time = $db->escapeString($time); //stimmt hier escape string?

        $sql = "INSERT INTO game(`userid`, `time`) VALUES('".$userid."','".$time."')";
        $db->query($sql);
    }
}