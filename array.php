<?php
$i = 1;
while ($i <= 5) {
    echo $i. " , ";
    $i++;
}
echo "\n";
$x = 5;
while($x <=100){
    echo $x. " , ";
    if($x == 40) {
        break;
    }
    $x +=5;
}
echo "\n";
$i = 0;
while ($i < 10) {
    $i++;
    if($i == 3) continue;
    echo $i. " , ";
}
echo "\n";
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
echo "\n";
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);
echo "\n";
echo "\n";
for($i = 1; $i <= 15;$i++) {
  echo $i. " , ";
}  
for($i = 1; $i <= 15; $i+=2) {
  echo $i. " , ";
}  
?>