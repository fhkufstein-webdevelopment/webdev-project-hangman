<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');

$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/game'] = array('controller' => 'GameController', 'uniqueName' => 'game');
$route['//game.html'] = array('controller' => 'GameController', 'uniqueName' => 'game');

$route['/anmelden'] = array('controller' => 'AnmeldenController', 'uniqueName' => 'anmelden');
$route['//anmelden.html'] = array('controller' => 'AnmeldenController', 'uniqueName' => 'anmelden');

//neue Route hinzufügen (für email)
$route['/adresse'] = array('controller' => 'AddressDetailController', 'uniqueName' => 'addressdetail');

//neue Route für VCard
$route['/download'] = array('controller' => 'VCardDownloadController', 'uniqueName' => 'vcarddownload');

//neue Route für Highscore
$route['/highscore.php'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscoreanzeige');



