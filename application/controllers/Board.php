<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$checklogin = $this->session->userdata('admin_user_session');
        if ($checklogin == "") {
			redirect(base_url('login'));	
        }
	}
	
	public function index() {
		$data['page_title'] = 'Dashboard';
		$this->load->view('header', $data);
		$this->load->view('dasboard', $data);
		$this->load->view('footer', $data);
		//  redirect(base_url().'board/add_user');
	}
	
	public function add_user() {
		$data['page_title'] = 'Dashboard';
		echo "string";
		if ($this->form_validation->run() == FALSE) {
            $this->load->view('form', $data);
        } else {
            // load success template...
            echo "It's all Good!";
        }
		// $this->load->view('login', $data);
		// redirect(base_url().'board');
	}
}
