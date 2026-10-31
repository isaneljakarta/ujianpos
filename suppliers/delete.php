<?php
if (isset($_GET['id'])) {
    include_once 'config.php';
    $id = intval($_GET['id']);
    $sql = "DELETE FROM suppliers WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='?m=suppliers';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data supplier!'); window.location.href='?m=suppliers';</script>";
    }
}
?>