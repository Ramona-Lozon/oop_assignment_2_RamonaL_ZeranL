<?php

namespace OOP;

class truck extends vehicle
{
    protected bool $hasTruckbed;

    public function __construct(string $type, int $wheels)
    {
        $wheels = 4;
        $this->hasTruckbed = true;
        parent::__construct($type, $wheels);

    }

    public function getDefinition(): bool
    {
        return $this->$hasTruckbed;
    }
}