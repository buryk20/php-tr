<?php

class DeliveryType
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
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

// class DeliveryType {
//     private $car;

//     public function __construct(Car $car) {
//         var_dump($car);
//         $this->car = $car;
//     }

//     public function getCarModel() {
//         return $this->car->getModel();
//     }

//     public function getCarPrice() {
//         return $this->car->getPrice();
//     }
// }

// class Car {
//     protected $model;
//     protected $price;

//     public function getModel() {
//         return $this->model;
//     }

//     public function getPrice() {
//         return $this->price;
//     }
// }

class EconomyCar extends Car {
    public function __construct() {
        var_dump($this);
        $this->model = "Economy Car";
        $this->price = 10; // Додайте реальні значення ціни
    }
}

class StandardCar extends Car {
    public function __construct() {
        $this->model = "Standard Car";
        $this->price = 20; // Додайте реальні значення ціни
    }
}

class LuxuryCar extends Car {
    public function __construct() {
        $this->model = "Luxury Car";
        $this->price = 30; // Додайте реальні значення ціни
    }
}

// Приклад використання

// Створення об'єктів різних типів таксі
$economyDelivery = new DeliveryType(new EconomyCar());
$standardDelivery = new DeliveryType(new StandardCar());
$luxuryDelivery = new DeliveryType(new LuxuryCar());

// var_dump($economyDelivery);

// Виведення моделі та ціни таксі
// echo $economyDelivery->getCarModel() . ": $" . $economyDelivery->getCarPrice() . PHP_EOL;
// echo $standardDelivery->getCarModel() . ": $" . $standardDelivery->getCarPrice() . PHP_EOL;
// echo $luxuryDelivery->getCarModel() . ": $" . $luxuryDelivery->getCarPrice() . PHP_EOL;

?>
