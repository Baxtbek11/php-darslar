<?php
$int = 5;
$kasr = 16.5;
$string_number = "15";
//Integer
var_dump(is_int($int)); //true
var_dump(is_int($kasr)); //false
var_dump(is_int($string_number)); //false
//Float
var_dump(is_float($int));//false
var_dump(is_float($kasr));//true
var_dump(is_float($string_number));//false
//Number
var_dump(is_numeric($int));//true
var_dump(is_numeric($kasr));//true
var_dump(is_numeric($string_number));//true
//String
var_dump(is_string(34));
//************************** */
//*Umumiy Casting */
//*string */
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
//*************** */
//*integer */
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
//****************** */
//*float*/
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
//***************** */
echo pi();
echo "\n";
echo min(5,46,6,5,23,-6,-45,12,0);
echo "\n";
echo max(5,46,6,5,23,-6,-45,12,0);
echo "\n";
echo abs(-6);
echo "\n";
echo sqrt(64);

echo "\n";
echo(round(0.60));
echo "\n";
echo(round(0.49));
echo "\n";
echo rand(1,200);
echo "\n";
?>