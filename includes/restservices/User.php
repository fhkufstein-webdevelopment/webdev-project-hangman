<?php

class User extends RESTClass
{
	private $Database = null;

	public function __construct()
	{
		$this->Database = new Database();
	}

	public function __destruct()
	{
		$this->Database = null;
	}

	protected function getRequest($data)
	{
		if(isset($data['returnView']) && $data['returnView'])
		{
			$view = new View('user'); //Änderung viewName

			if(isset($data['id']))
			{
				$dataForView = UserModel::getUserById($data['id']); //passt getAddressById? nein, weil in UserModel ausgebessert
				$user = new User();

				if($dataForView->userId = $user->id) //user auch bei Address.php hier
				{
					//ok - its your address!

					//load old values
					$view->setData((array) $dataForView);

					$jsonResponse = new JSON();
					$jsonResponse->result = true;
					$jsonResponse->setData(array('html' => $view->parse()));
					$jsonResponse->send();
				}
				else
				{
					//its not your address!
					$jsonResponse = new JSON();
					$jsonResponse->result = false;
					$jsonResponse->setMessage('You tried to edit a user that doesn\'t belong to you! No chance!');
					$jsonResponse->send();
				}
			}
			else
			{
				//new
				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setData(array('html' => $view->parse()));
				$jsonResponse->send();
			}
		}
	}

	protected function createRequest($data)
	{
	    //später hinzufügen: 'nickNameNew', 'password', 'BeispielFeldEmail1'
		$requiredFields = array('firstname', 'lastname', 'email');


		$error = false;
		$errorFields = array();
		$user = new User();

		foreach($requiredFields as $fieldname)
		{
			if(!isset($data[$fieldname]) || $data[$fieldname] == "")
			{
				$error = true;
				$errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
			}
		}

		if(!$error)
		{
			$data['userId'] = $user->id;

			UserModel::createNewUser($data);



			$jsonResponse = new JSON();
			$jsonResponse->result = true;
			$jsonResponse->setMessage('User created!');
			$jsonResponse->send();
		}
		else
		{
			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setData(array('errorFields' => $errorFields));
			$jsonResponse->send();
		}

	}

	protected function saveRequest($data)
	{
	    //später hinzufügen: 'nickNameNew', 'password', 'BeispielFeldEmail1'
		$requiredFields = array('firstname', 'lastname', 'email');

		$error = false;
		$errorFields = array();
		$user = new User();

		foreach($requiredFields as $fieldname)
		{
			if(!isset($data[$fieldname]) || $data[$fieldname] == "")
			{
				$error = true;
				$errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
			}
		}

		if(!$error)
		{
			$addressObj = UserModel::getUserById($data['id']);

			if($addressObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to save/edit that address!");
				$jsonResponse->send();
			}
			else
			{
				UserModel::saveUser($data);

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Address saved!');
				$jsonResponse->send();
			}

		}
		else
		{
			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setData(array('errorFields' => $errorFields));
			$jsonResponse->send();
		}
	}

	protected function deleteRequest($data)
	{
		$user = new User();

		if(!isset($data['id']))
		{
			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setMessage("Can't delete - id is missing!");
			$jsonResponse->send();
		}
		else
		{
			$addressObj = UserModel::getUserById($data['id']);

			if($addressObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to delete that address!");
				$jsonResponse->send();
			}
			else
			{
				UserModel::deleteUser($addressObj->id);

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Address deleted!');
				$jsonResponse->send();
			}
		}

	}
}