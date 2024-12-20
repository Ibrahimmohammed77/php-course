<?php
// Constants
define("PI", 3.14);
// echo PI.'<br/>';
$x = 4;
// Anonymous Functions
$sum = function ($y) use($x) {
    return $y+$x;
};
// echo $sum(4)."<br/>";

// Arrow Functions
// $sumNum=fn($y) =>$x+$y;
// echo $sumNum(5);
// PHP Global Variables - Superglobals

// The PHP superglobal variables are:

// $GLOBALS

// $_SERVER

// beautifyServerInfo($_SERVER);
// echo $_SERVER['MYSQL_HOME'].'<br>';

//$_REQUEST
$name=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
echo $name."<br/>";
echo $email."<br/>";
echo $gender."<br/>";
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION




// Beautify and display the $_SERVER array
function beautifyServerInfo($serverData)
{
    echo '<style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            table { border-collapse: collapse; width: 100%; }
            th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
            th { background-color: #f4f4f4; font-weight: bold; }
            tr:nth-child(even) { background-color: #f9f9f9; }
            tr:hover { background-color: #f1f1f1; }
          </style>';
    echo '<h2>Server Information</h2>';
    echo '<table>';
    echo '<tr><th>Key</th><th>Value</th></tr>';

    foreach ($serverData as $key => $value) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($key) . '</td>';
        echo '<td>' . htmlspecialchars(is_array($value) ? json_encode($value, JSON_PRETTY_PRINT) : $value) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
