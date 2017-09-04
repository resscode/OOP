<?php

namespace Solid\S\DY\GoodSolution;

use Solid\S\DY\GoodSolution\Interfaces\StorableInterface;

class Liquid implements StorableInterface
{
    private $name;

    /**
     * Liquid constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}