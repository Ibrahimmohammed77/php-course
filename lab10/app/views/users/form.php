<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required value="<?= $user['name'] ?? ''; ?>">
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required value="<?= $user['email'] ?? ''; ?>">
</div>