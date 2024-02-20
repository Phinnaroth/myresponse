<?php
class Dog{
    public $name;
    public $age;

    
    public  function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function bark(){
        return"Woof!!!!!";
    }
    
    
}
$d1 = new Dog("dudu",4);
echo "Dog's name:{$d1->name} Dog's age:{$d1->age} Dog's bark:{$d1->bark()}";
