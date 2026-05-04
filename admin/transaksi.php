<?php
	session_start();
// SESI LOGIN
    if(!isset($_SESSION['login'])){
        header("Location: /eresa/auth/login.php");
        exit;
    }

// WAKTU TARUH DI SINI waktu.php
	require '../auth/waktu.php'; // sesuaikan path!

	$waktu = getWaktu();
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaksi - eresa.id</title>
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
						<a class="nav-link text-white d-flex align-items-center justify-content-between"
						data-bs-toggle="collapse" href="#transaksiMenu" role="button">
							<div class="d-flex align-items-center">
								<img src="/eresa/asset/img/icon/payment.png"
									style="width:20px; height:20px; margin-right:10px;">
								Transaksi
							</div>
							<!-- ICON PANAH -->
							<span style="font-size:12px;">▼</span>
						</a>
						<!-- SUB MENU -->
						<div class="collapse ms-4" id="transaksiMenu">
							<a href="booking.php"
							class="nav-link text-white d-flex align-items-center mb-1">
								📌 Booking
							</a>
							<a href="riwayat.php"
							class="nav-link text-white d-flex align-items-center">
								🧾 Riwayat
							</a>
						</div>
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
			<!-- TUTUP SIDEBAR -->

			<!-- MAIN CONTENT -->
			<div class="col-md-10 p-4">

				<!-- TOPBAR -->
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h3 class="fw-bold">Transaksi</h3>
					<!-- GANTI DI SINI -->
               <span class="text-muted">
                    <?php echo $waktu; ?>
               </span>
				</div>
				<!-- TAB -->
				<ul class="nav nav-tabs mb-4">
					<li class="nav-item">
						<button class="nav-link active" onclick="showTab('booking', this)">📅 Booking</button>
					</li>
					<li class="nav-item">
						<button class="nav-link" onclick="showTab('riwayat', this)">📦 Riwayat</button>
					</li>
				</ul>

				<!-- BOOKING -->
				<div id="booking" class="tab-content">
					<div class="card shadow p-3">
						<h5>Booking Masuk</h5>

						<table class="table table-bordered mt-3">
							<thead class="table-dark">
								<tr>
									<th>Nama</th>
									<th>Paket</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="bookingTable">
								<tr>
									<td>Ade</td>
									<td>Paket Premium</td>
									<td>25 April 2026</td>
									<td><span class="badge bg-warning">Pending</span></td>
									<td>
										<button class="btn btn-sm btn-success" onclick="proses(this)">Proses</button>
										<button class="btn btn-sm btn-danger" onclick="hapusBaris(this)">Hapus</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<!-- RIWAYAT -->
				<div id="riwayat" class="tab-content" style="display:none;">
					<div class="card shadow p-3">
						<h5>Riwayat Transaksi</h5>

						<table class="table table-bordered mt-3">
							<thead class="table-dark">
								<tr>
									<th>Nama</th>
									<th>Layanan</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Invoice</th>
								</tr>
							</thead>
							<tbody id="riwayatTable">
								<!-- nanti diisi otomatis -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- MODAL INVOICE -->
	<div class="modal fade" id="invoiceModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">🧾 Invoice</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body" id="invoiceArea">
					<p><strong>No Invoice:</strong> <span id="invKode"></span></p>
					<p><strong>Tanggal:</strong> <span id="invTanggal"></span></p>
					<hr>
					<p><strong>Nama:</strong> <span id="invNama"></span></p>
					<p><strong>Layanan:</strong> <span id="invLayanan"></span></p>
					<hr>
					<div class="d-flex justify-content-between">
						<span>Total</span>
						<strong id="invHarga"></strong>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					<button class="btn btn-success" onclick="kirimInvoiceWA()">📩 Kirim WhatsApp</button>
					<button class="btn btn-primary" onclick="printInvoice()">🖨️ Print</button>
				</div>
			</div>
		</div>
	</div>

	<!-- SCRIPT -->
	<script>
	let currentInvoice = {};
	// PINDAH TAB
	function showTab(tab, btn){
		let contents = document.querySelectorAll('.tab-content');
		let buttons = document.querySelectorAll('.nav-link');

		contents.forEach(c => c.style.display = 'none');
		document.getElementById(tab).style.display = 'block';

		buttons.forEach(b => b.classList.remove('active'));
		btn.classList.add('active');
	}

	// HAPUS BARIS
	function hapusBaris(btn){
		if(confirm("Yakin mau hapus?")){
			btn.closest("tr").remove();
		}
	}

	// PROSES → PINDAH KE RIWAYAT
	function proses(btn){
		let row = btn.closest("tr");

		let nama = row.children[0].innerText;
		let layanan = row.children[1].innerText;
		let tanggal = row.children[2].innerText;

		// hapus dari booking
		row.remove();

		// tambah ke riwayat
		let table = document.getElementById("riwayatTable");

		let newRow = `
			<tr>
				<td>${nama}</td>
				<td>${layanan}</td>
				<td>${tanggal}</td>
				<td><span class="badge bg-success">Selesai</span></td>
				<td>
					<button class="btn btn-sm btn-primary" onclick="lihatInvoice('${nama}', '${layanan}')">
						Lihat
					</button>
				</td>
			</tr>
		`;

		table.innerHTML += newRow;
	}

	// INVOICE (DUMMY)
	function lihatInvoice(nama, layanan){

    document.getElementById("invNama").innerText = nama;
    document.getElementById("invLayanan").innerText = layanan;

    // NOMOR INVOICE (random)
    let kode = "INV-" + Math.floor(Math.random() * 100000);
    document.getElementById("invKode").innerText = kode;

    // TANGGAL OTOMATIS
    let today = new Date();
    let tanggal = today.toLocaleDateString('id-ID');
    document.getElementById("invTanggal").innerText = tanggal;

    // HARGA DINAMIS
    let harga = "";

    if(layanan === "Social Media"){
        harga = "Rp 1.500.000";
    } else if(layanan === "Website"){
        harga = "Rp 3.000.000";
    } else {
        harga = "Rp 1.000.000";
    }

    document.getElementById("invHarga").innerText = harga;

	// ⬇️ SIMPAN DATA (INI YANG PENTING)
    currentInvoice = {
        nama: nama,
        layanan: layanan,
        harga: harga,
        kode: kode,
        tanggal: tanggal
    };

    let modal = new bootstrap.Modal(document.getElementById('invoiceModal'));
    modal.show();
}

function printInvoice(){
    let content = document.getElementById("invoiceArea").innerHTML;

    let win = window.open('', '', 'width=800,height=600');
    win.document.write(`
        <html>
        <head>
            <title>Invoice</title>
        </head>
        <body>
            ${content}
        </body>
        </html>
    `);

    win.document.close();
    win.print();
}

// KIRIM INVOICE KE WHATSAPP
function kirimInvoiceWA(){

    let invoice = document.getElementById("invoiceArea");

    html2canvas(invoice).then(canvas => {

        let image = canvas.toDataURL("image/png");

        // download dulu (simulasi struk)
        let link = document.createElement("a");
        link.download = "invoice.png";
        link.href = image;
        link.click();

        alert("Struk berhasil dibuat!\nSilakan kirim manual ke WhatsApp.");
    });
}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
</body>
</html>