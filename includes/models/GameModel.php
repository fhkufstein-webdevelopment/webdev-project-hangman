<?php

class GameModel
{

    public static function saveScore($id, $maxAmountOfTime)
    {
        $db = new Database();

        //prevent SQL Injection:
        $id = $db->escapeString($id);
        $maxAmountOfTime = $db->escapeString($maxAmountOfTime);


        //funktioniert
        $sql = "INSERT INTO highscore(`userid`, `maxAmountOfTime`) VALUES('" . $id . "','" . $maxAmountOfTime . "')";

        $db->query($sql);
    }


    //... and other awesome stuff in the GameModel that we are currently not interessted in...


    public static function getHighscoreById()
    {

        $db = new Database();

        //funktioniert
        //$sql = "SELECT *, `maxAmountOfTime` FROM highscore order by `maxAmountOfTime` desc";   //funktioniert

        //Abfrage aus phpMyAdmin - Name wird in Highscoreübersicht nicht angezeigt
        $sql = "SELECT `highscore`.`userid`, `user`.`name`, `highscore`.`maxAmountOfTime`
                FROM `highscore` as  `highscore`
                JOIN `user` as `user`
                    on `highscore`.`userid` = `user`.`id`
                ORDER by `highscore`.`maxAmountOfTime` desc";


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


/* Versuche, dass der Name auch angezeigt wird
    public static function getHighscoreByUserId($userId) //userid
    {
        $db = new Database();

       $sql = "SELECT * FROM highscore WHERE userId=" . intval($userId); //funktioniert


      /* $sql = "select * from highscore where userId, a.`id`, a.`name`, b.`highscore_id`, b.`maxAmountOfTime`
            from `user` as a
            join `highscore` as b
            on a.`id` = b.`userid`
            order by b.`maxAmountOfTime`".intval($userid);*/

      /*$sql = "SELECT a.`id`, a.`name`, b.`maxAmountOfTime`
              FROM `user` as a
              JOIN `highscore` as b
              ON a.`id` = b.`userid` "; * /



        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            $addressesArray = array();

            while ($row = $db->fetchObject($result)) {
                $addressesArray[] = $row;
            }

            return $addressesArray;
        }

        return null;
    }*/


    public static function createNewHighscore($data)
    {
        $db = new Database();
        $sql = "INSERT INTO highscore(userid, `name`, maxAmountOfTime) VALUES('" . $db->escapeString($data['userid']) . "', '" . $db->escapeString($data['name']) . "', '" . $db->escapeString($data['maxAmountOfTime']) . "'";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object)$data;
    }

    public static function saveHighscore($data)
    {
        $db = new Database();
        $sql = "UPDATE highscore SET userid='" . $db->escapeString($data['userid']) . "', `name`='" . $db->escapeString($data['name']) . "',maxAmountOfTime='" . $db->escapeString($data['maxAmountOfTime']) . "' WHERE id=" . intval($data['id']);
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