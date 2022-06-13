<?php
namespace App\Structural\BrigdeMethod;

use App\Structural\BrigdeMethod\Converter;
use App\Structural\BrigdeMethod\Employee;

class ArrayConverter implements Converter{

    public function getEmployeeFormated(Employee $employee){

        return [
            'name' => $employee->getName(),
            'age' => $employee->getAge(),
            'salary' => $employee->getSalary(),
        ];

    }
}