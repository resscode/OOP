<?php

namespace Solid\O\DY\GoodSolution;

/**
 * Class AbstractDrinkMachine
 * @package Solid\O\DY\GoodSolution
 */
class AbstractDrinkMachine
{
    protected $name;

    /**
     * AbstractDrinkMachine constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function pourDrink()
    {
        return $this->makeDrink();
    }

    /**
     * I made this method private as we want to keep some
     * business logic that would not be nested explicitly
     * by the children. They could use parent's pourDrink
     * if need to.
     * @return string
     */
    private function makeDrink()
    {
        return "Secret drink \n";
    }
}
