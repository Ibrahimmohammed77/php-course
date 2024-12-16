<?php 

// function add_five(&$value) {
//     $value += 5;
//   }
  
//   $num = 2;
//   add_five($num);
//   echo $num;

//   //Vardic
//   function sumMyNumbers(...$x) {
//     $n = 0;
//     $len = count($x);
//     for($i = 0; $i < $len; $i++) {
//       $n += $x[$i];
//     }
//     return $n;
//   }
  
//   $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
//   echo $a;

//   function myFamily($lastname, ...$firstname) {
//     $txt = "";
//     $len = count($firstname);
//     for($i = 0; $i < $len; $i++) {
//       $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
//     }
//     return $txt;
//   }
  
//   $a = myFamily("Doe", "Jane", "John", "Joey");
//   echo $a;

// PHP is a Loosely Typed Language

//   function addNumbers(int $a, int $b) {
//     return $a + $b;
//   }
//   echo addNumbers(5, "5 days");

//   declare(strict_types=1); // strict requirement

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");


// Array
// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

// foreach ($car as $x => $y) {
//   echo "$x: $y <br>";
// }