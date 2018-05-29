<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	public function insert($table, $data) { //Insert data
		$this->db->insert($table, $data);
	}
	
	public function update($table, $data, $dataId) { //Edit data
		$this->db->update($table, $data, $dataId);
	}

	public function delete($table, $dataId) { //Delete data
		$this->db->delete($table, $dataId);
	}

	public function login($table, $userdata) { //Get data from ID
		$input = $this->db->get_where($table, $userdata);			
		$inputdata = $input->result_array();
		return $inputdata;
	}
}
/* End of file model.php */
/* Location: ./application/models/model.php */