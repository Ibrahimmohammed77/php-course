<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC CRUD</title>
    <link rel="stylesheet" href="<?php echo $_SERVER['PHP_SELF']."../../../public/assets/css/bootstrap.min.css";?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/mvc-crud/public/index.php"> Lab10</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/mvc-crud/public/index.php?url=users">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="/mvc-crud/public/index.php?url=create">Add User</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
