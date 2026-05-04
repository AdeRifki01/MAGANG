<?php
// Ambil halaman aktif
$current = basename($_SERVER['PHP_SELF']);

$isTransaksi = in_array($current, ['booking.php', 'riwayat.php']);
$isGallery   = in_array($current, ['gallery_home.php','gallery_portofolio.php']);
?>

<div class="col-md-2 bg-dark text-white vh-100 d-flex flex-column p-0">

    <!-- HEADER -->
    <div class="pt-4 pb-4 px-3 border-bottom">
        <div class="d-flex align-items-center">
            <img src="/eresa/asset/img/eresa/Logo_putih.png"
                style="width:32px; height:32px; object-fit:contain; margin-right:10px;">
            <h5 class="fw-bold mb-0">Eresa Admin</h5>
        </div>
    </div>

    <!-- MENU -->
    <div class="flex-grow-1 overflow-auto p-3">
        <ul class="nav flex-column">

            <li class="nav-item mb-2">
                <a href="/eresa/admin/dashboard.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'dashboard.php' ? 'fw-bold text-info' : '' ?>">
                    <img src="/eresa/asset/img/icon/dashboard.png" style="width:20px; margin-right:10px;">
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="/eresa/admin/data_contact.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'data_contact.php' ? 'fw-bold text-info' : '' ?>">
                    <img src="/eresa/asset/img/icon/contact.png" style="width:20px; margin-right:10px;">
                    Data Contact
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="/eresa/admin/paket.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'paket.php' ? 'fw-bold text-info' : '' ?>">
                    <img src="/eresa/asset/img/icon/paket.png" style="width:20px; margin-right:10px;">
                    Paket
                </a>
            </li>

            <!-- TRANSAKSI -->
            <li class="nav-item mb-2">
                <button class="nav-link text-white d-flex justify-content-between align-items-center w-100 border-0 bg-transparent"
                        data-bs-toggle="collapse" data-bs-target="#transaksiMenu">
                    <div class="d-flex align-items-center">
                        <img src="/eresa/asset/img/icon/payment.png" style="width:20px; margin-right:10px;">
                        Transaksi
                    </div>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <div class="collapse ms-4 <?= $isTransaksi ? 'show' : '' ?>" id="transaksiMenu">
                    <a href="/eresa/admin/transaksi/booking.php"
                        class="nav-link text-white <?= $current == 'booking.php' ? 'fw-bold text-info' : '' ?>">
                        📌 Booking
                    </a>

                    <a href="/eresa/admin/transaksi/riwayat.php"
                        class="nav-link text-white <?= $current == 'riwayat.php' ? 'fw-bold text-info' : '' ?>">
                        🧾 Report
                    </a>
                </div>
            </li>

            <li class="nav-item mb-2">
                <a href="/eresa/admin/project.php"
                class="nav-link text-white d-flex align-items-center <?= $current == 'project.php' ? 'fw-bold text-info' : '' ?>">
                    <img src="/eresa/asset/img/icon/project.png" style="width:20px; margin-right:10px;">
                    Project
                </a>
            </li>

            <!-- GALLERY -->
            <li class="nav-item mb-2">
                <button class="nav-link text-white d-flex justify-content-between align-items-center w-100 border-0 bg-transparent"
                        data-bs-toggle="collapse" data-bs-target="#galleryMenu">
                    <div class="d-flex align-items-center">
                        <img src="/eresa/asset/img/icon/gallery.png" style="width:20px; margin-right:10px;">
                        Gallery
                    </div>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <div class="collapse ms-4 <?= $isGallery ? 'show' : '' ?>" id="galleryMenu">
                    <a href="/eresa/admin/gallery/gallery_home.php"
                        class="nav-link text-white <?= $current == 'gallery_home.php' ? 'fw-bold text-info' : '' ?>">
                        🏠 Home
                    </a>

                    <a href="/eresa/admin/gallery/gallery_portofolio.php" 
                        class="nav-link text-white <?= $current == 'gallery_portofolio.php' ? 'fw-bold text-info' : '' ?>">
                        🎨 Portofolio
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <!-- LOGOUT -->
    <div class="p-3 border-top">
        <a href="/eresa/auth/logout.php" class="btn btn-danger w-100">Logout</a>
    </div>

</div>