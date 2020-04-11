<?php

// TODO: Auf Fehler kontrollieren

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class HighscoreDetailController extends Controller
{
	protected $viewFileName = "highscoredetail"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Highscoredetails";
		$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);


        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->view->address = HighscoreModel::getHighscoreById($id);
            if($this->view->highscore !== null && $this->view->highscore->userId != $this->user->id)
            {
                $this->view->highscore = null;
            }
        }

	}

}