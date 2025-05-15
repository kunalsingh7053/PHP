<?php
//class and obj
 class Car{
    public function model()
    {
        return "BMW";
    }
}
$c = new Car();
echo $c->model();
//inheritance
class Animal{
    public function sound()
    {
        echo "Animal Make Sound";
    }
}
class Dog extends Animal{
    public function sound(){
        echo "<br>"."dog barks" ."<br>";
    }
}
$dog = new Dog();
$dog->sound();
//inheritance without override


class Cat extends Animal {
    public function sound() {
        echo "Cat meows and ";
        parent::sound();  // Access parent method
    }
}

$cat = new Cat();
$cat->sound();  // Output: Cat meows and Animals make sound
//constructor
class Myclass{
    public function _construct()
    {
        echo"constructor called";
    }
}
$myobj = new Myclass();// Constructor runs automatically
?>