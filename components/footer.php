<?php
// Konfigurasi Data Footer (Bisa dipindah ke file config.php)
$company_name = "eresa.id";
// $tagline = "";
$address = "Jl. Delima Raya Blok 8 No.5A Duren Sawit - Jakarta Timur 13450";
$map_link = "https://www.google.com/maps?q=Jl.+Delima+Raya+Blok+8+No.5A+Duren+Sawit+Jakarta"; // Alamat Google Maps Eresa
$email = "info@eresa.id";
$phones = ["+62 851 1761 8858", "+62 851 9611 0486"];
$social_media = [
    'facebook'  => 'https://www.facebook.com/share/17vxsWVbU2/?mibextid=wwXIfr',
    'instagram' => 'https://www.instagram.com/eresa_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
    'tiktok'    => 'https://www.tiktok.com/@eresa.creative.st?is_from_webapp=1&sender_device=pc'
];
$current_year = date("Y");
?>

<footer class="text-white py-5 mb-0" style="background:#2d5db3;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h4 class="fw-bold"><?= $company_name; ?></h4>
                <div class="mt-3">
                    <div class="mt-3 d-flex align-items-center">

						<!-- FACEBOOK -->
                        <a href="<?= $social_media['facebook']; ?>" class="me-3 socmed-icon">
                            <i class="bi bi-facebook" style="color: #ffffff;"></i>
                        </a>

						<!-- INSTAGRAM -->
                        <a href="<?= $social_media['instagram']; ?>" class="me-3 socmed-icon">
                            <i class="bi bi-instagram" style="background: radial-gradient(circle at 30% 30%, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                        </a>
						
                        <!-- TIKTOK -->
                        <a href="<?= $social_media['tiktok']; ?>" class="socmed-icon">
                            <i class="bi bi-tiktok" style="color: #000000;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Company</h5>
                <ul class="list-unstyled mt-3">
                    <li><a href="index.php" class="footer-link">Home</a></li>
                    <li><a href="about.php" class="footer-link">Eresa Creative Studio</a></li>
                    <li><a href="portofolio.php" class="footer-link">Portfolio</a></li>
                    <li><a href="contact.php" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Get In Touch</h5>
                <ul class="list-unstyled mt-3">
                    <li class="mb-3">
                        <a href="<?= $map_link; ?>" target="_blank" class="footer-link">
                            📍 <?= $address; ?>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="mailto:<?= $email; ?>" class="footer-link">
                            📩 <?= $email; ?>
                        </a>
                    </li>
                    <li>
                        <p class="mb-0">
                            <?php foreach($phones as $phone) : ?>
                                📞 <?= $phone; ?> <br>
                            <?php endforeach; ?>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class="text-center py-3 bg-light border-top">
    <p class="mb-0">
        <a href="#top" class="text-dark text-decoration-none fw-semibold">
            Copyright © <?= $current_year; ?> | Eresa.id
        </a>
    </p>
</section>

<link rel="stylesheet" href="/eresa/asset/css/footer.css">