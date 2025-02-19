<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container">
    <h2>Users List</h2>
    <a href="index.php?url=create" class="btn btn-primary">Add User</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr id="row-<?= $user['id']; ?>">
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <a href="index.php?url=edit&id=<?= $user['id']; ?>" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger btn-delete" data-id="<?= $user['id']; ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // DELETE button confirmation
    document.querySelectorAll(".btn-delete").forEach(button => {
        button.addEventListener("click", function() {
            if (confirm("Are you sure you want to delete this user?")) {
                const userId = this.getAttribute("data-id");
                const form = document.createElement("form");
                form.method = "POST";
                form.action = `index.php?url=delete&id=${userId}`;
                
                const inputMethod = document.createElement("input");
                inputMethod.type = "hidden";
                inputMethod.name = "_method";
                inputMethod.value = "DELETE";
                form.appendChild(inputMethod);

                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // PUT (Update) form submission
    document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", function(event) {
            const methodInput = form.querySelector('input[name="_method"]');
            if (methodInput && methodInput.value === "PUT") {
                const userId = new URL(form.action).searchParams.get("id");
                form.action = `index.php?url=update&id=${userId}`;
            }
        });
    });
});
</script>