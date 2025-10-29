<?php
 $day = "Yakshanba";

 switch($day) {
    case "Dushanba":
        echo "Bugun hafta kunining birinchi kuni,ish kuni";
        break;
        case "Seshanba":
        echo "Ikkinchi kun,Ish kuni";
        break;
        case "Chorshaba":
        echo "Uchinchi kun,Ish kuni";
        break;
        case "Payshanba":
        echo "To'rtinchi kun,Ish kuni";
        break;
        case "Juma":
        echo "Beshinchi kun,Ish kuni";
        break;
        case "Shanba":
        echo "Oltinchi kun,Ish kuni";
        break;
        case "Yakshanba":
        echo "Dam olish kuni";
        break;
        default:
        echo "Bunday hafta kuni yoq!";
        break;
 }
        // switch($day) {
        // case "Dushanba":
        // case "Seshanba":
        //     echo "Ish kuni";
        // case "Shanba":
        // case "Yakshanba":
        //     echo "Bugun dam olish kuni";
        //     break;
        //     default:
        // echo "Bunday hafta kuni mavjud emas!";
        // }
?>