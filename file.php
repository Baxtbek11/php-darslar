<?php
$file = fopen("test.txt","r");
$content = fread($file,filesize("test.txt"));
fclose($file);
echo $content. "<br>";
//Faylga ma'lumot yozish
$file = fopen("data.txt","w");
fwrite($file,"Ma'lumot data.txt fayliga yozildi");
fclose($file);
echo " Faylga ma'lumot yozildi";
//Faylga ma'lumot qo'shish
$file = fopen("data.txt","a");
fwrite($file,"\nYangi ma'lumot qo'shish");
fclose($file);
echo " Yangi ma'lumot qo'shish";
// Faylni mavjudligini aniqlash
if(file_exists('test.txt')){
    echo "Fayl mavjud";
    unlink("test.txt");
    echo "Fayl o'chirildi <br>";
} else(
    echo` "Fayl mavjud emas!";
)
?>