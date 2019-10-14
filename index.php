<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="#">
    <!-- Title -->
    <title>Fi Creative | Home</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Awesome Font -->
    <script src="https://kit.fontawesome.com/8b2a869bce.js"></script>
</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="overlay"></div>
        <h1>I am Fitria</h1>
        <p>Let's make your design great again</p>
        <a href="Galery/galery"><h5>VIEW PORTOFOLIO</h5></a>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- navbar -->
    <div class="navbar">
        <a class="btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="menu">
            <a href="index.php" class="point">Home</a>
            <a href="About/about.php">About</a>
            <a href="Blog/blog.php">Blog</a>
            <a href="Galery/galery.php">Galery</a>
            <a href="Contact/kontak.php">Contact</a>
        </div>
    </div>
    <!-- Akhir Navbar -->
    
    <!-- Content -->
    <div class="container">
        <div class="pick">
            <h3>“Pick one source then <br>
        paste to it = steal. <br>
        Pick two source then <br>
        mix it up = research</h3>
        <p> - arts</p>
        </div>

        <div class="fotopick"></div>

        <div class="fotowho"></div>
        <div class="who">
            <h3>Who I am?</h3>
            <h5>I am UI/UX Designer and student at Vocational 
            High School 1 Katapang</h5>
            <p>Hai! Nama saya Fitria Widyani. Saya lahir bulan Oktober 2002.
                Saya sangat menyukai dunia desain. Sekarang saya menjadi 
                designer di Juantika 2019
            </p>
        </div>
        <div class="tekan">
            <a href="About/about.php"><h5>VIEW ABOUT</h5></a>
        </div>

        <div class="portofolio">
            <h3>PORTOFOLIO</h3>
            <p>Simplity with elegancy</p>
        </div>
    </div>

    <!-- Portofolio Image -->
    <div class="container-cardd">
        <div class="container-card">
            <div class="card image1">
        </div>
        <div class="container-card">
            <div class="card image2">
        </div>
        <div class="container-card">
            <div class="card image3">
        </div>
        <div class="container-card">
            <div class="card image4">
        </div>
        <div class="container-card">
            <div class="card image5">
        </div>
        <div class="container-card">
            <div class="card image6">
        </div>

        <div class="tekanporto">
            <a href="Galery/galery.php"><h5>VIEW PORTOFOLIO</h5></a>
        </div>
    </div>

    <!-- container contact me -->
    <div class="container-join">
        <form action="" method="post">
            <h1>Subscribe</h1>
            <p>Jika ingin mendapatkan informasi terbaru tentang Fi Creative Studio</p>
            <div class="email-box">
                <i class="fas fa-envelope"></i>
                <input class="tbox" type="email" name="email" autocomplete="off" placeholder="Masukkan Email Anda">
                <input type="submit" name="submit" value="Ikuti">
            </div>
        </form>
    </div>

    <!-- footer -->
    <footer>
        <div class="foot">
            <h5>Fi Creative Studio</h5>
        </div>
    </footer>
    <!-- Akhir Footer -->
    <!-- Jscript -->
    <script type="text/javascript">
        $(".btn").on("click", function () {
            $(".menu").toggleClass("show");
        });
    </script>
    <!-- Akhir Jscript -->

</body>
</html>