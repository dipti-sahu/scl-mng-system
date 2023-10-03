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
    
    <div class="row" ><center><h1>teacher list</h1></center></div>
   <div class="row" style="background-image:url(assets/images/banner.jpg);">
       <?php if($this->input->get('success')=="yes") { ?>
           <center> <h2 style="color:red"><?php echo "Register successfully.....!"; ?> </h2></center>
       <?php } ?>
       <div class="col-lg-12 col-md-12" >
            <table class="table" style="color:black">
                <tr>
                    <th>S.NO.</th>
                    <th>Name</th> 
                    <th>Subject</th>
                    <th>Mobile No</th>                   
                    <th>Email</th>
                    <th>Photo</th>
                     <th>Action</th>     
                </tr>
                <?php $i=1;
                foreach($tlist as $t) { ?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?=$t->Name;?></td>
                    <td><?= $t->Subject;?></td>
                    <td><?= $t->Contact;?></td>
                    <td><?= $t->Email;?></td>
                     <td>
                    <img src="uploads/<?=$t->Photo;?>"  alt="img.png" style="height:100px;width:100px" class="img img-fluid" width="200px;"></td>
                    <td>
                    <ul><li><a href="edt-Tdata?uid=<?= $t->uid;?>" class="btn btn-small"><img src="assets/images/edit-blue.png" width="40 40"> </a>
                            <a href="dlt-Tdata?uid=<?= $t->uid;?>" onclick="return confirm('Are you sure you want delete this data');" ><img src='assets/images/delete.jpg' width="50 50"> </a>
                        </li>
                    </ul>    
                    </td>
                </tr>
              <?php $i++; ?>
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>
