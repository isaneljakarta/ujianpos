<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Data Suppliers</h5>
        <a href="?m=suppliers&s=add" class="btn btn-primary btn-sm">+ Tambah Supplier</a>
    </div>
    <div class="card-body">
        <?php if (isset($_GET['msg'])) : ?>
            <?php if ($_GET['msg'] == 'added') : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data supplier baru telah ditambahkan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($_GET['msg'] == 'updated') : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data supplier telah diperbarui.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif ($_GET['msg'] == 'deleted') : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data supplier telah dihapus.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="50" class="text-center">No</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th width="150" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'config.php';
                    $sql = "SELECT * FROM suppliers ORDER BY id DESC";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td class='text-center'>{$no}</td>
                                <td>" . htmlspecialchars($r['name'] ?? '') . "</td>
                                <td>" . htmlspecialchars($r['address'] ?? '') . "</td>
                                <td>" . htmlspecialchars($r['phone'] ?? '') . "</td>
                                <td>" . htmlspecialchars($r['email'] ?? '') . "</td>
                                <td class='text-center'>
                                    <a href='?m=suppliers&s=edit&id={$r['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='?m=suppliers&s=delete&id={$r['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin akan dihapus?\")'>Hapus</a>
                                </td>
                            </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center text-muted'>Data supplier masih kosong.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>