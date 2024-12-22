<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO CRUD Operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">PDO CRUD Operations</h1>

        <?php
        // Database connection using PDO
        $host = 'localhost'; // Change to localhost if no port is specified
        $port = '3306';      // Default MySQL port; adjust if different (e.g., 3307 or 88)
        $dbname = 'test';  // Replace with your database name
        $username = 'root';  // Your database username
        $password = '';      // Your database password

        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<div class="alert alert-success">Connected to the database successfully!</div>';
        } catch (PDOException $e) {
            die('<div class="alert alert-danger">Connection failed: ' . $e->getMessage() . '</div>');
        }

        // Function to safely execute SQL with prepared statements
        function executeQuery($pdo, $query, $params = []) {
            $stmt = $pdo->prepare($query);
            $stmt->execute($params);
            return $stmt;
        }

        // CREATE Operation
        if (isset($_POST['create'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
            executeQuery($pdo, $sql, ['name' => $name, 'email' => $email]);
            echo '<div class="alert alert-success">New user created successfully!</div>';
        }

        // READ Operation
        $users = executeQuery($pdo, "SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

        // UPDATE Operation
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
            executeQuery($pdo, $sql, ['id' => $id, 'name' => $name, 'email' => $email]);
            echo '<div class="alert alert-info">User updated successfully!</div>';
        }

        // DELETE Operation
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $sql = "DELETE FROM users WHERE id = :id";
            executeQuery($pdo, $sql, ['id' => $id]);
            echo '<div class="alert alert-danger">User deleted successfully!</div>';
        }
        ?>

        <!-- User Form -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Add or Update User</div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="id" class="form-label">User ID (For Update/Delete)</label>
                        <input type="number" class="form-control" id="id" name="id" placeholder="Leave empty for new user">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" name="create" class="btn btn-success">Create</button>
                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>

        <!-- User List -->
        <h2>User List</h2>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']); ?></td>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <footer class="text-center mt-5">
        <p>© 2024 PDO CRUD Example. Created with ❤️ using PHP & Bootstrap</p>
    </footer>
</body>
</html>
