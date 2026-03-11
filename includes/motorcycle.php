<?php

namespace OOP;

class motorcycle extends vehicle
{
    protected int $tires;

    public function __construct(string $type, int $wheels)
    {
        $wheels = 4;
        parent::__construct($type, $wheels);
        $this->tires = $wheels;
    }

    public function getTires(): int
    {
        return $this->tires;
    }
}