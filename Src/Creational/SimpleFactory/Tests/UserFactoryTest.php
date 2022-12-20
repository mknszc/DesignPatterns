<?php

namespace DesignPatterns\Src\Creational\SimpleFactory\Tests;

use DesignPatterns\Src\Creational\SimpleFactory\Professor;
use DesignPatterns\Src\Creational\SimpleFactory\Student;
use DesignPatterns\Src\Creational\SimpleFactory\UserFactory;
use PHPUnit\Framework\TestCase;

class UserFactoryTest extends TestCase
{
    public function testCanCreateStudent()
    {
        $user = new UserFactory();
        $student = $user->buildStudent();
        $this->assertInstanceOf(Student::class, $student);
    }

    public function testCanCreateProfessor()
    {
        $user = new UserFactory();
        $professor = $user->buildProfessor();
        $this->assertInstanceOf(Professor::class, $professor);
    }

    public function testCreateStudentReturnType()
    {
        $student = (new UserFactory())->buildStudent();
        $result  = $student->create(['test']);
        $this->assertIsBool($result);
    }

    public function testCreateProfessorReturnType()
    {
        $professor = (new UserFactory())->buildProfessor();
        $result  = $professor->create(['test']);
        $this->assertIsBool($result);
    }
}
