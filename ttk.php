<?php
class House {
    // Property
    public $address;
    public $rooms;
    // Method
    public function __construct($address,$rooms) {
        $this->address = $address;
        $this->rooms = $rooms;
    }
    public function openDoor(){
     return "Uy eshigi ochildi!<br>";
    }
        public function getInfo(){
     return $this->address . "da joylashgan<br>" .$this->rooms . " Xonali uy<br>";
    }
}
class Apartment extends House {
    public $floor;
    public function getType(){
        return "Bu kvartira";
    }
}
$house = new Apartment("xonqa obod maxallasi", 3);
echo $house->openDoor();
echo $house->getInfo();
echo $house->getType();
?>