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
            "email" => "ade@gmail.com",
            "pesan" => "Saya tertarik jasa social media",
            "tanggal" => "22 April 2026",
            "status" => "Baru"
        ],
        [
            "nama" => "Budi",
            "email" => "budi@gmail.com",
            "pesan" => "Mau buat website company profile",
            "tanggal" => "21 April 2026",
            "status" => "Dibaca"
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
                    <div class="position-relative">
                        <button class="btn position-relative" data-bs-toggle="dropdown">
                            <i class="bi bi-bell-fill" style="font-size:20px;"></i>
                            <!-- JUMLAH NOTIF -->
                            <?php if($jumlahBaru > 0): ?>
                            <span id="notifBadge"
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?= $jumlahBaru; ?>
                            </span>
                            <?php endif; ?>
                        </button>

                        <!-- DROPDOWN PESAN NOFIF-->
                        <ul class="dropdown-menu dropdown-menu-end p-2" style="width:300px;">
                            <li><h6 class="dropdown-header">Pesan Baru</h6></li>
                            <!-- ISI PESAN -->
                            <?php foreach($data as $row): ?>
                                <?php if($row['status'] == "Baru"): ?>
                                <li class="mb-2">
                                    <div class="border rounded p-2">
                                        <strong><?= $row['nama']; ?></strong><br>
                                        <small><?= substr($row['pesan'],0,40); ?>...</small>
                                    </div>
                                </li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <!-- TIDAK ADA PESAN -->
                            <?php if($jumlahBaru == 0): ?>
                                <li class="text-center text-muted">Tidak ada pesan baru</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
<!-- DATA CLIENT -->
                <div class="card shadow p-2">
                    <div class="table-responsive">
<!-- TABEL -->
                        <table class="table table-bordered align-middle">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
<!-- ISI DATA -->
                            <tbody>
                            <?php foreach($data as $row): ?>
                            <tr>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['pesan']; ?></td>
                                <td><?= $row['tanggal']; ?></td>
                                <!-- STATUS BADGE -->
                                <td class="text-center">
                                    <?php if($row['status'] == "Baru"): ?>
                                        <span class="badge bg-danger">New Message</span>
                                    <?php else: ?>
                                        <span class="badge bg-success">Read</span>
                                    <?php endif; ?>
                                </td>
<!-- AKSI -->
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailModal"
                                        onclick="setDetail(this,'<?= $row['nama']; ?>','<?= $row['email']; ?>','<?= $row['pesan']; ?>')">
                                        Detail
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="hapusBaris(this)">
                                        Hapus
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
    </script>

</body>
</html>