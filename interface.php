<?php
interface CarInterface{
    public function haydash();
    public function tormizlash();

}

class Car implements CarInterface {
    public function haydash() {
        return "haydash";
    }
    public function tormizlash() {
        return "tormizlash";
    }
    
}
?>