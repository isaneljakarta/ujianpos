<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Ujian POS</title>
    <link rel="icon" href="images/tkj.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/tkj.png" alt="Logo" width="32" height="32" class="me-2 rounded bg-white p-1" onerror="this.style.display='none'">
            <strong>UJIAN POS</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= (!isset($_GET['m']) || $_GET['m'] == 'home') ? 'active' : ''; ?>" href="?m=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (isset($_GET['m']) && $_GET['m'] == 'suppliers') ? 'active' : ''; ?>" href="?m=suppliers">Suppliers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (isset($_GET['m']) && $_GET['m'] == 'sales') ? 'active' : ''; ?>" href="?m=sales">Sales</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-4 flex-grow-1">
    <?php
    $m = isset($_GET['m']) ? $_GET['m'] : 'home';
    switch ($m) {
        case 'home':
        default:
            include 'home.php';
            break;
        case 'suppliers':
            include 'suppliers/index.php';
            break;
        case 'sales':
            include 'sales/index.php';
            break;
    }
    ?>
</div>

<footer class="bg-white text-center py-3 border-top mt-auto">
    <div class="container">
        <small class="text-muted">&copy; <?= date('Y'); ?> Aplikasi Ujian POS - Teknik Komputer & Jaringan</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>