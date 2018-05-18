<?php

include '../services/tools.php';
include '../services/heroService.php';

echo "testAddHero";


$hero = [];
$hero[] = 'Aragorn';
$hero[] = 20;
$hero[] = 10;

addHero($hero);

pre(getHeroList());

