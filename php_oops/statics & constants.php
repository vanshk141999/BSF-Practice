<?php

/*
* By default functions are dynamic
*/

    class Math{
        public static function add(...$nums){
            return array_sum($nums);
        }
    }

    $math = new Math();

    var_dump($math->add(4,3,2,4,1,2,3,4));

    echo Math::add(4,3,2,4,1,2,3,4); // we are accessing add method from anywhere and this will become a global function.

    

?>