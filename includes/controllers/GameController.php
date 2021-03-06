<?php


class GameController extends Controller
{

    //Anleitung Schritt 4
    protected $viewFileName = "game"; //Das ist der View, der die Daten bekommt
    protected $loginRequired = true; //$loginRequired ist auf true gesetzt, da wir nur den Leuten das Ansehen erlauben wollen, die angemeldet sind.



    public function run()
    {
        // TODO: Implement run() method.
        $this->view->title = "game"; //oder "Game"
        $this->view->username = $this->user->username;

        //vielleicht noch andere Sachen

        $this->checkForSaveScorePost();
    }


    private function checkForSaveScorePost()
    {
        if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
        {
            $id = $this->user->id;
            $maxAmountOfTime = $_POST['maxAmountOfTime'];

            //Das Model soll die Werte speichern
            GameModel::saveScore($id, $maxAmountOfTime);

            //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
            //normally we would first make a new object like so:
            //$gameObj = new GameModel();
            //$gameObj->saveScoreAndAttempts($userid, $score, $attempts);
            //but if a method is defined as static - it can be used directly like a function

            //JSON message, dass die Werte gespeichert wurden
            $jsonResponse = new JSON();
            $jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
            $jsonResponse->setMessage("Saved the values!"); //(optional)
            $jsonResponse->send();
        }
    }
}