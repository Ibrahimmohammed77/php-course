<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form method="get" action="">
        Name: <input type="text" name="fname">
        Email: <input type="email" name="email">
        Gender Female: <input type="radio" value="j" name="gender">
        Gender Male: <input type="radio" value="0" name="gender">
        <input type="submit">
    </form>

 <?php
    if (!empty($_REQUEST['fname'])) {// true =>false 
                                     // false =>true 
        $name = $_REQUEST['fname'];
        $gender = $_REQUEST['gender'];
        echo $name."<br/>";
        echo $gender."<br/>";
    } 
    ?>

    <a href="index.php?subject=PHP&web=php.net">Test $GET</a>
</body>

</html>