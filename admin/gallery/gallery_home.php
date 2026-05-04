<?php
// WAKTU TARUH DI SINI waktu.php
    //require '../auth/waktu.php'; // sesuaikan path!
    require $_SERVER['DOCUMENT_ROOT'] . '/eresa/auth/waktu.php';

    $waktu = getWaktu();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gallery Home - eresa.id</title>
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

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

		.card img {
			transition: 0.3s;
		}

		.card:hover img {
			transform: scale(1.05);
		}

		.nav-pills .nav-link.active {
    		background-color: #ffffffe3;
		}

		.nav-pills .nav-link {
    		cursor: pointer;
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
                            <h4 class="fw-bold mb-0">Gallery Home</h4>
                        </div>
                        <div class="text-muted">
                            <?= $waktu; ?>
                        </div>
                    </div>
                </div>
				<!-- GALLERY MANAGEMENT -->
				<div class="card shadow p-4">
					<!-- TAB KATEGORI -->
					<div class="row" id="galleryList">
						<ul class="nav nav-pills mb-3" id="kategoriTab">
							<li class="nav-item">
								<button class="nav-link active" onclick="switchKategori('eresa', this)">
									Eresa.id
								</button>
							</li>
							<li class="nav-item">
								<button class="nav-link" onclick="switchKategori('client', this)">
									Produk Client
								</button>
							</li>
						</ul>
					</div>
				</div>
            </div>
		</div>
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	let kategoriAktif = 'eresa';

	function switchKategori(kategori, el){
		kategoriAktif = kategori;

		// Active tab
		document.querySelectorAll('#kategoriTab .nav-link').forEach(btn => {
			btn.classList.remove('active');
		});
		el.classList.add('active');

		filterGallery();
	}

	function previewImage(event){
		const files = event.target.files;
		const gallery = document.getElementById("galleryList");

		for(let i=0; i<files.length; i++){
			const reader = new FileReader();

			reader.onload = function(e){
				const col = document.createElement("div");
				col.className = "col-md-3 mb-4";
				col.setAttribute("data-kategori", kategoriAktif);

				col.innerHTML = `
					<div class="card shadow-sm h-100">
						<img src="${e.target.result}" class="card-img-top" style="height:200px; object-fit:cover;">

						<div class="card-body text-center p-2">
							<small class="text-muted d-block mb-2">${kategoriAktif.toUpperCase()}</small>
							<button class="btn btn-sm btn-danger" onclick="hapusGambar(this)">
								<i class="bi bi-trash"></i>
							</button>
						</div>
					</div>
				`;

				gallery.appendChild(col);
				filterGallery();
			}

			reader.readAsDataURL(files[i]);
		}
	}

	function hapusGambar(btn){
		if(confirm("Hapus gambar ini?")){
			btn.closest(".col-md-3").remove();
		}
	}

	function filterGallery(){
		const items = document.querySelectorAll("#galleryList .col-md-3");

		items.forEach(item => {
			if(item.getAttribute("data-kategori") === kategoriAktif){
				item.style.display = "block";
			} else {
				item.style.display = "none";
			}
		});
	}
	</script>
</body>
</html>