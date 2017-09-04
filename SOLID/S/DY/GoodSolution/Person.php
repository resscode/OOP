<?php

namespace Solid\S\DY\GoodSolution;

use Solid\S\DY\GoodSolution\Interfaces\DrinkerInterface;
use Solid\S\DY\GoodSolution\Interfaces\StorageInterface;

class Person implements DrinkerInterface
{
    private $name;

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @see DrinkerInterface::makeSipFrom()
     */
    public function makeSipFrom(StorageInterface $storage): string
    {
        $storageName = $storage->getName();
        return "$this->name made a slurping sound from $storageName";
    }
}