<?php 
require_once "db.php"; 
// include_once "db.php"; 
// include "db.php"; 
// require "db.php"; 

$name = $email = $password = $gender = $phone = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $password = htmlspecialchars(trim($_POST['password']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $query = "INSERT INTO USERS 
    (name,password,email,gender,phone)
    values(:name,:password,:email,:gender,:phone)";
    $add = $conn->prepare($query);
    $add->execute([
        'name' => $name,
        'email' => $email,
        'gender' => $gender,
        'phone'=>$phone,
        'password' => $password
    ]);
    echo "<script>alert('success')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/docs.css">
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="name" name="name" class="form-control" id="inputName" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <label for="inputPhone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="inputPhone">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputState">gender</label>
                    <select id="inputState" name="gender" class="form-control">
                        <option selected>Choose...</option>
                        <option value="0">male</option>
                        <option value="1">female</option>
                    </select>
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div> -->
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
</body>

</html>