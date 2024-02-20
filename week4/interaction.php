<?php
class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $categoty;

    public function __construct($id, $name, $price, $categoty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->categoty = $categoty;
    }
    public function saveToDatabase()
    {
        echo "------------------------<br/>";
        echo "Product's Id:".$this->id."<br>"."Product's Name:".$this->name."<br>"."Price:".$this->price."$"."<br>"."Category:".$this->categoty."<br>";
    }

}

class DiscountedProduct extends Product
{
    private $discountPercentage;
    public function __construct($id, $name, $price,$categoty, $discountPercentage){
        parent::__construct($id, $name, $price, $categoty);
        $this->discountPercentage = $discountPercentage;
    }
    public function saveToDatabase(){
        parent::saveToDatabase();
        echo "Discount:".($this->discountPercentage)."%"."<br>";
    }

}
$p1 = new Product("001","Coca","2","Drinks");
$p1->saveToDatabase();

$d1 = new DiscountedProduct("002","Pepsi","2","Drinks","30");
$d1->saveToDatabase();
?>