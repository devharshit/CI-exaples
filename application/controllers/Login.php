<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$login = $this->session->userdata('admin_user_session');
        if ($login != "") {
			redirect(base_url('board'));	
        }
	}
	public function index() {		
		$this->form_validation->set_rules('adminuser', 'User Name', 'required');
		$this->form_validation->set_rules('adminpassword', 'Email', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible input-error">', '</div>');
		if($this->form_validation->run()==false){
			$data['error_msg'] = '';
			$data['page_title'] = 'User Login';
			$this->load->view('login', $data);
		}else{
			$userdata = array(
				'user_name' => $_POST['adminuser'],
				'user_password' => $_POST['adminpassword'],
				'user_role' => 'masteradmin'
			);
			$setlogin = $this->Admin_model->login('users', $userdata);
			if($setlogin != 1){
				$this->session->set_userdata('admin_user_session', $_POST['adminuser']);
				redirect(base_url().'board');
			}else{
				// $data['error_msg'] = 'Invalid Username and Password';
				redirect(base_url().'login');
			}
		}
	}	
}
