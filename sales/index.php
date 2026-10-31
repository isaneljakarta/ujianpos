<?php
$s = isset($_GET['s']) ? $_GET['s'] : 'tampil';
switch ($s) {
    case 'tampil':
    default:
        include 'sales/tampil.php';
        break;
    case 'add':
        include 'sales/add.php';
        break;
    case 'save':
        include 'sales/save.php';
        break;
    case 'edit':
        include 'sales/edit.php';
        break;
    case 'update':
        include 'sales/update.php';
        break;
    case 'delete':
        include 'sales/delete.php';
        break;
}
?>