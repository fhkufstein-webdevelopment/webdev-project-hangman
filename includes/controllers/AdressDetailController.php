<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class AdressDetailController extends Controller
{
	protected $viewFileName = "addressdetail"; //this will be the View that gets the data...
	protected $loginRequired = true; // muss auf true sein, damit jemand der nicht angemeldet ist, keinen Adressdatensatz zu sehen bekommt


	public function run()
	{
		$this->view->title = "Adressdetails";
		$this->view->username = $this->user->username;


        if(isset($_GET['id'])) {   //überprüft, ob die Variable gesetzt wird
            $id = $_GET['id'];
            $this->view->address = AddressModel::getAddressById($id);
            if($this->view->address !== null && $this->view->address->userId != $this->user->id)
            {
                $this->view->adress = null;  //damit der User das Get Parameter nicht verändern kann (und somit die Addresse verändert, auf der er keinen zugriff haben sollte
            } // sollte nun genung geschützt sein, damit es auch vor Angreifer geschützt
        }
	}

}