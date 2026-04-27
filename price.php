<!DOCTYPE html>
<html>
<head>
    <title>Price List - eresa.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="Asset_IMG/Logo_eresa_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="/eresa/asset/css/price.css">

</head>
<body style="font-family: 'Poppins', sans-serif; margin">
<!-- NAVBAR -->
    <?php include 'components/navbar.php'; ?>

<!-- HEADER -->
    <section class="pricing-section">
        <div class="pricing-header text-center text-white">
            <h1 class="fw-bold">Price List Eresa.id</h1>
            <p>Solusi digital untuk meningkatkan branding & penjualan bisnis Anda</p>
        </div>

<!-- CARD PAKET -->
        <div class="container">
            <div class="row justify-content-center align-items-stretch pricing-wrapper">

    <!-- REGULER -->
                <div class="col-md-3 mb-4">
                    <div class="price-card">
                        <h5>REGULER</h5>
                        <h3>Rp 4.499.000 <span>/bulan</span></h3>
                        <ul>
                            <li>✔️ Riset dan rencana konten</li>
                            <li>✔️ Branding</li>
                            <li>✔️ Produksi Konten: 17 Feed, 10 Story, & 4 Video (inc.VO & Talent).</li>
                            <li>✔️ Operasional: Admin, posting, & koordinasi grup</li>
                            <li>✔️ Evaluasi: Laporan bulanan & 2x revisi minor.</li>
                        </ul>
                        <a href="https://wa.me/6285117618858?text=Halo Eresa, Saya tertarik paket Reguler ini"
                            class="btn btn-primary w-100 rounded-pill">
                            Pilih Paket
                        </a>
                    </div>
                </div>

    <!-- PREMIUM (HIGHLIGHT) -->
                <div class="col-md-3 mb-4">
                    <div class="price-card highlight">
                        <!-- <span class="badge bg-primary mb-2">BEST SELLER</span> -->

                        <h5>PREMIUM <span class="badge px-2 bg-primary" style="font-size:10px;">BEST SELLER</span></h5>
                        <h3>Rp 12.999.000 <span>/bulan</span></h3>

                        <ul>
                            <li>✔️ Riset & Strategi: Analisis audiens, tren, kompetitor, dan optimasi profil.</li>
                            <li>✔️ Konten Visual: 45 Feed, 30 Story (19 gambar, 11 video), dan 15 Reels/TikTok.</li>
                            <li>✔️ Produksi Kreatif: Talent, Voice Over, naskah SEO, dan free shoot 6 jam.</li>
                            <li>✔️ Pertumbuhan Akun: Manajemen komunitas, akuisisi pengikut, dan iklan (Ads) Rp2 Juta.</li>
                            <li>✔️ Pelaporan & Evaluasi:Laporan detail, meeting evaluasi, dan grup koordinasi. Laporan bulanan dengan 3x revisi mayor.</li>
                        </ul>

                        <a href="https://wa.me/6285117618858?text=Halo Eresa, Saya tertarik paket Premium ini"
                            class="btn btn-primary w-100 rounded-pill">
                            Pilih Paket
                        </a>
                    </div>
                </div>

    <!-- MEDIUM -->
                <div class="col-md-3 mb-4">
                    <div class="price-card">
                        <h5>MEDIUM</h5>
                        <h3>Rp 7.499.000 <span>/bulan</span></h3>

                        <ul>
                            <li>✔️ Riset & Strategi: Analisis mendalam, monthly plan, dan optimasi profil.</li>
                            <li>✔️ Produksi Konten: 22 Feed, 16 Story (10 statis, 6 video), dan 8 Reels / TikTok.</li>
                            <li>✔️ Manajemen: Posting, admin, dan kelola Ads ( 1 jt).</li>
                            <li>✔️ Laporan : Laporan detail, meeting evaluasi, dan grup koordinasi</li>
                            <li>✔️ Revisi: Maksimal 2x revisi mayor.</li>
                        </ul>

                        <a href="https://wa.me/6285117618858?text=Halo Eresa, Saya tertarik paket Medium"
                            class="btn btn-primary w-100 rounded-pill">
                            Pilih Paket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- FOOTER COPYRIGHT-->
    <?php include 'components/footer.php'; ?>

<!-- SCRIPT -->
	<script>
	function setPlan(button) {
		// ambil semua button
		let buttons = document.querySelectorAll('.toggle-wrapper button');

		// hapus semua active
		buttons.forEach(btn => btn.classList.remove('active'));

		// kasih active ke yang diklik
		button.classList.add('active');
	}
	</script>
</body>
</html>