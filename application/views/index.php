<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>My School </title>
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
    <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <!-- //Web-Fonts -->
    <style type="text/css">
    /*.submit-btn*/ 
/*        {
          background-color:blue; 
           padding-top:6px;
           padding-bottom:5px;
           color:aliceblue
        }
        .submit-btn:hover 
        {
           
           border-color: rgb(17, 128, 0);
           background-color: rgb(255, 0, 0);
        }*/
.list{
    color: black;
}
.list:hover{
    color:black;
    background-color: blue;
}
    </style>
</head>

<body>
    <!-- header -->
    <?php include 'layout/header.php'; ?>
    <!-- //header -->

    <!-- banner -->
    <div class="main-w3pvt mian-content-wthree text-center" id="home">
        <div class="container">
            <div class="style-banner mx-auto">
                <h3 class="text-wh font-weight-bold">Welcome to <span>My School</span> <br>Best for Education</h3>
                <p class="mt-3 text-li" id="join">Join the My School now</p>
                <!-- form -->
                <div class="container py-xl-5 py-lg-3">
                   <form action="data-submit" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="FName" placeholder="Student Name" required>
                                </div>
                                <div class="form-group">
                                     <textarea class="form-control" name="Add" placeholder="Address" required=""></textarea>                                  
                                </div>
                                <div class="form-group">
                                   <input class="form-control" type="number"  name="Contact" placeholder="Mobile Number" required>
                                </div>   
                                <div class="form-group">
                                   <input class="form-control" type="email"  name="email" placeholder="Email" required>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Class" placeholder="Standard" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Msg" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="form-group">
                                   <input class="form-control" type="password"  name="pass" placeholder="Enter Password" required>
                                </div> 
                               <div class="sub-honey">
                                 <button class="btn_apt btn btn-danger" style="padding-left:160px;padding-right:160px"  type="submit">Submit</button>
                               </div>
                                <div class="form-group">
                                   <input type="hidden" class="form-control"  name="student" value="Student" required>
                                </div>
                           </div>
                    </div>
                       <!-- <button type="submit" class="btn_apt btn">Submit</button>-->
                    </form>
                </div>
                <!-- //form -->
            </div>
        </div>
    
    </div>
    <!-- //banner -->

    <!-- banner bottom -->
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
    <!-- //banner bottom -->

    <!-- services -->
    <div class="services py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-xl-5 mb-sm-4 mb-2 text-center text-wh font-weight-bold">What We Do?</h3>
            <div class="row w3pvtits-services-row text-center">
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-leanpub ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Active Learning</h4>
                        <p class="text-left">Itaque earum rerum hic tenetur asap iente delectus rulla accumsan.</p>
                        <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-graduation-cap ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Full Day Programs </h4>
                        <p class="text-left">Itaque earum rerum hic tenetur asap iente delectus rulla accumsan.</p>
                        <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 serv-w3mk mt-5">
                    <div class="w3pvtits-services-grids">
                        <span class="fa fa-users ser-icon" aria-hidden="true"></span>
                        <h4 class="text-bl my-4">Expert Teachers</h4>
                        <p class="text-left">Itaque earum rerum hic tenetur asap iente delectus rulla accumsan.</p>
                        <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- courses -->
    <section class="branches py-5" id="courses">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-center font-weight-bold">Popular Courses</h3>
            <div class="row branches-position pt-lg-4">
                <div class="col-lg-3 col-sm-6 place-w3">
                    <!-- branch-img -->
                    <div class="team-img team-img-1">
                        <div class="team-content">
                            <h4 class="text-wh">Course 1</h4>
                            <p class="team-meta">Smod enim aug</p>
                        </div>
                    </div>
                </div>
                <!-- / branch-img -->
                <div class="col-lg-3 col-sm-6 place-w3 mt-sm-0 mt-4">
                    <!-- team-img -->
                    <div class="team-img team-img-2">
                        <div class="team-content">
                            <h4 class="text-wh">Course 2</h4>
                            <p class="team-meta">Cura bitur eui</p>
                        </div>
                    </div>
                </div>
                <!-- /.branch-img -->
                <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4">
                    <!-- team-img -->
                    <div class="team-img team-img-3">
                        <div class="team-content">
                            <h4 class="text-wh">Course 3</h4>
                            <p class="team-meta">In tempus ac</p>
                        </div>
                    </div>
                </div>
                <!-- /.branch-img -->
                <div class="col-lg-3 col-sm-6 place-w3 mt-lg-0 mt-4">
                    <!-- team-img -->
                    <div class="team-img team-img-4">
                        <div class="team-content">
                            <h4 class="text-wh">Course 4</h4>
                            <p class="team-meta">Cuan nibh sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //places -->

    <!-- stats section -->
    <div class="middlesection-w3pvt py-sm-5 pt-sm-0 pt-5 mt-5" id="stats">
        <div class="container py-xl-5 py-lg-3">
            <div class="offset-lg-4 offset-sm-3 left-build-wthree aboutright-w3pvtwthree">
                <h3 class="title-w3-2 title-w3 mb-md-5 mb-4 font-weight-bold">Our Statistics</h3>
                <div class="row">
                    <div class="col-4 w3layouts_stats_left w3_counter_grid">
                        <h4 class="counter">38+</h4>
                        <p class="para-text-w3ls text-li let">Total Teachers</p>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid2">
                        <h4 class="counter">30</h4>
                        <p class="para-text-w3ls text-li let">Class Rooms</p>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid1">
                        <h4 class="counter">12</h4>
                        <p class="para-text-w3ls text-li let">School Buses</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="property-paper">
            <img src="images/img3.png" alt="" class="img-fluid agents-w3" />
        </div>
    </div>
    <!-- //stats section -->

    <!-- events -->
    <section class="blog_w3ls py-5" id="events">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-center font-weight-bold">Don't Miss Our Event</h3>
            <div class="row mt-4">
                <!-- blog grid -->
                 <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header m-0">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Proin eget tortor risus. Curabitur aliquet quam id dui posuere
                                blandit. Vivamus
                                magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: Loremipsum</b>
                            </small>
                            <span>
                                March 20,2019
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header m-0">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Proin eget tortor risus. Curabitur aliquet quam id dui posuere
                                blandit. Vivamus
                                magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: Loremipsum</b>
                            </small>
                            <span>
                                March 20,2019
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Proin eget tortor risus. Curabitur aliquet quam id dui posuere
                                blandit. Vivamus
                                magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: Loremipsum</b>
                            </small>
                            <span>
                                March 22,2019
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
            <div class="row mt-lg-4">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header m-0">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Proin eget tortor risus. Curabitur aliquet quam id dui posuere
                                blandit. Vivamus
                                magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: Loremipsum</b>
                            </small>
                            <span>
                                March 24,2019
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Proin eget tortor risus. Curabitur aliquet quam id dui posuere
                                blandit. Vivamus
                                magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: Loremipsum</b>
                            </small>
                            <span>
                                March 26,2019
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="blog-title card-title m-0">
                                <a href="single.html">Cras ultricies ligula sed.</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Proin eget tortor risus. Curabitur aliquet quam id dui posuere
                                blandit. Vivamus
                                magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small class="text-bl">
                                <b>By: Loremipsum</b>
                            </small>
                            <span>
                                March 28,2019
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //events -->

    <!-- gallery -->
    <div class="gallery-cont text-center pb-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-bl font-weight-bold">Our Gallery</h3>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="assets/images/g1.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="assets/images/g2.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="assets/images/g3.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal4"><img src="assets/images/g4.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="assets/images/g5.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal6"><img src="assets/images/g6.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal7"><img src="assets/images/g7.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal8"><img src="assets/images/g8.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal9"><img src="assets/images/g9.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <!-- gallery popups -->
            <!-- popup-->
            <div id="gal1" class="pop-overlay animate">
                <div class="popup">
                    <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g2.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g3.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g4.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g5.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g6.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal7" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g7.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal8" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g8.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal9" class="pop-overlay animate">
                <div class="popup">
                    <img src="assets/images/g9.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                        dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- //gallery popups -->
        </div>
    </div>
    <!-- //gallery -->

    <!-- testimonials -->
    <section class="clients py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">What Students Say</h3>
            <div class="feedback-info text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod.
                    sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi</p>
                <img src="assets/images/te1.jpg" alt=" " class="img-fluid mt-5">
                <h4 class="mt-4 text-wh font-weight-bold mb-4">Mary Jane</h4>
            </div>
        </div>
    </section>
    <!-- contact-->
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
    <!-- //contact -->

    <!-- footer -->
    <?php include "layout/footer.php"; ?>
    <!-- //footer -->
    <!-- copyright -->
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-angle-double-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>