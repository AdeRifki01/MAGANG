<?php
$file = "counter.txt";
$jumlah = file_get_contents($file);
$jumlah++;

file_put_contents($file, $jumlah);
?>

<!DOCTYPE html>
<html>
<head>
    <title>eresa.id - We Make Your Company Take Off</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap ONLY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="asset/css/index.css">

    <style>>
    body {
        margin: 0;
        padding: 0;
    }
    </style>

</head>
<body style="font-family: 'Poppins', sans-serif; margin">

<?php include 'components/navbar.php'; ?>
<!-- <div class="container" style="margin-top:100px;"> -->
<!-- HERO -->
    <section class="d-flex align-items-center text-white text-center"
        style="height:100vh; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('/eresa/asset/img/eresa/ID_landscape.png'); background-size: cover; background-position: center;">

        <div class="container">
            <h4 class="anim-fade-up" style="padding-top:210px;">We Make Your Company Take Off</h4>
            <p class="mt-3 anim-fade-up delay-1">
                Transformasi brand melalui strategi Social Media yang tajam dan Website performa tinggi yang scalable
            </p>

            <div class="anim-fade-up delay-2 mt-4">
                <a href="price.php" class="fw-bold btn btn-outline-light rounded px-4 anim-floating d-inline-block">
                    AMBIL PAKET
                </a>
            </div>
        </div>
    </section>

<!-- PENAWARAN -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold">"Bagaimana Kami Bisa Membantu Anda?"</h2>
            <p>Lupakan kerumitan teknis dan algoritma. Fokuslah pada visi Anda,<br>
            biarkan tim ahli kami yang mengurus eksekusi digitalnya.</p>
            <div class="mt-4">
                <a href="https://wa.me/6285117618858?text=Halo%20Eresa%20Creative%20Studio,%20saya%20tertarik%20dengan%20layanan%20Anda.%20Boleh%20diskusi%20lebih%20lanjut?" 
                target="_blank" class="fw-bold btn btn-outline-dark rounded px-4 anim-floating d-inline-block">
                    🚀 Konsultasi Sekarang
                </a>
            </div>

            <div class="my-10 pt-5 text-center">
            <h3 style="padding-bottom:15px;">ERESA CREATIF STUDIO COMPANY PROFILE</h3>
                <div style="max-width:800px; margin:auto;">
                    <div class="ratio ratio-16x9">
                        <iframe
                            width="560" height="315" src="https://www.youtube.com/embed/0Lp6Q5nnNoE?si=SnUn729mIYdkpOYt"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- LAYANAN KAMI -->
    <section class="py-4 bg-light">
        <div class="container">
            <h3 class="fw-bold text-center mb-4">Layanan Kami</h3>
            <div class="row text-start">

                <!-- CARD 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)'"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- IMAGE -->
                            <img src="/eresa/asset/img/brand/Almaz.png"
                                style="width:100px; height:100px; object-fit:contain; background:white; padding:6px; border-radius:12px; transition:0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                            <!-- TEXT -->
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;"
                        onmouseover="this.style.transform='translateY(-8px)'"
                        onmouseout="this.style.transform='translateY(0)'">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- IMAGE -->
                            <img src="/eresa/asset/img/brand/Totoro.png"
                                style="width:100px; height:100px; object-fit:contain; background:white; padding:6px; border-radius:12px; transition:0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                            <!-- TEXT -->
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Branding & Identity Visual</h6>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Wajah Bisnis Profesional Ciptakan identitas visual yang ikonik dan konsisten agar brand Anda selalu diingat oleh konsumen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;"
                        onmouseover="this.style.transform='translateY(-8px)'"
                        onmouseout="this.style.transform='translateY(0)'">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- IMAGE -->
                            <img src="/eresa/asset/img/brand/jamuin.png"
                                style="width:100px; height:100px; object-fit:contain; background:white; padding:6px; border-radius:12px; transition:0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                            <!-- TEXT -->
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Website & SEO</h6>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Mudah Ditemukan di Google Website cepat, responsif, dan teroptimalisasi SEO untuk menjaring lebih banyak trafik organik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;"
                        onmouseover="this.style.transform='translateY(-8px)'"
                        onmouseout="this.style.transform='translateY(0)'">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- IMAGE -->
                            <img src="/eresa/asset/img/brand/apd.png"
                                style="width:100px; height:100px; object-fit:contain; background:white; padding:6px; border-radius:12px; transition:0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                            <!-- TEXT -->
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Design & Digital Marketing</h6>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Iklan Tepat Sasaran Paduan desain kreatif dan strategi digital untuk meningkatkan konversi dan omzet bisnis Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;"
                        onmouseover="this.style.transform='translateY(-8px)'"
                        onmouseout="this.style.transform='translateY(0)'">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- IMAGE -->
                            <img src="/eresa/asset/img/brand/astro.png"
                                style="width:100px; height:100px; object-fit:contain; background:white; padding:6px; border-radius:12px; transition:0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                            <!-- TEXT -->
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">E-Commerce Management</h6>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Jualan Online Tanpa Ribet Optimasi toko di marketplace dan kelola operasional harian agar penjualan Anda terus meningkat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;"
                        onmouseover="this.style.transform='translateY(-8px)'"
                        onmouseout="this.style.transform='translateY(0)'">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- IMAGE -->
                            <img src="/eresa/asset/img/brand/mesti_minum.png"
                                style="width:100px; height:100px; object-fit:contain; background:white; padding:6px; border-radius:12px; transition:0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                            <!-- TEXT -->
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">IT Services</h6>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Solusi Teknologi Handal Dukungan teknis menyeluruh untuk memastikan seluruh sistem digital bisnis Anda berjalan tanpa gangguan.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- PORTFOLIO -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold">Portofolio</h2>
            <p class="text-muted">"Eresa.id telah menjadi mitra strategis bagi berbagai bisnis untuk menaklukkan tantangan digital.
                <br>Jelajahi bagaimana kami memberikan dampak nyata."
            </p>
                <div class="portfolio-slider mt-4">
                    <div class="portfolio-track" id="portfolioTrack">

                        <!-- BARIS 1 -->
                        <div class="portfolio-row left mt-4">
                            <div class="portfolio-track">
                                <div class="row g-3 flex-nowrap">
                                    <!-- BARIS 1 -->
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_1.webp" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_2.webp" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_3.jpg" class="img-fluid rounded"></div>

                                    <!-- DUPLIKAT BARIS 1 -->
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_4.jpg" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_5.jpg" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_6.jpg" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/portofolio/Porto_7.jpg" class="img-fluid rounded"></div>
                                </div>
                            </div>
                        </div>

                        <!-- BARIS 2 -->
                        <div class="portfolio-row right mt-3">
                            <div class="portfolio-track">
                                <div class="row g-3 flex-nowrap">
                                    <!-- BARIS 2 -->
                                    <div class="col-4"><img src="/eresa/asset/img/produk/almaz1.png" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/produk/jamuin1.png" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/produk/reboot1.png" class="img-fluid rounded"></div>

                                    <!-- DUPLIKAT BARIS 2 -->
                                    <div class="col-4"><img src="/eresa/asset/img/produk/almaz2.png" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/produk/jamuin2.png" class="img-fluid rounded"></div>
                                    <div class="col-4"><img src="/eresa/asset/img/produk/reboot2.png" class="img-fluid rounded"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <a href="portofolio.php" class="btn btn-dark px-10 py-2 shadow-sm">See All Portfolio</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<!-- ERESA CUSTOMERS -->
    <section class="py-2">
        <div class="container text-center">
            <h1 class="fw-bold" style="font-size:40px">Eresa Customers</h1>
            <h6>"Tumbuh Bersama Mereka Yang Percaya."</h6>

            <p class="pt-3 mx-auto" style="max-width:1000px;">
                Keberhasilan kami diukur dari kesuksesan klien kami. Kami bangga telah menjadi mitra strategis bagi berbagai bisnis,
                mulai dari UMKM hingga korporasi, dalam menaklukkan tantangan di dunia digital.
            </p>

<!-- LOGO CLIENT -->
            <div class="logo-wrapper mt-5">
                <div class="logo-track">

                    <img src="/eresa/asset/img/brand/Almaz.png">
                    <img src="/eresa/asset/img/brand/Totoro.png">
                    <img src="/eresa/asset/img/brand/Jamuin.png">
                    <img src="/eresa/asset/img/brand/apd.png">
                    <img src="/eresa/asset/img/brand/Sarae.png">
                    <img src="/eresa/asset/img/brand/astro.png">
                    <img src="/eresa/asset/img/brand/mesti_minum.png">
                    <img src="/eresa/asset/img/brand/RMJ.png">
                    <img src="/eresa/asset/img/brand/mugen.png">

                    <!-- DUPLIKAT (biar smooth looping) -->
                    <img src="/eresa/asset/img/brand/Almaz.png">
                    <img src="/eresa/asset/img/brand/Totoro.png">
                    <img src="/eresa/asset/img/brand/Jamuin.png">
                    <img src="/eresa/asset/img/brand/apd.png">
                    <img src="/eresa/asset/img/brand/Sarae.png">
                    <img src="/eresa/asset/img/brand/astro.png">
                    <img src="/eresa/asset/img/brand/mesti_minum.png">
                    <img src="/eresa/asset/img/brand/RMJ.png">
                    <img src="/eresa/asset/img/brand/mugen.png">
                </div>
            </div>
        </div>
    </section>

<!-- IDE BESAR -->
    <section class="py-5 bg-light">
        <div class="container text-center" style="max-width:900px;">
            <h2 class="fw-bold text-primary">
                Punya Ide Besar? Mari Kita Wujudkan Bersama
            </h2>

            <p class="text-muted mt-3">
                Jangan simpan rencana hebat Anda sendirian. Diskusikan visi bisnis Anda dengan tim ahli kami 
                dan lihat bagaimana kami mengubahnya menjadi realitas digital yang berdampak luas.
            </p>
            
            <a href="contact.php" class="fw-bold btn btn-outline-primary mt-3 rounded px-4">
                📅 BOOK A MEETING
            </a>
        </div>
    </section>

<!-- FOOTER COPYRIGHT-->
    <?php include 'components/footer.php'; ?>

<!-- </div> -->
<!-- SCRIPT -->
    <script>
        let index = 0;
        const track = document.getElementById("portfolioTrack");
        const totalSlides = document.querySelectorAll(".portfolio-slide").length;

        setInterval(() => {
            index++;

            if(index >= totalSlides){
                index = 0;
            }

            track.style.transform = `translateX(-${index * 100}%)`;
        }, 3000);
    </script>

</body>
</html>