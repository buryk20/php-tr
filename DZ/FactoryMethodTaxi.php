<?php

class DeliveryType
{
    private $car;

    public function __construct(Car $car) {
        $this->car = $car;
    }

    public function getCarModel() {
        return $this->car->getModel();
    }

    public function getCarPrice() {
        return $this->car->getPrice();
    }
}

class Car
{
    protected $model;
    protected $price;

    public function getModel() {

        return $this->model;
    }

    public function getPrice() {
        return $this->price;
    }
}

class EconomyCar extends Car {
    public function __construct() {
        $this->model = "Economy Car";
        $this->price = 10;
    }
}

class StandardCar extends Car {
    public function __construct() {
        $this->model = "Standard Car";
        $this->price = 20;
    }
}

class LuxuryCar extends Car {
    public function __construct() {
        $this->model = "Luxury Car";
        $this->price = 30;
    }
}

$economyDelivery = new DeliveryType(new EconomyCar());
$standardDelivery = new DeliveryType(new StandardCar());
$luxuryDelivery = new DeliveryType(new LuxuryCar());

echo $economyDelivery->getCarModel() . ": $" . $economyDelivery->getCarPrice() . PHP_EOL;
echo $standardDelivery->getCarModel() . ": $" . $standardDelivery->getCarPrice() . PHP_EOL;
echo $luxuryDelivery->getCarModel() . ": $" . $luxuryDelivery->getCarPrice() . PHP_EOL;

?>
