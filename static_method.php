<?php
class User {
    public static $name = "Ali";
    public static $count = 0;
    public $age;
    public static function info(){
      return "Bu ". self::$name . "<br>";
    }
    public static function add(){
      self::$count++;
    }
}
$user = new User();
echo $user->info();
echo $user::$name."<br>";

echo User::info();
echo User::$name;
echo User::add();
echo User::add();
echo User::$count;
?>