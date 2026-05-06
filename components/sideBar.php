<?php
// Ambil halaman aktif
$current = basename($_SERVER['PHP_SELF']);

$isTransaksi = in_array($current, ['booking.php', 'riwayat.php']);
$isGallery   = in_array($current, ['gallery_home.php','gallery_portofolio.php']);
?>

<div id="sidebar" class="sidebar bg-dark text-white vh-100 d-flex flex-column">

    <!-- HEADER -->
    <div class="pt-3 pb-3 px-3 border-bottom d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="/eresa/asset/img/eresa/Logo_putih.png"
                style="width:32px; height:32px; object-fit:contain;">
            <h5 class="fw-bold mb-0 ms-2 menu-text">Eresa</h5>
        </div>

        <!-- TOGGLE BUTTON -->
        <button class="btn btn-sm btn-outline-light" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <!-- MENU -->
    <div class="flex-grow-1 overflow-auto p-2">
        <ul class="nav flex-column">

            <!-- DASHBOARD -->
            <li class="nav-item mb-2">
                <a href="/eresa/admin/dashboard.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2"></i>
                    <span class="menu-text ms-2">Dashboard</span>
                </a>
            </li>

            <!-- CONTACT -->
            <li class="nav-item mb-2">
                <a href="/eresa/admin/data_contact.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'data_contact.php' ? 'active' : '' ?>">
                    <i class="bi bi-person-lines-fill"></i>
                    <span class="menu-text ms-2">Contact</span>
                </a>
            </li>

            <!-- PAKET -->
            <li class="nav-item mb-2">
                <a href="/eresa/admin/paket.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'paket.php' ? 'active' : '' ?>">
                    <i class="bi bi-box-seam"></i>
                    <span class="menu-text ms-2">Paket</span>
                </a>
            </li>

            <!-- TRANSAKSI -->
            <li class="nav-item mb-2">
                <button class="nav-link text-white w-100 border-0 bg-transparent d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" data-bs-target="#transaksiMenu">
                    <div>
                        <i class="bi bi-credit-card"></i>
                        <span class="menu-text ms-2">Transaksi</span>
                    </div>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <div class="collapse ms-3 <?= $isTransaksi ? 'show' : '' ?>" id="transaksiMenu">
                    <a href="/eresa/admin/transaksi/booking.php" class="nav-link text-white">Booking</a>
                    <a href="/eresa/admin/transaksi/riwayat.php" class="nav-link text-white">Report</a>
                </div>
            </li>

            <!-- PROJECT -->
            <li class="nav-item mb-2">
                <a href="/eresa/admin/project.php"
                    class="nav-link text-white d-flex align-items-center <?= $current == 'project.php' ? 'active' : '' ?>">
                    <i class="bi bi-kanban"></i>
                    <span class="menu-text ms-2">Project</span>
                </a>
            </li>

            <!-- GALLERY -->
            <li class="nav-item mb-2">
                <button class="nav-link text-white w-100 border-0 bg-transparent d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" data-bs-target="#galleryMenu">
                    <div>
                        <i class="bi bi-images"></i>
                        <span class="menu-text ms-2">Gallery</span>
                    </div>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <div class="collapse ms-3 <?= $isGallery ? 'show' : '' ?>" id="galleryMenu">
                    <a href="/eresa/admin/gallery/gallery_home.php" class="nav-link text-white">Home</a>
                    <a href="/eresa/admin/gallery/gallery_portofolio.php" class="nav-link text-white">Portofolio</a>
                </div>
            </li>

        </ul>
    </div>

    <!-- LOGOUT -->
    <div class="p-3 border-top">
        <a href="/eresa/auth/logout.php" class="btn btn-danger w-100 menu-text">Logout</a>
    </div>

</div>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("collapsed");

    // simpan state
    localStorage.setItem("sidebar", sidebar.classList.contains("collapsed"));
}

// load state
window.onload = function() {
    const sidebar = document.getElementById("sidebar");
    if(localStorage.getItem("sidebar") === "true"){
        sidebar.classList.add("collapsed");
    }
}
</script>