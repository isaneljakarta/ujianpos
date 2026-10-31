<?php
$s = isset($_GET['s']) ?$_GET['s'] : 'tampil';
switch ($s) {
    case 'tampil':
    default:
        include 'suppliers/tampil.php';
        break;
    case 'add':
        include 'suppliers/add.php';
        break;
    case 'save':
        include 'suppliers/save.php';
        break;
    case 'edit':
        include 'suppliers/edit.php';
        break;
    case 'update':
        include 'suppliers/update.php';
        break;
    case 'delete':
        include 'suppliers/delete.php';
        break;
}
?>