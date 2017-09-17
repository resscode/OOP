<?php

namespace Solid\S\DY\GoodSolution\Interfaces;

interface DrinkerInterface
{
    /**
     * @param StorageInterface $storage
     * @return string
     */
    public function makeSipFrom(StorageInterface $storage): string;
}
