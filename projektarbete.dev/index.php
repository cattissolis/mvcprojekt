

	<!--require_once('model/djur.php');
	require_once('model/model.php');
	require_once('resources/controller.php');

	$controller = new Controller();
	$controller->index();-->



<?php
require ('resources/db.php');
require ('resources/controller.php');
require ('model/model.php');
require ('model/djur.php');

$config = require('resources/config.php');
$db = new Database($config);
$controller = new Controller($db);
$controller->index();
?>