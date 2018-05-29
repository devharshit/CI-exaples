<?php

		class login_c extends CI_Controller
		{
			function index()
			{
				
				$this->load->view('index');
				$this->load->model('Um');
				//$this->load->library('session');
				if($this->input->post('btnlogin'))
				{
					$un=$this->input->post('uname');
					$ps=$this->input->post('pass');
				$data=array("username"=>$un,"password"=>$ps);
				
				$cnt=$this->Um->sel_where('reg',$data);
				print_r($cnt);
				//echo "my naaaaaaaaaaaam".$cnt[0]['name'];break;
				if(count($cnt)==1)
				{
					$this->session->set_flashdata('uname', 'Done');
$ud=array("uname"=>$cnt[0]['name'],"userid"=>$cnt[0]['rid'],"last_name"=>$cnt[0]['email']);
				$this->session->set_userdata($ud);
				redirect("login_c\logged_in");
				}	
				else
				{
					
				}
				}
			} 
			function logged_in()
			{
				if($this->session->userdata('uname')=="")
				{
					redirect("login_c");					
				}
				else
				{
					$u=$this->session->userdata('uname');
					$l=$this->session->userdata('last_name');
					echo "welcome ".$u." ".$l."<br/>";
					echo anchor("login_c\logout","logout");
				}
			}
			function logout()
			{
				$this->session->unset_userdata('uname');
				$this->session->unset_userdata('last_name');
				$this->session->unset_userdata('userid');
				//$this->session->sess_destroy();
				redirect('login_c/');
			}
		}
	
?>