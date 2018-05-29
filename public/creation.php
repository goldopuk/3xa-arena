<?php
include '../services/tools.php';
include '../services/heroService.php';



if (count($_POST) > 0) {
	

	$hero = [
		"name" =>$_POST['name'],
		"hp" => $_POST['hp'],
		"armor" => $_POST['armor'],
		"avatar" => $_POST['avatar']
	];

	addHero($hero);

	
	exit;
}


include '../views/creation.phtml';