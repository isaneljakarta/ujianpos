<?php
include_once 'config.php';
$id = intval($_GET['id']);
$sql = "SELECT * FROM suppliers WHERE id = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);
?>
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Edit Data Supplier</h5>
        <a href="?m=suppliers" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="?m=suppliers&s=update" method="post">
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
            <div class="mb-3">
                <label class="form-label">Nama Supplier</label>
                <input type="text" name="name" maxlength="50" class="form-control" value="<?= htmlspecialchars($r['name'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="address" maxlength="255" class="form-control" value="<?= htmlspecialchars($r['address'] ?? ''); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone" maxlength="50" class="form-control" value="<?= htmlspecialchars($r['phone'] ?? ''); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" maxlength="50" class="form-control" value="<?= htmlspecialchars($r['email'] ?? ''); ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>