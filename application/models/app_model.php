<?php 

class App_model extends CI_Model{

	function auth($user,$pass){
		$check = $this->db->query("select * from user_admin where user='$user' and pass='$pass'");
		return $check;
	}	
	
	function get_profile(){
		$query = $this->db->query("select * from tbl_profile")->row();
		return $query;
	}
	
	function get_table($table,$type_return){
		return $this->db->get($table)->$type_return();
	}
	
	function get_table_where($field,$val_field,$table,$type_return){
		$this->db->where($field,$val_field);
		return $this->db->get($table)->$type_return();
	}
	
	function get_setting_id(){
		$q = $this->db->query('select * from setting');
		$numrows = $q->num_rows();
		if($numrows == 0){
			return 0;
		}else{
			$row = $q->row();
			return $row->id;
		}
	}
	
	function insert($table,$data){
		$this->db->insert($table,$data);
	}
	
	function update($field,$val_field,$table,$data){
		$this->db->where($field,$val_field);
		$this->db->update($table,$data);
	}

}
