<?php
// Konfigurasi Data Footer (Bisa dipindah ke file config.php)
$company_name = "eresa.id";
$tagline      = "Creative Studio · Digital Marketing";
$address      = "Jl. Delima Raya Blok 8 No.5A Duren Sawit - Jakarta Timur 13450";
$map_link     = "https://maps.app.goo.gl/hknFGGRKnirRHVop6";
$email        = "info@eresa.id";
$phones       = ["+62 851 1761 8858", "+62 851 9611 0486"];
$social_media = [
    'facebook'  => 'https://www.facebook.com/share/17vxsWVbU2/?mibextid=wwXIfr',
    'instagram' => 'https://www.instagram.com/eresa_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
    'tiktok'    => 'https://www.tiktok.com/@eresa.creative.st?is_from_webapp=1&sender_device=pc'
];
$current_year = date("Y");
?>
<!-- ========== SUBSCRIBE SECTION ========== -->
<div class="footer-subscribe py-4 border-bottom">
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
        
        <div>
            <h5 class="fw-bold mb-1">Subscribe</h5>
            <small class="text-muted">
                Dapatkan update terbaru dari <?= $company_name; ?>
            </small>
        </div>

        <div class="d-flex">
            <input type="email" class="form-control me-2" placeholder="Write Email">
            <button class="btn btn-danger">
                <i class="bi bi-send-fill"></i>
            </button>
        </div>

    </div>
</div>


<footer class="footer-main pt-5 pb-4">
    <div class="container">
        <div class="row g-5">

            <!-- ========== KOLOM 1: BRAND ========== -->
            <div class="col-md-4">
                <!-- Brand Name -->
                <div class="footer-brand-title"><?= $company_name; ?></div>
                <p class="footer-brand-tagline"><?= $tagline; ?></p>

                <!-- Deskripsi singkat -->
                <p style="font-size:0.82rem; color:rgba(255,255,255,0.55); line-height:1.7; margin-bottom:20px;">
                    Kami hadir untuk membantu bisnis Anda berkembang melalui strategi konten kreatif dan solusi digital yang tepat sasaran.
                </p>

                <!-- Social Media -->
                <div class="footer-socmed-wrap">
                    <!-- Facebook -->
                    <a href="<?= $social_media['facebook']; ?>" target="_blank" class="socmed-icon fb" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="<?= $social_media['instagram']; ?>" target="_blank" class="socmed-icon ig" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <!-- TikTok -->
                    <a href="<?= $social_media['tiktok']; ?>" target="_blank" class="socmed-icon tt" title="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- ========== KOLOM 2: NAVIGASI ========== -->
            <div class="col-md-2 col-6">
                <h6 class="footer-heading">Company</h6>
                <ul class="list-unstyled">
                    <li><a href="/eresa/index.php"       class="footer-link">Home</a></li>
                    <li><a href="/eresa/about.php"       class="footer-link">About</a></li>
                    <li><a href="/eresa/portofolio.php"  class="footer-link">Portfolio</a></li>
                    <li><a href="/eresa/price.php"       class="footer-link">Price</a></li>
                    <li><a href="/eresa/contact.php"     class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- ========== KOLOM 3: LAYANAN ========== -->
            <div class="col-md-2 col-6">
                <h6 class="footer-heading">Layanan</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Social Media</a></li>
                    <li><a href="#" class="footer-link">Content Creator</a></li>
                    <li><a href="#" class="footer-link">Branding</a></li>
                    <li><a href="#" class="footer-link">Video Editing</a></li>
                    <li><a href="#" class="footer-link">Paid Promote</a></li>
                </ul>
            </div>

            <!-- ========== KOLOM 4: KONTAK ========== -->
            <div class="col-md-4">
                <h6 class="footer-heading">Get In Touch</h6>

                <!-- Alamat -->
                <a href="<?= $map_link; ?>" target="_blank" class="footer-contact-item">
                    <span class="footer-contact-icon">📍</span>
                    <p class="footer-contact-text">
                        <strong>Alamat</strong>
                        <?= $address; ?>
                    </p>
                </a>

                <div class="footer-map mt-2 mb-1">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3163688720047!2d106.9266277!3d-6.221949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d3a8fe3fdeb%3A0x6f474239f8965e0d!2sEresa.ID!5e0!3m2!1sid!2sid!4v1777887158041!5m2!1sid!2sid"
                        width="100%" 
                        height="130"
                        style="border:0; border-radius:12px;"
                        loading="lazy">
                    </iframe>
                </div>

                <!-- Email -->
                <a href="mailto:<?= $email; ?>" class="footer-contact-item">
                    <span class="footer-contact-icon">✉️</span>
                    <p class="footer-contact-text">
                        <strong>Email</strong>
                        <?= $email; ?>
                    </p>
                </a>

                <!-- Telepon -->
                <div class="footer-contact-item">
                    <span class="footer-contact-icon">📞</span>
                    <p class="footer-contact-text">
                        <strong>Telepon</strong>
                        <?php foreach($phones as $phone) : ?>
                            <?= $phone; ?><br>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>

        </div><!-- end row -->
    </div><!-- end container -->
</footer>

<!-- ========== COPYRIGHT BAR ========== -->
<div class="footer-bottom py-3">
    <div class="container d-flex justify-content-between flex-wrap text-center text-md-start">
        <div>
            © <?= $current_year; ?> <?= $company_name; ?>. All Rights Reserved
        </div>
        <div>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
            <span class="mx-2">|</span>
            <a href="#" class="footer-bottom-link">Our History</a>
            <span class="mx-2">|</span>
            <a href="#" class="footer-bottom-link">What We Do</a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="/eresa/asset/css/footer.css">

<script>
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>