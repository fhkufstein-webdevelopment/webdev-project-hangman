<?php


class HighscoreModel
{
    /*
    public static function saveScore($userid, $time) {
        $db = new Database();

        //prevent SQL Injection
        $userid = $db->escape_string($userid);
        $time = $db->escapeString($time); //stimmt hier escape string?

        $sql = "INSERT INTO game(`userid`, `time`) VALUES('".$userid."','".$time."')";
        $db->query($sql);
    }


    //Variante 2
    public static function saveScore($user, $time) //createNewScore
    {
        $db = new Database();

        $user = $db->escapeString($user);
        $time = $db->escapeString($time);


        $sql = "INSERT INTO `highscore`(`time`, `user`) VALUES ('" . $user . "','" . $time . "')";
        $db->query($sql);


    }*/
}