<?php
class Car
{
    public $make;
    public $model;
    public $year;
    public function __construct($make, $model, $year)   
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function getDetails()
    {
        return "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}";
    }
}
$car1 = new Car("Ford", "Ranger", 2016);
echo $car1->getDetails();
?>