<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addroughdata extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$checklogin = $this->session->userdata('admin_user_session');
        if ($checklogin == "") {
			redirect(base_url('login'));	
        }
	}
	
	public function index() {
		$this->form_validation->set_rules('', 'Date', 'required');
		$this->form_validation->set_rules('cutno', 'CUT No', 'required');
		$this->form_validation->set_rules('weight', 'CUT No', 'required');
		$this->form_validation->set_rules('roughname', 'CUT No', 'required');
		$this->form_validation->set_rules('marker', 'CUT No', 'required');		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible input-error">', '</div>');
		if($this->form_validation->run()==false){
			$data['page_title'] = 'Dashboard';
			$userdata = array(
				'user_role' => 'marker'		
			);
			//Get all marker user list from DB 			
			$data['getallmarker'] = $this->Admin_model->login('users', $userdata); 
			$this->load->view('header', $data);
			$this->load->view('addrough', $data);
			$this->load->view('footer', $data);
		}else{
			$userdata = array(
				'date' => $_POST['assigndate'],
				'cut_no' => $_POST['cutno'],
				'marker' => $_POST['marker'],
				'weight' => $_POST['weight'],
				'rough_name' => $_POST['roughname']			
			);
			print_r($userdata);
			$setlogin = $this->Admin_model->insert('rough_detail', $userdata);
			redirect(base_url().'addroughdata/view');
		}
		//  redirect(base_url().'board/add_user');
	}

	public function view(){
		$data['allroughdata'] = $this->Admin_model->get('rough_detail');
		$this->load->view('header', $data);
		$this->load->view('roughlist', $data);
		$this->load->view('footer', $data);
	}
}
