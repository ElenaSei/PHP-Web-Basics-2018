<?php
    $employeesAge = [];
    $employeesSalary = [];
    $employeesPosition = [];
    while (($input = readline()) != "filter base"){
        $exploded = explode(' -> ', $input);
        $name = $exploded[0];

        if (is_numeric($exploded[1]) && ctype_digit($exploded[1])){
            if (!isset($employeesAge[$name])){
                $employeesAge[$name] = intval($exploded[1]);
            }
        } else if (is_numeric($exploded[1]) && !ctype_digit($exploded[1])){
            if (!isset($employeesSalary[$name])){
                $employeesSalary[$name] = floatval($exploded[1]);
            }
        } else{
            if (!isset($employeesPosition[$name])){
                $employeesPosition[$name] = $exploded[1];
            }
        }
    }

    $command = readline();

    if ($command == "Position"){
        foreach ($employeesPosition as $employee=>$position){
            echo "Name: $employee\n";
            echo "Position: $position\n";
            echo str_repeat("=", 20) . "\n";
        }
    } else if ($command == "Age"){
        foreach ($employeesAge as $employee=>$age){
            echo "Name: $employee\n";
            echo "Age: $age\n";
            echo str_repeat("=", 20) . "\n";
        }
    } else {
        foreach ($employeesSalary as $employee=>$salary){
            echo "Name: $employee\n";
            echo "Salary: " . sprintf("%0.2f", $salary) . "\n";
            echo str_repeat("=", 20) . "\n";
        }
    }