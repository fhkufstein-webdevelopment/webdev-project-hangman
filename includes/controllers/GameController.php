<?php

// TODO: Variablen kontrollieren (am Besten alles kontrollieren)

class GameController extends Controller
{
    //Anleitung Schritt 4
    protected $viewFileName = "game"; //Das ist der View, der die Daten bekommt
    protected $loginRequired = true; //$loginRequired ist auf true gesetzt, da wir nur den Leuten den Download erlauben wollen die überhaupt angemeldet sind.



    public function run()
    {
        // TODO: Implement run() method.
        $this->view->title = "Game";
        $this->view->username = $this->user->username;  //ist "username" richtig oder vl nur "name"?

        //vielleicht noch andere Sachen

        $this->checkForSaveScorePost();
    }



    private function checkForSaveScorePost()
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