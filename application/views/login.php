<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>My School</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="My School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-CSS -->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Style-CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    <?php include "layout/header.php"; ?>
    <!-- //header -->

    <!-- inner banner -->
    <div style="background-image:url(assets/images/bg2.jpg)" id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- login  -->
            <div class="modal-body my-5 pt-4">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Login Now</h3>
                <form action="login-us" method="post">
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder="your name" name="Name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder="*****" name="Password" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">User Type</label><br>
                        <select required="" name="utype" class="form-control">
                            <option>Select Position</option>
                            <option value="1">Student</option>
                             <option value="2">Teacher</option>
                        </select>
                    </div>
                    <button type="submit" class="btn button-style-w3">Login</button>
                    <div class="row sub-w3l mt-3 mb-5">
                        <div class="col-sm-6 sub-w3layouts_hub">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-li text-style-w3ls">
                                <span></span>Remember me?</label>
                        </div>
                        <div class="col-sm-6 forgot-w3l text-sm-right">
                            <a href="#" class="text-li text-style-w3ls">Forgot Password?</a>
                        </div>
                    </div>
                    <p class="text-center dont-do text-style-w3ls text-li">Don't have an account?
                        <a href="homepage" class="font-weight-bold text-li">
                            Register Now</a>
                    </p>
                </form>
            </div>
            <!-- //login -->
        </div>
    </div>
    
  <section class="w3ls-bnrbtm py-5" style="background-color:#666699" id="about">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-md-5 mb-sm-4 mb-2 text-center font-weight-bold">About Us</h3>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="assets/images/about.jpg" alt="about" class="img-fluid mt-4" />
                </div>
                <div class="col-lg-6 pr-xl-5 mt-4">
                    <h3 class="title-sub mb-4">A School should be a place of Light, of Liberty and of Learning </h3>
                    <p class="sub-para">Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus
                        at, semper
                        varius orci. Nulla accumsan ac elit in congue. Class aptent taciti sociosqu ad litora torquent
                        per conubia.</p>
                    <p class="sub-para pt-4 mt-4 border-top">Donec consequat sapien ut leo cursus rhoncus. Nullam dui
                        mi, vulputate ac metus
                        at, semper varius orci. Nulla accumsan ac elit in congue. Class aptent taciti sociosqu ad
                        litora torquent per.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
<section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">Contact Us</h3>
            <div class="contact_grid_right pt-4">
                <form action="#" method="post">
                    <div class="row contact_left_grid">
                        <div class="col-lg-6 con-left" data-aos="fade-up">
                            <div class="form-group">
                                <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 con-right" data-aos="fade-up">
                            <div class="form-group">
                                <textarea id="textarea" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="sub-honey">
                                <button class="form-control btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- footer -->
  <?php include "layout/footer.php"; ?>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copyright-w3ls py-4">
        <div class="container">
            <div class="row">
                <!-- social icons -->
                <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
                    <ul>
                        <li>
                            <a href="#" class="rounded-circle">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="#" class="rounded-circle">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rounded-circle">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="pl-2">
                            <a href="#" class="rounded-circle">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //social icons -->
            </div>
        </div>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-angle-double-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>