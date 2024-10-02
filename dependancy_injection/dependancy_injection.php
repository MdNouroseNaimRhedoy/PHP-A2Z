<?php
class Driver{
    public Vehicle $vehicle;
    public function __construct( Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }
    public function startRide(){
        $this->vehicle->start();
    }
}
class Vehicle{
    public Engine $engine;
    public function __construct(Engine $engine){
        $this->engine = $engine;
    }
    public function start(){

    }
}

class Engine{

}

$engine = new Engine();
$vehile = new Vehicle($engine);
$driver = new Driver($vehicle);
