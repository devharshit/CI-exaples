<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function insert($table, $tbldata) { //Insert data
		$this->db->insert($table, $tbldata);
		// echo '<br>' . $this->db->last_query(); exit;
	}
	
	public function update($table, $data, $dataId) { //Edit data
		$this->db->update($table, $data, $dataId);
	}

	public function get($table) { //get all data
		$tableData = $this->db->get($table);
		$dataList = $tableData->result_array();
		return $dataList;
	}

	public function getfromid($table, $dataId) { //get all data using ID 
		$tableData = $this->db->get_where($table, $dataId);
		$dataList = $tableData->result_array();
		return $dataList;
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