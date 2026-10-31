<?php
if (isset($_POST['update'])) {
    include_once 'config.php';
    $id      = intval($_POST['id']);
    $name    = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone   = mysqli_real_escape_string($con, $_POST['phone']);
    $email   = mysqli_real_escape_string($con, $_POST['email']);

    $sql = "UPDATE suppliers SET name='$name', address='$address', phone='$phone', email='$email' WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='?m=suppliers';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data supplier!'); window.location.href='?m=suppliers&s=edit&id=$id';</script>";
    }
}
?>