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

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
		
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
							<h3 class="account-title">Update Details</h3><br>
							<!-- <p class="account-subtitle">Access to our dashboard</p> -->
							
							<!-- Account Form -->
							<form id="submit" enctype="multipart/form-data">
								<input class="form-control" type="hidden" id="emp_id" name="emp_id" autocomplete="off" value="<?php if(!empty($record['emp_details'][0]['id']))echo $record['emp_details'][0]['id'];?>">
								<div class="form-group">
									<label>Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="emp_name" name="emp_name" autocomplete="off" value="<?php if(!empty($record['emp_details'][0]['emp_name']))echo $record['emp_details'][0]['emp_name'];?>">
									<span class="text-danger" id="name_error"></span>
								</div>
								<div class="form-group">
									<label>Email <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="emp_username" name="emp_username" autocomplete="off" value="<?php if(!empty($record['emp_details'][0]['username']))echo $record['emp_details'][0]['username'];?>">
									<span id="username_already" style="display: none;"><?php if(!empty($record['emp_details'][0]['username']))echo $record['emp_details'][0]['username'];?></span>
									<span class="text-danger" id="username_error"></span>
									<span id="reg_username_checked" style="display: none;"></span>
								</div>
								<div class="form-group">
									<label>Password <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="emp_password" name="emp_password" autocomplete="off" value="<?php if(!empty($record['emp_details'][0]['emp_password']))echo base64_decode($record['emp_details'][0]['emp_password']);?>">
									<span class="text-danger" id="password_error"></span>
								</div>
								<div class="form-group">
									<label>Phone <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="emp_phone" name="emp_phone" autocomplete="off" max="10" min="10" value="<?php if(!empty($record['emp_details'][0]['emp_phone']))echo $record['emp_details'][0]['emp_phone'];?>">
									<span class="text-danger" id="phone_error"></span>
								</div>

								<div class="form-group">
									<label>Country <span class="text-danger">*</span></label>
									<select class="select form-control" name="country" id="country">
											<option value="">Select Country</option>
											<?php if (isset($record['countries'])) {
												$dep_cou = count($record['countries']);
												for ($i = 0; $i < $dep_cou; $i++) {
													?>
											<option value="<?php echo $record['countries'][$i]['id']; ?>" <?php if ($record['emp_details'][0]['country'] == $record['countries'][$i]['id']) echo ' selected="selected"'; ?>><?php echo $record['countries'][$i]['name']; ?></option>
											<?php }
											}; ?>
										</select>
									<span class="text-danger" id="country_error"></span>
								</div>
								<div class="form-group">
									<label>State <span class="text-danger">*</span></label>
									<select class="select form-control" id="state" name="state">
										<option value="">Select State</option>
											<?php if (isset($record['states'])) {
												$dep_cou = count($record['states']);
												for ($i = 0; $i < $dep_cou; $i++) {
													?>
											<option value="<?php echo $record['states'][$i]['id']; ?>" <?php if ($record['emp_details'][0]['state'] == $record['states'][$i]['id']) echo ' selected="selected"'; ?>><?php echo $record['states'][$i]['name']; ?></option>
											<?php }
											}; ?>
									</select>
									<span class="text-danger" id="state_error"></span>
								</div>
								<div class="form-group">
									<label>City <span class="text-danger">*</span></label>
									<select class="select form-control" id="city" name="city">
										<option value="">Select City</option>
											<?php if (isset($record['cities'])) {
												$dep_cou = count($record['cities']);
												for ($i = 0; $i < $dep_cou; $i++) {
													?>
											<option value="<?php echo $record['cities'][$i]['id']; ?>" <?php if ($record['emp_details'][0]['city'] == $record['cities'][$i]['id']) echo ' selected="selected"'; ?>><?php echo $record['cities'][$i]['city']; ?></option>
											<?php }
											}; ?>
										</select>
									<span class="text-danger" id="city_error"></span>
								</div>
								<div class="form-group">
									<label>Pin-Code <span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="emp_pin" name="emp_pin" autocomplete="off" value="<?php if(!empty($record['emp_details'][0]['pin']))echo $record['emp_details'][0]['pin'];?>">
									<span class="text-danger" id="pin_error"></span>
								</div>
								<div class="form-group">
									<label>Status <span class="text-danger">*</span></label>
									<select class="select form-control" id="emp_status" name="emp_status">
										<option value="">Select Status</option>
											<option value="0" <?php if ($record['emp_details'][0]['emp_status'] == 0) echo ' selected="selected"' ?>>In-Active</option>
											<option value="1" <?php if ($record['emp_details'][0]['emp_status'] == 1) echo ' selected="selected"'; ?>>Active</option>
										</select>
									<span class="text-danger" id="status_error"></span>
								</div>
								<div class="form-group">
									<label>Photo <span class="text-danger"></span></label>
									<input class="form-control" type="file" id="emp_photo" name="emp_photo" autocomplete="off">
									<span class="close-icon"></span><span class="text-danger" id="photo_error"></span>
								</div>
								
								<span class="text-danger" id="login_error"></span>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Update</button>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<div style="display:none">
		<span id="emp_e_pic_dis">ok</span>
		</div>
		
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

    	$('#country').change(function() {
				getstate();
			});

		$('#state').change(function() {
				getcity();
			});

    	function getstate() {
				var country = $("#country").val();
				$.ajax({
					url: "<?php echo base_url(); ?>login/getstate",
						dataType: "html",
						type: "POST",
						data: {
							country: country
							},
							success: function(data) {
								$('#state').html(data);
							}
						});
					}

		function getcity() {
				var state = $("#state").val();

				$.ajax({
					url: "<?php echo base_url(); ?>login/getcity",
						dataType: "html",
						type: "POST",
						data: {
							state: state
							},
							success: function(data) {
								$('#city').html(data);
							}
						});
					}



		$(document).on('click', '.close-icon', function() {
				$("#emp_photo").val('');
				$(".close-icon").css('display', 'none');
				$(".close-icon:after").css('display', 'none');
				$("#photo_error").html("");
				$("#emp_e_pic_dis").html("ok");
				});

		$('#emp_photo').change(function(e) {
				var file = this.files[0].size;
				$("#photo_error").html("");
				$("#emp_e_pic_dis").html("ok");
				if (this.files[0] != "") {
					if (file > 2000000) { // 2 MB (this size is in bytes)
						$("#photo_error").html("File Size must be Under 2MB");
						$("#emp_e_pic_dis").html("not");
						}
					}
					$(".close-icon").css('display', 'inline-block');
					$(".close-icon:after").css('display', 'inline-block');
				});

		$("input#emp_username").keyup(function() {
				check_emid();
		});

		function check_emid()
		{
			$("#username_error").html("");
			var check_emailid = $("#emp_username").val();
			var already_email = $("#username_already").html();

			check_emailid = $.trim(check_emailid);
			already_email = $.trim(already_email);
			if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(check_emailid)) {
				$("#username_error").html("Enter Valid Email");
				$("#username_error").css('color', 'red');
			} else 
			if (check_emailid == already_email) {
				$("#username_error").html("Username Available");
				$("#username_error").removeClass('text-danger');
				$("#username_error").css('color', 'green');
				$("#reg_username_checked").html("Not");
			} else {
				$.ajax({
					url: "<?php echo base_url(); ?>login/check_email",
					dataType: "html",
					type: "POST",
					data: {
						check_emailid: check_emailid
					},
					success: function(data) {
						var result = $.parseJSON(data);
						if (result.isCredValid) {
							$("#username_error").html("Username Already Exist");
							$("#reg_username_checked").html("Not");
							$("#username_error").css('color', 'red');
							$("#username_error").addClass('text-danger');
						} else {
							$("#username_error").html("Username Available");
							$("#reg_username_checked").html("Available");
							$("#username_error").removeClass('text-danger');
							$("#username_error").css('color', 'green');
						}
					}
				});
			}
		}
 
        $('#submit').submit(function(e){
            e.preventDefault();
			e.stopPropagation(); 

			$("#name_error").html("");$("#username_error").html("");
			$("#password_error").html("");
            $("#phone_error").html("");$("#country_error").html("");
            $("#state_error").html("");$("#city_error").html("");
            $("#pin_error").html("");$("#photo_error").html("");
            $("#status_error").html("");
			$("#username_error").addClass('text-danger');
			
            var emp_name = $("#emp_name").val();
            var username = $("#emp_username").val();
            var emp_password = $("#emp_password").val();
			var emp_phone = $("#emp_phone").val();
			var country = $("#country").val();
			var state = $("#state").val();
			var city = $("#city").val();
			var pin = $("#emp_pin").val();
			var emp_status = $("#emp_status").val();
			var emp_photo = $("#emp_photo").val();

			check_emid();

			if(emp_name=="")
			{
				$("#name_error").html("Enter Name");
			}else if(username=="")
			{
				$("#username_error").html("Enter Email");
			}
			else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username)){
				$("#username_error").html("Enter Valid Email");
			}
			else if(emp_password=="")
			{	
				$("#password_error").html("Enter Password");
			}else if(emp_phone=="")
			{	
				$("#phone_error").html("Enter Phone Number");
			}else if(!(/^[7-9]\d+$/.test(emp_phone)))
			{	
				$("#phone_error").html("Enter Number Only Starting with 7-9");
			}else if(emp_phone.length!=10)
			{	
				$("#phone_error").html("Enter Number Should be 10 digit");
			}else if(country=="")
			{
				$("#country_error").html("Select Country");
			}else if(state=="")
			{
				$("#state_error").html("Select State");
			}else if(city=="")
			{
				$("#city_error").html("Select City");
			}else if(pin=="")
			{
				$("#pin_error").html("Enter Pin-Code");
			}else if(!(/^\d+$/.test(pin)))
			{
				$("#pin_error").html("Enter Number Only");
			}else if(emp_status=="")
			{
				$("#status_error").html("Select Status");
			}else
			{
				 $.ajax({
                     url:'<?php echo base_url(); ?>/login/emp_reg_update',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                      	var result = $.parseJSON(data);
							if(result.isCredValid)
							{
								window.location.href = "<?php echo base_url(); ?>login/profile";
							} else
							{
								alert("SomeThing went Wrong");
							}
                   }
                 });
			}
        });
    });
    </script>
</html>