<?php
$host = 'localhost';
$user = 'root';
$pass = 'tkjtkj';
$db   = 'ujianpos';

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


mysqli_query($con, "CREATE TABLE IF NOT EXISTS suppliers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NULL,
    address VARCHAR(255) NULL,
    phone VARCHAR(50) NULL,
    email VARCHAR(50) NULL
)");


mysqli_query($con, "CREATE TABLE IF NOT EXISTS sales (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    supplier_id INT UNSIGNED NOT NULL,
    total INT UNSIGNED NULL
)");


try {
    mysqli_query($con, "ALTER TABLE sales DROP FOREIGN KEY sup");
    mysqli_query($con, "ALTER TABLE sales ADD CONSTRAINT fk_suppliers FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE CASCADE ON UPDATE CASCADE");
} catch (Exception $e) {
}
?>