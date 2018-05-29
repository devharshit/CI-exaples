<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller 
{

	public function index()
	{
		$this->load->helper(array('url','form'));
		$this->load->model('Model');
		$data['cnt']=$this->Model->select_data('country');
		$data['stat']=$this->Model->select_data('state');
		$this->load->view('Signup',$data);
		
		if($this->input->post('Submit'))
		{
			$user=$this->input->post('user');
			$pass=$this->input->post('pass');
			$mail=$this->input->post('mail');
			$dob=$this->input->post('date');
			$mob=$this->input->post('mobile');
			$cntry=$this->input->post('country');
			$data= array(
						"username"=>$user,
						"password"=>md5($pass),
						"email"=>$mail,
						"dob"=>$dob,
						"mobile"=>$mob,
						"country"=>$cntry);
						$this->Model->insert_data('signup',$data);
		}
		
 	}
	public function view()
	{
		//$this->load->helper('url');
		$this->load->model('Model');
		$data['user']=$this->Model->select_data('signup');
		$this->load->view('user_view');
	}
}
