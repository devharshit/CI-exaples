<?php 
class Model extends CI_Model
{
	//Select Data
	public function select_data($tbl)
	{
		$select=$this->db->get($tbl);
		return $select->result_array();
	}
	
	//Insert Data
	public function insert_data($tbl,$data)
	{
		$this->db->insert($tbl,$data);
		base_url()."index.php/Signup/view";
		//echo "<center>Success</center>";
		
	}
	//edit data
	public function edit_data($tbl,$id)
	{
		$edit=$this->db->get($tbl,$id);
		return $select->result_array();
	}
	//delete Data
	public function delete_data($tbl,$id)
	{
		$this->db->delete($tbl,$id);
	}
	
}

?>