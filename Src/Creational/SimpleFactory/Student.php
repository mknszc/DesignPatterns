<?php

namespace DesignPatterns\Src\Creational\SimpleFactory;

class Student
{
    public function create(array $userData): bool
    {
        // Create Student
        return true;
    }
}