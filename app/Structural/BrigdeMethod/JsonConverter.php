<?php
namespace App\Structural\BrigdeMethod;

use App\Structural\BrigdeMethod\Converter;
use App\Structural\BrigdeMethod\Employee;

class JsonConverter implements Converter{

    public function getEmployeeFormated(Employee $employee){
        return json_encode([
            'name' => $employee->getName(),
            'age' => $employee->getAge(),
            'salary' => $employee->getSalary(),
        ]);
    }
}