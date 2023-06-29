<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">PIRPOO</a>
            <btn class="navbar-toggler" type="btn" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </btn>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <i class="bi bi-person-circle text-white" style="font-size: 18pt;"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container d-flex min-h-screen">
            <div class="row align-items-center">
                <div class="col-lg-7 col-sm-12 mt-5">
                    <div class="h3 mb-3" style="color: #6610f2;">
                        Halo, Selamat datang
                    </div>
                    <div class="h1 mb-4">
                        Punya masalah pribadi? Tenang saja itu masalah anda bukan masalah kami
                    </div>
                    <div class="h5 mb-2">
                        Bicarakan masalahmu dengan ahlinya
                    </div>
                    <div class="h5 mb-2">
                        Daftar sekarang gratis.
                    </div>
                    <div class="mt-5">
                        <a href="./auth/register.php" class="btn-link">
                            <button class="big-btn">Register</button>
                        </a>
                        <a href="./auth/login.php" class="btn-link">
                            <button class="big-btn">Login</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="./public/assets/img/vectarytexture2191.png" alt="" class="img-fluid"
                            style="max-width: 100%; height: auto;">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <img src="./public/assets/img/ellipse.png" alt="" class="img-fluid"
                            style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>
                        humamresource@pirpoo.com
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About</h5>
                    <p>
                        Menjadi platform media sosial yang menyokong individu yang mengalami kesulitan dalam kesehatan
                        mental, dengan memberikan rasa aman dan positif untuk berbagi, berkomunikasi dan dapat
                        berkonsultasi dengan psikolog profesional
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            © Pirpoo 2023, All Rights Reserved:
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>