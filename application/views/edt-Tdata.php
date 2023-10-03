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
  <?php include 'layout/header.php'; ?>
    <!-- //header -->

    <!-- inner banner -->
    <div class="inner-banner-w3ls py-5" id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- register  -->
            <div class="modal-body mt-md-2 mt-5">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Edit data</h3>
                <form action="upd-Tdata" method="post">
                    <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" value="<?=$tclist->Name;?>" name="name"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Subject</label>
                        <input type="text" class="form-control" value="<?=$tclist->Subject;?>" name="sub" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Mobile</label>
                        <input type="number" class="form-control" name="mobile" value="<?=$tclist->Contact;?>" required>
                    </div>
                  <div class="form-group">
                        <input type="hidden" class="form-control" name="uid" value="<?=$tclist->uid;?>">
                    </div>
                <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" value="<?=$tclist->Email;?>" name="email" >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" value="<?= base64_decode($tclist->Password);?>" name="pass" >
                    </div>
                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
                            <input type="checkbox" id="brand1" required>
                            <label for="brand1" class="text-li text-style-w3ls">
                                <span></span>I Accept to the Terms & Conditions</label>
                        </div>
                    </div>
                    <button type="submit" class="btn button-style-w3">Update</button>
                </form>
            </div>
            <!-- //register -->
        </div>
    </div>
    <!-- //inner banner -->

    <!-- footer -->
   <?php include "layout/footer.php"; ?>
    <!-- //footer -->

</body>

</html>

