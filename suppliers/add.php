<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Tambah Data Supplier</h5>
        <a href="?m=suppliers" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="?m=suppliers&s=save" method="post">
            <div class="mb-3">
                <label class="form-label">Nama Supplier</label>
                <input type="text" name="name" maxlength="50" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="address" maxlength="255" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone" maxlength="50" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" maxlength="50" class="form-control">
            </div>
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
</div>