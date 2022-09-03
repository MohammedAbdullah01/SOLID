<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use App\Sold\SRP\Bus;
use App\Sold\SRP\Driver;
use App\Sold\SRP\Route;
use Illuminate\Http\Request;

class busController extends Controller
{
    public function busses()
    {
        $driver  = new Driver('Mohamed Abdullah', 25, 'moh1022545', 'Cairo');
        $bus     = new Bus();
        $route88 = new Route('Cairo' , 'Alex' , 355);
        $route99 = new Route('Alex' , 'Marse' , 600);

        $bus->setBusNumber(205);
        $bus->setBusColor('Red');
        $bus->setNumberOfPassengers(22);
        $bus->setBusMaximumSpeed(300);
        $bus->setBusDoor(2);
        $bus->setDriver($driver);
        $bus->addRoute($route88);
        $bus->addRoute($route99);
        echo $bus->move();
        // echo "<pre>";
        // dd($bus);
        // echo "</pre>";
    }
}
