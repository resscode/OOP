<?php

namespace Solid\S\DY\BadSolution;


class Cup
{
    private $storage;
    private $volume;
    private $color;

    /**
     * Cup constructor.
     * @param $volume
     * @param $color
     */
    public function __construct($volume, $color)
    {
        $this->volume = $volume;
        $this->color = $color;
        // Let's set the cup empty
        $this->storage = null;
    }

    /**
     * @param string $liquidName
     * @throws \Exception
     */
    public function pourLiquid(string $liquidName)
    {
        if ($liquidName != 'coffee' && $liquidName != 'tea') {
            throw new \Exception("This can't be consumed!");
        }
        $this->storage = $liquidName;
    }

    /**
     * @param $personName
     * @return string
     */
    public function beUsedBy($personName)
    {
        $name = $this->getName();
        $result = "$personName made a slurping sound from $name";
        $this->storage = null;
        return $result;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "$this->volume ml $this->color cup";
    }
}