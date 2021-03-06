<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Hart Hotel</title>
<!-- Bootstrap Core CSS -->
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo base_url ('assets/assets/css/bootstrap.min.css')?>" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url ('assets/assets/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href=""<?php echo base_url ('assets/assets/css/animate.min.css')?>" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href=""<?php echo base_url ('assets/assets/css/style.css')?>" type="text/css">
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand page-scroll" href="#page-top"><img width ="15px" heigt="5px" src="<?php echo base_url('assets/assets/img2/harthotel3.png') ?>" alt="harthotel"></a>
  </div>

  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand page-scroll" href="#page-top"><img width ="40px" heigt="5px" src="<?php echo base_url('assets/assets/img2/harthotel2.png') ?>" alt="harthotel"></a>
  </div>


  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li>
      <a class="page-scroll" href="http://hotelhart.000webhostapp.com/index.php/Dashbor/">Home</a>
      </li>
      <li>
      <a class="page-scroll" href="http://hotelhart.000webhostapp.com/index.php/Dashbor/#about">Rooms</a>
      </li>
      <li>
      <a class="page-scroll" href="http://hotelhart.000webhostapp.com/index.php/Dashbor/#gallery">Gallery</a>
      </li>
      <li>
      <a class="page-scroll" href="http://hotelhart.000webhostapp.com/index.php/Dashbor/#services">Event</a>
      </li>
      <li>
      <a class="page-scroll" href="http://hotelhart.000webhostapp.com/index.php/Dashbor/#contact">Contact</a>
      </li>
     <li>
<a class="page-scroll" href="<?php echo base_url('index.php/Login/logout') ?>" title="Logout">Logout</a>
</li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>


<!-- Section Contact
================================================== -->
<section id="register">
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2 text-center">
  <br>
  <br>
        <h2 class="section-heading"> <b>PROFIL MEMBER</b></h2>
    <hr class="primary">
    <p>
       Silahkan Update Profil Anda
    </p>
    <div class="regularform">
    <!--Action nya ke fungsi submit di controller HOME-->
      <form action="<?php echo base_url("index.php/Login/do_updateprop/$id_member");?>" method="POST" >
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $first_name; ?>">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="text" id = "email" name="email" class="form-control" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" class="form-control" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" class="form-control" value="<?php echo $password; ?>">
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <input type="text" id="country" name="country" class="form-control" value="<?php echo $country; ?>">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
    <input type="text" id="address" name="address" class="form-control" value="<?php echo $address; ?>" > 
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" id="city" name="city" class="form-control" value="<?php echo $city; ?>" >
    </div>
    <div class="form-group">
      <label for="zipcode">Zip Code:</label>
      <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $zipcode; ?>">
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update now</button>
  </form>
    </div>
  </div>
</div>
</div>
</section>

<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
    <h1 class="bottombrand wow flipInX">HART HOTEL</h1>
    <p>
      &copy; 2017 FP PBW A by Amanda&Evia
    </p>
  </div>
</div>
</div>
</section>
<!-- jQuery -->
<script src="<?php echo base_url('assets/assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/js/parallax.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/js/contact.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/js/countto.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/jquery.easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/js/wow.min.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/js/common.js')?>"></script>
</body>
</html>