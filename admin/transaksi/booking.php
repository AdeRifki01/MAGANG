<?php
// WAKTU TARUH DI SINI waktu.php
    //require '../auth/waktu.php'; // sesuaikan path!
    require $_SERVER['DOCUMENT_ROOT'] . '/eresa/auth/waktu.php';

    $waktu = getWaktu();
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
    <link rel="stylesheet" href="/eresa/asset/css/transaksi.css">
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
                
                <ul class="nav flex-column pt-4">
                    <hr class="mt-2 mb-2 border">
                    <li class="nav-item mb-2">
                        <a href="/eresa/admin/dashboard.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/dashboard.png" style="width:20px; margin-right:10px;">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/eresa/admin/data_contact.php" class="nav-link text-white d-flex align-items-center">
                            <img src="/eresa/asset/img/icon/contact.png" style="width:20px; margin-right:10px;">
                            Data Contact
                        </a>
                    </li>
                    <li class="nav-item mb-2">
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
                                🧾 Riwayat
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mb-2">
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
                    <h3 class="fw-bold">Booking</h3>

                <!-- GANTI DI SINI -->
                <span class="text-muted">
                    <?php echo $waktu; ?>
                </span>
                </div>
			</div>
		</div>
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>