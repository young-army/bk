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

	function ambil_services(){
		$query = $this->db->query("select * from services")->result();
		return $query;
	}
	
	function simpan_services(){
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$uraian = $this->input->post('uraian');
		$gambar = $this->input->post('image_name');
	}
	
	//MODEL EXPERTISE
	
	function expertise()
	{
		$query=$this->db->query("select * from expertise")->result();
		return $query;
	}
	
	function save_setting()
	{
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$uraian = $this->input->post('uraian');
		$status = $this->input->post('status');
		$data = array(
		'judul' => $judul,
		'author' => $author,
		'keterangan' => $uraian,
		'status' => $status
		);
		$this->db->insert('expertise',$data);
	}
	
	function delete_expertise($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('expertise');
	}
	
	function edit_expertise($id){
		$query = $this->db->query("select * from expertise where id='$id'")->row($id);
		return $query;
	}
	
	function update_expertise($id)
	{
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$uraian = $this->input->post('uraian');
		$status = $this->input->post('status');
	
		$this->db->query("update expertise set judul='$judul',author='$author',keterangan='$uraian',status='$status' where id='$id'");
	}
	
	//END EXPERTISE
	
	function delete_services($id){
		$this->db->where('id',$id);
		$this->db->delete('services');
	}
	
	function edit_services($id){
		$hasil = $this->db->query("select * from services where id='$id'")->row();
		return $hasil;
	}
	
	function update_services($id){
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$uraian = $this->input->post('uraian');
		$gambar = $this->input->post('image_name');
		$status = $this->input->post('status');
		
		$this->db->query("update services set judul='$judul',author='$author',keterangan='$uraian',gambar='$gambar',status='$status' where id='$id'");
	}


	
}
