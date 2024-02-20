<?php
class Circle
{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}
$c = new Circle(4);
echo "Circle Area:".$c->calculateArea();

?>