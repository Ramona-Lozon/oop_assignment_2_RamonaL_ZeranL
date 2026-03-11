<?php

namespace OOP;

class vehicle{
    protected string $type;
    protected int $wheels;
    public function __construct(string $type, int $wheels){
        $this->type = $type;
        $this->wheels = $wheels;
    }

    public function getType(): string {
        return $this->type;
    }
    public function getWheels(): int {
        return $this->wheels;
    }
}