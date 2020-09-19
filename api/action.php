<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db Habits2_db
		require('./resource/Habits2_db/custom/UserCustom.php');
		require('./resource/Habits2_db/User.php');
	

$app->run();


?>
