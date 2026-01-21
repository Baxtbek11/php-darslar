<?php
class Telefon{
    // Property
    public $rangi;
    public $modeli;
    public $sotuv_narxi;
    // Method
    public function __construct($nomi,$sotuv_narxi,$rangi) {
        $this->nomi = $nomi;
        $this->sotuv_narxi = $sotuv_narxi;
        $this->rangi = $rangi;
    }
}
$Telefon = new Telefon("IPhone",6_000_000,"Qora");
var_dump( $Telefon);
?>