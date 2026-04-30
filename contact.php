<!DOCTYPE html>
<html>
<head>
    <title>Contact - eresa.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/eresa/asset/img/eresa/Logo_putih.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>
<body style="font-family: 'Poppins', sans-serif;">
<!-- NAVBAR -->
    <?php include 'components/navbar.php'; ?>

<!-- MAIN CONTENT -->
    <section class="bg-light d-flex align-items-center" style="min-height:100vh; padding-top:60px;">
        <div class="container">
            <div class="row align-items-center">

    <!-- KIRI -->
                <div class="col-md-6">
                    <p class="fw-semibold">FEEL FREE TO CONTACT US</p>

                    <h1 class="fw-bold display-5">
                        Discuss Your <br> Next Big Project
                    </h1>

                    <p class="mt-3">
                        Ready to take your business to the next level? 
                        Tell us about your goals and let's make it happen.
                    </p>

                    <p class="mt-4">
                        <a href="mailto:info@eresa.id">📧 info@eresa.id</a><br>
                        <a href="https://wa.me/6285117618858?text=Halo Eresa, Apakah kita bisa berdiskusi?">📞 +6285117618858</a>
                    </p>
                </div>

    <!-- KANAN - FORM -->
                <div class="col-md-6">
                    <div class="card shadow p-4 rounded-4">
                        <form method="POST" action="contact.php">
                            <div class="row">
                                <!-- first name -->
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <!-- last name -->
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="row">
                                <!-- phone number -->
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                                <!-- email -->
                                <div class="col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>

                                <!-- Pesan -->
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Leave a Message"></textarea>
                            </div>

                            <!-- Send - Kirim -->
                            <button class="btn btn-primary w-100">
                                SEND
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- INFORMATION LOCATION -->
    <section class="py-5 text-center bg-white">
        <div class="container">
            <p class="text-secondary">We'd Love To Hear From You</p>
            <h2 class="fw-bold mb-5">CONTACT US</h2>
            <div class="row">

    <!-- FIND US -->
                <div class="col-md-4 mb-4">
                    <div class="mb-2">
                        <div class="bg-danger mx-auto" style="width:60px; height:5px;"></div>
                    </div>
                    <h5 class="fw-bold mt-3">Find Us Here</h5>
                    <p class="text-muted">
                        Jl. Delima Raya Blok 8 No.5A <br>
                        Duren Sawit, Jakarta Timur -13460
                    </p>
                </div>

    <!-- GET IN TOUCH -->
                <div class="col-md-4 mb-4">
                    <div class="mb-2">
                        <div class="bg-danger mx-auto" style="width:60px; height:5px;"></div>
                    </div>
                    <h5 class="fw-bold mt-3">Get In Touch</h5>
                    <p class="text-muted">
                        +62 851 1761 8858 <br>
                        info@eresa.id
                    </p>
                </div>

    <!-- OFFICE HOURS -->
                <div class="col-md-4 mb-4">
                    <div class="mb-2">
                        <div class="bg-danger mx-auto" style="width:60px; height:5px;"></div>
                    </div>
                    <h5 class="fw-bold mt-3">Office Hours</h5>
                    <p class="text-muted">
                        Monday - Friday <br>
                        08.00 am - 17.00 pm
                    </p>
                </div>
            </div>
        </div>
    </section>

<!-- LOCATION GOOGLE MAPS -->
    <section>
        <iframe 
            src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            width="100%" 
            height="300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
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
                
            <a href="#" class="btn btn-primary mt-3 rounded-pill px-4">
                GET A QUOTE
            </a>
        </div>
    </section>

<!-- FOOTER COPYRIGHT-->
    <?php include 'components/footer.php'; ?>
    

</body>
</html>