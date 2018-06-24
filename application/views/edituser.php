
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- User Registration Form-->
      <?php echo form_open();?>
        <div class="card mb-3 col-md-6 col-sm-12 col-xs-12">
          <div class="card-header text-center">
            <i class="fa fa-1x fa-table pull-left"></i><h3 class="pull-left">Add new user</h3>
          </div>
            <div class="card-body">          
              <div class="form-group">
                <label for="inputUserName">User's Full Name</label>
                <?php echo form_input( array(
                      'type' => 'text',
                      'name' => 'adminuserfname',
                      'id' => 'inputUserFullName',
                      'class' => 'form-control text-capitalize',
                      'placeholder' => 'User Full Name',
                      'value' => $get_user_data[0]['userfname'],
                  ));
                  echo form_error('adminuserfname'); ?>
              </div>
              <div class="form-group">
                <label for="inputUserLName">User's Last Name</label>
                <?php echo form_input( array(
                      'type' => 'text',
                      'name' => 'adminuserlname',
                      'id' => 'inputUserLName',
                      'class' => 'form-control text-capitalize',
                      'value' => $get_user_data[0]['userlname'],
                      'placeholder' => 'User`s Last Name',
                  ));
                  echo form_error('adminuserfname'); ?>
              </div>
              <div class="form-group">
                <label for="inputUserName">User Name</label>
                <?php echo form_input( array(
                      'type' => 'text',
                      'name' => 'adminuser',
                      'id' => 'inputUserName',
                      'class' => 'form-control text-capitalize',
                      'value' => $get_user_data[0]['user_name'],
                      'placeholder' => 'User Name',
                      'readonly' => 'readonly',
                  ));
                  echo form_error('adminuser'); ?>
              </div>
             <!--  <div class="form-group">
                <label for="inputPassword">User Password</label>
                <?php echo form_input( array(
                      'type' => 'password',
                      'name' => 'adminpassword',
                      'id' => 'inputPassword',
                      'class' => 'form-control text-capitalize',
                      'placeholder' => 'User Password',
                  )); 
                  echo form_error('adminpassword');?>
              </div>
              <div class="form-group">
                <label for="inputPassword">Re-Enter Password</label>
                <?php echo form_input( array(
                      'type' => 'password',
                      'name' => 'adminpasswordconfirm',
                      'id' => 'inputPasswordConfirm',
                      'class' => 'form-control text-capitalize',
                      'placeholder' => 'Re-Enter User Password',
                  )); 
                  echo form_error('adminpasswordconfirm');?>
              </div> -->
              <div class="form-group">
                <label for="inputPassword">Select User Role</label>
                <select class="form-control" name="adminuserrole" id="inputUserRole">
                  <option>Select User Role</option>
                  <option value="marker" <?php if($get_user_data[0]['user_role'] == 'marker' ) { echo 'selected="selected"';}?>>Marker</option>
                  <option value="signer" <?php if($get_user_data[0]['user_role'] == 'signer' ) { echo 'selected="selected"';}?>>Signer</option>
                  <option value="accountant" <?php if($get_user_data[0]['user_role'] == 'accountant' ) { echo 'selected="selected"';}?>>Accountant</option>
                  <option value="masteradmin" <?php if($get_user_data[0]['user_role'] == 'masteradmin' ) { echo 'selected="selected"';}?>>Masteradmin</option>
                </select>
                <?php echo form_error('adminuserrole');?>
              </div>
              <div class="form-group">
                <label for="inputPassword">Set User status</label>
                <select class="form-control" name="adminuserstatus" id="inputUserStatus">
                  <option selected="selected">Select User Status</option>
                  <option value="1" <?php if($get_user_data[0]['user_status'] == 1 ) { echo 'selected="selected"';}?>>Enable</option>
                  <option value="0" <?php if($get_user_data[0]['user_status'] == 0 ) { echo 'selected="selected"';}?>>Disable</option>
                </select>
                <?php echo form_error('adminuserstatus');?>
              </div>
            <?php echo form_submit('updateuser', 'Update', "class='btn btn-primary btn-block'"); ?>
        </div>
      </div>
    <?php echo form_close(); ?>
     <!-- End User Registration Form-->
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->