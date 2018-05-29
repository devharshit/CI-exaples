<?php
		
	class vlac extends CI_Controller
	{
		function index()
		{ 
$this->load->model('Um');
$this->form_validation->set_rules('txtname','NAME','required');
$this->form_validation->set_rules('txtage','AGE','required|numeric');
$this->form_validation->set_rules('txtemail','Email','required|valid_email|is_unique[reg.email]');
$this->form_validation->set_rules('txtusername','User Name','required|alpha_dash');					  
				  
				  if($this->form_validation->run()==FALSE)
				  {
					  $this->load->view('valid');
				  }
		}
	}
?>