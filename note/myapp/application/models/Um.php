<?php

		class Um extends CI_Model
		{
			public function select_data($tbl)
			{
				$res=$this->db->get($tbl);
				return $res->result_array();
			}
			
			public function insert_data($tbl,$ardata)
			{
				$this->db->insert($tbl,$ardata);
			}
			public function sel_where($tbl,$where)
			{
				$r=$this->db->get_where($tbl,$where);
				
				$rr= $r->result_array();
				//print_r($rr);break;
				return $rr;
			}
			public function delete_data($tbl,$where)
			{
				$this->db->delete($tbl,$where);
			}
			public function update_data($tbl,$data,$where)
			{
				$this->db->update($tbl,$data,$where);
			}
		}

?>