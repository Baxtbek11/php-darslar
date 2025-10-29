<?php
function summa($n) {
    $summa = 0;
    for($i = 1;$i <= $n;$i++) {
        $summa += $i;
    }
    return $summa;
}
echo summa(12);
?>