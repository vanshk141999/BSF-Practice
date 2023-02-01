<?php
//Reason to use Getters and Setters is to provide little bit security

    class Person{
        public $name;
        public $age;
        //__construct was introduced in PHP5 and it is the right way to define your, well, constructors (in PHP4 you used the name of the class for a constructor). You are not required to define a constructor in your class, but if you wish to pass any parameters on object construction then you need one.

        public function __construct($name){
            $this->name=$name;
        }

        //in this behaviour could be if we want to return age in terms of days
        public function getAge(){ //getter method
            return $this->age*365;
        }
        //there could be behaviour associated setting and getting like in this case $age should be greater than 18
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
    //$john->age=15; //we cannot attach the above condition/behaviour by setting the value directly.
    $john->setAge(24);
    // var_dump($john); echo "<br>";
    var_dump($john->getAge()); echo "<br>";
    // var_dump($john->age *= 365); echo "<br>"; //this will change the orginal $age
    var_dump($john->age); echo "<br>";

?>

