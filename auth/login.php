<?php
session_start();

$back = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

// 🔐 CEK JIKA SUDAH LOGIN
if(isset($_SESSION['login'])){
    header("Location: /eresa/admin/dashboard.php");
    exit;
}

// 🔑 PROSES LOGIN
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username & password sementara
    if($username == "eresa" && $password == "123"){
        $_SESSION['login'] = true;
        header("Location: /eresa/admin/dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Eresa.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
    font-family: 'Inter', sans-serif;
    background: url('/eresa/asset/img/eresa/ID_landscape.png') no-repeat center/cover;
    height: 100vh;
    margin: 0;
    overflow: hidden;
}

/* OVERLAY GRADIENT */
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(178, 178, 178, 0.13), rgba(122, 122, 122, 0.25));
    backdrop-filter: blur(6px);
    z-index: 1;
}

/* CENTER */
.login-container {
    position: relative;
    z-index: 2;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD */
.login-card {
    width: 100%;
    max-width: 420px;
    background: rgba(255,255,255,0.95);
    padding: 45px 35px;
    border-radius: 20px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.25);
    animation: fadeUp 0.7s ease;
}

/* TITLE */
.login-card h4 {
    font-weight: 700;
    color: #060D39;
    margin-bottom: 5px;
}

.login-subtitle {
    font-size: 0.85rem;
    color: #888;
    margin-bottom: 25px;
}

/* INPUT GROUP */
.input-group {
    position: relative;
}

.input-group i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
}

/* INPUT */
.form-control {
    padding: 12px 12px 12px 40px;
    border-radius: 12px;
    border: 1px solid #ddd;
    background: #f9f9f9;
    transition: all 0.3s;
}

.form-control:focus {
    border-color: #2d5db3;
    box-shadow: 0 0 0 3px rgba(45,93,179,0.15);
    background: #fff;
}

/* BUTTON */
.btn-login {
    background: linear-gradient(135deg, #060D39, #2d5db3);
    border: none;
    padding: 12px;
    border-radius: 12px;
    font-weight: 600;
    color: #fff;
    transition: 0.3s;
}

.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* BACK */
.btn-back {
    display: block;
    text-align: center;
    margin-top: 15px;
    font-size: 0.85rem;
    color: #aaa;
    text-decoration: none;
}

.btn-back:hover {
    color: #060D39;
}

/* ANIMATION */
@keyframes fadeUp {
    from {opacity: 0; transform: translateY(30px);}
    to {opacity: 1; transform: translateY(0);}
}
    </style>
</head>
<body>

<div class="overlay"></div>

<div class="login-container">
    <div class="login-card fade-up">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <img src="/eresa/asset/img/eresa/Logo_biru.png" 
                style="width:45px; height:45px; object-fit:contain; margin-right:12px;">
            <div>
                <h5 class="mb-0 fw-bold">Eresa Admin</h5>
            </div>
        </div>

        <?php if(isset($error)) : ?>
            <div class="alert alert-danger py-2 mb-4" style="border-radius: 10px; font-size: 0.85rem;">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3 input-group">
                <i class="bi bi-person"></i>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-4 input-group">
                <i class="bi bi-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-login w-100">
                Login
            </button>
            <a href="<?= $back; ?>" class="btn-back">
                ← Kembali ke Beranda
            </a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>