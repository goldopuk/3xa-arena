<?php

function getHeroList() {

	$handle = fopen('../database/hero.csv', 'r');

	$heros = [];

	while (true) {

		$hero = fgetcsv($handle, 0, ';');

		if ($hero == false) {
			break;
		}

		$heros[] = $hero;
	}

	fclose($handle);

	return $heros;
}


function addHero($hero) {

	// le formulaire a été reçu
	$db = getConnection();

	$sql = "INSERT INTO hero (name, hp, armor, avatar) VALUES(:name, :hp, :armor, :avatar)";

	$statement = $db->prepare($sql);

	$statement->execute($hero);
}


function getConnection() {
	$user = 'root';
	$password = 'troiswa';

	$db = new PDO(
		'mysql:host=localhost;dbname=arena', 
		$user, 
		$password,
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
	);

	$db->exec('SET NAMES UTF8');

	return $db;
}
