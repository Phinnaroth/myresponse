<?php
class Car
{
    private $brand = "Toyota";
    private $model = "Prius 2024";

    public function getInfo(){
        echo "Car information: <br/>";
        echo "Brand Name: " . $this->brand . "<br/>";
        echo "Model Name: " . $this->model . "<br/>";
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }
}

$cadtCar = new Car();
$cadtCar->getInfo();
$cadtCar->setBrand("Tesla");
$cadtCar->setModel("Y 2024");
$cadtCar->getInfo();
echo "Value of brand: " . $cadtCar->getBrand() . "<br>";
echo "Value of Model: " . $cadtCar->getModel() . "<br>";
?>