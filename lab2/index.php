<?php

declare(strict_types=1);
$name = "Ali"; // String
$Lname='Al'; // String
$age = 25; // Integer
$price = 19.99; // Float
$isAvailable = true; // Boolean
// Add to Array
array_push() 

printA(strlen($name));
// Create a PHP Constant define("name",value)  , const value=value
function HIL(...$x){
    return $x+=$x;
}
// printA(HIL(5,8,8));
var_dump(HIL(6,6,9));
// functions Create a Function
// function createBasic($name){
//     return 'Basic '.$name.' <br/>';
// }
// echo createBasic("Ahmed");
// PHP Function Arguments

// PHP Functions - Returning values


// // Passing Arguments by Reference (&) and Passing By Value
// $two=2;
// function addFive(&$value){
//     return $value+=5;
// }
// addFive($two);
// echo $two;

function sumSalma(...$x){
  return $x;
}
 var_dump(sumSalma(1,2));
// // The variadic function 
  //Vardic
//   function sumMyNumbers(...$x) {
//     $n = 0;
//     $len = count($x);
//     for($i = 0; $i < $len; $i++) {
//       $n += $x[$i];
//     }
//     return $n;
//   }
//   sumMyNumbers(8,8,9,0);
// // PHP is a Loosely Typed Language  
// function loosely(string $number):string{
//     return $number;
// }
// loosely(number: "1");
// function sum(int $c,int $r):void{
//     echo "<br/>".$c+$r;
// }
// function namesStudent(string $name1,string $name2):string{
//     return $name1.$name2;
// }
// namesStudent(3,4);
// // PHP Return Type Declarations 

function printA($value){
    echo "<br/>".$value."<br/>";
}


// if Statment
if(true){
    echo "Statment";
}
// f
$strName=" GH ";
printA(strlen($strName));
// printA()








// function printA($v){
//     echo "<br/>".$v."<br />";
// }
// if statment

// swu


// // Double or Single Quotes?

$str=" Ahmed Shutdown ";
// printA(str_replace("Shutdown","Shawki",$str));
// printA($str);
// // String Length  strlen()
// echo strlen(trim($str))."rrr";
// // Word Count => str_word_count();
// printA(str_word_count($str));
// // Search For Text Within a String strpos("Hello world!", "world")
// printA(strpos($str,"Moh"));
// // Upper Case => strtoupper()  , lower Case => strtolower()
//     printA(strtoupper($str));
// // Replace String  The PHP str_replace() =>three arguments fris the word change ,new word ,THE String
//     printA(str_replace("Moh","Mohammed",$str));
//     str_replace("Moh","Mohammed",$str);
//    printA($str);
// // Remove Whitespace trim()
// printA($str);

// // String Concatenation  .

// // Slicing substr(string,start,number of characters)


// // Escape Characters \" \" 
// echo "Hello, world In \"PHP\"";

// // Convert String into Array The PHP explode() function splits a string into an array.
// // printA(explode(",",$str));\
// $car=" Toyota BMW Due";
// $cars=explode(" ",$str);
// print_r($cars);
// // $x = "Hello,World!";
// // $y = explode(",", $x);

// //Use the print_r() or var_dump() function to display the result:
// // var_dump($y);