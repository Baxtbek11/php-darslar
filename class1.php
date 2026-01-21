<?php
class Mahsulotlar{
    public $nomi;
    public $kirim_narxi;
    public $sotuv_narxi;
    public $soni;

    public function __construct($nomi,$kirim_narxi,$soni) {
        $this->nomi = $nomi;
        $this->kirim_narxi = $kirim_narxi;
    }
    public function setsoni($soni){
        $this->soni = $soni;
    }
    public function getsoni(){
         return $this->soni;
    }
    public function info(){
        echo "Bu mahsulotlar classi!";
    }
}
$snikers = new Mahsulotlar("Snikers",9000);
// $snikers->nomi = "Snikers";
// $snikers->kirim_narxi = 8000;
$snikers->sotuv_narxi = 10000;
var_dump($snikers);
 echo $snikers->getsoni()."<br>";
echo $snikers->info();
echo $snikers->nomi
?>