<?php

// TODO: Auf Fehler kontorllieren

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class HighscoreController extends Controller
{
	protected $viewFileName = "highscoreanzeige"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Übersicht";
		$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);


        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->view->address = AddressModel::getAddressById($id);
            if($this->view->address !== null && $this->view->address->userId != $this->user->id)
            {
                $this->view->address = null;
            }
        }

	}

}