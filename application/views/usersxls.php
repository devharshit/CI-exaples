  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header pull-left">
          <i class="fa fa-2x fa-table pull-left"></i><h3 class="pull-left">All Master Users list</h3>
          <a href="<?php echo base_url('users/add');?>" title="Add New User"><i class="fa fa-2x fa-plus pull-right text-success"></i></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th> 
                  <th>User</th>
                  <th>User Role</th>
                  <th>User Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($userslist as $userValue) { ?>
                  <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo ucfirst($userValue['userfname']) .'&nbsp;'. ucfirst($userValue['userlname']);?></td>
                  <td><?php echo $userValue['user_name'];?></td>
                  <td><?php echo ucfirst($userValue['user_role']);?></td>
                  <td><?php if ($userValue['user_status'] == 1) {
                    echo "<div class='text-success'>Enable</div>";
                  }else{
                    echo "<div class='text-danger'>Disable</div>";
                  } ?></td>
                  <td>
                    <!-- <a href="<?php echo base_url() . 'users/edit/' . $userValue['user_id'];?>"><i class="fa fa-2x fa-edit"></i></a> ||  -->
                    <a class="text-danger" href="<?php echo base_url() . 'users/delete/' . $userValue['user_id'];?>" onClick="return confirm('Are you sure to delete this user...?')" ><i class="fa fa-2x fa-trash"></i></a></td>
                  <!-- <td><a href="Edit">Edit</a> || <a href="<?php echo base_url() . 'users/delete/' . $userValue['user_id'];?>" data-toggle="modal" data-target="#deleteModal" >Delete</a></td> -->
                </tr>
                <?php $no++;}?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- Delete Confirm Modal-->
 <!--    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Delete" below if you are ready to delete USER_NAME.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div> -->