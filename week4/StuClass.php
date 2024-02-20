<?php
class Student
{
    public $name;
    public $age;
    public $grade;
    public function __construct($name, $age, $grade)
    {
        $this->name = $name;    
        $this->age = $age;
        $this->grade = $grade;
    }
    public function isPassing(){
        return $this->grade >= 60;
    }
}
$stu = new Student("Nenie", 19, 68);
echo "{$stu->name} is " . ($stu->isPassing() ? "passing" : "not passing");
?>