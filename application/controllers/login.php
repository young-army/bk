<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()
	{
		$data['error'] = '';
		$this->load->view('login',$data);
	}
	
	function auth()
	{
		$username    = $this->input->post('username');
		$password    = md5($this->input->post('password'));
		$check_auth  = $this->app_model->auth($username,$password);
		$val_account = $check_auth->num_rows();
		$row		 = $check_auth->row();
		if($val_account==1)
		{
			$sess['username'] = $username;
			$sess['password'] = $password;
			$sess['status']  = $row->status;
			$this->session->set_userdata('session_login',$sess);
			redirect('dashboard');
		}
		else
		{
			redirect('login/false_account');
		}
	}
	
	function false_account()
	{
		$data['error'] = '<div class="alert alert-danger">
                              <h4>Kesalahan !</h4>
                              Username Atau Password Anda Salah
                          </div>';
		$this->load->view('login',$data);
	}
	
	function logout(){
		$this->session->sess_destroy('session_login');
		redirect('login');
	}
}
