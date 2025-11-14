
<?php
date_default_timezone_set("Asia/Tashkent");
echo "Xozirgi sana:" . date("Y/m/d") . "<br>";
echo "Xozirgi sana:" . date("Y.m.d") . "<br>";
echo "Xozirgi sana:" . date("Y-m-d") . "<br>";
echo "Xozirgi sana:" . date("d.m.Y") . "<br>";
echo "Xozirgi sana:" . date("d.m.y") . "<br>";
echo "Xozirgi sana:" . date("D.m.Y") . "<br>";
echo "Xozirgi sana:" . date("D.M.Y") . "<br>";
echo "Xozirgi vaqt:" . date("H:i:s") . "<br>";
echo "Xozirgi vaqt:" . date("h:i:sa") . "<br>";
echo "Xozirgi vaqt:" . date("l") . "<br>";
echo "Xozirgi sana va vaqt:" . date("H:i d.m.Y") . "<br>";
echo "Xozirgi sana va vaqt:" . date("d.m.Y H:i") . "<br>";
echo "Xozirgi sana:" . date("D.F.Y") . "<br>";
// Unix time
echo "Unix time: ". time()."<br>";
echo "Unix time: ". strtotime("2025-11-14")."<br>";
echo "Unix time:" . date("d.m.Y",strtotime("2025-11-14")) . "<br>";
echo "Unix time:" . date("d.m.Y",strtotime("+7 year")) . "<br>";
echo "Unix time:" . date("d.m.Y",time()) . "<br>";
?>