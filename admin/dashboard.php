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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/eresa/components/sidebar.php'; ?>

<!-- MAIN CONTENT -->
            <div class="col-md-10 p-2">
    <!-- TOPBAR -->
                <div class="card shadow-sm mb-4 card-topbar" style="border-radius: 12px; border-left: 5px solid #0d6efd;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bold mb-0">📊 Dashboard</h4>
                        </div>
                        <div class="text-muted">
                            <?= $waktu; ?>
                        </div>
                    </div>
                </div>

<!-- CHART Statistik -->
                <div class="mt-4">
                    <div class="card shadow p-4">
                        <h5 class="mb-3">📈 Statistik Website</h5>
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