<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container">
    <h2>Edit User</h2>
    <form action="index.php?url=update" method="POST">
    <!-- <input type="hidden" name="_method" value="PUT"> -->
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <?php include __DIR__ . '/form.php'; ?>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="index.php?url=users" class="btn btn-secondary">Cancel</a>
</form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>


<!-- <script>
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
</script> -->

