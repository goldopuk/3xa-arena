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