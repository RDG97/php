<?php
class Car {
    public function __construct(
        public string $name,
        public float $weight,
        public int|float $height
    ) {
    }
}

$cars = [
    new Car(name: "Volvo", weight: 22, height: 18),
    new Car(name: "BMW", weight: 15, height: 13.5),
    new Car(name: "Saab", weight: 5, height: 2),
    new Car(name: "Land Rover", weight: 17, height: 15)
];
?>