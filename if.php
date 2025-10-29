<?php
// $yosh = 19;
// if ($yosh > 18 ) {
//     echo "Siz voyaga yetgansiz";
// }
// if ($yosh < 18 ) {
//     echo "Siz voyaga yetmagansiz!";
// };
// if ($yosh > 18) {
//     echo "Siz voyaga yetgansiz";
// } else{
//     echo "Siz voyaga yetmagansiz!";
// }
// $ball = 90;
// if ($ball >= 90) {
//     echo"A'lo";
// } 
// $ball = 75;
// if ($ball <= 90) {
//     echo"Yaxshi";
// } 
// $ball = 50;
// if ( $ball <=50) {
//     echo "Siz o'qishdan chetlashtirildingiz";
// }

$ball = 75;
if ($ball >=90) {
    echo "A'lo";
} elseif($ball >=70) {
    echo "Yaxshi";
} elseif($ball >=50) {
    echo "Qoniqarli!";
}
echo "\n";
$login = "Admin";
$parol = "123456";
if($login = "Admin" && $parol = "12345") {
    echo "Xush kelibsiz";
} else{
    echo "Login yoki parol xato";
}