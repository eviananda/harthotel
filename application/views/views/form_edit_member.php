
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel For Hart Hotels | Add Member </title>
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
        <h2>
				<a href="<?php echo base_url() . 'halaman' ?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Member</span>
        <i class="fa fa-angle-right"></i>
        <span>Edit Member</span>
				</h2>
         </ol>

		    </div>
		<!--//banner-->

		<div class="typo-grid">
      <div class="typo-1">
       <div class="grid_3 grid_4">

         <form method="POST" action="<?php echo base_url()."MemberController/do_update"; ?>  " class="form-horizontal">
          <table>
              <div class="form-group">
              <label class="control-label col-sm-2" >ID Member :</label>
              <div class="col-sm-10">
                 <input class="form-control" type="textarea" name="id_member" value="<?php echo $id_member; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >First Name :</label>
              <div class="col-sm-10">
                 <input class="form-control" type="textarea" name="first_name" value="<?php echo $first_name; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Last Name :</label>
              <div class="col-sm-10">
               <input class="form-control" type="text" name="last_name" value="<?php echo $last_name; ?>">
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-2" >Address :</label>
              <div class="col-sm-10">
               <input class="form-control" type="text" name="address" value="<?php echo $address; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >City :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="city" value="<?php echo $city; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Country :</label>
              <div class="col-sm-10">
               <input class="form-control" type="text" name="country" value="<?php echo $country; ?>">
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-2" >Zipcode :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="zipcode" value="<?php echo $zipcode; ?>">
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-2" >Email :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Username :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-2" >Password :</label>
              <div class="col-sm-10">
                <input class="form-control" class="form-control"class="form-control"type="text" name="password" value="<?php echo $password; ?>">
              </div>
            </div>


            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="btnSubmit" value="Simpan" >Submit</button>
              </div>
            </div>
          </table>
      </form>



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

