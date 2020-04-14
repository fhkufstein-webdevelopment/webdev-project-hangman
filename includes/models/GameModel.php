<?php

// TODO: richtigen Namen der Variable time einfügen (Zeile

class GameModel {

    public static function saveScore ($id, $time)  // oder userid ??
    {
        $db = new Database();

        //prevent SQL Injection:
        $id = $db->escapeString($id); // oder userid??
        $time = $db->escapeString($time);

        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`userid`, `time`) VALUES('".$id."','".$time."')"; //,'".$attempts."'

        $db->query($sql);
    }


    //... and other awesome stuff in the GameModel that we are currently not interessted in...


    public static function getHighscoreById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM highscore WHERE id=" . intval($id);

        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getHighscoreByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM highscore WHERE userId=" . intval($userId);
        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            $addressesArray = array();

            while ($row = $db->fetchObject($result)) {
                $addressesArray[] = $row;
            }

            return $addressesArray;
        }

        return null;
    }

    public static function createNewHighscore($data)
    {
        $db = new Database();
        $sql = "INSERT INTO highscore(userid, time) VALUES('" . $db->escapeString($data['userid']) . "','" . $db->escapeString($data['time']) . "'";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object)$data;
    }

    public static function saveHighscore($data)
    {
        $db = new Database();
        $sql = "UPDATE highscore SET userid='" . $db->escapeString($data['userid']) . "',time='" . $db->escapeString($data['time']) . "' WHERE id=" . intval($data['id']);
        $db->query($sql);

        return (object)$data;
    }

    public static function deleteHighscore($id)
    {
        $db = new Database();

        $sql = "DELETE FROM highscore WHERE id=" . intval($id);
        $db->query($sql);
    }


}