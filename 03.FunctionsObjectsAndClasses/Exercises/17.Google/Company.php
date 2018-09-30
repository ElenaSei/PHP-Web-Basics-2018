<?php
class Company
{
    private $companyName;
    private $department;
    private $salary;

    public function __construct($companyName, $department, $salary)
    {
        $this->setCompanyName($companyName);
        $this->setDepartment($department);
        $this->setSalary($salary);
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department): void
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return number_format($this->salary, 2, '.', '');
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }


}