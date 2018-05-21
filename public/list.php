<?php
include '../services/tools.php';
include '../services/heroService.php';

$heros = getHeroList();

include '../views/list.phtml';