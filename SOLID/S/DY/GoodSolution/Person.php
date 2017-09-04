<?php

namespace Solid\S\DY\GoodSolution;

use Solid\S\DY\GoodSolution\Interfaces\DrinkerInterface;
use Solid\S\DY\GoodSolution\Interfaces\StorageInterface;

class Person implements DrinkerInterface
{
    private $name;
    private $memories;

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->memories = [];
    }

    /**
     * @see DrinkerInterface::makeSipFrom()
     */
    public function makeSipFrom(StorageInterface $storage): string
    {
        $storageName = $storage->getName();
        $this->makeReminder("Stop slurping, $this->name");
        return "$this->name made a slurping sound from $storageName";
    }

    private function makeReminder(string $reminder)
    {
        $this->memories[] = $reminder;
    }
}