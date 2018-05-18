<?php

include '../services/tools.php';
include '../services/heroService.php';

$heros = getHeroList();

echo "<table border='1'>";

foreach ($heros as $hero) {

	echo "<tr>";
	echo "<td>$hero[0]</td>";
	echo "<td>$hero[1]</td>";
	echo "<td>$hero[2]</td>";
	echo "</tr>";
}

echo "</table>";