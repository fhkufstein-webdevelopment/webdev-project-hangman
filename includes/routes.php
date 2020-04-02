<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/anmelden'] = array('controller' => 'LogoutController', 'uniqueName' => 'anmelden');
$route['//anmelden.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'anmelden');

//neue Route hinzufügen
$route['/adresse'] = array('controller' => 'AddressDetailController', 'uniqueName' => 'addressdetail');


