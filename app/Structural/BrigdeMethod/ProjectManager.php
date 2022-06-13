<?php
namespace App\Structural\BrigdeMethod;

class ProjectManager extends Employee{

    public function __construct(string $name, int $age, float $salary)
    {
        parent::__construct($name, $age, $salary);
    }
}