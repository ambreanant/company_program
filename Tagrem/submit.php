<?php
	
include("User.php");

if(isset($_POST) && !empty($_POST)){

	$objUser = new User();
	$objUser->attributes = $_POST;
	// $objUser->validate();
	
	if($objUser->validate()){
		if($objUser->save())
		{
			// echo "User Created Successfully!";
			echo "<script ype='text/javascript'>alert('User Created Successfully!')</script>";
			header("Refresh:0");
		}
	}else
	{
		echo User::getErrorSummary($objUser);
	}

}
	?>


<form name="userForm" action="submit.php"  method="post">
	Name:<input type="text" name="name" value="<?php if(!empty($_POST['name'])) {echo $_POST['name']; }else { echo'';} ?>" placeholder="Enter Name"><br><br>
	
	username:<input type="text" name="username" value="<?php if(!empty($_POST['username'])) {echo $_POST['username']; }else { echo'';} ?>" placeholder="Enter UserName"><br><br>
	
	password:<input type="password" name="password" value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; }else { echo'';} ?>" placeholder="Enter Password"><br><br>
 	
 	Confirm Password: <input type="password" name=" confirm_password" value="<?php if(!empty($_POST['confirm_password'])) {echo $_POST['confirm_password']; }else { echo'';} ?>" placeholder="Enter Confirm Password"><br><br>
	
	Zip Code: <input type="text" name="zip_code" value="<?php if(!empty($_POST['zip_code'])) {echo $_POST['zip_code']; }else { echo'';} ?>" placeholder="Enter Zip Code"><br><br>

<input type="submit">
