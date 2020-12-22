<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>Aexonic Technologies Pvt. Ltd.</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo1.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.showpassword {
			float: right;
			margin-right: 10px;
			margin-top: -30px;
			position: relative;
			z-index: 2;
		}
		</style>
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<!-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> -->
				<div class="container">
				
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Aexonic Technologies Pvt. Ltd.</h3><br>
							<!-- <p class="account-subtitle">Access to our dashboard</p> -->
							
							<!-- Account Form -->
							<form id="submit">
								<div class="form-group">
									<label>Username <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="emp_username" name="emp_username" autocomplete="off">
									<span class="text-danger" id="username_error"></span>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password <span class="text-danger">*</span></label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="<?php echo base_url();?>employees/forgot_password">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" id="emp_password" name="emp_password">
									<span toggle="#emp_password" class="fa fa-fw fa-eye field-icon showpassword" id="toggle-password"></span>
									<span class="text-danger" id="password_error"></span>
								</div>
								<span class="text-danger" id="login_error"></span>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
								<div class="account-footer">
									<p>Don't have an account yet? <a href="<?php echo base_url();?>Login/register">Register</a></p>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
		
    </body>

    <script type="text/javascript">
    	$(document).ready(function(){
 
        $('#submit').submit(function(e){
            e.preventDefault();
			e.stopPropagation(); 

            $("#username_error").html("");$("#password_error").html("");

            var username = $("#emp_username").val();
			var password = $("#emp_password").val();
			username = $.trim(username);
			password = $.trim(password);

			if(username=="")
			{
				$("#username_error").html("Enter Username");
			}
			else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username)){
				$("#username_error").html("Enter Valid Email");
			}
			else if(password=="")
			{
				$("#password_error").html("Enter Password");
			}else
			{
				 $.ajax({
                     url:'<?php echo base_url(); ?>/login/emp_login',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                      	var result = $.parseJSON(data);
							if(result.isCredValid=="Wrong Password")
							{
								$("#password_error").html("Invalid Password");
							} else if(result.isCredValid=="Wrong credentials")
							{
								$("#username_error").html("Username doesn't exist");
							} else if(result.isCredValid=="Account Block")
							{
								$("#login_error").html("Your Account has been Block");
							} else if(result.isCredValid)
							{
								window.location.href = "<?php echo base_url(); ?>login/profile";
							}
                   }
                 });
			}
        });
    });

	$("#toggle-password").click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});
    </script>
</html>