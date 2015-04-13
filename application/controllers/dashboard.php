<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('asia/jakarta'); 
		if(!$this->session->userdata('session_login')){
			redirect('login');
		}
	}
	
	function index()
	{	
		$data['page']   = 'welcome';
		$this->load->view('template',$data);
	}
	
	function uploads($data){
		$file = $data;
		$folder = "./assets/upload/image/";
		$folder = $folder . basename($data['name']);
		move_uploaded_file($data['tmp_name'], $folder);	
	}
		
	// start new function for new module
	
	function setting(){
		$check= $this->app_model->get_setting_id();
		if($check==0){
		$data['data'] = array(
		'id'		=> '',
		'perusahaan'=> '',
		'email'		=> '',
		'telp'		=> '',
		'fb'		=> '',
		'twitter'	=> '',
		'youtube'	=> '',
		'logo'		=> '',
		'status'	=> '',
		);
		}else{
		$data['data'] = $this->app_model->get_table('setting','row_array');
		}
		$data['page'] = 'setting/setting';
		$this->load->view('template',$data);
	}
	
	function save_setting(){
		$id = $this->input->post('id');
		$data = array(
		'perusahaan'	=> $this->input->post('nama'),
		'email'			=> $this->input->post('email'),
		'telp'			=> $this->input->post('telp'),
		'fb'			=> $this->input->post('fb'),
		'twitter'		=> $this->input->post('twit'),
		'youtube'		=> $this->input->post('youtube'),
		'status'		=> $this->input->post('status'),
		'logo'			=> $_FILES['image']['name']
		);
		if($_FILES['image']['name']!=''){
		$this->upload($_FILES['image']);
		}
		if($id=='' or $id==0){
			$this->app_model->insert('setting',$data);
		}else{
			$this->app_model->update('id',$id,'setting',$data);
		}
		redirect('dashboard/setting');
	}
	
	function background(){
		$data['page']	= 'background/background';
		$this->load->view('template',$data);
	}
	
	function add_background(){
		$data['page']	= 'background/add_background';
		$this->load->view('template',$data);
	}
	//START SERVICES
	function services(){
		$data['services'] = $this->app_model->ambil_services();
		$data['page']	= 'services/services';
		$this->load->view('template_table',$data);
	}
	
	function add_services(){
		$data['page']	= 'services/add_services';
		$this->load->view('template',$data);
	}
	

	function simpan_services(){
		$this->app_model->simpan_services();
		redirect('dashboard/services');

	}
	
	function delete_services($id){
		$this->app_model->delete_services($id);
		redirect('dashboard/services');
	}
	
	function edit_services($id){
		$data['services'] = $this->app_model->edit_services($id);
		$data['page'] = 'services/edit_services';
		$this->load->view('template',$data);
	}
	
	function update_services($id){
		$id = $this->input->post('id');
		$this->app_model->update_services($id);
		redirect('dashboard/services');
	}
	//END SERVICES
	


	//EXPERTISE

	
	function expertise()
	{
		$data['expertise'] = $this->app_model->expertise();

		$data['page']	= 'expertise/expertise';
		$this->load->view('template',$data);
	}
	
	function add_expertise(){
		$data['page']	= 'expertise/add_expertise';
		$this->load->view('template',$data);
	}
	
	function simpan_expertise(){
		$this->app_model->save_setting();
		redirect('dashboard/expertise');
	}
	
	function delete_expertise($id){
		$this->app_model->delete_expertise($id);
		redirect('dashboard/expertise');
	}
	
	function edit_expertise($id)
	{	
		$data['edit_expertise'] = $this->app_model->edit_expertise($id);
		$data['page'] = 'expertise/edit_expertise';
		$this->load->view('template',$data);
	}
	
	function update_expertise()
	{
		$id = $this->input->post('id');
		$this->app_model->update_expertise($id);
		redirect('dashboard/expertise');
	}
	
	//END EXPERTISE
	
	function career(){
		$data['page'] = 'career/career';
		$this->load->view('template',$data);
	}
	
	function request(){
		$data['page'] = 'request/request';
		$this->load->view('template_table',$data);
	}
	
	function respon_request(){
		$data['page'] = 'request/respon';
		$this->load->view('template',$data);
	}
	
	function menu_top(){
		$data['page'] = 'menu_top/menu_top';
		$this->load->view('template',$data);
	}
	
	function add_menu_top(){
		$data['page'] = 'menu_top/add_menu_top';
		$this->load->view('template',$data);
	}
	
	function news(){
		$data['page'] = 'news/news';
		$this->load->view('template',$data);
	}
	
	function add_news(){
		$data['page'] = 'news/add_news';
		$this->load->view('template',$data);
	}
	
	// START ACTIVITIES
	
	function activities(){
		$data['activities'] = $this->app_model->ambil_activities();
		$data['page'] = 'activities/activities';
		$this->load->view('template_table',$data);
	}
	
	function add_activities(){
		$data['page'] = 'activities/add_activities';
		$this->load->view('template',$data);
	}
	
	function simpan_activities(){
		$this->app_model->simpan_activities();
		redirect('dashboard/activities');
	}
	
	function delete_activities($id){
		$this->app_model->delete_activities($id);
		redirect('dashboard/activities');
	}
	function edit_activities($id){
		$data['activities'] = $this->app_model->edit_activities($id);
		$data['page'] = 'activities/edit_activities';
		$this->load->view('template',$data);
	}
	
	function update_activities($id){
		$id = $this->input->post('id');
		$this->app_model->update_activities($id);
		redirect('dashboard/activities');
	}
	
	function innovation(){
		$data['page'] = 'innovation/innovation';
		$this->load->view('template',$data);
	}
	
	function add_innovation(){
		$data['page'] = 'innovation/add_innovation';
		$this->load->view('template',$data);
	}
	
	function market_analytics(){
		$data['page'] = 'market_analytics/market_analytics';
		$this->load->view('template',$data);
	}
	
	function add_market_analytics(){
		$data['page'] = 'market_analytics/add_market_analytics';
		$this->load->view('template',$data);
	}
	
	function user_access(){
		$data['page'] = 'user/user_access';
		$this->load->view('template',$data);
	}
	
	function add_user_access(){
		$data['page'] = 'user/add_user_access';
		$this->load->view('template',$data);
	}
	
	function user_group(){
		$data['page'] = 'user/user_group';
		$this->load->view('template',$data);
	}
	
	function add_user_group(){
		$data['page'] = 'user/add_user_group';
		$this->load->view('template',$data);
	}
	
	function master_data(){
		$data['master'] = $this->app_model->get_table_where('id_sub',0,'master_data','result');
		$data['page'] = 'master_data/master_data';
		$this->load->view('template',$data);
	}
		
	// end new function for new module
	
	
	
	
}


	
