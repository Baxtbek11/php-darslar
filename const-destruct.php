<?php
class Car{
    private $model;
    public function __construct($model){
            $this ->model=$model;
    }
    public function __destruct(){
        echo "Bu destructor funksiyasi!";
    }
    public function getModel(){
      return $this->model;
    }
}
$onix = new Car("Onix");
echo $onix->getModel()."<br>";
?>