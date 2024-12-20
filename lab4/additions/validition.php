<?php
// Field	Validation Rules
// Name	  Required. + Must only contain letters and whitespace
// E-mail	Required. + Must contain a valid email address (with @ and .)
// Website	Optional. If present, it must contain a valid URL
// Comment	Optional. Multi-line input field (textarea)
// Gender	Required. Must select one

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation with Bootstrap</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/docs.css">
</head>

<body>

    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
          }
        // $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);

        echo "<div class='mt-5'>";
        echo "<h3 class='text-success'>Your Input:</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Website:</strong> $website</p>";
        echo "<p><strong>Comment:</strong> $comment</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "</div>";
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
<div class="container mt-5">
    <h2 class="mb-4 text-center">PHP Form Validation Example</h2>
<!-- %22%3E%3Cscript%3Ealert('hacked')%3C/script%3E -->
 <!-- <script>alert('hacked')</script> -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>

        <!-- Website -->
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" id="website" name="website" placeholder="Enter your website (optional)">
        </div>

        <!-- Comment -->
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Leave a comment"></textarea>
        </div>

        <!-- Gender -->
        <div class="mb-3">
            <label class="form-label">Gender</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Display User Input -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($_POST["name"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["name"]);
    //       }
    //     // $name = test_input($_POST["name"]);
    //     $email = test_input($_POST["email"]);
    //     $website = test_input($_POST["website"]);
    //     $comment = test_input($_POST["comment"]);
    //     $gender = test_input($_POST["gender"]);

    //     echo "<div class='mt-5'>";
    //     echo "<h3 class='text-success'>Your Input:</h3>";
    //     echo "<p><strong>Name:</strong> $name</p>";
    //     echo "<p><strong>Email:</strong> $email</p>";
    //     echo "<p><strong>Website:</strong> $website</p>";
    //     echo "<p><strong>Comment:</strong> $comment</p>";
    //     echo "<p><strong>Gender:</strong> $gender</p>";
    //     echo "</div>";
    // }
    ?>
</div>

</body>

</html>