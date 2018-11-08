<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogin extends CI_Model {

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
	public function getLogin($username, $pass)
	{
		$pass = md5($pass);
		$this->db->select('*');
		$this->db->from('admins');
		$this->db->where('username', $username);
		$this->db->where('password', $pass);

		if($this->db->get()->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function selectByUsername($username){
		$this->db->select('*');
		$this->db->from('admins');
		$this->db->where('username', $username);

		return $this->db->get();
	}
}
