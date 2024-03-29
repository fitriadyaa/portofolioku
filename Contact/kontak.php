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
    <title>Fi Creative | Contact</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="util.css">
    <link rel="javascript" href="js.main.js">
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Awesome Font -->
    <script src="https://kit.fontawesome.com/8b2a869bce.js"></script>
</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="overlay"></div>
        <h1>Contact!</h1>
        <p>Let's make your design great again</p>
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
            <a href="../index.php" >Home</a>
            <a href="../About/about.php">About</a>
            <a href="../Blog/blog.php">Blog</a>
            <a href="../Galery/galery.php">Galery</a>
            <a href="kontak.php" class="point">Contact</a>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- container -->
    <div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



        <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
</body>
</html>