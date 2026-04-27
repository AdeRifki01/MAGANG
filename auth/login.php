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
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-image: url('/eresa/asset/img/eresa/ID_landscape.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Overlay Gelap dengan Blur Sedikit */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(3px);
            z-index: 1;
        }

        .login-container {
            position: relative;
            z-index: 2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Card Modern - Glassmorphism style */
        .login-card {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .login-card h4 {
            font-weight: 700;
            color: #1a1a1a;
            letter-spacing: -0.5px;
            margin-bottom: 30px;
        }

        /* Styling Input */
        .form-control {
            padding: 12px 16px;
            border-radius: 12px;
            border: 1px solid #e0e0e0;
            background: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(0, 0, 0, 0.05);
            border-color: #333;
            background: #fff;
        }

        /* Tombol Utama */
        .btn-login {
            background: #1a1a1a;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-login:hover {
            background: #333;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Tombol Kembali */
        .btn-back {
            background: transparent;
            color: #666;
            border: none;
            font-size: 0.9rem;
            margin-top: 15px;
            transition: color 0.3s ease;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .btn-back:hover {
            color: #1a1a1a;
        }

        /* Animasi Masuk */
        .fade-up {
            animation: fadeUp 0.6s ease-out forwards;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="overlay"></div>

<div class="login-container">
    <div class="login-card fade-up">
        <h4 class="text-center">Admin Login</h4>

        <?php if(isset($error)) : ?>
            <div class="alert alert-danger py-2 mb-4" style="border-radius: 10px; font-size: 0.85rem;">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label small fw-bold text-muted">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-4">
                <label class="form-label small fw-bold text-muted">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" name="login" class="btn btn-login w-100">
                Masuk Sekarang
            </button>

            <a href="<?= $back; ?>" class="btn-back">
                &larr; Kembali ke Beranda
            </a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>