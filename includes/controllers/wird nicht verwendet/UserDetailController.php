<?php

/* @author Daniel Hoover <https://github.com/danielhoover> */

class UserDetailController extends Controller
{
	protected $viewFileName = "userdetail"; //Verändert in userdetail, this will be the View that gets the data...
	protected $loginRequired = false;// muss auf true sein, damit jemand der nicht angemeldet ist, keinen Adressdatensatz zu sehen bekommt
    //Änderung von true auf false

	public function run()
	{
		$this->view->title = "Userdetails"; //Änderung von Addressdetails auf Userdetails
		$this->view->username = $this->user->username; //keine Änderung, passt das?


        if(isset($_GET['id'])) {   //überprüft, ob die Variable gesetzt wird
            $id = $_GET['id'];
            //alt: $this->view->address = AddressModel::getAddressById($id);

            //neu
            $this->view->user = UserModel::getUserById($id);

            //alt: if($this->view->address !== null && $this->view->address->userId != $this->user->id)
            //            {
            //                $this->view->adress = null;  //damit der User das Get Parameter nicht verändern kann (und somit die Addresse verändert, auf der er keinen zugriff haben sollte
            //            } // sollte nun genung geschützt sein, damit es auch vor Angreifer geschützt

            //neu
            if($this->view->user !== null && $this->view->user->userId != $this->user->id) //passt userId oder muss es UserId heißen?
            {
                $this->view->user = null;  //damit der User das Get Parameter nicht verändern kann (und somit die Addresse verändert, auf der er keinen zugriff haben sollte
            } // sollte nun genung geschützt sein, damit es auch vor Angreifer geschützt
        }
	}

}