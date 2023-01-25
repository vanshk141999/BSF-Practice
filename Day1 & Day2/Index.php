<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
  <div class="flex items-center justify-center h-[100vh]">
  <?php

//First Steps
    // echo "<div class="."text-8xl".">Hello"." World</div>";

//Data Types in PHP
    // $var1 = 10;
    // echo $var1;
    // echo "<br>";

    // $var2 = "Hello world"; //string
    // $var3 = "  I am PHP program"; //string
    // // echo "{$var2} World"; //Curly braces makes the code clear
    // // echo "<br>";

    // //string functions
    // echo strtolower($var2);echo "<br>";
    // echo strtoupper($var2);echo "<br>";
    // echo ucfirst($var2);echo "<br>";
    // echo ucwords($var2);echo "<br>";
    // echo strlen($var2);echo "<br>"; //counts space also
    // echo $var2.trim($var3);echo "<br>";
    // echo strstr($var2, "do");echo "<br>";

    // //Numbers
    // $num1 = 3;
    // $num2 = 4;
    // echo ((1+2+$num1)*$num2)/2-5;echo "<br>";

    // //arrays
    // $arr = array(14,4,"VK",55,46);echo "<br>";

    // //associative array
    // $arr2 = array("First_Name"=>"Vansh","Last Name"=>"Kapoor");
    // echo $arr2["Last Name"];echo "<br>";

    // print_r($arr2);echo "<br>";

    //Booleans and Null
    /*
    $var = 2;
    $var2 = "cat";
    $var3;

    echo isset($var2);
    unset($var2);
    ?>
    <br>
    New $var2: <?php echo isset($var2);
    */

    //typecasting
    // $var1 = "2 sheeps";
    // $var2 = $var1 + 3;
    // echo $var2;

    // settype($var2, "string");echo "<br>";
    // echo gettype($var2);echo "<br>";
    // echo is_int($var2); //false
    // echo is_string($var2); //false

    //Constants
    // define("PI", 3.14); //defined only on this page
    // echo PI;

    //Conditional Statements
    //if and switch case

    //Loops
    // $count = 1;
    //while loop
    // while($count <=10){
    //   echo $count;echo "<br>";
    //   $count++;
    // }

    //for loop
    // for($count2=1;$count2<=10;$count2++){
    //   echo $count2;echo "<br>";
    // }

    //foreach loop
    // $arr = array(1,2,3,4,5);
    // foreach($arr as $value){
    //   echo $value += 2;echo "<br>";
    // }

    //Continue skips the value for the value it is true
    //Break Skips and Stops the loop for the value it is true

    //Array Pointers
    // $ages = array(4,23,54,57);
    // $len = count($ages);
    // $i = 1;
    // // echo $len;echo "<br>";
    // while($age = current($ages)){
    //   // echo $i;echo "<br>";
    //   // $temp_curr = current($ages);
    //   if($i == $len){
    //     echo $age;
    //     break;
    //   }
    //   echo $age.", ";echo "<br>";
    //   next($ages);
    //   $i++;
    // }
  
    //Functions
    // function sum($num1, $num2){
    //   return $num1 + $num2;
    // }

    // echo sum(2,4);

    // //we can set default values of arguements
    // function paint($color = "red"){
    //   echo "Color of the room is {$color}";
    // }
    // paint("blue"); //if we pass something in then it will use the passed value


    //Debugging in PHP
    $color = "red";
    // var_dump($color); //in string it also displays the length - string(3) "red"
    $arr = get_defined_vars();

    ?><pre><?php print_r($arr); ?></pre>
  
  </div>
</body>
</html>

<pre>
  <?php 
  // rsort($arr); print_r($arr);
  ?>
</pre>