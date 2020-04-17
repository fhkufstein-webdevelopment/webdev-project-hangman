<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class UserDatenController extends Controller
{
	protected $viewFileName = "userchange"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Userdaten ändern";
		$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
        //$this->view->user = UserModel::getUserByUserId($this->user->id);
		//$this->vies->highscore = HighscoreModel::getHighscoreByUserId($this->user->id);
	}

}