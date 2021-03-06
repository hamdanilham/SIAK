<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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
	public function list()
	{
		$this->load->view('layout/header');
		$this->load->view('mahasiswa/list_mahasiswa');
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$this->load->view('layout/header');
		$this->load->view('mahasiswa/add_mahasiswa');
		$this->load->view('layout/footer');
	}

	public function edit()
	{
		$this->load->view('layout/header');
		$this->load->view('mahasiswa/edit_mahasiswa');
		$this->load->view('layout/footer');
	}

	public function profil()
	{
		$this->load->view('layout/header');
		$this->load->view('mahasiswa/profil_mahasiswa');
		$this->load->view('layout/footer');
	}

	public function view($view)
	{
		$data['activetab'] = $view;
		$this->load->view('tampilan_home', $data);
	}
}
