<?php

namespace Solid\O\DY\BadSolution;

/**
 * Class DrinkMachine
 * @package Solid\O\DY\BadSolution
 */
class DrinkMachine
{
    public $type;
    public $liquid;

    /**
     * DrinkMachine constructor.
     * @param $type
     * @param $liquid
     */
    public function __construct($type, $liquid)
    {
        $this->type = $type;
        if ($type == "coffeeMachine") {
            if ($liquid != "arabica" && $liquid != "robusta") {
                throw new \Exception("That was not Nescafe!");
            }
        }
        $this->liquid = $liquid;
    }

    /**
     * @return string
     */
    public function pourDrink()
    {
        $result = "Secret drink \n";
        if ($this->type == "coffeeMachine") {
            $result = "$this->liquid was poured into the cup \n";
        }

        return $result;
    }
}
