<?php

// TODO: richtigen Namen der Variable time einfügen (Zeile

class GameModel {

    public static function saveScore ($id, $maxAmountOfTime)  // oder userid oder saveScore
    {
        $db = new Database();

        //prevent SQL Injection:
        $id = $db->escapeString($id); // oder userid??
        $maxAmountOfTime = $db->escapeString($maxAmountOfTime);

        /*$attempts = $db->escapeString($attempts);*/

        $sql = "INSERT INTO highscore(`userid`, `maxAmountOfTime`) VALUES('".$id."','".$maxAmountOfTime."')"; //,'".$attempts."'

        $db->query($sql);
    }


    //... and other awesome stuff in the GameModel that we are currently not interessted in...


    public static function getHighscoreById()
    {
        //$db = new Database();
       // $sql = "SELECT * FROM highscore WHERE id=" . intval($id);

        /*$sql= "select a.`id`, a.`name`, b.`highscore_id`, b.`maxAmountOfTime`
            from `user` as a
            join `highscore` as b
            on a.`id` = b.`userid`
            order by b.`maxAmountOfTime` DESC";*/

       /* $sql = "SELECT a.`id`, a.`name`, b.`maxAmountOfTime`
              FROM `user` as a
              JOIN `highscore` as b
              ON a.`id` = b.`userid`
              
              "; */

       /* $sql = "SELECT * FROM highscore";

        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            return $db->fetchObject($result);
        }

        return null; */





$db = new Database();

$sql = "SELECT *, `maxAmountOfTime` FROM highscore order by `maxAmountOfTime` desc";          //userId=" . intval($userId);
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


















    public static function getHighscoreByUserId($userId) //userid
    {
        $db = new Database();

       $sql = "SELECT * FROM highscore WHERE userId=" . intval($userId);
       //"order by maxAmountOfTime Desc";

      /* $sql = "select * from highscore where userId, a.`id`, a.`name`, b.`highscore_id`, b.`maxAmountOfTime`
            from `user` as a
            join `highscore` as b
            on a.`id` = b.`userid`
            order by b.`maxAmountOfTime`".intval($userid);*/

      /*$sql = "SELECT a.`id`, a.`name`, b.`maxAmountOfTime`
              FROM `user` as a
              JOIN `highscore` as b
              ON a.`id` = b.`userid` "; */


              


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
        $sql = "INSERT INTO highscore(userid, `name`, maxAmountOfTime) VALUES('" . $db->escapeString($data['userid']) . "', '" . $db->escapeString($data['name']) . "', '" . $db->escapeString($data['maxAmountOfTime']) . "'";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object)$data;
    }

    public static function saveHighscore($data)
    {
        $db = new Database();
        $sql = "UPDATE highscore SET userid='" . $db->escapeString($data['userid']) . "',maxAmountOfTime='" . $db->escapeString($data['maxAmountOfTime']) . "' WHERE id=" . intval($data['id']);
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