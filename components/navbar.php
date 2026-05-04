<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<style>
.nav-link {
    position: relative;
    transition: color 0.3s ease;
}
.nav-link::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 5px;
    width: 0%;
    height: 2px;
    background-color: #ffffff;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}
.nav-link:hover::after {
    width: 100%;
}
.nav-link:hover {
    color: #ffffff !important;
}
</style>

<nav class="navbar navbar-expand-lg fixed-top"
style="
    background: rgba(148, 148, 148, 0.62) !important;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    height:55px;
">
    <div class="container d-flex align-items-center" style="height:70px;">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="/eresa/asset/img/eresa/Logo_putih.png" height="60">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            ☰
        </button>
        
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link text-light">Eresa Creative Studio</a>
                </li>
                <li class="nav-item">
                    <a href="reboot.php" class="nav-link text-light">Reboot Com</a>
                </li>
                <li class="nav-item">
                    <a href="portofolio.php" class="nav-link text-light">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a href="price.php" class="nav-link text-light">Price</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link text-light">Contact</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="/eresa/admin/dashboard.php" class="nav-link text-warning">Admin 👤</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>