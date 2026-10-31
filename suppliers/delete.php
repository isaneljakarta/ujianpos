<?php
if (isset($_GET['id'])) {
    include_once 'config.php';
    $id = intval($_GET['id']);
    $sql = "DELETE FROM suppliers WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Data supplier berhasil dihapus!'); window.location.href='?m=suppliers&msg=deleted';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data supplier!'); window.location.href='?m=suppliers';</script>";
    }
}
?>