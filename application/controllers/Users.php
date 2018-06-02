<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$checklogin = $this->session->userdata('admin_user_session');
        if ($checklogin == "") {
			redirect(base_url('login'));	
        }
	}
	
	public function index() {
		$data['page_title'] = 'Dashboard';
		$data['userslist'] = $this->Admin_model->get('users');
		$this->load->view('header', $data);
		$this->load->view('users', $data);
		$this->load->view('footer', $data);
		//  redirect(base_url().'board/add_user');
	}
	
	public function add() {
		$this->form_validation->set_rules('adminuserfname', 'User`s First Name', 'required');
		$this->form_validation->set_rules('adminuserfname', 'User`s Last Name', 'required');
		$this->form_validation->set_rules('adminuser', 'User Name', 'required|is_unique[users.user_name]');
		$this->form_validation->set_rules('adminpassword', 'User Password', 'required');
		$this->form_validation->set_rules('adminpasswordconfirm', 'Confirm Password', 'required|matches[adminpassword]');
		$this->form_validation->set_rules('adminuserrole', 'User Role Required', 'required');
		$this->form_validation->set_rules('adminuserstatus', 'User Status Required', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible input-error">', '</div>');
		if($this->form_validation->run() == false){
			$data['error_msg'] = '';
			$data['page_title'] = 'Add New User';
			$this->load->view('header', $data);
			$this->load->view('adduser', $data);
			$this->load->view('footer', $data);
		}else{
			$tbldata = array(
				'userfname' => $_POST['adminuserfname'],
				'userlname' => $_POST['adminuserlname'],
				'user_name' => $_POST['adminuser'],
				'user_password' => $_POST['adminpasswordconfirm'],
				'user_role' => $_POST['adminuserrole'],
				'user_status ' => $_POST['adminuserstatus']
			);
			$this->Admin_model->insert('users', $tbldata);
			redirect(base_url().'users');
		}
		
	}

	public function edit($id) {
		$dataId = array('user_id' => $id );
		$data['get_user_data'] = $this->Admin_model->getfromid('users', $dataId);
		$this->form_validation->set_rules('adminuserfname', 'User`s First Name', 'required');
		$this->form_validation->set_rules('adminuserfname', 'User`s Last Name', 'required');
		// $this->form_validation->set_rules('adminuser', 'User Name', 'required|is_unique[users.user_name]');
		$this->form_validation->set_rules('adminpassword', 'User Password', 'required');
		$this->form_validation->set_rules('adminpasswordconfirm', 'Confirm Password', 'required|matches[adminpassword]');
		$this->form_validation->set_rules('adminuserrole', 'User Role Required', 'required');
		$this->form_validation->set_rules('adminuserstatus', 'User Status Required', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible input-error">', '</div>');
		if($this->form_validation->run() == false){
			$data['error_msg'] = '';
			$data['page_title'] = 'Update User data';
			$this->load->view('header', $data);
			$this->load->view('edituser', $data);
			$this->load->view('footer', $data);
		}else{
			$tbldata = array(
				'userfname' => $_POST['adminuserfname'],
				'userlname' => $_POST['adminuserlname'],
				// 'user_name' => $_POST['adminuser'],
				'user_password' => $_POST['adminpasswordconfirm'],
				'user_role' => $_POST['adminuserrole'],
				'user_status ' => $_POST['adminuserstatus']
			);
			print_r($tbldata); exit;
			$this->Admin_model->update('users', $tbldata, $dataId);
			redirect(base_url().'users');
		}
	}

	public function delete($id) {
		$dataId = array('user_id' => $id );
		// print_r($dataId); exit;
		$this->Admin_model->delete('users', $dataId);
		redirect(base_url().'users');
	}
}
