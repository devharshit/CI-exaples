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
                  <th>Date Assign</th> 
                  <th>Cut No</th>
                  <th>Marker</th>
                  <th>Weight</th>
                  <th>Rough Name</th>
                  <th>MK Weight</th> 
                  <th>Pieces</th>
                  <th>EXP</th>
                  <th>Date of Submit</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
              foreach ($allroughdata as $roughdata) { ?>
                  <tr>
                    <td class="text-capitalize text-center"><?php echo $no;?></td>
                    <td class="text-capitalize text-center"><?php echo $roughdata['date']; ?></td>
                    <td class="text-capitalize text-center"><?php echo $roughdata['cut_no']; ?></td>
                    <td class="text-capitalize text-center"><?php $dataId = array('user_id' => $roughdata['marker']);
                    $users = $this->Admin_model->getfromid('users', $dataId);
                    print_r($users[0]['userfname'] .'&nbsp;' . $users[0]['userlname']); ?></td>
                    <td class="text-capitalize text-center"><?php echo $roughdata['weight']; ?></td>
                    <td class="text-capitalize text-center"><?php echo $roughdata['rough_name']; ?></td>
                    <td class="text-capitalize text-center"><?php echo $roughdata['mk_wt']; ?></td>
                    <td class="text-capitalize text-center"><?php echo $roughdata['pieces']; ?></td>
                    <td class="text-capitalize text-center"><?php 
                    if($roughdata['exp'] == NULL){ ?>
                         <a class="text-warning" href="<?php echo base_url() . 'addroughdata/exp/' . $roughdata['id'];?>" title="Add Date of EXP"><i class="fa fa-2x fa-plus"></i></a>
                    <?php } else {
                        echo $roughdata['exp'];
                    } ?></td>
                    <td class="text-capitalize text-center"><?php 
                    if($roughdata['dos'] == NULL){ ?>
                         <a class="text-warning" href="<?php echo base_url() . 'addroughdata/dos/' . $roughdata['id'];?>" title="Add Date of Submission..."><i class="fa fa-2x fa-plus"></i></a>
                    <?php } else {
                        echo $roughdata['dos'];
                    } ?></td>
                    <td class="text-capitalize text-center"><a class="text-danger" href="<?php echo base_url() . 'users/delete/' . $roughdata['id'];?>" onClick="return  confirm('Are you sure to delete this user...?')" ><i class="fa fa-2x fa-trash"></i></a></td>
                </tr>
                <?php $no++; }?>

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