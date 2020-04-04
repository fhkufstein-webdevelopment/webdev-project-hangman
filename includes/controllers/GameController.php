<?php


class GameController extends Controller
{
    //Anleitung Schritt 4
    protected $viewFileName = "game"; //Das ist der View, der die Daten bekommt
    protected $loginRequired = true;



    function run()
    {
        // TODO: Implement run() method.

        $this->view->title = "Game";
        $this->view->username = $this->user->username;  //Stimmen Variablennamen??

        //vielleicht noch andere Sachen

        $this->checkForSaveScorePost();

    }



}