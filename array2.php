<?php
$users = [
    ["ism" => "Ali", "familiya" => "Masharipov","t_yili" => 1986],
    ["ism" => "Odilbek", "familiya" => "Karimov","t_yili" => 1996],
    ["ism" => "Bekzod", "familiya" => "Ozodov","t_yili" => 1998],
];
$son = [[3,6,5,[2,8,56]],6,4,8];
print_r($users);
echo $users [1] ['ism'];
echo "\n";
foreach( $users as $item){
    echo $item['ism']. " , ";
}
?>