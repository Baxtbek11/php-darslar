<?php
include 'User/User.php';
include 'Admin/User.php';
include 'Admin/Car.php';

use Admin\Car\Car;
use Admin\User\User as AdminUser;
use User\User\User as UserUser;


$user = new AdminUser();
echo $user->info();

$admin = new UserUser();
echo $admin->info();

$car = new Car();
echo $car->info();
?>