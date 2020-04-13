<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class HighscoreController extends Controller
{
	protected $viewFileName = "highscore"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "highscore";
		$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id); //aus indexController wird hier nicht benötigt
        //$this->view->user = UserModel::getUserByUserId($this->user->id);
		//$this->vies->highscore = HighscoreModel::getHighscoreByUserId($this->user->id);
	}

	private function checkForSaveScorePost() {

        if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
        {
            $userid = $this->user->id;
            $time = $_POST['time'];
            //$attempts = $_POST['attempts'];

            //now we need our Model to save the values
            GameModel::saveScoreAndAttempts($userid, $time); //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
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