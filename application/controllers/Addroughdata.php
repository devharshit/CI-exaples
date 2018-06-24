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
		$this->form_validation->set_rules('assigndate', 'Date', 'required');
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
				'date' => 'assigndate',
				'cut_no' => 'cutno',
				'marker' => 'marker',
				'weight' => 'weight',
				'rough_name' => 'roughname',			
				'mk_wt' => NULL,		
				'pieces' => NULL,			
				'exp' => NULL,			
				'dos' => NULL			
			);
			print_r($userdata);
			echo '<h1>Hello...!</h1>'; exit;			
			// redirect(base_url().'board');
		}

		//  redirect(base_url().'board/add_user');
	}
}
