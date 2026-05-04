<?php
    session_start();
// SESI LOGIN
    if(!isset($_SESSION['login'])){
        header("Location: /eresa/auth/login.php");
        exit;
    }

//require '../auth/waktu.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/eresa/auth/waktu.php';

    $waktu = getWaktu();

    $current = basename($_SERVER['PHP_SELF']);
    $isTransaksi = in_array($current, ['booking.php', 'riwayat.php']);
    $isGallery = in_array($current, ['index.php','portofolio.php']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Paket - eresa.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png">
    <link rel="stylesheet" href="/eresa/asset/css/paket.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
    <style>
        .paket-card {
        border-radius: 15px;
        transition: 0.3s;
        }

        .paket-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>

<body>
<div class="container-fluid">
    <div class="row">

<!-- SIDEBAR -->
            <div class="col-md-2 bg-dark text-white vh-100 d-flex flex-column p-0">
<!-- HEADER (TIDAK IKUT SCROLL) -->
                <div class="pt-4 pb-4 px-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <img src="/eresa/asset/img/eresa/Logo_putih.png"
                            style="width:32px; height:32px; object-fit:contain; margin-right:10px;">
                        <h5 class="fw-bold mb-0">Eresa Admin</h5>
                    </div>
                </div>
<!-- MENU (SCROLLABLE) -->
                <div class="flex-grow-1 overflow-auto p-3">
                    <ul class="nav flex-column">
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
    <!-- DROPDOWN TRANSAKSI - BOOKING & REPORT -->
                            <div class="collapse ms-4 <?= $isTransaksi ? 'show' : '' ?>" id="transaksiMenu">
                                <a href="/eresa/admin/transaksi/booking.php" class="nav-link text-white">📌 Booking</a>
                                <a href="/eresa/admin/transaksi/riwayat.php" class="nav-link text-white">🧾 Report</a>
                            </div>
                        </li>

                        <li class="nav-item mb-2">
                            <a href="/eresa/admin/project.php" class="nav-link text-white d-flex align-items-center">
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
    <!-- DROPDOWN GALLERY - HOME & PORTOFOLIO -->
                            <div class="collapse ms-4 <?= $isGallery ? 'show' : '' ?>" id="galleryMenu">
                                <a href="/eresa/admin/gallery/gallery_home.php" class="nav-link text-white">🏠 Home</a>
                                <a href="/eresa/admin/gallery/gallery_portofolio.php" class="nav-link text-white">🎨 Portofolio</a>
                            </div>
                        </li>
                    </ul>
                </div>

<!-- LOGOUT (TIDAK IKUT SCROLL) -->
                <div class="p-3 border-top">
                    <a href="/eresa/auth/logout.php" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>

<!-- MAIN CONTENT -->
        <div class="col-md-10 p-2">

            <!-- TOPBAR -->
            <div class="card shadow-sm mb-4 card-topbar" style="border-radius: 12px; border-left: 5px solid #0d6efd;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bold mb-0">Paket Management 📦</h4>
                    </div>
                    <div class="text-muted">
                        <?= $waktu; ?>
                    </div>
                </div>
            </div>

            <!-- HEADER + LIST PAKET -->
            <div class="mt-4">
                <div class="card shadow p-3">
                    <!-- HEADER -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex gap-2 mt-3 flex-wrap">
                            <button class="btn btn-sm btn-primary">All Paket</button>
                            <button class="btn btn-sm btn-outline-primary">Paket Layanan</button>
                            <button class="btn btn-sm btn-outline-primary">Internal Review</button>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPaket">
                            + Paket
                        </button>
                    </div>

                    <!-- LIST CARD PAKET -->
                    <div class="row">
                        <!-- CARD -->
                        <div class="col-md-4 mb-3">
                            <div class="card paket h-100 d-flex flex-column shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold">Reguler</h5>
                                    <h3 class="text-primary">
                                        Rp4.499K 
                                        <span style="font-size:14px; color:#777;">/bulan</span>
                                    </h3>
                                    <ul class="mt-2 ps-3 flex-grow-1" style="font-size:12px;">
                                        <li>Riset dan Rencana konten</li>
                                        <li>Branding</li>
                                        <li>17 Feed, 10 Story, 4 Video</li>
                                        <li>Caption SEO friendly</li>
                                        <li>Admin & Posting</li>
                                    </ul>
                                    <!-- ACTION -->
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <!-- EDIT & DELETE -->
                                        <div>
                                            <button class="btn btn-sm btn-warning me-1">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" onclick="hapusPaket(this)">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </div>
                                        <!-- CART & CHECKOUT -->
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary me-1" onclick="tambahKeranjang('Reguler')">
                                                <i class="bi bi-cart-plus"></i>
                                            </button>
                                            <button class="btn btn-sm btn-success" onclick="checkout('Reguler')">
                                                Checkout
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CARD -->
                    </div>
                </div>
            </div>
        </div>
        <!-- TUTUP MAIN CONTENT -->
    </div>
</div>

    <!-- MODAL TAMBAH -->
<div class="modal fade" id="modalPaket">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Tambah Paket</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>
                <input type="text" class="form-control mb-3" placeholder="Nama Paket">
                <input type="text" class="form-control mb-3" placeholder="Harga">
                <textarea class="form-control mb-3" placeholder="Deskripsi"></textarea>

                <button class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function hapusPaket(btn){
    if(confirm("Yakin ingin menghapus paket ini?")){
        btn.closest(".col-md-4").remove();
    }
}

function tambahKeranjang(nama){
    alert("✅ Paket " + nama + " ditambahkan ke keranjang!");
}

function checkout(nama){
    alert("🚀 Checkout paket: " + nama);
}
</script>
</body>
</html>