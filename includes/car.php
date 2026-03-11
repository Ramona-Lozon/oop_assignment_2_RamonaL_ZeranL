<?php

namespace OOP;

class car extends vehicle
{
    protected bool $canCommute;

    public function __construct(string $type, int $wheels)
    {
        $wheels = 4;
        $this->canCommute = true;
        parent::__construct($type, $wheels);

    }

    public function getDefinition(): bool
    {
        return $this->$canCommute;
    }
}