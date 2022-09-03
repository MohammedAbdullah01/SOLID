<?php

namespace App\Sold\SRP;

class Bus
{
    /**
     * @var int
     */
    private $busNumber;

    /**
     * @var int
     */
    private $numberOfPassengers;

    /**
     * @var string
     */
    private $busColor;

    /**
     * @var int
     */
    private $busMaximumSpeed;

    /**
     * @var int
     */
    private $busDoor;


    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var array
     */
    private $route;


    /**
     * @return int
     */

    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */

    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return int
     */

    public function getNumberOfPassengers()
    {
        return $this->busNumber;
    }

    /**
     * @param int $numberOfPassengers
     */

    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return string
     */

    public function getBusColor(): string
    {
        return $this->busColor;
    }

    /**
     * @param string $busColor
     */

    public function setBusColor(string $busColor): void
    {
        $this->busColor = $busColor;
    }

    /**
     * @return int
     */

    public function getBusMaximumSpeed(): int
    {
        return $this->busMaximumSpeed;
    }

    /**
     * @param int  $busMaximumSpeed
     */

    public function setBusMaximumSpeed(int $busMaximumSpeed): void
    {
        $this->busMaximumSpeed = $busMaximumSpeed;
    }

    /**
     * @return int
     */

    public function getBusDoor()
    {
        return $this->busDoor;
    }

    /**
     * @param int $busDoor
     */

    public function setBusDoor($busDoor): void
    {
        $this->busDoor = $busDoor;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoute(): array
    {
        return $this->route;
    }

    /**
     * @param Route $route
     */
    public function addRoute(Route $route): void
    {
        $this->route[] = $route;
    }

/**
 * @return string
 */
    public function move(): string
    {
        $output = '';
        foreach ($this->getRoute() as $route)
        {
            $output .= '<p> - I am Moving Now ' . $route->getSource() . ' To ' . $route->getDestination() . '</p>
            at a Maximum Speed Of ' . $this->getBusMaximumSpeed() .
                ' K / M<p> The Distance Is ' . $route->getdistance()  . ' K / M The Deiver Is : ' . $this->getDriver()->getDriverName() . '</p>';
        }
        return $output;
    }
}
