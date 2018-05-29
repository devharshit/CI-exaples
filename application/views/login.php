<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo ucwords($page_title);?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>/ui/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>/ui/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Noty CSS -->
  <!-- <link href="https://cdn.rawgit.com/needim/noty/77268c46/lib/noty.css" rel="stylesheet"> -->
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/ui/css/sb-admin.css" rel="stylesheet">
  <!-- Custom styles for admin template-->
  <link href="<?php echo base_url();?>/ui/css/style.css" rel="stylesheet">
</head>

<body class="bg-dark login-wrapper">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <!-- <form> -->
        <?php echo form_open('Login'); ?>
          <div class="form-group">
            <label for="exampleInputUserName">Email address</label>
            <?php echo form_input( array(
                  'type' => 'text',
                  'name' => 'adminuser',
                  'id' => 'exampleInputUserName',
                  'class' => 'form-control',
                  'placeholder' => 'User Name',
                  // 'required' => 'required'
              ));
              echo form_error('adminuser'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <?php echo form_input( array(
                  'type' => 'password',
                  'name' => 'adminpassword',
                  'id' => 'exampleInputPassword',
                  'class' => 'form-control',
                  'placeholder' => 'User Password',
                  // 'required' => 'required'
              )); 
              echo form_error('adminpassword');?>
          </div>
        <?php echo form_submit('userlogin', 'Login', "class='btn btn-primary btn-block'"); ?>
        <!-- <div class="login-error-message">
          <p class="text text-danger"><?php echo $error_msg; ?></p>
        </div> -->
          <!-- </form> -->
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>/ui/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/ui/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>/ui/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Noty Js -->
  <!-- <script src="https://cdn.rawgit.com/needim/noty/77268c46/lib/noty.min.js"></script> -->
  <!-- Custom Js -->
  <script src="<?php echo base_url();?>/ui/vendor/jquery-easing/script.js"></script>
</body>

</html>
