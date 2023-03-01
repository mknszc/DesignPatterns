<?php

namespace DesignPatterns\Src\Structural\Decorator;

interface Booking
{
    public function calculatePrice(): int;
    
    public function getDescription(): string;
}
