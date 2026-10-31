<?php
if (isset($_POST['simpan'])) {
    include_once 'config.php';
    $supplier_id = intval($_POST['supplier_id']);
    $total       = intval($_POST['total']);

    $sql = "INSERT INTO sales (supplier_id, total) VALUES ('$supplier_id', '$total')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='?m=sales';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data sales! Pastikan sudah memilih Supplier.'); window.location.href='?m=sales&s=add';</script>";
    }
}
?>