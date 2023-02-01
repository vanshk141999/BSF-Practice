<?php

// abstract class parentClass{

// }

// $test = new parentClass(); //Fatal error: Uncaught Error: Cannot instantiate abstract class parentClass 


abstract class parentClass{
    protected $salutation = "Hello";
    protected $name;

    public function __construct($name = "no name"){
        $this->name = $name;
        return $this->name;
    }

    abstract protected function myCall();
}

class childClass extends parentClass{
    public $sal;
    public $fname;
    public function myCall(){
        // $this->var2 = $var;
        $this->sal = $this->salutation;
        $this->fname = $this->name;
        return array($this->sal, $this->fname);
    }
}

// $test = new childClass("Vansh");

echo "<pre>";
print_r((new childClass("Vansh"))->myCall());
echo "</pre>";

// echo $test->myCall();

// var_dump($test);

?>
