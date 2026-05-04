<?php
    session_start();
// SESI LOGIN
    if(!isset($_SESSION['login'])){
        header("Location: /eresa/auth/login.php");
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
            font-size: 12px;
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
                            <h4 class="fw-bold mb-0">📩 Data Contact Masuk</h4>
                        </div>
                        <div style="width:200px;">
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