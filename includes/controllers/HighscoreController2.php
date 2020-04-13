<?php

// TODO: Auf Fehler kontrollieren

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
//class HighscoreController extends Controller {

/*
	protected $viewFileName = "highscore"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Highscore";
		$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);


       /* ich weiß nicht ob wir das brauchen
       if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->view->highscore = HighscoreModel::getHighscoreById($id);
            if($this->view->highscore !== null && $this->view->highscore->userId != $this->user->id)
            {
                $this->view->highscore = null;
            }
        } */
   //     $this->checkForSaveScorePost();
    //}


 /*   private function checkForSaveScorePost()
    {
        if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
        {

            $time = $_POST['time']; //erstes time war vorher zeit
            $userid = $this->user->id;

            //now we need our Model to save the values
            GameModel::saveScoreAndAttempts($userid, $time); //Variablennamen von oben

            //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
            //normally we would first make a new object like so:
            //$gameObj = new GameModel();
            //$gameObj->saveScoreAndAttempts($userid, $score, $attempts);
            //but if a method is defined as static - it can be used directly like a function

            //finally send a JSON message that we saved the values...
            $jsonResponse = new JSON();
            $jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
            $jsonResponse->setMessage("Saved the values!"); //(optional)
            $jsonResponse->send();
        }
    }
}

/*	protected $viewFileName = "highscore"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Highscore";
		$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);


       /* ich weiß nicht ob wir das brauchen
       if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->view->highscore = HighscoreModel::getHighscoreById($id);
            if($this->view->highscore !== null && $this->view->highscore->userId != $this->user->id)
            {
                $this->view->highscore = null;
            }
        }
        $this->checkForSaveScorePost();



    private function checkForSaveScorePost()
    {
        if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
        {

            $time = $_POST['time']; //erstes time war vorher zeit
            $userid = $this->user->id;

            //now we need our Model to save the values
            HighscoreModel::saveScoreAndAttempts($userid, $time); //Variablennamen von oben

            //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
            //normally we would first make a new object like so:
            //$gameObj = new GameModel();
            //$gameObj->saveScoreAndAttempts($userid, $score, $attempts);
            //but if a method is defined as static - it can be used directly like a function

            //finally send a JSON message that we saved the values...
            $jsonResponse = new JSON();
            $jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
            $jsonResponse->setMessage("Saved the values!"); //(optional)
            $jsonResponse->send();
        }
    }
}