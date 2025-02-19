<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container">
    <h2>Create User</h2>
    <form action="index.php?url=store" method="POST">
        <?php include __DIR__ . '/form.php'; ?>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="index.php?url=users" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
