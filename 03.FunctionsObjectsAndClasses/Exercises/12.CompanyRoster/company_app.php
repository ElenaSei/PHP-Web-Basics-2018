<?php
require "Employee.php";
require "Department.php";

$departments = [];

$n = intval(readline());
while ($n-- > 0) {
    $input = explode(" ", readline());

    $name = $input[0];
    $salary = floatval($input[1]);
    $position = $input[2];
    $departmentName = $input[3];

    $employee = null;
    $department = null;

    if (count($input) == 4) {
        $employee = new Employee($name, $salary, $position, $departmentName);
    } elseif (count($input) == 5) {
        if (is_numeric($input[4])) {
            $employee = new Employee($name, $salary, $position, $departmentName, "n/a", intval($input[4]));
        } else {
            $employee = new Employee($name, $salary, $position, $departmentName, $input[4]);
        }
    } else {
        $employee = new Employee($name, $salary, $position, $departmentName, $input[4], intval($input[5]));
    }

    if (!array_key_exists($departmentName, $departments)) {
        $department = new Department($departmentName);
        $departments[$departmentName] = $department;
    }

    $departments[$departmentName]->addEmployee($employee);
}


if(count($departments) > 0){

    usort($departments, function(Department $d1, Department $d2) {
        return $d2->getAverageSalary() <=> $d1->getAverageSalary();
    });

    $maxAverageDepartment = $departments[0]->getEmployees();
    usort($maxAverageDepartment, function (Employee $e1, Employee $e2) {
        return $e2->getSalary() <=> $e1->getSalary();
    });

    $departmentName = $departments[0]->getName();
    echo "Highest Average Salary: {$departmentName}\n";
    foreach($maxAverageDepartment as $department){
        echo $department;
    }


}


