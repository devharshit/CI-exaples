
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Area Chart Example-->
      <div class="col-md-5">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-area-chart"></i> Add Rough Details</div>
          <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
             <div class="form-group">
                <label>Select Date</label>
                <input type="date" class="form-control" name="assigndate" placeholder="Select Dete...!">
                <?php echo form_error('assigndate'); ?>
              </div>
              <div class="form-group">  
                <label>Cut No</label>
                <input type="text" class="form-control" name="cutno" placeholder="Add Cut No...!">
                <?php echo form_error('cutno'); ?>
              </div>
              <div class="form-group">
                <label>Weight</label>
                <input type="text" class="form-control" name="weight" placeholder="Add Weight...!">
                <?php echo form_error('weight'); ?>
              </div>
              <div class="form-group">
                <label>Rough Name</label>
                <input type="text" class="form-control" name="roughname" placeholder="Add Rough ame...!">
                <?php echo form_error('roughname'); ?>
              </div>
              <div class="form-group">
                <label for="inputPassword">Select Marker</label>
                <select class="form-control" name="marker">
                  <option selected="selected">Select Marker</option>
                  <?php foreach ($getallmarker as $marker) { ?>
                      <option class="text-capitalize" value="<?php echo $marker['user_id'];?>"><?php echo $marker['userfname'] . '&nbsp;' . $marker['userlname']; ?></option>
                    <?php } ?>
                </select>
                <?php echo form_error('marker');?>
              </div>
              <input name="addroughdetails" value="Add Details" class="btn btn-primary col-md-4" type="submit">
              <input value="Clear" class="btn btn-danger col-md-3" type="reset">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
