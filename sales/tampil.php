<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Data Sales</h5>
        <a href="?m=sales&s=add" class="btn btn-success btn-sm">+ Tambah Sales</a>
    </div>
    <div class="card-body">
        <?php if (isset($_GET['msg'])) : ?>
            <?php if ($_GET['msg'] == 'added') : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data sales baru telah ditambahkan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($_GET['msg'] == 'updated') : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data sales telah diperbarui.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($_GET['msg'] == 'deleted') : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data sales telah dihapus.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="50" class="text-center">No</th>
                        <th>Supplier</th>
                        <th>Total</th>
                        <th width="150" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'config.php';
                    $sql = "SELECT sales.id, sales.supplier_id, sales.total, suppliers.name AS supplier_name 
                            FROM sales 
                            LEFT JOIN suppliers ON sales.supplier_id = suppliers.id 
                            ORDER BY sales.id DESC";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r = mysqli_fetch_assoc($result)) {
                            $total = number_format($r['total'] ?? 0, 0, ',', '.');
                            $supplier = htmlspecialchars($r['supplier_name'] ?? '-');
                            echo "<tr>
                                <td class='text-center'>{$no}</td>
                                <td>{$supplier}</td>
                                <td>{$total}</td>
                                <td class='text-center'>
                                    <a href='?m=sales&s=edit&id={$r['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='?m=sales&s=delete&id={$r['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin akan dihapus?\")'>Hapus</a>
                                </td>
                            </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center text-muted'>Data sales masih kosong.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>