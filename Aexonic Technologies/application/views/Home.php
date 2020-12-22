
<!DOCTYPE html>
<html lang="en">
    <head>

     <title>Employee Profile</title>
     
    <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo1.png">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/line-awesome.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.min.css">
    <!-- Tagsinput CSS -->
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
    </head>
    <body>
  <!-- Main Wrapper -->
    <div class="main-wrapper">

    <!-- Header -->
        <div class="header">
        <!-- Header Title -->
      <div class="page-title-box">
        <h3>Aexonic Technologies Pvt. Ltd.</h3>
      </div>
      <!-- /Header Title -->
      
    
  </div>
  <!-- /Header -->
      
<!-- Page Wrapper -->
<div class="page-wrapper">

  <!-- Page Content -->
  <div class="content container-fluid">

    <!-- Page Title -->
    <div class="row">
      <div class="col">
        <h4 class="page-title">Employees</h4>
      </div>
      <div class="col-auto text-right float-right ml-auto m-b-30">
        <a class="btn add-btn" href="<?php echo base_url();?>Login/register">Register</a>
            <a class="btn add-btn" href="<?php echo base_url();?>Login/e_login">Login</a>
      </div>
    </div>
    <!-- /Page Title -->

    <div class="row" id="load_view">
      <div class="col-md-12">
        <div class="table-responsive">
          <table id="example_table" class="table table-striped custom-table datatable">
            <thead>
              <tr>
                <th>Id</th>
                <th>Profile Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php if(isset($record['emp_details'])){ 
              $data_cou=count($record['emp_details']);
              for($i=0;$i<$data_cou;$i++){ 
                if($record['emp_details'][$i]['emp_status'])
                  $st = "Active";
                else
                  $st = "In-Active";
                ?> 
              <tr>
                <td><?php echo $i+1; ?></td>
                <td>
                  <h2 class="table-avatar">
                    <img alt=""
                        src="<?php echo $this->config->item('user_data_path'); ?>/<?php echo $record['emp_details'][$i]['emp_photo']; ?>"
                        style="height: 70px;border-radius: 50%;width: 70px;">
                  </h2>
                </td>
                <td><?php echo $record['emp_details'][$i]['emp_name']; ?></td>
                <td><?php echo $record['emp_details'][$i]['username']; ?></td>
                <td><?php echo $st; ?></td>
              </tr>
              <?php }}?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Content -->

</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

<!-- Select2 JS -->
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>

<!-- Datetimepicker JS -->
<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>

<!-- Datatable JS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>

<!-- Custom JS -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>

<script type="text/javascript">

$(document).ready(function () {
  $("#example_table_length").css('display','none');
});
</script>

</html>