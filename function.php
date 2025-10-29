<?php
// function Hello() {
//     echo "Hello world! ";
// }
// Hello();
// Hello();
// Hello();
// Hello();
// Hello();
function yigindi(){
    $summa = 0;
    for($i = 1;$i <=10; $i++) {
        $summa += $i;
    }
    echo "Yig'indi: $summa";
}
yigindi();
echo "\n";
function ikkisonniqoshish($birinchi_son,$ikkinchi_son) {
    echo $birinchi_son+$ikkinchi_son;
}
ikkisonniqoshish(43,51);
echo "\n";
function yoshniAniqlash($b_year,$year = 2024) {
    echo "Siz".$year - $b_year."yoshdasiz.";

    echo "Siz voyaga yetmagansiz!";
} else{
    echo "Siz voyaga yetkansiz";
}
?>