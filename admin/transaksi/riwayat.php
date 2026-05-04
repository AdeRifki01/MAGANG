<?php
// WAKTU TARUH DI SINI waktu.php
    //require '../auth/waktu.php'; // sesuaikan path!
    require $_SERVER['DOCUMENT_ROOT'] . '/eresa/auth/waktu.php';

    $waktu = getWaktu();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Report - eresa.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="/eresa/asset/css/transaksi.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
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
                            <h4 class="fw-bold mb-0">📊 Report</h4>
                        </div>
                        <div class="text-muted">
                            <?= $waktu; ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>