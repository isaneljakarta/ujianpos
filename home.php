<?php
include_once 'config.php';

// Hitung jumlah data suppliers
$q_sup = mysqli_query($con, "SELECT COUNT(*) AS jml FROM suppliers");
$d_sup = mysqli_fetch_assoc($q_sup);
$total_suppliers = $d_sup['jml'] ?? 0;

// Hitung jumlah data sales
$q_sal = mysqli_query($con, "SELECT COUNT(*) AS jml FROM sales");
$d_sal = mysqli_fetch_assoc($q_sal);
$total_sales = $d_sal['jml'] ?? 0;
?>

<div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
    <h1 class="display-6 fw-bold">WELCOME</h1>
    <p class="col-md-8 mx-auto fs-5 text-muted mb-4">
        Silakan pilih modul manajemen di bawah ini untuk mengelola data <strong>Suppliers</strong> dan transaksi <strong>Sales</strong>.
    </p>

    <div class="row justify-content-center g-4 mt-2">
        <!-- Kartu Total Suppliers -->
        <div class="col-md-5 col-lg-4">
            <div class="card border-primary h-100 shadow-sm">
                <div class="card-body py-4">
                    <h6 class="text-uppercase text-muted fw-bold mb-2">Total Suppliers</h6>
                    <h2 class="display-4 fw-bold text-primary mb-3"><?= $total_suppliers; ?></h2>
                    <a href="?m=suppliers" class="btn btn-primary w-100">Kelola Suppliers</a>
                </div>
            </div>
        </div>

        <!-- Kartu Total Sales -->
        <div class="col-md-5 col-lg-4">
            <div class="card border-success h-100 shadow-sm">
                <div class="card-body py-4">
                    <h6 class="text-uppercase text-muted fw-bold mb-2">Total Sales</h6>
                    <h2 class="display-4 fw-bold text-success mb-3"><?= $total_sales; ?></h2>
                    <a href="?m=sales" class="btn btn-success w-100">Kelola Sales</a>
                </div>
            </div>
        </div>
    </div>
</div>