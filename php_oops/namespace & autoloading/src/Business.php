<?php

namespace phpOop;

class Business{
    protected $staff;

    public function __construct(Staff $staff){
        $this->staff = $staff;
    }

    public function hire(Person $person){ //this is type hinting which shows that the arguement passed to the hire method must be an object of Person class or any class that extends Person. This is a way of enforcing a type for the argument passed to the method, allowing for better code readability and reducing the chances of unexpected behavior caused by passing an incorrect type of argument. 

        //add person to staff collection
        $this->staff->add($person); //this is sending message
        //here the staff is a new instance of Staff class

    }
}

?>