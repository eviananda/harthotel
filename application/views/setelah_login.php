<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>HART HOTEL</title>
<script language="JavaScript">
var txt="HART HOTEL LOMBOK ";
var kecepatan=100;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap.min.css')?>" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/animate.min.css')?>" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css')?>" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
		<a class="navbar-brand page-scroll" href="#page-top"><img width ="15px" heigt="5px" 
		src="<?php echo base_url('assets/assets/img2/harthotel3.png')?>" alt="harthotel"></a>
	</div>

	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><img width ="40px" heigt="5px" 
		src="<?php echo base_url('assets/assets/img2/harthotel2.png')?>" alt="harthotel"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="http://hotelhart.000webhostapp.com/index.php/Dashbor/#page-top">Home</a>
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
			<li>
			<a href="<?php echo base_url();?>index.php/Login/updateprop/<?php echo $this->session->userdata('id');?>">
    		<?php echo ucfirst($this->session->userdata('username')); ?></a>
    		</li>
		
	

		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(<?php echo base_url('assets/assets/img2/2.jpg')?>">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
				Serving with heart</h2>
				<h1 data-animation="animated bounceInUp">
				HART HOTEL</h1>
				<a href="https://www.traveloka.com/en/hotel/indonesia/hart-hotel-1000000513229" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">BOOK NOW</a>
				<!--<a href="#" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Learn More</a>-->
			</div>
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(<?php echo base_url('assets/assets/img2/1.jpg')?>">
			<div class="carousel-caption">
				<h2 data-animation="animated zoomInLeft">
				Best budget hotel in town</h2>
				<h1 data-animation="animated zoomInRight">
				HART HOTEL </h1>
				<a href="https://www.traveloka.com/en/hotel/indonesia/hart-hotel-1000000513229" class="btn btn-ghost btn-lg" data-animation="animated bounceIn">BOOK NOW</a>
				<!--<a href="#" class="btn btn-primary btn-lg" data-animation="animated bounceIn">Learn More</a>-->
			</div>
		</div>
		<!-- /.item -->
		<!-- Third slide -->
		<div class="item" style="background-image:url(<?php echo base_url('assets/assets/img2/3.JPG')?>">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInLeft">
				Your friendly company</h2>
				<h1 data-animation="animated bounceInRight">
				HART HOTEL</h1>
				<a href="https://www.traveloka.com/en/hotel/indonesia/hart-hotel-1000000513229" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">BOOK NOW</a>
				<!-- <a href="#" class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Learn More</a>-->
			</div>
		</div>
		<!-- /.item -->
	</div>
	<!-- /.carousel-inner -->
	<!-- Controls (currently displayed none from style.css)-->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>
<!-- /.carousel -->

<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading">HISTORY</b></h2>
			<hr>
			<p>
				Berdiri sejak 2015, HART HOTEL menjadi salah satu budget hotel terfavorit di Mataram. Terletak di pusat kota , HART HOTEL termasuk paling strategis karena dekat dengan pusat perbelanjaan, restoran, dan tempat wisata.  
			</p>
			<h2>HART HOTEL 2 COMING SOON!</h2>

			
	</div>
</div>
</div>
</section>

<!-- Section after about
================================================== -->
<section class="no-padding">
<div class="equal-heights w-middle">
<!--<div class="col-md-4 bg-primary">
	<div class="box">
		<h2>Make a Difference</h2>
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus.
		</p>
		<a href="#" class="btn btn-round btn-white btn-xl">Find a Cause!</a>
	</div>
</div>-->
<div class="col-md-4">
	<img src="<?php echo base_url('assets/assets/img2/StR2.jpg')?>" class="img-responsive" alt="">
</div>
<div class="col-md-4">
	<img src="<?php echo base_url('assets/assets/img2/SuD2.jpg')?>" class="img-responsive" alt="">
</div>
<div class="col-md-4">
	<img src="<?php echo base_url('assets/assets/img2/SuT2.jpg')?>" class="img-responsive" alt="">
</div>
<!--<div class="col-md-4 bg-dark">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>-->
</div>
<div class="equal-heights w-middle">
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2><b>Standard Room</b></h2>
		<p>
			 Room Overview
Room Size	14.0 sqm
Bed Type	1 double bed
Basic Facilities
Breakfast
Non smoking rooms
Free WiFi
Room Amenities
Air conditioning
Television
Complimentary bottled water
Desk
Bathroom Amenities
Private bathroom
Shower
Hot water
Toiletries
		</p>
	</div>
</div>
<div class="col-md-4 bg-darkgray">
	<div class="box">
		<h2> <b>Superior Double</b></h2>
		<p>
			 Room Overview
Room Size	17.0 sqm
Bed Type	1 double bed
Basic Facilities
Breakfast
Non smoking rooms
Free WiFi
Room Amenities
Air conditioning
Television
Complimentary bottled water
Desk
Bathroom Amenities
Private bathroom
Shower
Hot water
Toiletries
		</p>
	</div>
</div>
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2> <b>Superior Twin</b></h2>
		<p>
			 Room Overview
Room Size	17.0 sqm
Bed Type	1 double bed
Basic Facilities
Breakfast
Non smoking rooms
Free WiFi
Room Amenities
Air conditioning
Television
Complimentary bottled water
Desk
Bathroom Amenities
Private bathroom
Shower
Hot water
Toiletries
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Fasilitas
================================================== -->
<!--<section id="services">-->
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b> OUR FACILITIES</b></h2>
		<hr class="primary">
	</div>
</div>
</div>
<div class="container">
<div class="row">
	<!-- begin 1st row -->
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-automobile wow bounceIn text-fade"></i>
			</div>
			<h3>Parking</h3>
			<p class="text-muted">
				 Tersedia lahan parkir yang cukup luas bagi kendaraan Anda.
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-bell wow bounceIn text-fade" data-wow-delay=".1s"></i>
			</div>
			<h3> 24-Hour Front Desk</h3>
			<p class="text-muted">
				 Resepsionis kami siap melayani Anda 24 jam.
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-cutlery wow bounceIn text-fade" data-wow-delay=".2s"></i>
			</div>
			<h3>Restaurant</h3>
			<p class="text-muted">
				 Dengan senang hati menyediakan santap pagi,siang,dan malam bagi Anda.
			</p>
		</div>
	</div>
</div>
<!-- end 1st row -->
<br/>
<div class="row">
	<!-- begin 2nd row -->
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-wifi wow bounceIn text-fade"></i>
			</div>
			<h3>WiFi</h3>
			<p class="text-muted">
				 Koneksi kencang untuk menunjang kebutuhan bisnis dan hiburan Anda
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-diamond wow bounceIn text-fade" data-wow-delay=".1s"></i>
			</div>
			<h3>Beauty Spa</h3>
			<p class="text-muted">
				 Spa tradisional kami yang mampu memanjakan tubuh Anda
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-bed wow bounceIn text-fade" data-wow-delay=".2s"></i>
			</div>
			<h3>Rooms</h3>
			<p class="text-muted">
				 Kamar yang minimalis, nyaman dan bersih.
			</p>
		</div>
	</div>
</div>
<!-- end 2nd row -->
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Services
================================================== -->
<section id="services">
<section class="no-padding">
<div class="col-md-4  no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
<?php foreach ($data as $row):?>
        <?php if($row->id_artikel == '10'){ ?>
	<img src="<?php echo base_url();?>assets/images/<?php echo $row->gambar;?>" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
		<p>
		<div>
		<!--ini untuk nampilkan artikel dari DB-->
			<h1><?php echo $row->judul;?></h1>
			<a href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">BACA ARTIKEL</a>
		</div>
		</p>
		</div>
	</div>
</div>
<!--edit artikel di bawahnya gambar disini-->

	<h2><?php echo $row->judul;?></h2>  
	<?php $lagu=$row->isi;
    $lagu=character_limiter($lagu,100);?>
    <p><?php echo $lagu;?></p>   
   <p align="center"> <a href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">BACA ARTIKEL</a> </p>
	<?php } ?>
    	<?php endforeach;?>
	<p>
<div>
</div>
</p>
<div class="team-social bg-primary">
	

</div>
</div>
<div class="col-md-4  no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<?php foreach ($data as $row):?>
        <?php if($row->id_artikel == '12'){ ?>
	<img src="<?php echo base_url();?>assets/images/<?php echo $row->gambar;?>" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
		<p>
		<div>
		<!--ini untuk nampilkan artikel dari DB-->
			<h1><?php echo $row->judul;?></h1>
			<a href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">BACA ARTIKEL</a>
		</div>
		</p>
		</div>
	</div>
</div>
<!--edit artikel di bawahnya gambar disini-->

	<h2><?php echo $row->judul;?></h2>  
	<?php $lagu=$row->isi;
    $lagu=character_limiter($lagu,100);?>
    <p><?php echo $lagu;?></p>   
   <p align="center"> <a href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">BACA ARTIKEL</a> </p>
	<?php } ?>
    	<?php endforeach;?>
	<p>
<div>
</div>
</p>
<div class="team-social bg-dark">
	
</div>
</div>
<div class="col-md-4  no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<?php foreach ($data as $row):?>
        <?php if($row->id_artikel == '11'){ ?>
	<img src="<?php echo base_url();?>assets/images/<?php echo $row->gambar;?>" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
		<p>
		<div>
		<!--ini untuk nampilkan artikel dari DB-->
			<h1><?php echo $row->judul;?></h1>
			<a href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">BACA ARTIKEL</a>
		</div>
		</p>
		</div>
	</div>
</div>
<!--edit artikel di bawahnya gambar disini-->

	<h2><?php echo $row->judul;?></h2>  
	<?php $lagu=$row->isi;
    $lagu=character_limiter($lagu,100);?>
    <p><?php echo $lagu;?></p>   
   <p align="center"> <a href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">BACA ARTIKEL</a> </p>
	<?php } ?>
    	<?php endforeach;?>
	<p>
<div>
</div>
</p>
<div class="team-social bg-primary" >
	
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Testimonials
================================================== -->
<section id="testimonials">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>TESTIMONIALS</b></h2>
		<hr class="primary">
		<br/>
	</div>
	<div class="col-md-12" data-wow-delay="0.2s">
		<div class="carousel slide" data-ride="carousel" id="quote-carousel">
			<!-- Bottom Carousel Indicators -->

			<!--<ol class="carousel-indicators">
				<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/demo/testimonial1.jpg" alt="">
				</li>
				<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/11/2015/11/23042525/1-150x150.png" alt="">
				</li>
			</ol>-->

			<!-- Carousel Slides / Quotes -->
			<div class="carousel-inner text-center">
				<!-- Quote 1 -->
				<div class="item active">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									It was great staying there. A very affordable hotel in city center.
								</p>
								<small>Fidia A. - Feb 25, 2017</small>
							</div>
						</div>
					</blockquote>
				</div>

				
				<!-- Quote 2 -->
				<div class="item">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									It was a nice experience for a short period of stay.
								</p>
								<small>Utami S. - Mar 20, 2017</small>
							</div>
						</div>
					</blockquote>
				</div>
				<!-- End Quote 2 -->

				<!-- Quote 3 -->
				<div class="item">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									This hotel is clean, comfortable and quite cheap. It is easy to find the hotel's location. 
								</p>
								<small>Mariani S. G. - Nov 21, 2016</small>
							</div>
						</div>
					</blockquote>
				</div>
				<!-- End Quote 3 -->


			</div>
			<!-- Carousel Buttons Next/Prev -->
			<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
			<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</div>
</div>
</section>


<!-- Section gallery
================================================== -->
<section id="gallery">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>GALLERY</b></h2>
		<hr class="primary">
		<br/>
	</div>
</div>
</div>
<div class="container-fluid">
<div class="row no-gutter">
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="gallery-box">
		<img src="<?php echo base_url('assets/assets/img2/makan.jpg')?>" class="img-responsive" alt="">
		<div class="gallery-box-caption">
			<div class="gallery-box-caption-content">
				<div class="project-category text-faded">
					 Spa
				</div>
				<div class="project-name">
					 
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="gallery-box">
		<img src="<?php echo base_url('assets/assets/img2/resto.jpg')?>" class="img-responsive" alt="">
		<div class="gallery-box-caption">
			<div class="gallery-box-caption-content">
				<div class="project-category text-faded">
					 Main Lobby
				</div>
				<div class="project-name">
					 
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="gallery-box">
		<img src="<?php echo base_url('assets/assets/img2/karyawan.jpg')?>" class="img-responsive" alt="">
		<div class="gallery-box-caption">
			<div class="gallery-box-caption-content">
				<div class="project-category text-faded">
					 Bathroom
				</div>
				<div class="project-name">
					 
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="gallery-box">
		<img src="<?php echo base_url('assets/assets/img2/malam.jpg')?>" class="img-responsive" alt="">
		<div class="gallery-box-caption">
			<div class="gallery-box-caption-content">
				<div class="project-category text-faded">
					 Towels
				</div>
				<div class="project-name">
					 
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="gallery-box">
		<img src="<?php echo base_url('assets/assets/img2/restolobi.jpg')?>" class="img-responsive" alt="">
		<div class="gallery-box-caption">
			<div class="gallery-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="gallery-box">
		<img src="<?php echo base_url('assets/assets/img2/resto2.jpg')?>" class="img-responsive" alt="">
		<div class="gallery-box-caption">
			<div class="gallery-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 
				</div>
			</div>
		</div>
		</a>
	</div>
</div>
</div>
</section>


<!-- Section Social
================================================== -->

<section id="social" class="parallax parallax-image" style="background-image:url(<?php echo base_url('assets/assets/img2/2.jpg')?>">
<div class="overlay" style="background:#222;opacity:0.5;">
</div>
<div class="wrapsection">
<div class="container">
	<div class="parallax-content">
		<div class="row wow fadeInCenter">
			
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="https://www.facebook.com/harthotel1/"><i class="fa fa-facebook"></i></a>
					</div>
					<h4>Facebook</h4>
				</div>
			</div>

			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="https://www.instagram.com/harthtl/?hl=en"><i class="fa fa-instagram"></i></a>
					</div>
					<h4>Instagram</h4>
				</div>
			</div>
			
			
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Contact
================================================== -->
<section id="contact">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">CONTACT <b>US</b></h2>
		<hr class="primary">
		<p> Address : Jalan Arjuna No. 14, Lombok, Indonesia  </p>
		<p> Zipcode : 83231 </p>
		<p> Phone	: (0370) 636108 </p>
		<p> Fax 	: (0370) 636104 </p>
		<p> E-mail	: harthotellombok@gmail.com </p>
		
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
<script src="<?php echo base_url('assets/assets/js/jquery.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/parallax.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/contact.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/countto.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/jquery.easing.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/common.js')?>"></script>
</body>
</html>