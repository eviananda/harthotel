<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sign in an Admin Panel Hart Hotel | Signin php :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<script src="assets/js/jquery.min.js"> </script>
<script src="assets/js/bootstrap.min.js"> </script>
</head>
<body> 
<!--
	<div class="login">
		<h1><a href="index.html">Minimal </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form action="<?php ?>" method="post">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Username" name="username" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="password" required="">
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					<p>Do not have an account?</p>
				<a href="signup.html" class="hvr-shutter-in-horizontal">Signup</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	-->
		<!---->
		    
        <div class="login">
          <form class="row  login" method="POST" action="<?php echo site_url('Login_controller/masuk');?>">
                <h1>Login Admin</h1>
                <div class="row">
                  <div class="col-md-4 col-xs-4">
                    </div> 
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="username" class="form-control " type="text" placeholder="username/id">
                    </div> 
                </div>
                <div class="row">
                  <div class="col-md-4 col-xs-4">
                    </div>
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="password" class="form-control " type="password" placeholder="password">
                    </div> 
                </div>
                <div class="col-md-2 col-sm-offset-5 col-xs-offset-3 login-do" >
                  <label class="hvr-shutter-in-horizontal" >
                    <input name="submit" type="submit" value="Login">
                  </label>
                </div>
            </form> 

         
      <div><?php echo $this-> session->flashdata('pesan');?></div>
     
    </div>
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>