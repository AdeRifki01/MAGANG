<?php
    $current = basename($_SERVER['PHP_SELF']);

    session_start();
// SESI LOGIN
    if(!isset($_SESSION['login'])){
        header("Location: /eresa/auth/login.php");
        exit;
    
    }
    $jumlahPesan = rand(5, 50);
    $jumlahView = rand(100, 1000);
    $jumlahPembayaran = rand(1, 20);
    $jumlah = 125; // Sementara Dulu

// WAKTU TARUH DI SINI waktu.php
    //require '../../auth/waktu.php'; // sesuaikan path!
    require $_SERVER['DOCUMENT_ROOT'] . '/eresa/auth/waktu.php';
    $waktu = getWaktu();
    
    $current = basename($_SERVER['PHP_SELF']);
    $isTransaksi = in_array($current, ['booking.php', 'riwayat.php']);
    $isGallery = in_array($current, ['index.php','portofolio.php']);

    //$isTransaksi = strpos($_SERVER['REQUEST_URI'], 'transaksi') !== false;
    //$isGallery = strpos($_SERVER['REQUEST_URI'], 'gallery') !== false;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="/eresa/asset/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div class="container-fluid">
        <div class="row">

<!-- SIDEBAR -->
            <div class="col-md-2 bg-dark text-white vh-100 p-3 d-flex flex-column">
                <div class="d-flex align-items-center pt-2">
                    <img src="/eresa/asset/img/eresa/Logo_putih.png"
                        style="width:32px; height:32px; object-fit:contain; margin-right:10px;" alt="Logo">
                    <h5 class="fw-bold mb-0 d-flex align-items-center" style="height:32px;">
                        Eresa Admin
                    </h5>
                </div>
                
                <ul class="nav flex-column pt-2">
                    <hr class="mt-2 mb-2 border">
                    <li class="nav-item mb-2"> <!-- Dasboard -->
                        <a href="/eresa/admin/dashboard.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/dashboard.png" style="width:20px; margin-right:10px;">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2"> <!-- Data Contact -->
                        <a href="/eresa/admin/data_contact.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/contact.png" style="width:20px; margin-right:10px;">
                            Data Contact
                        </a>
                    </li>
                    <li class="nav-item mb-2"> <!-- Paket -->
                        <a href="/eresa/admin/paket.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/paket.png" style="width:20px; margin-right:10px;">
                            Paket
                        </a>
                    </li>

                    <!-- TRANSAKSI DROPDOWN -->
                    <li class="nav-item mb-2">
                        <!-- BUTTON -->
                        <button class="nav-link text-white d-flex justify-content-between align-items-center w-100 border-0 bg-transparent"
                                type="button" data-bs-toggle="collapse" data-bs-target="#transaksiMenu" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="/eresa/asset/img/icon/payment.png"
                                    style="width:20px; margin-right:10px;">
                                Transaksi
                            </div>
                            <i class="bi bi-chevron-down transition-icon"></i>
                        </button>
                        <!-- SUB MENU -->
                        <div class="collapse ms-4 <?= $isTransaksi ? 'show' : '' ?>" id="transaksiMenu">
                            <a href="/eresa/admin/transaksi/booking.php" class="nav-link text-white <?= $current == 'booking.php' ? 'fw-bold text-info' : '' ?>">
                                📌 Booking
                            </a>
                            <a href="/eresa/admin/transaksi/riwayat.php" class="nav-link text-white <?= $current == 'riwayat.php' ? 'fw-bold text-info' : '' ?>">
                                🧾 Report
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mb-2"> <!-- Project -->
                        <a href="/eresa/admin/project.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/project.png" style="width:20px; margin-right:10px;">
                            Project
                        </a>
                    </li>
                    <hr class="mt-0 mb-2 border">
                    <!-- GALLERY DROPDOWN -->
                    <li class="nav-item mb-2">
                        <!-- BUTTON -->
                        <button class="nav-link text-white d-flex justify-content-between align-items-center w-100 border-0 bg-transparent"
                            type="button" data-bs-toggle="collapse" data-bs-target="#galleryMenu" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="/eresa/asset/img/icon/gallery.png"
                                    style="width:20px; margin-right:10px;">
                                Gallery
                            </div>
                            
                            <i class="bi bi-chevron-down transition-icon"></i>
                        </button>

                        <!-- SUB MENU -->
                        <div class="collapse ms-4 <?= $isGallery ? 'show' : '' ?>" id="galleryMenu">
                            <a href="/eresa/admin/gallery/index.php"
                            class="nav-link text-white <?= $current == 'index.php' ? 'fw-bold text-info' : '' ?>">
                                🏠 Home
                            </a>
                            <a href="/eresa/admin/gallery/portofolio.php"
                            class="nav-link text-white <?= $current == 'portofolio.php' ? 'fw-bold text-info' : '' ?>">
                                🎨 Portofolio
                            </a>
                        </div>
                    </li>
                </ul>

                <!-- PUSH KE BAWAH LOGOUT -->
                <div class="mt-auto">
                    <hr>
                    <a href="/eresa/auth/logout.php" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>

<!-- MAIN CONTENT -->
            <div class="col-md-10 p-2">

                <!-- TOPBAR -->
                <div class="card shadow-sm mb-4 card-topbar" style="border-radius: 12px; border-left: 5px solid #0d6efd;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bold mb-0">Dashboard</h4>
                        </div>
                        <div class="text-muted">
                            <?= $waktu; ?>
                        </div>
                    </div>
                </div>

<!-- CHART Statistik -->
                <div class="mt-4">
                    <div class="card shadow p-4">
                        <h5 class="mb-3">📊 Statistik Website</h5>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

<!-- CARD STATISTIK -->
                <div class="row mt-3">
                    <div class="col-md-4 mb-3">
                        <div class="card shadow p-3"
                            style="transition:0.3s;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <h6>Total Pesan</h6>
                            <h3><?= $jumlahPesan; ?></h3>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card shadow p-3"
                            style="transition:0.3s;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <h6>👁️ Viewers Website</h6>
                            <h3><?= $jumlahView; ?></h3>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card shadow p-3"
                            style="transition:0.3s;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <h6>Total Pembayaran</h6>
                            <h3><?= $jumlahPembayaran; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- SCRIPT -->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [
                    {
                        label: 'Viewers',
                        data: [12, 19, 8, 15, 22, 30, 18],
                        borderWidth: 2,
                        tension: 0.4
                    },
                    {
                        label: 'Pesan Masuk',
                        data: [2, 5, 3, 7, 4, 6, 5],
                        borderWidth: 2,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>