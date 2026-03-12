<?php

namespace OOP;

class pickupTruck extends truck {
    public function __construct(int $passengers)
    {
        $passengers = 3;
        parent::__construct($passengers);

    }
}