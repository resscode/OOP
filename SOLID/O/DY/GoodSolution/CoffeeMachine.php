<?php

namespace Solid\O\DY\GoodSolution;

/**
 * Class CoffeeMachine
 * @package Solid\O\DY\GoodSolution
 */
class CoffeeMachine extends AbstractDrinkMachine
{
    /**
     * @var null | string
     */
    private $coffeeSort;

    /**
     * CoffeeMachine constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->coffeeSort = null;
    }

    /**
     * And here we  have a setter  with possibility to filter out
     * everything that shouldn't  be set.
     * @param string $coffeeSort
     */
    public function addCoffeeBeans(string $coffeeSort)
    {
        $allowedSorts = ['arabica', 'robusta'];

        if (in_array($coffeeSort, $allowedSorts)) {
            $this->coffeeSort = $coffeeSort;
        }
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function pourDrink()
    {
        if (is_null($this->coffeeSort)) {
            throw new \Exception("Coffee is missing!");
        }

        return $this->pourCoffee();
    }

    /**
     * @return string
     */
    private function pourCoffee()
    {
        return "$this->coffeeSort was poured into the cup \n";
    }
}
