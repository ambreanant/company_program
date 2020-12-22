<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  background-color: #f7f7f7;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<h2 style="text-align:center">Employee Profile</h2>

<div class="card">
  <?php if(!empty($record['emp_details'])){ ?>
  <img src="<?php echo $this->config->item('user_data_path'); ?>/<?php echo $record['emp_details'][0]['emp_photo']; ?>"  style="width:100%;height:200px">
  <!-- border-radius: 50%;width:250px; -->
  <h1><?php echo $record['emp_details'][0]['emp_name'];?></h1>
  <p class="title"><?php echo $record['emp_details'][0]['username'];?></p>
  <p>Phone: <?php echo $record['emp_details'][0]['emp_phone'];?></p>
  <p>Country: <?php echo $record['emp_details'][0]['country_name'];?></p>
  <p>State: <?php echo $record['emp_details'][0]['state_name'];?></p>
  <p>City: <?php echo $record['emp_details'][0]['city_name'];?></p>
  <p>Pin-code: <?php echo $record['emp_details'][0]['pin'];?></p>
  <p>Status: <?php if($record['emp_details'][0]['emp_status']==1)
  echo "Active";
  else if($record['emp_details'][0]['emp_status']==0)
  	echo "In-Active";?></p>
  <p><button><a style="color: white" href="<?php echo base_url();?>Login/profile_update">Click to Update</a></button></p>
  <p><button class="btn btn-primary account-btn" type="submit"><a style="color: white" href="<?php echo base_url();?>Login/logout">LogOut</a></button></p>
<?php } ?>
</div>
</body>
</html>