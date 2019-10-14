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
    <title>Fi Creative | About</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="main.css">
    <!-- JQuery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Awesome Font -->
    <script src="https://kit.fontawesome.com/8b2a869bce.js"></script>

</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="overlay"></div>
        <h1>Hello!</h1>
        <p>I am Fitria Widyani</p>
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
            <a href="../index.php">Home</a>
            <a href="about.php" class="point">About</a>
            <a href="../Blog/blog.php">Blog</a>
            <a href="../Galery/galery.php">Galery</a>
            <a href="../Contact/kontak.php">Contact</a>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="about-section">
            <div class="inner-width">
                <h1>About</h1>
                <div class="border"></div>
                <div class="about-section-row">
                    <div class="about-section-col">
                        <div class="about">
                            <p>
                                Nama saya Fitria Widyani. Saya lahir tahun 2002, dan tinggal di Bandung.
                                Saya seorang siswi di SMKN 1 Katapang. Saya bercita-cita menjadi UI/UX Designer.
                            </p>
                        </div>
                    </div>

                    <div class="about-section-col">
                        <div class="skills">
                            <div class="skill">
                                <div class="title">Web Design</div>
                                <div class="progress">
                                    <div class="progress-bar p1"><span>90%</span></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="title">UX Design</div>
                            <div class="progress">
                                    <div class="progress-bar p1"><span>90%</span></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="title">UI Design</div>
                            <div class="progress">
                                    <div class="progress-bar p1"><span>90%</span></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
            <h5>Fi Creative Studio 2019</h5>
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