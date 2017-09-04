<?php

require_once __DIR__ . "/../../../vendor/autoload.php";

use Solid\S\DY\BadSolution\Cup as WorseCup;
use Solid\S\DY\GoodSolution\Cup;
use Solid\S\DY\GoodSolution\Liquid;
use Solid\S\DY\GoodSolution\Person;

// Here we have better solution
$coffee = new Liquid('coffee');
$epicCup = new Cup(1000, 'black');
$dave = new Person('Dave');

$epicCup->add($coffee);
$drinkResult = $dave->makeSipFrom($epicCup);

echo $drinkResult . "\n";

// And now worse one
$cup = new WorseCup(1000, 'black');
$cup->pourLiquid('coffee');
$drinkResult = $cup->beUsedBy('Dave');

echo $drinkResult . "\n";