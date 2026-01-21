<?php
class Car{
    private $model;
    protected $yili;

    public function __construct($model,$yili){
            $this ->model=$model;
            $this ->yili=$yili;
    }
    public function __destruct(){
        echo "Bu destructor funksiyasi!"."<br>";
    }
    public function getModel(){
      return $this->model."<br>";
    }
    public function info(){
      return "Bu benzinda yuradigan avtomobil!<br>";
    }
}
$onix = new Car("Onix",2024);
echo $onix->getModel()."<br>";

class Ecar extends Car{
    public $color;
    public function info(){
        return "Bu elektrda yuradigan avtomobil!"."<br>";
    }
    public function getYili(){
        return $this->yili;
    }
}
$ecar = new Ecar("BYD",2025);
echo $ecar->getModel();
echo $ecar->info();
echo $ecar->getYili();
?>