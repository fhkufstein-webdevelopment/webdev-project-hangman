<?php

class UserModel
{
	public static function getAddressById($id)
	{
		$db = new Database();
		$sql = "SELECT * FROM user WHERE id=".intval($id);

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}

	public static function getAddressesByUserId($userId)
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
		$db = new Database();
        $sql = "INSERT INTO user(userId,firstname,lastname,nicknameNew,password,beispielfeldEmail) VALUES('".$db->escapeString($data['userId'])."','".$db->escapeString($data['firstname'])."','".$db->escapeString($data['lastname'])."','".$db->escapeString($data['nicknameNew'])."','".$db->escapeString($data['password'])."','".$db->escapeString($data['beispieldFeldEmail1'])."')";
		$db->query($sql);

		$data['id'] = $db->insertId();

		return (object) $data;
	}

	public static function saveUser($data)
	{
		$db = new Database();
        $sql = "UPDATE user SET firstname='". $db->escapeString($data['firstname'])."'',lastname='".$db->escapeString($data['lastname'])."''',nicknameNew='".$db->escapeString($data['nicknameNew'])."',password='".$db->escapeString($data['password'])."',beispielFeldEmail1='".$db->escapeString($data['beispielFeldEmail1'])."' WHERE id=".intval($data['id']);


		$db->query($sql);

		return (object) $data;
	}

	public static function deleteUser($id)
	{
		$db = new Database();

		$sql = "DELETE FROM user WHERE id=".intval($id);
		$db->query($sql);
	}
}