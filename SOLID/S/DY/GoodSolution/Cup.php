<?php

namespace Solid\S\DY\GoodSolution;

use Solid\S\DY\GoodSolution\Interfaces\StorableInterface;
use Solid\S\DY\GoodSolution\Interfaces\StorageInterface;

class Cup implements StorageInterface
{
    private $volume;
    private $color;

    /**
     * Cup constructor.
     * @param int $volume
     * @param string $color
     */
    public function __construct(int $volume, string $color)
    {
        $this->volume = $volume;
        $this->color = $color;
    }

    /**
     * @see StorageInterface::add()
     */
    public function add(StorableInterface $storable)
    {
        // Adding object to storage
    }

    /**
     * @see StorageInterface::remove()
     */
    public function remove(StorableInterface $storable)
    {
        // Removing object from storage, I am too lazy for this
    }

    public function getName(): string
    {
        $volume = $this->getVolume();
        $color = $this->getColor();
        return "$volume ml $color cup";
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}