<?php 
$userdata = array($this->session->userdata('admin_user_session'));
$setlogin = $this->Admin_model->login('users', $userdata);
?>
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy;  Your Website <?php echo date("Y")?>. Developed by <a href="https://goo.gl/nSGXax" title="Harshit Shingala">Harshit Shingala</a></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are Ready to Leave Mr.<?php print_r(ucfirst($setlogin[0]['userfname'])); ?>...?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('logout');?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>ui/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>ui/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>ui/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>ui/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>ui/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>ui/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom BS datepicker-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>ui/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>ui/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url();?>ui/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>