<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_selection extends CI_Model {
	public $id ='';
	public $name ='';
	public $email ='';
	public $gender ='';
	public $password ='';

	function __construct()
	{
		parent::__construct();

	}

	public function get_all()
	{
		$this->load->database();
		$query = $this->db->get('user');
		return $query->result();
	}
}


