<?php
	class Mycontroller extends CI_Controller
	{
		public function index()
		{
			
			$this->load->model('Um');
			$data['cnt']=$this->Um->select_data('country');
			$data['all']=$this->Um->select_data('reg');
			$this->load->view('reg',$data);
			if($this->input->post('submit'))
			{
				$nm=$this->input->post('name');
				$ag=$this->input->post('age');
				$cn=$this->input->post('country');
				$em=$this->input->post('mail');
				$ardata=array(
				"name"=>$nm,
				"age"=>$ag,
				"cid"=>$cn,
				"email"=>$em,
				"img"=>$_FILES['myimg']['name']
				);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '1000KB';
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('myimg'))
		{
			echo "Okay";
		}
		else
		{
				print_r($error = array('error' => $this->upload->display_errors()));break;
		}
		
		$this->Um->insert_data('reg',$ardata);
			//redirect("/mycontroller/login");
			}
		}
		public function login()
		{
			$this->load->view('login');
			if($this->input->post('submit'))
			{
				$un=$this->input->post('username');
				$ps=$this->input->post('pass');
				$where=array(
						"name"=>$un,
						"email"=>$ps
							);
				//print_r($where);break;
				$this->load->model('Um');
				$cnt=$this->Um->sel_where('reg',$where);
				//echo "hiiiiiiiii";print_r($cnt);break;
				if(count($cnt)==1)
				{
					redirect("mycontroller/index");
				}
				else
				{
					echo "Sorry Bhai";
				}
			}
			
		}
		public function delete($id)
		{
			$this->load->model('Um');
			//$id=$this->uri->segment(3);
			//echo $id;break;
			$where=array("rid"=>$id);
			$this->Um->delete_data('reg',$where);
			redirect("mycontroller/index/");
		}
		public function edit()
		{
			
			$this->load->model('Um');
			$data['cnt']=$this->Um->select_data('country');
			$id=$this->uri->segment(3);
			$where=array("s_id"=>$id);
			$data['edi']=$this->Um->sel_where('student_reg',$where);
			$this->load->view('edit_data',$data);
			if($this->input->post('btnupdate'))
			{
				$nm=$this->input->post('name');
				$ag=$this->input->post('age');
				$cn=$this->input->post('country');
				$em=$this->input->post('mail');
				$ardata=array(
				"name"=>$nm,
				"age"=>$ag,
				"cid"=>$cn,
				"email"=>$em
				);
				$this->Um->update_data('reg',$ardata,$where);
				redirect("mycontroller/");
			}
		}
	}

?>