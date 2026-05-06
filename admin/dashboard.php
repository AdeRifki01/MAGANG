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
<div class="col-md-2 p-0">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/eresa/components/sidebar.php'; ?>
</div>
<!-- MAIN CONTENT -->
            <div class="col-md-10 dashboard-wrapper">

                <!-- TOPBAR -->
                <div class="topbar d-flex justify-content-between align-items-center mb-4">

                    <h4 class="fw-bold mb-0">Dashboard</h4>

                    <div class="d-flex align-items-center gap-3">

                        <!-- SEARCH -->
                        <div class="search-box">
                            <input type="text" placeholder="Search..." class="form-control">
                            <i class="bi bi-search"></i>
                        </div>

                        <!-- DARK MODE -->
                        <button class="btn btn-light" onclick="toggleTheme()">
                            <i class="bi bi-moon"></i>
                        </button>

                        <!-- USER -->
                        <div class="user-box d-flex align-items-center">
                            <img src="https://i.pravatar.cc/40" class="rounded-circle">
                            <span class="ms-2">Admin</span>
                        </div>

                    </div>
                </div>

                <!-- WELCOME -->
                <div class="card welcome-card mb-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Welcome back 👋</h5>
                            <small><?= $waktu; ?></small>
                        </div>
                    </div>
                </div>

                <!-- STAT CARD -->
                <div class="row g-3 mb-4">

                    <div class="col-md-3">
                        <div class="card stat-box">
                            <h6>Total Produk</h6>
                            <h3>5483</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card stat-box">
                            <h6>Orders</h6>
                            <h3><?= $jumlahPesan; ?></h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card stat-box">
                            <h6>Total View</h6>
                            <h3><?= $jumlahView; ?></h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card stat-box">
                            <h6>Pembayaran</h6>
                            <h3><?= $jumlahPembayaran; ?></h3>
                        </div>
                    </div>

                </div>

                <!-- GRID CONTENT -->
                <div class="row g-3">

                    <!-- CHART -->
                    <div class="col-md-8">
                        <div class="card p-3">
                            <h6 class="mb-3">Expense vs Profit</h6>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>

                    <!-- SIDE PANEL -->
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h6 class="mb-3">Top Client</h6>

                            <div class="progress-item">
                                <span>Client A</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width:70%"></div>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Client B</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:50%"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

<!-- SCRIPT -->
    <script>

        function toggleTheme() {
            document.body.classList.toggle("dark-mode");
        }

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