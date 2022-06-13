<?php
namespace App\Structural\BrigdeMethod;



abstract class  Employee
{
    private string $name;
    private int $age;
    private float $salary;


    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of salary
     *
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @param float $salary
     *
     * @return self
     */
    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }
}
