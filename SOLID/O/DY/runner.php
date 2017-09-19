<?php

use Solid\O\DY\BadSolution\DrinkMachine;
use Solid\O\DY\GoodSolution\AbstractDrinkMachine;
use Solid\O\DY\GoodSolution\CoffeeMachine;

require_once __DIR__ . "/../../../vendor/autoload.php";

$uberDrinkPourer = new AbstractDrinkMachine("UberPourer9000");
echo($uberDrinkPourer->pourDrink());

$coffeeMachine = new CoffeeMachine("Coffenator2000");
$coffeeMachine->addCoffeeBeans("arabica");
echo($coffeeMachine->pourDrink());

//Now the bad code

$drinkPourer = new DrinkMachine('strangeAutomat', 'water');
echo($drinkPourer->pourDrink());

$drinkPourer = new DrinkMachine('coffeeMachine', 'arabica');
echo($drinkPourer->pourDrink());

$drinkPourer->liquid = 'cat';
echo($drinkPourer->pourDrink());
