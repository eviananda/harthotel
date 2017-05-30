
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel For Hart Hotels | Buzz </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css') ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet"> 
<script src="assets/js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
<script src="assets/js/custom.js"></script>
<script src="assets/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Hart Hotel</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="nav navbar-nav navbar-right navbar-user">
		    	        <a href="#" class="btn btn-default btn-lg">
          				<span class="fa fa-sign-out"></span> Log out
        				</a>
		      <div class="clearfix"> </div>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
           						<li>
                                    <a href="<?php echo base_url() . 'halaman' ?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'buzz/readData' ?>" class=" hvr-bounce-to-right"><i class="fa fa-file nav_icon"></i> <span class="nav-label">Buzz</span> </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'member' ?>" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Member</span> </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'admin_r' ?>" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Admin Setting</span> </a>
                                </li>
								
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   <ol class="breadcrumb">
				<li>
        <h2>
				<a href="<?php echo base_url() . 'halaman' ?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Member</span>
				</h2>
        </li>
         <a href="<?php echo base_url() . 'addMember'  ?>"><button  type="button" class="btn btn-primary" style="float:right;"><i class="fa fa-plus-square"></i> Tambah Member</button></a>
         </ol>

		    </div>
		<!--//banner-->

		<div class="typo-grid">
      <div class="typo-1">
       <div class="grid_3 grid_4">
      <div class="table-responsive">
        <table class="table table-bordered">

          <thead style="background: #63c4b1;" align="center">
            <td>Id Member</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td>City</td>
            <td>Country</td>
            <td>Zipcode</td>
            <td>Email</td>
            <td>Username</td>
            <td>Password</td>
            <td>Action</td>
          </thead>
          <tbody>
              <?php foreach ($data as $x) { ?>
              <tr>
              <td><?= $x['id_member'] ?></td>
              <td><?= $x['first_name'] ?></td>
              <td><?= $x['last_name'] ?></td>
              <td><?= $x['address'] ?></td>
              <td><?= $x['city'] ?></td>
              <td><?= $x['country'] ?></td>
              <td><?= $x['zipcode'] ?></td>
              <td><?= $x['email'] ?></td>
              <td><?= $x['username'] ?></td>
              <td><?= $x['password'] ?></td>
              <td align="center"> 
                <a href="<?php echo base_url()."MemberController/edit_data/".$x['id_member']; ?>" >  Edit  </a> ||
                <a href="<?php echo base_url()."MemberController/delete/".$x['id_member']; ?>"> Delete </a>
                </td>
              </tr>
              <?php } ?>
          </tbody>

        
  
        </table>
                
      </div>

     </div>
     </div>
      


       
	<div class="clearfix"> </div>
	</div>

		<div class="content-mid">

			<div class="clearfix"> </div>
		</div>
		<!----->


		</div>
	
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

