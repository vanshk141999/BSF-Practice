<?php

//The meaning of Encapsulation, is to make sure that "sensitive" data is hidden from users. To achieve this, you must:
// 1. declare class variables/attributes as private
// 2. provide public get and set methods to access and update the value of a private variable

//public - can be accessed & changed by anyone outside the class
//private - can only be accessed in the same class in which it is defined
//protected - mostly same as private but we can extend this class more in inheritence.php

    class Person{
        private $name;
        private $age;


        public function __construct($name){
            $this->name=$name;
        }

        public function getAge(){ //getter method
            return $this->age*365;
        }

        public function setAge($age){ //setter method
            if($age>18){
                $this->age=$age;
            }
            else{
                throw new Exception("Person is not old enough");
            }
        }
    }

    $john = new Person("VK");
    //$john->age=15; //we cannot attach the above condition/behaviour by setting the value directly. This is the reason we use Encapsulation
    $john->setAge(24);
    var_dump($john->getAge()); echo "<br>";
    // var_dump($john->age); echo "<br>";

?>

