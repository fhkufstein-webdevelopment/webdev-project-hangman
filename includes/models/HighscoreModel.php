<?php
// TODO: Variablennamen müssen noch überprüft und ausgebessert werden
// TODO: eventuell muss noch eine Datenbank bei phpMyAdmin angelegt werden
// hängt mit dem HighscoreController zusammen
//macht im moment noch dasselbe wie GameModel, beide funktionieren aber nicht

class HighscoreModel
{

    public static function saveScore($userid, $time)
    {

        $db = new Database();

        //prevent SQL Injection:
        $userid = $db->escapeString($userid);
        $time = $db->escapeString($time);

        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`userid`, `time`) VALUES('" . $userid . "','" . $time . "')"; //,'".$attempts."'

        $db->query($sql);
    }
}
/*
{
    public static function getHighscoreById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM highscore WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getHighscoreByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM highscore WHERE userId=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $addressesArray = array();

            while($row = $db->fetchObject($result))
            {
                $addressesArray[] = $row;
            }

            return $addressesArray;
        }

        return null;
    }

    public static function createNewHighscore($data)
    {
        $db = new Database();
        $sql = "INSERT INTO highscore(benutzer, time) VALUES('".$db->escapeString($data['benutzer'])."','".$db->escapeString($data['time'])."'";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveHighscore($data)
    {
        $db = new Database();
        $sql = "UPDATE highscore SET benutzer='".$db->escapeString($data['benutzer'])."',time='".$db->escapeString($data['time'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    public static function deleteHighscore($id)
    {
        $db = new Database();

        $sql = "DELETE FROM highscore WHERE id=".intval($id);
        $db->query($sql);
    }

*/

 /*   public static function saveScoreAndAttempts($benutzer, $time )
    {
        $db = new Database();

        //prevent SQL Injection:
        $benutzer = $db->escapeString($benutzer);
        $time = $db->escapeString($time);
        /*$attempts = $db->escapeString($attempts);

        $sql = "INSERT INTO highscore(`benutzer`,`time`) VALUES('".$benutzer."','".$time."')"; //,'".$attempts."'
        $db->query($sql);
    }
}  */