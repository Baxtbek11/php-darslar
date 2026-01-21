<?php
// Class yaratish
class Car {
   private $model;
    public $color;
    public $probeg;
    public function drive() {
        echo "Mashina harakatlanyapti!";
    }
        public function getModel (){
            return $this->model;
        }
}
// Object yaratish
$bmw = new Car();
$bmw-> getModel();
$bmw-> color = "Black";
$bmw-> probeg = 0;
// Object qiymatlarini olish
print_r($bmw);
echo "<br>";
var_dump($bmw);
echo "<br>";
echo "Mashina modeli:".$bmw->getModel()."<br>";
echo "Mashina rangi:".$bmw->color."<br>";

echo "<br>";
echo "<br>";
class Mashina {
public $model;
public $color;
public $probeg;
public function drive(){
    echo "Mashina harakatlanyapti!";
}
}


$cobalt = new Car();
$cobalt-> getModel() ;
$cobalt-> color = "Black";
$cobalt-> probeg = 111;

print_r($cobalt);
echo "<br>";
var_dump($cobalt);
echo "<br>";
echo "Mashina modeli:".$cobalt->getModel()."<br>";
echo "Mashina rangi:".$cobalt->color."<br>";
?>