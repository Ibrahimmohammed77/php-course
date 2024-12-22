<?php include "db.php";?>
<?php include_once "db.php";?>
<?php require "db.php";?>
<?php require_once "db.php";?><!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/docs.css">
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="name"  class="form-control" id="inputName" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email"  class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password"  class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <label for="inputPhone">Phone</label>
                    <input type="text"  class="form-control" id="inputPhone">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputState">gender</label>
                    <select id="inputState"  class="form-control">
                        <option selected>Choose...</option>
                        <option value="0">male</option>
                        <option value="1">female</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary">Sign up</button>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
</body>

</html>