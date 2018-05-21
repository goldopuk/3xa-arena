<?php
include '../services/tools.php';
include '../services/heroService.php';



if (count($_POST) > 0) {
	
	// le formulaire a été reçu


	$hero = [];

	$hero[] = $_POST['name'];
	$hero[] = $_POST['hp'];
	$hero[] = $_POST['armor'];
	$hero[] = $_POST['avatar'];

	addHero($hero);

	header('Location: list.php');
	exit;
}


include '../views/creation.phtml';