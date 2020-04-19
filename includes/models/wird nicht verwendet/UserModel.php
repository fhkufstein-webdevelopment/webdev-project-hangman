<?php

class UserModel
{
    //alt: getAddressById
	public static function getUserById($id)
	{
		$db = new Database();
		$sql = "SELECT * FROM user WHERE id=".intval($id); //Backticks wegen Schlüsselwort?  (Änderung address mit user)
        //select * damit es alle ausgewählt werden (man muss die Felder nicht einzeln angeben)

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}


	public static function getUserByUserId($userId) //Backticks wegen Schlüsselwort?  (Änderung address mit user)
	{
		$db = new Database();

		$sql = "SELECT * FROM user WHERE userId=".intval($userId);
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			$userArray = array();

			while($row = $db->fetchObject($result))
			{
				$userArray[] = $row;
			}

			return $userArray;
		}

		return null;
	}

	public static function createNewUser($data)
	{
		$db = new Database(); //user testweise in backticks
        $sql = "INSERT INTO user(userId,firstname,lastname,email) VALUES('".$db->escapeString($data['userId'])."','".$db->escapeString($data['firstname'])."','".$db->escapeString($data['lastname'])."','".$db->escapeString($data['email'])."')";
		//später einfügen: nicknameNew,password,beispielfeldEmail
        //später einfügen2: ,'".$db->escapeString($data['nicknameNew'])."','".$db->escapeString($data['password'])."','".$db->escapeString($data['beispieldFeldEmail1'])."'
        $db->query($sql);

		$data['id'] = $db->insertId();

		return (object) $data;
	}

	public static function saveUser($data)
	{
		$db = new Database(); //user testweise in backticks

        //das untenstehende $sgl zeile 60 beinhaltet wahrscheinlich fehler
        //$sql = "UPDATE user SET firstname='". $db->escapeString($data['firstname'])."'',lastname='".$db->escapeString($data['lastname'])."''',nicknameNew='".$db->escapeString($data['nicknameNew'])."',password='".$db->escapeString($data['password'])."',beispielFeldEmail1='".$db->escapeString($data['beispielFeldEmail1'])."' WHERE id=".intval($data['id']);

        //dieses $sql muss später angepasst/erweitert werden
        $sql = "UPDATE user SET firstname='".$db->escapeString($data['firstname'])."',lastname='".$db->escapeString($data['lastname'])."',email='".$db->escapeString($data['email'])."' WHERE id=".intval($data['id']);

		$db->query($sql);

		return (object) $data;
	}

	public static function deleteUser($id)
	{
		$db = new Database();

		//test user in backticks
		$sql = "DELETE FROM user WHERE id=".intval($id);
		$db->query($sql);
	}
}