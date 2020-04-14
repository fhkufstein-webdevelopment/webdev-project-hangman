<?php

class Highscore extends RESTClass
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
			$view = new View('highscore');

			if(isset($data['id']))
			{
				$dataForView = GameModel::getHighscoreById($data['id']);
				$user = new User();

				if($dataForView->userId = $user->id)
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
					$jsonResponse->setMessage('You tried to edit an address that doesn\'t belong to you! No chance!');
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
		$requiredFields = array('userid', 'time');

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

			GameModel::createNewHighscore($data);



			$jsonResponse = new JSON();
			$jsonResponse->result = true;
			$jsonResponse->setMessage('Address created!');
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
		$requiredFields = array('userid', 'time');

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
			$addressObj = GameModel::getHighscoreById($data['id']);

			if($addressObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to save/edit that address!");
				$jsonResponse->send();
			}
			else
			{
				GameModel::saveHighscore($data);

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
			$addressObj = GameModel::getHighscoreById($data['id']);

			if($addressObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to delete that address!");
				$jsonResponse->send();
			}
			else
			{
				GameModel::deleteHighscore($addressObj->id);

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Address deleted!');
				$jsonResponse->send();
			}
		}

	}
}