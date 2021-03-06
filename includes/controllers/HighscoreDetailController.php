<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */

class HighscoreDetailController extends Controller
{
	protected $viewFileName = "highscore"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Highscoredetails";
		// $this->view->username = $this->user->username;
       // $this->view->highscore = GameModel::getHighscoreByUserId($this->user->id);
        $this->view->highscore = GameModel::getHighscoreById();


        /*
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->view->highscore = GameModel::getHighscoreByUserId($this->user->id);

            if($this->view->highscore !== null && $this->view->highscore->userId != $this->user->id)
            {
                $this->view->highscore = null;
            }
        } */
    }
}