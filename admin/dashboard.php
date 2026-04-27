<?php
$jumlahPesan = rand(5, 50);
$jumlahView = rand(100, 1000);
$jumlahPembayaran = rand(1, 20);

session_start();

if(!isset($_SESSION['login'])){
    header("Location: /eresa/auth/login.php");
    exit;
}

$jumlah = 125; // Sementara Dulu

// WAKTU TARUH DI SINI
require '../auth/waktu.php'; // sesuaikan path!

$waktu = getWaktu();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div class="container-fluid">
        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-2 bg-dark text-white vh-100 p-3 d-flex flex-column">
                <h4 class="fw-bold pt-2">Eresa Admin</h4>
                <hr>

                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="dashboard.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/dashboard.jpg" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="data_contact.php" class="nav-link text-white">
                            <img src="/eresa/asset/img/icon/contact.jpg" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Data Contact
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="paket.php" class="nav-link text-white">
                            <img src="/eresa/asset/img/icon/paket.jpg" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Paket
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="transaksi.php" class="nav-link text-white">
                            <img src="/eresa/asset/img/icon/payment.jpg" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Transaksi
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="project.php" class="nav-link text-white">
                            <img src="/eresa/asset/img/icon/project.jpg" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Project
                        </a>
                    </li>
                </ul>

                <!-- PUSH KE BAWAH -->
                <div class="mt-auto">
                    <hr>
                    <a href="/eresa/auth/logout.php" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="col-md-10 p-4">

                <!-- TOPBAR -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold">Dashboard</h3>

                <!-- GANTI DI SINI -->
                <span class="text-muted">
                    <?php echo $waktu; ?>
                </span>
                </div>

                <!-- CHART -->
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

<!-- TABLE -->
<!-- <div class="mt-4">
    <h5>Data Contact</h5>
    
    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Contoh Nama</td>
                <td>email@gmail.com</td>
                <td>Halo ini pesan</td>
                <td>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
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
<!-- SCRIPT JAM -->
<!-- <script>
function updateTime() {
    const now = new Date();

    const hari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
    const namaHari = hari[now.getDay()];

    const jam = now.getHours().toString().padStart(2,'0');
    const menit = now.getMinutes().toString().padStart(2,'0');
    const detik = now.getSeconds().toString().padStart(2,'0');

    document.getElementById("datetime").innerHTML =
        namaHari + ", " + jam + ":" + menit + ":" + detik;
}

setInterval(updateTime, 1000);
updateTime();
</script> -->

</body>
</html>