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
	
	function services(){
		$data['page']	= 'services/services';
		$this->load->view('template',$data);
	}
	
	function add_services(){
		$data['page']	= 'services/add_services';
		$this->load->view('template',$data);
	}
	
	function expertise(){
		$data['page']	= 'expertise/expertise';
		$this->load->view('template',$data);
	}
	
	function add_expertise(){
		$data['page']	= 'expertise/add_expertise';
		$this->load->view('template',$data);
	}
	
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
	
	function activities(){
		$data['page'] = 'activities/activities';
		$this->load->view('template',$data);
	}
	
	function add_activities(){
		$data['page'] = 'activities/add_activities';
		$this->load->view('template',$data);
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
	
	// end new function for new module

}


	
