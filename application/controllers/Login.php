<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('tampilan_login');
	}

	public function getLogin()
	{
		if($this->ModelLogin->getLogin($this->input->post('username'), $this->input->post('password'))){
			$data = $this->ModelLogin->selectByUsername($this->input->post('username'))->row_array();
			$userdata = array(
				'id_username' => $data['id_username'],				
				'username' => $data['username'],				
				'password' => $data['password'],				
				'nama_lengkap' => $data['nama_lengkap'],	
			);

			$this->session->set_userdata($userdata);			
			redirect('home');
		}else{
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
