<?php
// PHP Form Handling
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
    <title>PHP Form Handling</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/docs.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Contact Form</h1>
        <form action="handle_form.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/docs.min.js"></script> -->
</body>

</html>