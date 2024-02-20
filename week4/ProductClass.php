<?php
class Product
{
    public $name;
    public $price;
    public $quantity;
    public function __construct($name, $price, $quantity){
        $this->name = $name;    
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function calculateTotal(){
        return $this->price * $this->quantity;
    }
   
}   
$p = new Product("Coca", 2, 5);
echo "Name Product:{$p->name}<br/> Price:{$p->price}<br/> Quantity:{$p->quantity}<br/> Total Price:{$p->calculateTotal()}";

?>