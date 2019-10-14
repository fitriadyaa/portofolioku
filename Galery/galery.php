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
    <title>Fi Creative | Gallery</title>
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
        <h1>My Gallery!</h1>
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
            <a href="../About/about.php">About</a>
            <a href="../Blog/blog.php">Blog</a>
            <a href="galery.php" class="point">Galery</a>
            <a href="../Contact/kontak.php">Contact</a>
        </div>
    </div>
    <!-- Akhir Navbar -->

            <!-- script -->
            <script>
            $(function () {
                $(".gallery").magnificPopup({
                    // child items selector
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        </script>
    <!-- Content -->
    <div class="gallery-section">
        <div class="inner-width">
            <h3>Simplity with elegancy</h3>
            <div class="border"></div>
            <div class="gallery">

                <a href="../img/sneaker.png" class="image" title="Sneaker Web">
                    <img src="../img/sneaker.png" alt="">
                </a>

                <a href="../img/womanorder.png" class="image" title="Ordering Ticket">
                    <img src="../img/womanorder.png" alt="">
                </a>

                <a href="../img/eind.png" class="image" title="Web Elektro Industri">
                    <img src="../img/eind.png" alt="">
                </a>

                <a href="../img/liburan.png" class="image" title="Web Elektro Industri">
                    <img src="../img/liburan.png" alt="">
                </a>
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


