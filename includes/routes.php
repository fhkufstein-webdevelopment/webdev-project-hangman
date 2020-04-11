<?php
// TODO: route für Highscore.html oder Highscore.php muss angelegt werden, vorher muss html oder php geklärt werden
// TODO: weitere Routen anlegen?


//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.php'] = array('controller' => 'IndexController', 'uniqueName' => 'index');

$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.php'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.php'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/game'] = array('controller' => 'GameController', 'uniqueName' => 'game');
$route['/game.php'] = array('controller' => 'GameController', 'uniqueName' => 'game');
//$route['/html/game.html'] = array('controller' => 'GameController', 'uniqueName' => 'game');


//$route['/anmelden'] = array('controller' => 'AnmeldenController', 'uniqueName' => 'anmelden');
//$route['//anmelden.html'] = array('controller' => 'AnmeldenController', 'uniqueName' => 'anmelden');

//neue Route hinzufügen (für email)
$route['/adresse'] = array('controller' => 'AddressDetailController', 'uniqueName' => 'addressdetail');

//neue Route für VCard
$route['/download'] = array('controller' => 'VCardDownloadController', 'uniqueName' => 'vcarddownload');

//neue Route für Highscore
$route['/highscore'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');

//neue Route für User
$route['/user'] = array('controller' => 'UserDetailController', 'uniqueName' => 'user');

//neue Route für Start
$route['/start'] = array('controller' => 'StartController', 'uniqueName' => 'start');

