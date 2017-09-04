<?php

namespace Solid\S\DY\GoodSolution\Interfaces;

interface StorageInterface
{
    /**
     * @param StorableInterface $storable
     * @return mixed
     */
    public function add(StorableInterface $storable);

    /**
     * @param StorableInterface $storable
     * @return mixed
     */
    public function remove(StorableInterface $storable);

    /**
     * @return string
     */
    public function getName(): string;
}