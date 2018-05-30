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
      <?php echo form_open('Users/add');?>
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
                      'class' => 'form-control',
                      'placeholder' => 'User Full Name',
                  ));
                  echo form_error('adminuserfname'); ?>
              </div>
              <div class="form-group">
                <label for="inputUserName">User Name</label>
                <?php echo form_input( array(
                      'type' => 'text',
                      'name' => 'adminuser',
                      'id' => 'inputUserName',
                      'class' => 'form-control',
                      'placeholder' => 'User Name',
                  ));
                  echo form_error('adminuser'); ?>
              </div>
              <div class="form-group">
                <label for="inputPassword">User Password</label>
                <?php echo form_input( array(
                      'type' => 'password',
                      'name' => 'adminpassword',
                      'id' => 'inputPassword',
                      'class' => 'form-control',
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
                      'class' => 'form-control',
                      'placeholder' => 'Re-Enter User Password',
                  )); 
                  echo form_error('adminpasswordconfirm');?>
              </div>
              <div class="form-group">
                <label for="inputPassword">Select User Role</label>
                <select class="form-control" name="adminuserrole" id="inputUserRole">
                  <option selected="selected">Select User Role</option>
                  <option value="marker">Marker</option>
                  <option value="signer">Signer</option>
                  <option value="accountant">Accountant</option>
                  <option value="masteradmin">Masteradmin</option>
                </select>
                <?php echo form_error('adminuserrole');?>
              </div>
              <div class="form-group">
                <label for="inputPassword">Set User status</label>
                <select class="form-control" name="adminuserstatus" id="inputUserStatus">
                  <option selected="selected">Select User Status</option>
                  <option value="marker">Enable</option>
                  <option value="signer">Disable</option>
                </select>
                <?php echo form_error('adminuserstatus');?>
              </div>
            <?php echo form_submit('adduser', 'Add', "class='btn btn-primary btn-block'"); ?>
        </div>
      </div>
    <?php echo form_close(); ?>
     <!-- End User Registration Form-->
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->