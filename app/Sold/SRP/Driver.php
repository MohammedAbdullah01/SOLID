<?php

namespace App\Sold\SRP;


class Driver
{
    private $name;
    private $age;
    private $insuranceNumber;
    private $address;

    public function __construct(string $name, int $age, string $insuranceNumber, string $address)
    {
        $this->setDriverName($name);
        $this->setDriverAge($age);
        $this->setDriverInsuranceNumber($insuranceNumber);
        $this->setDriverAddress($address);
    }

    /**
     * @return string
     */
    public function getDriverName(): string
    {
        return $this->name;
    }


    /**
     *@param string $name
     */
    public function setDriverName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getDriverAge(): int
    {
        return $this->age;
    }


    /**
     * @param int $age
     */
    public function setDriverAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getDriverInsuranceNumber(): string
    {
        return $this->insuranceNumber;
    }

    /**
     * @param string $insuranceNumber
     */
    public function setDriverInsuranceNumber(string $insuranceNumber): void
    {
        $this->insuranceNumber = $insuranceNumber;
    }

    /**
     * @return string
     */
    public function getDriverAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setDriverAddress(string $address): void
    {
        $this->address = $address;
    }
}
