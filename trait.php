<?php
trait YordamchiTrait {
    public function ikkiSonniQoshish($a,$b){
        return $a + $b;
    }
}
class User {
    use YordamchiTrait;
    public $name;
    public $age;
}
class Admin {
    use YordamchiTrait;
    public $name;
    public $age;
}
$user = new User();
$admin = new Admin();
echo $user->ikkiSonniQoshish(60, 40);
echo "<br>";
echo $admin->ikkiSonniQoshish(70 ,31);
?>