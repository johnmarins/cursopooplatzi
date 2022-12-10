<?php

require_once('account.php');

class Car {

    public $id = integer;
    public $license = string;
    public $driver = string;
    protected $passenger = integer;

    public function __construct($license,$driver){
	    $this->license = $license;
	    $this->driver = $driver;
    }

    public function printDataCar(){
	    echo "Licencia: $this->license Driver: ".$this->driver->name;
    }

    public function getPassenger(){
	    return $this->passenger;
    }

    public function setPassenger(){
	if(passenger == 4){
    		$this->passenger = $passenger;
	}
	else {
		echo "Necesitas asignar 4 pasajeros";
	}
    
    }

}	

?>
