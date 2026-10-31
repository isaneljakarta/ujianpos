<?php
if (isset($_POST['simpan'])) {
    include_once 'config.php';
    $name    = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone   = mysqli_real_escape_string($con, $_POST['phone']);
    $email   = mysqli_real_escape_string($con, $_POST['email']);

    $sql = "INSERT INTO suppliers (name, address, phone, email) VALUES ('$name', '$address', '$phone', '$email')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='?m=suppliers';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data supplier!'); window.location.href='?m=suppliers&s=add';</script>";
    }
}
?>