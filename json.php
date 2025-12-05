<?php
// Json -> Php
$data = [
    'ism' => "Doston",
    'yosh' => 25,
    'shahar' => 'Xonqa'
];
print_r($data);
echo "<br>";
$json = json_encode($data);
echo $json;
echo "<br>";
// Php -> Json
$json = '{"ism":"Akmal","yosh":21,"shahar":"Urganch"}';
$data_object = json_decode($json);
$data_array = json_decode($json,true);
print_r($data_object);
echo "<br>";
print_r($data_array);
?>
