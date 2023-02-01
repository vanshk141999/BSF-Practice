<?php

    //oops helps in not repeating the same code and help us avoid the procedural code

    //syntax to create a class. class name is not case sensitive
    //Task class is a blueprint of what a general task might look like in real world
    class Task{
        //description is not considered a variable it is considered as a property of class Task
        //If we use public then anyone can access this property of class Task
        //we generally do not hardcode stuff in a class as this is a blueprint
        public $title;
        public $description;

        public $completed = false;

        //this is refered to as methods/methods on an object in a class not a function
        //__construct has __ means this method will be called as soon we write a new instance of class Task and it will also receive the arguements which we pass through the new instance
        public function __construct($title, $description){
            //$this is a this instance of a class which point to the class i.e. Task
            $this->title=$title;
            $this->description=$description;
        }

        public function complete(){
            $this->completed=true;
        }
    }

    // this is a new instance of class Task and in the instance we are refering to Task() OBJECT
    $task = new Task("Leaen OOPs","We will learn using PHP");
    $task->complete();

    //$task->description is the syntaxt to access objects in a class
    var_dump($task->title);
    var_dump($task->description);
    var_dump($task->completed);

    echo "<br>";

    //echo print_r($task); //here $task is an oject
?>
