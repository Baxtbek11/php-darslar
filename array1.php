<?php
// birinchi usul
$sonlar = array (5,12,35,65,42,1,"test");
// ikkinchi usul
$sonlar1 = [8,45,46,8,65,62,5,6,8,2,"test"];
$cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);
print_r($cars);
print_r($sonlar);
echo $sonlar[2];
echo "\n";
echo $sonlar[4];
$sonlar[4] =45;
echo "\n";
echo $sonlar[4];
echo "\n";
foreach($sonlar as $item){
    echo $item." ";
}
// massivga yangi qiymat qo'shish
$cars = array("Volvo", "BMW", "Toyota");
array_push($cars,"Haval");
echo "\n";
print_r($cars);
$cars[] = "BYD";
print_r($cars);
$son = [4,8,"test"];
echo $son[2];
// Associative usul
echo "\n";
$user = ["ism" => "Ali", "familiya" => "Masharipov","t_yili" => 1995];
echo $user['ism'];
?>