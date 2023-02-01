<?php

    trait Father{
        protected $bill = "Bill";
        // protected function get_bill(){
        //     return $this->bill;
        // }
    }

    class Mother{
        protected $num = 2;
        // public function get_num_eyes(){
        //     return 2;
        // } //int(2)
        // private function get_num_eyes(){
        //     return 2;
        // } //Fatal error: Uncaught Error: Call to private method Mother::get_num_eyes() from global scope
        // protected function get_num_eyes(){
        //     return $this->num;
        // }

    }

    class Child extends Mother{ //inherits behaviour from parent class
        //we can also override the behaviour of method from the parent class
        //sub class can access the public and private methods and variables of parent class
        use Father; //for multiple inheritence we use traits
        public function myCallFather(){
           return $this->bill;
        }
        public function myCallMother(){
            return $this->num;
         }
    }

    $newObjectFather = (new Child())->myCallFather();
    $newObjectMother = (new Child())->myCallMother();
    // $value = (new Child())->value;

    echo $newObjectFather." : ".$newObjectMother;

?>