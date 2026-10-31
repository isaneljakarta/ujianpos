<?php
if (isset($_POST['update'])) {
    include_once 'config.php';
    $id          = intval($_POST['id']);
    $supplier_id = intval($_POST['supplier_id']);
    $total       = intval($_POST['total']);

    $sql = "UPDATE sales SET supplier_id='$supplier_id', total='$total' WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='?m=sales';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data sales!'); window.location.href='?m=sales&s=edit&id=$id';</script>";
    }
}
?>