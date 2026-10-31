<?php
include_once 'config.php';
$id = intval($_GET['id']);
$sql = "SELECT * FROM sales WHERE id = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);

$suppliers = mysqli_query($con, "SELECT id, name FROM suppliers ORDER BY name ASC");
?>
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Edit Data Sales</h5>
        <a href="?m=sales" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="?m=sales&s=update" method="post">
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
            <div class="mb-3">
                <label class="form-label">Pilih Supplier</label>
                <select name="supplier_id" class="form-select" required>
                    <option value="">-- Pilih Supplier --</option>
                    <?php while ($sup = mysqli_fetch_assoc($suppliers)) : ?>
                        <option value="<?= $sup['id']; ?>" <?= ($sup['id'] == $r['supplier_id']) ? 'selected' : ''; ?>>
                            <?= htmlspecialchars($sup['name']); ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Total</label>
                <input type="number" min="0" name="total" class="form-control" value="<?= $r['total']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update Data</button>
        </form>
    </div>
</div>