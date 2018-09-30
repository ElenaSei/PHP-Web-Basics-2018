<?php
class Department
{
    private $name;
    private $employees;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->employees = [];
    }

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }




    /**
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param array $employees
     */
    public function setEmployees(array $employees): void
    {
        $this->employees = $employees;
    }



    public function getAverageSalary(): float
    {
        $totalSalary = 0;

        foreach ($this->employees as $employee) {
            $totalSalary += $employee->getSalary();
        }
        return $totalSalary / count($this->employees);
    }
}
