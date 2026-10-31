<?php
include_once 'config.php';
$suppliers = mysqli_query($con, "SELECT id, name FROM suppliers ORDER BY name ASC");
?>
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Tambah Data Sales</h5>
        <a href="?m=sales" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="?m=sales&s=save" method="post">
            <div class="mb-3">
                <label class="form-label">Pilih Supplier</label>
                <select name="supplier_id" class="form-select" required autofocus>
                    <option value="">-- Pilih Supplier --</option>
                    <?php while ($sup = mysqli_fetch_assoc($suppliers)) : ?>
                        <option value="<?= $sup['id']; ?>"><?= htmlspecialchars($sup['name']); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Total</label>
                <input type="number" min="0" name="total" class="form-control" required>
            </div>
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" name="simpan" class="btn btn-success">Simpan Data</button>
        </form>
    </div>
</div>