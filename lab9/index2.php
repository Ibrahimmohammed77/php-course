<?php
require 'autoload.php';

use App\User;
use App\Product;

// Use the User class
$user = new User();
echo $user->getName(); // Output: John Doe

echo PHP_EOL; // Line break for better readability

// Use the Product class
$product = new Product();
echo $product->getDetails(); // Output: Product Name: Laptop, Price: $1200
