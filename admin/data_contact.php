<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }

    // DATA DUMMY DULU
    $data = [
    [
        "nama" => "Ade",
        "phone" => "08123456789",
        "email" => "ade@gmail.com",
        "company" => "Eresa Studio",
        "tanggal" => "22 April 2026",
        "status" => "Baru",
        "pesan" => "Saya tertarik jasa social media"
    ],
    [
        "nama" => "Budi",
        "phone" => "08234567891",
        "email" => "budi@gmail.com",
        "company" => "Budi Corp",
        "tanggal" => "21 April 2026",
        "status" => "Dibaca",
        "pesan" => "Mau buat website company profile"
    ]
];
$jumlahBaru = 0;

foreach($data as $row){
    if($row['status'] == "Baru"){
        $jumlahBaru++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Contact - eresa.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        .table td, .table th {
            padding: 6px 10px;
            font-size: 13px;
        }
        .table-container {
            border-radius: 8px;
            overflow: hidden;
            background: white;
        }

        /* Hover lebih halus */
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transition: 0.2s;
        }
</style>
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

                <!-- PUSH KE BAWAH LOGOUT -->
                <div class="mt-auto">
                    <hr>
                    <a href="/eresa/auth/logout.php" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>

<!-- CONTENT -->
            <div class="col-md-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 class="fw-bold">📩 Data Contact Masuk</h3>

                    <!-- NOTIFIKASI -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <!-- SEARCH -->
                        <div style="width:250px;">
                            <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="🔍 Cari data...">
                        </div>
                    </div>
                </div>
                
<!-- DATA CLIENT -->
    <!-- TABEL -->
                <div class="card shadow p-2">
                    <div class="table-container shadow">
                        <table class="table table-bordered table-sm align-middle mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($data as $row): ?>
                                <tr>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['phone']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['company']; ?></td>
                                    <td><?= $row['tanggal']; ?></td>

                                    <!-- ACTION -->
                                    <td class="text-center">
                                        <!-- DETAIL -->
                                        <button class="btn btn-sm btn-info"
                                            data-bs-toggle="modal" data-bs-target="#detailModal"
                                            onclick="setDetail(this,'<?= $row['nama']; ?>','<?= $row['email']; ?>','<?= $row['pesan']; ?>')">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <!-- HAPUS -->
                                        <button class="btn btn-sm btn-danger" onclick="hapusBaris(this)">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- POP UP DETAIL PESAN -->
    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama     : </strong> <span id="dNama"></span></p>
                    <p><strong>Email    : </strong> <span id="dEmail"></span></p>
                    <p><strong>Pesan    : </strong> <span id="dPesan"></span></p>
                    <!-- <p id="dPesan"></p> -->
                </div>
            </div>
        </div>
    </div>

<!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    let jumlahNotif = <?= $jumlahBaru; ?>;

    function hapusBaris(btn){
        if(confirm("Yakin mau hapus data ini?")){
            btn.closest("tr").remove();
        }
    }

    function setDetail(btn, nama, email, pesan){
        document.getElementById("dNama").innerText = nama;
        document.getElementById("dEmail").innerText = email;
        document.getElementById("dPesan").innerText = pesan;

        let row = btn.closest("tr");
        let statusCell = row.querySelector("td:nth-child(5)");

        // kalau masih "Baru", baru dikurangi
        if(statusCell.innerText.includes("Baru")){
            statusCell.innerHTML = '<span class="badge bg-success">Dibaca</span>';

            jumlahNotif--;

            let badge = document.getElementById("notifBadge");

            if(jumlahNotif > 0){
                badge.innerText = jumlahNotif;
            } else {
                badge.style.display = "none"; // 🔥 hilang
            }
        }
    }

    document.getElementById("searchInput").addEventListener("keyup", function() {
        let keyword = this.value.toLowerCase();
        let rows = document.querySelectorAll("tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();

            if(text.includes(keyword)){
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
    </script>

</body>
</html>