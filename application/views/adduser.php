




<!--
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
        -->