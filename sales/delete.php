<?php
if (isset($_GET['id'])) {
    include_once 'config.php';
    $id = intval($_GET['id']);
    $sql = "DELETE FROM sales WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='?m=sales';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data sales!'); window.location.href='?m=sales';</script>";
    }
}
?>