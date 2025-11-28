<?php
setcookie("ism","Sarvar",time() + 600);
if(isset($_COOKIE['ism'])){
    echo "Salom". $_COOKIE['ism'];
}else{
    echo "Cookie topilmadi";
}
?>