<!DOCTYPE html>
<html>
<head>
    <title>Portofolio - eresa.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/eresa/asset/css/portofolio.css">

</head>
<body style="font-family: 'Poppins', sans-serif; margin">
<!-- NAVBAR -->
    <?php include 'components/navbar.php'; ?>

<!-- GALLERY -->
    <section class="bg-light d-flex align-items-center" style="min-height:100vh; padding-top:20px;">
        <div class="container" style="margin-top:100px;">
            <h2 class="text-center fw-bold mb-4">Gallery</h2>
<!-- FILTER BUTTON -->
            <div class="text-center mb-4">
                <button class="btn border-0 bg-transparent fw-bold me-3 filter-btn active-btn"
                    onclick="filterGallery('all', this)">
                    All
                </button>

                <button class="btn border-0 bg-transparent me-3 filter-btn"
                    onclick="filterGallery('eresa', this)">
                    Eresa
                </button>

                <button class="btn border-0 bg-transparent filter-btn"
                    onclick="filterGallery('feed', this)">
                    Feed
                </button>
            </div>

<!-- GRID -->
            <div class="row g-3">
<!-- ERESA -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/portofolio/Porto_1.webp"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/portofolio/Porto_4.jpg"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/portofolio/Porto_3.jpg"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/portofolio/Porto_2.webp"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>

<!-- FEED -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/jamuin1.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/MestiMinum.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/reboot1.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/reboot2.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/almaz1.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/almaz2.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/Totoro1.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed">
                    <div class="overflow-hidden rounded">
                        <img src="/eresa/asset/img/produk/jamuin2.png"
                            class="img-fluid w-100"
                            style="aspect-ratio:4/5; object-fit:cover; transition:0.3s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- VIDEO PROFILE & REELS -->
    <div class="pt-5 pb-5">
    <!-- VIDEO YOUTUBE -->
        <div style="max-width:800px; margin:auto;">
            <div class="ratio ratio-16x9">
                <iframe
                    width="560" height="315"
                    src="https://www.youtube.com/embed/0Lp6Q5nnNoE?si=SnUn729mIYdkpOYt"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

    <!-- REELS -->
        <div class="container mt-5">
            <h5 class="text-center fw-bold mb-4">Reels</h5>
                <div class="row justify-content-center g-4">
                    
                <!-- REEL 1 -->
                    <div class="col-md-4 col-lg-3">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:12px; overflow:hidden;">
                            <video controls style="object-fit:cover;">
                                <source src="/eresa/asset/img/video/video_Eresa1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- REEL 2 -->
                    <div class="col-md-4 col-lg-3">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:12px; overflow:hidden;">
                            <video controls style="object-fit:cover;">
                                <source src="/eresa/asset/img/video/video_Eresa2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- REEL 3 -->
                    <div class="col-md-4 col-lg-3">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:12px; overflow:hidden;">
                            <video controls style="object-fit:cover;">
                                <source src="/eresa/asset/img/video/video_Eresa3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
        </div>    
    </div>

<!-- FOOTER COPYRIGHT-->
    <?php include 'components/footer.php' ?>
    
<!-- SCRIPT -->
    <script>
    function filterGallery(category, btn){
        let items = document.querySelectorAll('.gallery-item');
        let buttons = document.querySelectorAll('.filter-btn');

        // FILTER GAMBAR
        items.forEach(item => {
            if(category === 'all'){
                item.style.display = 'block';
            } else {
                item.style.display = item.classList.contains(category) ? 'block' : 'none';
            }
        });

        // RESET SEMUA BUTTON
        buttons.forEach(b => {
            b.classList.remove('active-btn');
        });

        // AKTIFKAN BUTTON YANG DIKLIK
        btn.classList.add('active-btn');
        }
    </script>

</body>
</html>