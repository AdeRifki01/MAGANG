<?php
// WAKTU TARUH DI SINI waktu.php
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
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
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
                            <img src="/eresa/asset/img/icon/dashboard.png" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="data_contact.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/contact.png" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Data Contact
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="paket.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/paket.png" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Paket
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="transaksi.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/payment.png" style="width:20px; height:20px; margin-right:10px;" alt="">
                            Transaksi
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="project.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/project.png" style="width:20px; height:20px; margin-right:10px;" alt="">
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
                    <h3 class="fw-bold">Project Client</h3>

                <!-- GANTI DI SINI -->
                <span class="text-muted">
                    <?php echo $waktu; ?>
                </span>
                </div>
			</div>
		</div>
	</div>
</body>
</html>