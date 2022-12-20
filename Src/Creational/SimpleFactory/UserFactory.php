<?php

namespace DesignPatterns\Src\Creational\SimpleFactory;

class UserFactory
{
    public function buildStudent(): Student
    {
        return new Student();
    }

    public function buildProfessor(): Professor
    {
        return new Professor();
    }
}