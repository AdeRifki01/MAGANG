<?php
    $current = basename($_SERVER['PHP_SELF']);
    
    session_start();
// SESI LOGIN
    if(!isset($_SESSION['login'])){
        header("Location: /eresa/auth/login.php");
        exit;
    }

// WAKTU TARUH DI SINI waktu.php
    //require '../auth/waktu.php'; // sesuaikan path!
    require $_SERVER['DOCUMENT_ROOT'] . '/eresa/auth/waktu.php';

    $waktu = getWaktu();

    $current = basename($_SERVER['PHP_SELF']);
    $isTransaksi = in_array($current, ['booking.php', 'riwayat.php']);
    $isGallery = in_array($current, ['index.php','portofolio.php']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project - eresa.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="/eresa/asset/css/project.css">
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
                    <h4 class="fw-bold mb-0">Project Client 🚀</h4>
                </div>
                <div class="text-muted">
                    <?= $waktu; ?>
                </div>
            </div>
        </div>
    <!-- HEADER + FILTER -->
        <!-- HEADER + CATEGORY -->
        <div class="card shadow p-3 mb-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <!-- TITLE -->
                <h5 class="fw-bold mb-0">Daftar Project</h5>
            <!-- SEARCH -->
                <input type="text" class="form-control" placeholder="🔍 Cari client..." style="width:220px;">
            </div>
        <!-- CATEGORY MENU (TAB STYLE) -->
            <div class="d-flex gap-2 mt-3 flex-wrap">
                <button class="btn btn-sm btn-primary">All</button>
                <button class="btn btn-sm btn-outline-primary">In Progress</button>
                <button class="btn btn-sm btn-outline-primary">Internal Review</button>
                <button class="btn btn-sm btn-outline-primary">Client Review</button>
                <button class="btn btn-sm btn-outline-primary">Revision</button>
                <button class="btn btn-sm btn-outline-primary">Final Check</button>
                <button class="btn btn-sm btn-outline-success">Done</button>
            </div>
        </div>

    <!-- LIST PROJECT -->
        <div class="row">
            <!-- CARD PROJECT -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 h-100" style="border-radius:15px; transition:0.3s;"
                    onmouseover="this.style.transform='translateY(-8px)'"
                    onmouseout="this.style.transform='translateY(0)'">
                    <div class="card-body d-flex flex-column">
                        <!-- CLIENT -->
                        <div class="d-flex align-items-center mb-3">
                            <img src="/eresa/asset/img/brand/Almaz.png"
                                style="width:45px; height:45px; object-fit:contain; margin-right:10px;">
                            <div>
                                <h6 class="fw-bold mb-0">Almaz Store</h6>
                                <small class="text-muted">Social Media Management</small>
                            </div>
                        </div>
                <!-- STATUS -->
                        <span class="badge bg-warning text-dark mb-2">On Progress</span>
                    <!-- PROGRESS BAR -->
                        <div class="mb-3">
                            <small>Progress</small>
                            <div class="progress" style="height:8px;">
                                <div class="progress-bar bg-primary" style="width:70%;"></div>
                            </div>
                        </div>
                    <!-- DETAIL -->
                        <ul style="font-size:12px;" class="ps-3 flex-grow-1">
                            <li>Konten feed & story</li>
                            <li>Video reels</li>
                            <li>Posting & engagement</li>
                        </ul>
                    <!-- ACTION -->
                        <div class="d-flex justify-content-between mt-auto">
                            <button class="btn btn-sm btn-outline-primary">
                                Detail
                            </button>
                            <button class="btn btn-sm btn-success">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 h-100" style="border-radius:15px; transition:0.3s;"
                    onmouseover="this.style.transform='translateY(-8px)'"
                    onmouseout="this.style.transform='translateY(0)'">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/eresa/asset/img/brand/Totoro.png"
                                style="width:45px; height:45px; object-fit:contain; margin-right:10px;">
                            <div>
                                <h6 class="fw-bold mb-0">Totoro Cafe</h6>
                                <small class="text-muted">Branding & Design</small>
                            </div>
                        </div>
                        <span class="badge bg-success mb-2">Selesai</span>
                        <div class="mb-3">
                            <small>Progress</small>
                            <div class="progress" style="height:8px;">
                                <div class="progress-bar bg-success" style="width:100%;"></div>
                            </div>
                        </div>
                        <ul style="font-size:12px;" class="ps-3 flex-grow-1">
                            <li>Logo design</li>
                            <li>Brand guideline</li>
                            <li>Social media kit</li>
                        </ul>
                        <div class="d-flex justify-content-between mt-auto">
                            <button class="btn btn-sm btn-outline-dark">
                                Lihat
                            </button>
                            <button class="btn btn-sm btn-secondary">
                                Arsip
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const buttons = document.querySelectorAll(".btn-sm");

    buttons.forEach(btn => {
        btn.addEventListener("click", function () {

            buttons.forEach(b => {
                b.classList.remove("btn-primary");
                b.classList.remove("btn-success");
                b.classList.add("btn-outline-primary");
            });

            this.classList.remove("btn-outline-primary");
            this.classList.add("btn-primary");

            if(this.innerText === "Done"){
                this.classList.remove("btn-primary");
                this.classList.add("btn-success");
            }
        });
    });
    </script>
</body>
</html>