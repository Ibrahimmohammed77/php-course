<?php
define("PI", 3.14);
echo PI;

// Arrow Functions
$y = 1;
$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));

// Anonymous function
$greet = function ($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
// PHP Global Variables - Superglobals

// The PHP superglobal variables are:

// $GLOBALS
$x = 75;

function myfunction()
{
    echo $GLOBALS['x'];
      global $x;
    //   echo $x;
    }

myfunction();

// $_SERVER
// var_dump($_SERVER);
echo "<br/>";
echo $_SERVER['PHP_SELF'];
echo "<br/>";
// $_SERVER['SERVER_ADDR'];
$_SERVER['LOCAL_ADDR'];
echo "<br/>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";


// $_REQUEST
$name = $_REQUEST['fname'];
echo $name;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

// echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];

// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION