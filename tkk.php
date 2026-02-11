<?php
class Person {
    // Property
    protected $name;
    protected $age;
    // Methods
    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce() {
        return "Mening ismim " . $this->name . " yoshim " . $this->age . " da <br>";
    }
}
class Student extends Person {
    // New Property
    protected $grade;
    // New Method
    public function __construct($name, $age, $grade){
        parent::__construct($name , $age);
        $this->grade = $grade ;
    }
    public function study() {
    return "O'quvchi dars qilyapti!<br>";
    }
    public function introduce() {
    return "Mening ismim " . $this->name . " yoshim " . $this->age . " da " . " men " . $this->grade . "-sinf o'quvchisiman<br>";
    }
}
$person = new Student("Baxtbek",14, 8);
echo $person->introduce();
echo $person->study();
?>