
<?php
require ('resources/db.php');
require ('resources/controller.php');
require ('model/model.php');
require ('model/djur.php');
require ('crud/delete.php');

$config = require('resources/config.php');
$db = new Database($config);
$controller = new Controller($db);
$controller->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Mitt MVC-projekt</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>